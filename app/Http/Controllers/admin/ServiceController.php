<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use App\Models\Services as Service;
use App\Models\ServiceImage;
use Illuminate\Support\Facades\Validator;
use Mockery\Exception;

class ServiceController extends Controller
{

    public function index()
    {

        $data = Service::where('lang', 'ar')->select('id', 'name', 'status', 'relate')->get();

        return view('admin.services.index', compact('data'));
    }

    public function getAdd()
    {

        return view('admin.services.add');
    }

    public function postAdd(Request $request)
    {

        $valid = Validator::make($request->all(), [
            'name' => 'required',
            'text' => 'required',
            'status' => 'required',
            'photo.*' => 'required|image'
        ]);

        if ($valid->fails()) {
            redirect()->route('service-add')->withErrors($valid->errors());
        }

        $lastid = Service::orderBy('id', 'DESC')->select('id')->first();

        $relate = isset($lastid->id) ? $lastid->id + 1 : 1;


        $photo = '';

        if ($request->hasFile('photo')) {
            $photo = uploadImage($request->file('photo'), 'services');
        }





        try {

            foreach (['ar', 'en'] as $lang) {

                $newItem = new Service;
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

                if (isset($request->meta_copyrigte[$lang]) && $request->meta_copyrigte[$lang] != '') {
                    $newItem->meta_copyrigte = $request->meta_copyrigte[$lang];
                } else {
                    $newItem->meta_copyrigte = '';
                }

                if (isset($request->meta_desc[$lang]) && $request->meta_desc[$lang] != '') {
                    $newItem->meta_desc = $request->meta_desc[$lang];
                } else {
                    $newItem->meta_desc = '';
                }

                if (isset($request->meta_key[$lang]) && $request->meta_key[$lang] != '') {
                    $newItem->meta_key = $request->meta_key[$lang];
                } else {
                    $newItem->meta_key = '';
                }

                if (isset($request->meta_robots[$lang]) && $request->meta_robots[$lang] != '') {
                    $newItem->meta_robots = $request->meta_robots[$lang];
                } else {
                    $newItem->meta_robots = '';
                }

                if (isset($request->meta_dc_title[$lang]) && $request->meta_dc_title[$lang] != '') {
                    $newItem->meta_dc_title = $request->meta_dc_title[$lang];
                } else {
                    $newItem->meta_dc_title = '';
                }


                $newItem->photo = $photo;
                $newItem->status = $request->status;



                $newItem->relate = $relate;
                $newItem->lang = $lang;
                $newItem->save();
            }

            return redirect()->route('services')->with('mOk', 'تم الاضافة بنجاح');
        } catch (Exception $e) {

            return redirect()->route('services')->with('mNo', 'لم يتم الاضافة');
        }
    }

    public function getEdit($relate)
    {

        $relate = (int) $relate;

        $data = Service::where('relate', $relate)->select('id', 'name', 'text', 'lang', 'status', 'meta_copyrigte', 'meta_desc', 'meta_key', 'meta_robots', 'meta_dc_title', 'photo')->get();


        return view('admin.services.edit', compact('data'));
    }

    public function postEdit(Request $request)
    {

        $valid = Validator::make($request->all(), [
            'name' => 'required',
            'text' => 'required',
            'status' => 'required',
            'id' => 'required',
        ]);

        if ($valid->fails()) {
            redirect()->route('service-add')->withErrors($valid->errors());
        }

        $photo = '';
        $icon = '';

        if ($request->hasFile('photo')) {
            $photo = uploadImage($request->file('photo'), 'services');
        }

        try {

            foreach (['ar', 'en'] as $lang) {

                $id = (int) $request->id[$lang];

                $data = Service::where('id', $id)->first();

                if (isset($request->name[$lang]) &&  $request->name[$lang] != '') {

                    $data->name = $request->name[$lang];
                }

                if (isset($request->text[$lang]) &&  $request->text[$lang] != '') {

                    $data->text = $request->text[$lang];
                }

                if (isset($request->text[$lang]) &&  $request->text[$lang] != '') {
                    $data->text = $request->text[$lang];
                }

                if (isset($request->meta_copyrigte[$lang]) &&  $request->meta_copyrigte[$lang] != '') {
                    $data->meta_copyrigte = $request->meta_copyrigte[$lang];
                }

                if (isset($request->meta_desc[$lang]) &&  $request->meta_desc[$lang] != '') {
                    $data->meta_desc = $request->meta_desc[$lang];
                }

                if (isset($request->meta_key[$lang]) &&  $request->meta_key[$lang] != '') {
                    $data->meta_key = $request->meta_key[$lang];
                }

                if (isset($request->meta_robots[$lang]) &&  $request->meta_robots[$lang] != '') {
                    $data->meta_robots = $request->meta_robots[$lang];
                }

                if (isset($request->meta_dc_title[$lang]) &&  $request->meta_dc_title[$lang] != '') {
                    $data->meta_dc_title = $request->meta_dc_title[$lang];
                }

                if (isset($request->photo) &&  $request->photo != '') {

                    @unlink(public_path('uploads') . '/services/' . $data->photo);

                    $data->photo = $photo;
                }


                $data->status = (int) $request->status;


                $data->save();
            }

            return redirect()->route('services')->with('mOk', 'تم التعديل بنجاح');
        } catch (Exception $e) {

            return redirect()->route('services')->with('mNo', 'لم يتم التعديل');
        }
    }

