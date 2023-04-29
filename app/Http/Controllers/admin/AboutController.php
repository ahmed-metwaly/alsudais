<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\About;
use Image;
use App\Models\AboutInfo;
use Exception;
use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{

    public function getEdit()
    {

        $data = About::get();


        return view('admin.about.edit', compact('data'));
    }

    public function postEdit(Request $request)
    {

        $valid = Validator::make($request->all(), [
            'about' => 'required',
            'about_footer_index' => 'required',
            'meta_desc' => 'required',
            'meta_key' => 'required',
            'photo.*' => 'required|image',
            'address' => 'required'
        ]);

        if ($valid->fails()) {
            return redirect()->route('about')->withErrors($valid->errors());
        }

        try {

            if ($request->hasFile('photo')) {

                $photo = uploadImage($request->file('photo'), 'setting');
            }


            foreach (['ar', 'en'] as $lang) {

                $id = (int) $request->id[$lang];

                $data = About::where('id', $id)->first();

                if (isset($request->about[$lang]) && $request->about[$lang] != '') {
                    $data->about = $request->about[$lang];
                }

                if (isset($request->about_footer_index[$lang]) && $request->about_footer_index[$lang] != '') {
                    $data->about_footer_index = $request->about_footer_index[$lang];
                }

                if (isset($request->address[$lang]) && $request->address[$lang] != '') {
                    $data->address = $request->address[$lang];
                }

                if (isset($request->photo) && $request->photo != '') {
                    $data->photo = $photo;
                }

                if (isset($request->meta_desc[$lang]) && $request->meta_desc[$lang] != '') {
                    $data->meta_desc = $request->meta_desc[$lang];
                }

                if (isset($request->meta_key[$lang]) && $request->meta_key[$lang] != '') {
                    $data->meta_key = $request->meta_key[$lang];
                }

                $data->save();
            }

            return redirect()->route('about')->with('mOk', 'تم التعديل بنجاح');
        } catch (Exception $e) {

            return redirect()->route('about')->with('mNo', 'لم يتم التعديل');
        }
    }

    public function info()
    {

        $data = AboutInfo::all();

        return view('admin.about.info', compact('data'));
    }

    public function setInfo(Request $request)
    {


        $valid = Validator::make($request->all(), [
            'about_title' => 'required',
            'about_content' => 'required',
            'one_title' => 'required',
            'one_content' => 'required',
            'tow_title' => 'required',
            'tow_content' => 'required',
            'three_title' => 'required',
            'three_content' => 'required',
            'why_content' => 'required',
            'why_items' => 'required',
        ]);

        if ($valid->fails()) {
            return redirect()->route('about-info')->withErrors($valid->errors());
        }

        try {




            foreach (['ar', 'en'] as $lang) {

                $id = (int) $request->id[$lang];

                $data = AboutInfo::where('id', $id)->first();

                if (isset($request->about_title[$lang]) && $request->about_title[$lang] != '') {
                    $data->about_title = $request->about_title[$lang];
                }

                if (isset($request->about_content[$lang]) && $request->about_content[$lang] != '') {
                    $data->about_content = $request->about_content[$lang];
                }

                if (isset($request->one_title[$lang]) && $request->one_title[$lang] != '') {
                    $data->one_title = $request->one_title[$lang];
                }

                if (isset($request->one_content[$lang]) && $request->one_content[$lang] != '') {
                    $data->one_content = $request->one_content[$lang];
                }

                if (isset($request->tow_title[$lang]) && $request->tow_title[$lang] != '') {
                    $data->tow_title = $request->tow_title[$lang];
                }

                if (isset($request->tow_content[$lang]) && $request->tow_content[$lang] != '') {
                    $data->tow_content = $request->tow_content[$lang];
                }

                if (isset($request->three_title[$lang]) && $request->three_title[$lang] != '') {
                    $data->three_title = $request->three_title[$lang];
                }

                if (isset($request->three_content[$lang]) && $request->three_content[$lang] != '') {
                    $data->three_content = $request->three_content[$lang];
                }

                if (isset($request->why_content[$lang]) && $request->why_content[$lang] != '') {
                    $data->why_content = $request->why_content[$lang];
                }

                if (isset($request->why_items[$lang]) && $request->why_items[$lang] != '') {
                    $data->why_items = $request->why_items[$lang];
                }

                $data->save();
            }

            return redirect()->route('about-info')->with('mOk', 'تم التعديل بنجاح');
        } catch (Exception $e) {

            return redirect()->route('about-info')->with('mNo', 'لم يتم التعديل');
        }
    }
}
