<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $data = User::all();

        return view('admin.users.index', compact('data'));
    }

    public function getAdd()
    {
        // $levels = UserLevel::select('id', 'name');

        return view('admin.users.add');
    }

    public function postAdd(Request $request)
    {

        $valid = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3',
            'status' => 'required',

        ]);

        if ($valid->fails()) {
            redirect()->route('user-add')->withErrors($valid->errors());
        }

        $newUser = new User;

        $newUser->name = $request->name;
        $newUser->email = $request->email;
        $newUser->password = trim(bcrypt($request->name));
        $newUser->status = $request->status;

        return $newUser->save() ? redirect()->route('users')->with('mOk', 'تم الاضافة بنجاح') :
            redirect()->route('users')->with('mNo', 'لم يتم الاضافة');
    }

    public function getEdit($id)
    {

        $id = (int) $id;

        $data = User::where('id', $id)->select('id', 'name', 'email', 'status')->first();


        return view('admin.users.edit', compact('data'));
    }

    public function postEdit(Request $request)
    {

        $valid = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'email' => "required|email|unique:users,id",
            'id' => 'required'
        ]);

        if ($valid->fails()) {
            redirect()->route('user-add')->withErrors($valid->errors());
        }

        $id = (int) $request->id;

        $data = User::where('id', $id)->select('id', 'name', 'email', 'status')->first();

        $data->name = $request->name;
        $data->email = $request->email;
        $data->status = $request->status;

        if ($request->has('password') && $request->password != '') {

            $data->password = bcrypt(trim($request->password));
        }

        return $data->save() ? redirect()->route('users')->with('mOk', 'تم التعديل بنجاح') :
            redirect()->route('users')->with('mNo', 'لم يتم التعديل');
    }

    public function delete($id)
    {

        return User::destroy($id) ? redirect()->route('users')->with('mOk', 'تم الحذف بنجاح') :
            redirect()->route('users')->with('mNo', 'لم يتم الحذف');
    }


    // login

    public function getLogin()
    {

        //    echo bcrypt('123456');

        return view('admin.users.login');
    }

    public function postLogin(Request $request)
    {

        $valid = Validator::make($request->all(), [

            'email' => 'required|email',
            'password' => 'required|min:3'
        ]);

        if ($valid->fails()) {
            redirect()->route('login')->withErrors($valid->errors());
        }

        $check = Auth::attempt(['email' => $request->email, 'password' => trim($request->password)], true);

        if ($check) {
            return redirect()->route('dashboard');
        }

        return redirect()->route('login')->with('mNo', 'خطأ في البريد او كلمة المرور');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
