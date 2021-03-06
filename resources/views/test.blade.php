@extends('layouts.main')

@section('main')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/css/uikit.css'>

<section class="pembelajaran">
    <div class="container-fluid">
        <div class="belajar">
            <div class="row">
                <div class="col-md-9">        
                    <h3 class="text-center">HTML I : Pengenalan HTML</h3>
                    <div class="box-materi">
                        <div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow="animation: pull">

                            <ul class="uk-slideshow-items">
                                <li>
                                    <div class="uk-position-cover">
                                        <img src="{{ asset('img/cek-01.svg') }}" alt="" uk-cover>
                                    </div>
                                </li>
                                <li>
                                    <div class="uk-position-cover">
                                        <img src="{{ asset('img/cek-02.svg') }}" alt="" uk-cover>
                                    </div>
                                </li>
                                <li>
                                    <div class="uk-position-cover">
                                        <img src="{{ asset('img/materi-05.svg') }}" alt="" uk-cover>
                                    </div>
                                </li>
                            </ul>
                        
                            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
                        
                          <a class="navigation" href="#" uk-slideshow-item="">JUMP TO FIRST</a>
                            <a class="navigation" href="#" uk-slideshow-item="previous">PREV</a>
                            <a class="navigation" href="#" uk-slideshow-item="next">NEXT</a>
                            <a class="navigation" href="#" uk-slideshow-item="last">JUMP TO LAST</a>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    @media(max-width:786px){
        .belajar{
            margin-top:40px;
        }
        .belajar h3{
            font-size: 20px;
        }
    }
    @media(min-width:786px){
        .belajar{
            margin-top:50px;
        }
    }
</style>

<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/js/uikit.js'></script>
@endsection