<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelajaran;

class MainController extends Controller
{
    public function index(){
        $pelajaran = Pelajaran::first()->paginate(6);

        return view('home', ['pelajaran' => $pelajaran]);
    }
}
