<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Validator;
use App\Models\Slider;
use Exception;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    public function index()
    {

        $data = Slider::select('id', 'photo', 'relate', 'status')->where('lang', 'ar')->get();

        return view('admin.slider.index', compact('data'));
    }

    public function getAdd()
    {

        return view('admin.slider.add');
    }

    public function postAdd(Request $request)
    {

        $valid = Validator::make($request->all(), [
            'photo' => 'required',
            'photo.*' => 'image|mimes:jpeg,png,jpg,gif',
            'status' => 'required',

        ]);

        if ($valid->fails()) {
            return redirect()->route('slider-add')->withErrors($valid->errors());
        }

        $lastid = Slider::orderBy('id', 'DESC')->select('id')->first();
        if ($lastid != null) {
            $relate = $lastid->id + 1;
        } else {
            $relate = 1;
        }


        try {

            foreach (['ar', 'en'] as $lang) {

                $newItem = new Slider;
                if (isset($request->file("photo")[$lang]) && $request->file("photo")[$lang] != '') {
                    $newItem->photo = uploadImage($request->file("photo")[$lang], 'slider');
                } else {
                    $newItem->photo = '';
                }

                $newItem->status = $request->status;
                $newItem->lang = $lang;
                $newItem->relate = $relate;

                $newItem->save();
            }

            return redirect()->route('slider')->with('mOk', 'تم الاضافة بنجاح');
        } catch (Exception $e) {

            redirect()->route('slider')->with('mNo', 'لم يتم الاضافة | ' . $e->getMessage());
        }
    }

    public function getEdit($relate)
    {

        $relate = (int) $relate;

        $data = Slider::where('relate', $relate)->select('id', 'photo', 'lang', 'status')->get();


        return view('admin.slider.edit', compact('data', 'relate'));
    }

    public function postEdit(Request $request)
    {

        $valid = Validator::make($request->all(), [
            'photo' => 'image|mimes:jpeg,png,jpg',
            'status' => 'required',
            'id' => 'required',

        ]);

        if ($valid->fails()) {
            redirect()->route('slider-add')->withErrors($valid->errors());
        }

        try {

            foreach (['ar', 'en'] as $lang) {

                $id = (int) $request->id[$lang];

                $data = Slider::where('id', $id)->first();

                if (isset($request->photo[$lang]) && $request->photo[$lang] != '') {

                    @unlink(public_path('uploads') . '/slider/' . $data->photo);

                    $data->photo = uploadImage($request->file('photo')[$lang], 'slider');
                }


                $data->status = $request->status;

                $data->save();
            }

            return redirect()->route('slider')->with('mOk', 'تم التعديل بنجاح');
        } catch (Exception $e) {

            redirect()->route('slider')->with('mNo', 'لم يتم التعديل | ' . $e->getMessage());
        }
    }

    public function delete($relate)
    {

        $data = Slider::where('relate', $relate)->get();

        try {

            foreach ($data as $item) {
                @unlink(public_path('uploads') . '/slider/' . $item->photo);
                $item->delete();
            }

            return redirect()->route('slider')->with('mOk', 'تم الحذف بنجاح');
        } catch (Exception $e) {

            return redirect()->route('slider')->with('mNo', 'لم يتم الحذف');
        }
    }
}
