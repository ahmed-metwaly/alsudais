<?php

namespace App\Http\Controllers\admin;

use App\Models\Branches as Branch;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BranchController extends Controller
{

    public function index()
    {

        $data = Branch::where('lang', 'ar')->get();

        return view('admin.branches.index', compact('data'));
    }

    public function getAdd()
    {

        return view('admin.branches.add');
    }

    public function postAdd(Request $request)
    {

        $valid = Validator::make($request->all(), [
            'address' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'manger' => 'required',
            'location' => 'required',
            'status' => 'required',
        ]);

        if ($valid->fails()) {
            redirect()->route('client-add')->withErrors($valid->errors());
        }

        try {
            $lastid = Branch::orderBy('id', 'DESC')->select('id')->first();
            $relate = isset($lastid->id) ? $lastid->id + 1 : 1;
            if ($request->hasFile('photo')) {
                $photo = uploadImage($request->file('photo'), 'branches'); // wating resize
            } else {
                $photo = '';
            }

            foreach (['ar', 'en'] as $lang) {

                $newItem = new Branch;

                if (isset($request->name[$lang]) && $request->name[$lang] != '') {
                    $newItem->name = $request->name[$lang];
                } else {
                    $newItem->name = '';
                }

                if (isset($request->address[$lang]) && $request->address[$lang] != '') {
                    $newItem->address = $request->address[$lang];
                } else {
                    $newItem->address = '';
                }

                if (isset($request->manger[$lang]) && $request->manger[$lang] != '') {
                    $newItem->manger = $request->manger[$lang];
                } else {
                    $newItem->manger = '';
                }



                $newItem->lang = $lang;
                $newItem->relate = $relate;
                $newItem->phone = $request->phone;
                $newItem->location = $request->location;
                $newItem->email = $request->email;
                $newItem->status = $request->status;
                $newItem->save();
            }

            return redirect()->route('branches')->with('mOk', 'تم الاضافة بنجاح');
        } catch (Exception $e) {

            return redirect()->route('branches')->with('mNo', 'لم يتم الاضافة');
        }
    }

    public function getEdit($relate)
    {

        $relate = (int) $relate;

        $data = Branch::where('relate', $relate)->get();

        return view('admin.branches.edit', compact('data'));
    }

    public function postEdit(Request $request)
    {

        $valid = Validator::make($request->all(), [
            'address' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'manger' => 'required',
            'location' => 'required',
            'status' => 'required',
        ]);

        if ($valid->fails()) {
            redirect()->route('client-add')->withErrors($valid->errors());
        }

        try {

            foreach (['ar', 'en'] as $lang) {

                $id = (int) $request->id[$lang];

                $data = Branch::where('id', $id)->first();



                if (isset($request->name[$lang]) && $request->name[$lang] != '') {
                    $data->name = $request->name[$lang];
                }

                if (isset($request->address[$lang]) && $request->address[$lang] != '') {
                    $data->address = $request->address[$lang];
                }

                if (isset($request->manger[$lang]) && $request->manger[$lang] != '') {
                    $data->manger = $request->manger[$lang];
                }

                $data->phone = $request->phone;
                $data->email = $request->email;
                $data->location = $request->location;
                $data->status = $request->status;

                $data->save();
            }

            return redirect()->route('branches')->with('mOk', 'تم التعديل بنجاح');
        } catch (Exception $e) {

            return redirect()->route('branches')->with('mNo', 'لم يتم التعديل');
        }
    }

    public function delete($relate)
    {

        $data = Branch::where('relate', $relate)->first();

        return Branch::where('relate', $relate)->delete() ? redirect()->route('branches')->with('mOk', 'تم الحذف بنجاح') :
            redirect()->route('branches')->with('mNo', 'لم يتم الحذف');
    }
}
