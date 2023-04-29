<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Settings as Setting;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    public function dashboard()
    {

        return view('admin.setting.dashboard');
    }

    public function setting()
    {

        $data = Setting::where('id', 1)->first();

        return view('admin.setting.setting', compact('data'));
    }

    public function postSetting(Request $request)
    {

        $valid = Validator::make($request->all(), [
            'phone' => 'required|min:3',
            'email' => 'required|email',
            'whatsapp' => 'required',


        ]);

        if ($valid->fails()) {
            redirect()->route('setting')->withErrors($valid->errors());
        }

        $data = Setting::where('id', 1)->first();

        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->whatsapp = $request->whatsapp;


        return $data->save() ? redirect()->route('setting')->with('mOk', 'تم التعديل بنجاح') :
            redirect()->route('setting')->with('mNo', 'لم يتم التعديل');
    }
}
