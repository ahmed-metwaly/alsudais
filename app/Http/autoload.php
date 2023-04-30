<?php

use Intervention\Image\Facades\Image;
use App\Models\Settings;
use App\Models\About;
use App\Models\Services;
use Illuminate\Support\Facades\Mail;
use App\Models\Partner;
use App\Models\Branches;

function setting()
{
    return Settings::first();
}

function about()
{

    return About::where('lang', app()->getLocale())->first();
}

function branches()
{
    return Branches::where('lang', app()->getLocale())->first();
}

function services()
{
    return Services::where('lang', app()->getLocale())->where('status', 1)->select('name', 'text', 'photo')->limit(4)->get();
}

function partners()
{
    return Partner::select('photo')->get();
}

function sendEmail($fileMessagesPath, $vars = [], $attach = '')
{

    Mail::send($fileMessagesPath, [
        'title' => $vars['messagesTitle'],
        'subject' => $vars['subject'],
        'body' => $vars['body'],
    ], function ($message) use ($vars) {

        $message->from($vars['from'], $vars['messagesTitle']);
        $message->to($vars['to']);
        $message->subject($vars['subject']);
    });

    if (Mail::failures()) {
        return false;
    }

    return true;
}



function uploading($inputRequest, $folderNam)
{

    $imageName = time() . rand(0, 99) . '.' . $inputRequest->getClientOriginalExtension();

    $destinationPath = public_path('/uploads/' . $folderNam);

    $inputRequest->move($destinationPath, $imageName);

    return $imageName ? $imageName : false;
}

function uploadImage($inputRequest, $folderNam, $resize = [])
{


    $imageName = time() . rand(0, 99) . '.' . $inputRequest->getClientOriginalExtension();

    if (!is_dir(public_path('/uploads/' . $folderNam))) {
        mkdir(public_path('/uploads/' . $folderNam), 0777);
    }


    if (!empty($resize)) {

        foreach ($resize as $dimensions) {

            if (!is_dir(public_path('/uploads/' . $folderNam . '_' . $dimensions))) {
                mkdir(public_path('/uploads/' . $folderNam . '_' . $dimensions), 0777);
            }

            $destinationPath = public_path('uploads/' . $folderNam . '_' . $dimensions);

            $img = Image::make($inputRequest->getRealPath());

            $dimension = explode('x', $dimensions);

            $img->resize($dimension[0], $dimension[1], function ($constraint) {

                $constraint->aspectRatio();
            });

            // $img->insert( 'public/web/images/logo.png', 'bottom-right' );

            $img->save($destinationPath . DIRECTORY_SEPARATOR . $imageName);
        }
    }

    $destinationPath = public_path('uploads' . DIRECTORY_SEPARATOR . $folderNam) . DIRECTORY_SEPARATOR;

    $inputRequest->move($destinationPath, $imageName);

    return $imageName ? $imageName : false;
}
