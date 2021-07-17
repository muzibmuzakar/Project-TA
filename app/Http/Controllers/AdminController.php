<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    function login(){
        return view('admin.auth.login');
    }

    function register(){
        return view('admin.auth.register');
    }

    function save(Request $request){
        // validate request
        $request->validate([
            'username'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required|min:5|max:12'
        ]);

        // insert data
        $admin = new Admin;
        $admin->username = $request->username;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $save = $admin->save();

        if($save){
            return back()->with('success', 'New user has been succesfuly added to database !');
        }else{
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }

    function check(Request $request){
        // validate
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);

        $userInfo = Admin::where('email', '=', $request->email)->first();

        if (!$userInfo) {
            return back()->with('fail', 'Email belum terdaftar');
        }else{
            // check password
            if (Hash::check($request->password, $userInfo->password)) {
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('admin');
            }else {
                return back()->with('fail', 'Password tidak cocok');
            }
        }
    }

    function logout(){
        if (session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        };
    }

    public function index()
    {
        $data = ['loggedUserInfo' =>Admin::where('id', '=', session('LoggedUser'))->first()];
        return view('admin.dashboard', $data);
    }
}
