<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelajaran;
use App\Models\User;
use App\Models\Materi;

class MainController extends Controller
{
    public function index(){
        $data = ['loginUserInfo' =>User::where('id', '=', session('LoginUser'))->first()];
        $pelajaran = Pelajaran::first()->paginate(6);

        return view('home', ['pelajaran' => $pelajaran], $data);
    }

    public function pelajaranDetail($id){
        $data = ['loginUserInfo' =>User::where('id', '=', session('LoginUser'))->first()];
        $where = array('id' => $id);
        $pelajaran['pelajaran'] = Pelajaran::where($where)->first();

        $mat = array('id_pelajaran' => $id);
        $materi['materi'] = Materi::where($mat)->get();

        return view('pelajaran', $data, $pelajaran)->with($materi);
    }

    public function belajar($id){
        $data = ['loginUserInfo' =>User::where('id', '=', session('LoginUser'))->first()];

        $where = array('id' => $id);
        $materi['materi'] = Materi::where($where)->first();        

        return view('belajar', $data)->with($materi);
    }

    public function test(){
        $data = ['loginUserInfo' =>User::where('id', '=', session('LoginUser'))->first()];

        return view('test', $data);
    }
}