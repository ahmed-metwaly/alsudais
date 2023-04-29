<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Models\Clients as Client;
use Illuminate\Support\Facades\Validator;
use Mockery\CountValidator\Exception;


class ClientController extends Controller
{
    public function index()
    {

        $data = Client::where('lang', 'ar')->select('id', 'name', 'photo', 'status', 'relate')->get();

        return view('admin.clients.index', compact('data'));
    }

    public function getAdd()
    {

        return view('admin.clients.add');
    }

    public function postAdd(Request $request)
    {

        $valid = Validator::make($request->all(), [
            'photo' => 'required|image|mimes:jpeg,png,jpg',
            'name' => 'required',
            'status' => 'required',
            'text' => 'required',

        ]);

        if ($valid->fails()) {
            redirect()->route('client-add')->withErrors($valid->errors());
        }

        try {

            $lastid = Client::orderBy('id', 'DESC')->select('id')->first();

            $relate = isset($lastid->id) ? $lastid->id + 1 : 1;

            if ($request->hasFile('photo')) {
                $photo = uploadImage($request->file('photo'), 'clients'); // wating resize
            } else {
                $photo = '';
            }

            foreach (['ar', 'en'] as $lang) {

                $newItem = new Client;

                if (isset($request->name[$lang]) && $request->name[$lang] != '') {
                    $newItem->name = $request->name[$lang];
                } else {
                    $newItem->name = '';
                }

                if (isset($request->text[$lang]) && $request->text[$lang] != '') {
                    $newItem->text = $request->text[$lang];
                } else {
                    $newItem->text = '';
                }

                $newItem->photo = $photo;
                $newItem->lang = $lang;
                $newItem->relate = $relate;
                $newItem->status = $request->status;
                $newItem->save();
            }

            return redirect()->route('clients')->with('mOk', 'تم الاضافة بنجاح');
        } catch (Exception $e) {

            return redirect()->route('clients')->with('mNo', 'لم يتم الاضافة');
        }
    }

    public function getEdit($relate)
    {

        $relate = (int) $relate;

        $data = Client::where('relate', $relate)->select('id', 'name', 'text', 'photo', 'relate', 'lang', 'status')->get();

        return view('admin.clients.edit', compact('data'));
    }

    public function postEdit(Request $request)
    {

        $valid = Validator::make($request->all(), [
            'photo' => 'image|mimes:jpeg,png,jpg',
            'name' => 'required',
            'status' => 'required',
            'text' => 'required',


        ]);

        if ($valid->fails()) {
            redirect()->route('client-add')->withErrors($valid->errors());
        }

        try {

            $photo = '';

            if ($request->hasFile('photo')) {

                $photo = uploadImage($request->file('photo'), 'clients');
            }

            foreach (['ar', 'en'] as $lang) {

                $id = (int) $request->id[$lang];

                $data = Client::where('id', $id)->first();

                if ($photo != '') {

                    @unlink(public_path('uploads') . '/clients/' . $data->photo);

                    $data->photo = $photo;
                }

                if (isset($request->name[$lang]) && $request->name[$lang] != '') {
                    $data->name = $request->name[$lang];
                }

                if (isset($request->text[$lang]) && $request->text[$lang] != '') {
                    $data->text = $request->text[$lang];
                }

                $data->status = $request->status;

                $data->save();
            }

            return redirect()->route('clients')->with('mOk', 'تم التعديل بنجاح');
        } catch (Exception $e) {

            return redirect()->route('clients')->with('mNo', 'لم يتم التعديل');
        }
    }

    public function delete($relate)
    {

        $data = Client::where('relate', $relate)->first();

        unlink(public_path('uploads') . '/clients/' . $data->photo);

        return Client::where('relate', $relate)->delete() ? redirect()->route('clients')->with('mOk', 'تم الحذف بنجاح') :
            redirect()->route('clients')->with('mNo', 'لم يتم الحذف');
    }
}