    public function delete($relate)
    {

        $data = Service::where('relate', $relate)->delete();

        return $data ? redirect()->route('services')->with('mOk', 'تم الحذف بنجاح') :
            redirect()->route('services')->with('mNo', 'لم يتم الحذف');
    }

    // service images

    public function serviceImages()
    {

        $data = ServiceImage::join('services', 'service_images.serv_relate', '=', 'services.relate')->where('services.lang', 'ar')->select('service_images.id as id', 'service_images.photo as photo', 'service_images.name as name', 'services.name as serv_name')->get();

        return view('admin.service_images.index', compact('data'));
    }

    public function serviceImagesAdd()
    {

        $services = Service::where('status', 1)->where('lang', 'ar')->select('id', 'relate', 'name')->get();


        return view('admin.service_images.add', compact('services'));
    }

    public function serviceImagesDoAdd(Request $request)
    {

        $valid = Validator::make($request->all(), [
            'name' => 'required',
            'serv_relate' => 'required',
            'photo' => 'required|mimes:jpeg,bmp,png,jpg',
        ]);

        if ($valid->fails()) {
            redirect()->route('service-images-add')->withErrors($valid->errors());
        }

        $newItem = new ServiceImage;

        $newItem->name = $request->name;

        if ($request->hasFile("photo") && $request->file("photo") != '') {

            $newItem->photo = uploadImage($request->file("photo"), 'service_images');
        }

        $newItem->serv_relate = $request->serv_relate;

        return $newItem->save() ? redirect()->route('service-images')->with('mOk', 'تم الاضافة بنجاح') :
            redirect()->route('service-images')->with('mNo', 'لم يتم الاضافة');
    }

    public function serviceImagesEdit($id)
    {

        $services = Service::where('status', 1)->where('lang', 'ar')->select('id', 'relate', 'name')->get();

        $data = ServiceImage::where('id', $id)->select('id', 'name', 'photo', 'serv_relate')->first();

        return view('admin.service_images.edit', compact('services', 'data'));
    }

    public function serviceImagesDoEdit(Request $request, $id)
    {
        $valid = Validator::make($request->all(), [
            'name' => 'required',
            'serv_relate' => 'required',
            'photo' => 'mimes:jpeg,bmp,png,jpg',
        ]);

        if ($valid->fails()) {
            redirect()->route('service-images-edit', $id)->withErrors($valid->errors());
        }

        $id = (int) $request->id;

        $data = ServiceImage::where('id', $id)->first();

        if (isset($request->name) && $request->name != '') {
            $data->name = $request->name;
        }

        if ($request->hasFile("photo") && $request->file("photo") != '') {

            @unlink(public_path('uploads') . '/service_images/' . $data->photo);

            $data->photo = uploadImage($request->file("photo"), 'service_images');
        }

        $data->serv_relate = $request->serv_relate;

        return $data->save() ? redirect()->route('service-images')->with('mOk', 'تم التعديل بنجاح') :
            redirect()->route('service-images')->with('mNo', 'لم يتم التعديل');
    }

    public function serviceImagesDelete($id)
    {

        $data = ServiceImage::where('id', $id)->first();

        @unlink(public_path('uploads') . '/service_images/' . $data->photo);

        return $data->delete() ? redirect()->route('service-images')->with('mOk', 'تم الحذف بنجاح') :
            redirect()->route('service-images')->with('mNo', 'لم يتم الحذف');
    }
}
