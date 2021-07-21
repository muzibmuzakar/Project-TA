<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function signin(){
        return view('user.login');
    }

    function save(Request $request){
        // validate request
        $request->validate([
            'username'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:12'
        ]);

        // insert data
        $user = new User;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $save = $user->save();

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

        $userInfo = User::where('email', '=', $request->email)->first();

        if (!$userInfo) {
            return back()->with('fail', 'Email belum terdaftar');
        }else{
            // check password
            if (Hash::check($request->password, $userInfo->password)) {
                $request->session()->put('LoginUser', $userInfo->id);
                return redirect('/');
            }else {
                return back()->with('fail', 'Password tidak cocok');
            }
        }
    }

    function logout(){
        if (session()->has('LoginUser')) {
            session()->pull('LoginUser');
            return redirect('/');
        };
    }
}
