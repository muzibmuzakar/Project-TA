@extends('layouts.main')

@section('main')
<!-- UIkit CSS -->
<link rel="stylesheet" href="{{ asset('assets-frontend/css/quiz.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/css/uikit.min.css" />

    <!-- ======= Quis Section ======= -->
    <section id="game">
        <div class="row">
            <div class="col-md-6">
                <div class="soal" style="height:500px;background-image: url({{ asset('img/soal.svg') }});background-repeat: no-repeat;
                background-size: 100%;">
                    <h3 class="text-center">Isi bagian yang kosong agar menjadi struktur HTML yang benar .</h3>
                </div>
            </div>
            <div class="col-md-6">
                <div class="editor" style="height:500px;background-image: url({{ asset('img/code-editor-11.svg') }});background-repeat: no-repeat;
                background-size: 100%;">
                    <input type="text" id="txt001" name="">
                </div>
                {{-- <img src="{{ asset('img/code-editor-11.svg') }}" alt=""> --}}
            </div>
        </div>
    </section>
    <!-- End Quis Section -->
    <style>
        #game{
            margin-top: 50px;
        }
        #txt001{
            margin: 60px 0 0 20px;
            background: transparent;
            color: tomato;
            border: dashed 1px white;
        }
    </style>
@endsection