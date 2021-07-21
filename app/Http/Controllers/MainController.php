<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelajaran;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index(){
        $data = ['loginUserInfo' =>User::where('id', '=', session('LoginUser'))->first()];
        $pelajaran = Pelajaran::first()->paginate(6);

        return view('home', ['pelajaran' => $pelajaran], $data);
    }
}
