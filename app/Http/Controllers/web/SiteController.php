<?php

namespace App\Http\Controllers\web;

use App\Models\Branches;
use App\Http\Controllers\Controller;
use App\Mail\CpaMail;
use App\Models\Services;
use App\Models\Clients as Client;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class SiteController extends Controller
{
    public function index()
    {

        $slider = Slider::where('status', 1)->where('lang', app()->getLocale())->get();

        return view('web.index', compact('slider'));
    }


    public function emmpluee()
    {



        return view('web.emmpluee');
    }

    public function howAre()
    {


        return view('web.how-are');
    }

    public function price()
    {

        return view('web.price');
    }

    public function servece()
    {

        $data = Services::where('lang', app()->getLocale())->where('status', 1)->select('name', 'photo')->get();

        return view('web.servece', compact('data'));
    }

    public function team()
    {

        $data = Client::where('status', 1)->where('lang', app()->getLocale())->select('id', 'name', 'text', 'photo')->get();

        return view('web.team', compact('data'));
    }

    public function single($name)
    {

        $data = Services::where('name', $name)->first();

        return view('web.sengle', compact('data'));
    }

    public function TeamOne($name)
    {

        $data = Client::where('lang', app()->getLocale())->where('name', $name)->first();
        return view('web.team-one', compact('data'));
    }


    public function contact()
    {

        $data = Branches::where('status', 1)->where('lang', app()->getLocale())->get();

        return view('web.contact', compact('data'));
    }

    public function setLang($lang)
    {
        $isLang = '';
        if ($lang == 'ar') {
            $isLang = 'ar';
        } else if ($lang == 'en') {
            $isLang = 'en';
        }

        if ($isLang != '') {
            Session::put('locale', $isLang);
        }

        return redirect()->route('home');
    }

    public function sendEmp(Request $request)
    {

        if ($request->_is_man != '') {
            return redirect()->route('emmpluee');
        }


        $valid = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'service' => 'required',
            'cv' => 'required',
            'message' => 'required',
        ]);

        if ($valid->fails()) {
            return redirect()->route('emmpluee')->withErrors($valid->errors());
        }

        $em = explode('.',  $request->email);
        $na = explode('.',  $request->name);
        $text = strpos($request->message, 'http');
        $clash = strpos($request->message, '//');

        if (
            end($em)  != 'sa' && end($em) != 'com' && end($em) != 'eg' && end($em) != 'net'
            && end($em) != 'co' || $text !== false || $clash !== false || $request->message != strip_tags($request->message)
            || $request->service == 'hacking' || $request->message == 'hacking' || $request->message == 'silver'
            || end($em) == 'xyz' || in_array('Mrs', $na)
        ) {

            return redirect()->back()->with('mOk', __('site.send_email_ok'));
        }

        $data = array();

        $data['to'] = setting()->email;
        $data['from'] = $request->email;
        $data['subject'] = $request->service;
        $data['name'] = $request->name;
        $data['service'] = $request->service;
        $data['view'] = 'mail.comming';
        $data['phone'] = $request->phone;
        $data['attach'] = [
            'mimeType' => $request->file('cv')->getMimeType(),
            'originalName' => $request->file('cv')->getClientOriginalName(),
            'pathname' => $request->file('cv')->getRealPath(),

        ];


        $data['message'] = $request->message;

        Mail::to('quote@alsudaiscpa.com')->send(new CpaMail($data));


        return redirect()->back()->with('mOk', __('site.send_email_ok'));
    }

    public function addPrice(Request $request)
    {

        if ($request->_is_man != '') {
            return redirect()->back();
        }

        $valid = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'service' => 'required',
            'message' => 'required',
        ]);

        if ($valid->fails()) {
            return redirect()->back()->withErrors($valid->errors());
        }


        $em = explode('.',  $request->email);
        $na = explode('.',  $request->name);
        $text = strpos($request->message, 'http');
        $clash = strpos($request->message, '//');

        if (
            end($em)  != 'sa' && end($em) != 'com' && end($em) != 'eg' && end($em) != 'net'
            && end($em) != 'co' || $text !== false || $clash !== false || $request->message != strip_tags($request->message) || $request->subject == 'hacking' || $request->message == 'hacking' || $request->message == 'silver' || end($em) == 'xyz' || in_array('Mrs', $na)
        ) {

            return redirect()->back()->with('mOk', __('site.send_email_ok'));
        }



        $data = array();
        $data['to'] = setting()->email;
        $data['from'] = $request->email;
        $data['subject'] = $request->service;
        $data['company'] = $request->subject;
        $data['name'] = $request->name;
        $data['service'] = $request->service;
        $data['view'] = 'mail.price';
        $data['phone'] = $request->phone;
        $data['message'] = $request->message;


// quote@alsudaiscpa.com
        Mail::to('quote@alsudaiscpa.com')->send(new CpaMail($data));

        return redirect()->back()->with('mOk', __('site.send_email_ok'));
    }
}
