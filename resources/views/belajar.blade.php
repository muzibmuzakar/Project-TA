@extends('layouts.main')

@section('main')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/css/uikit.min.css" />


<section class="pembelajaran">
    <div class="container-fluid">
        <div class="belajar">
            <div class="row">
                <div class="col-md-9">        
                    <h3 class="text-center">{{ $materi->judul }}</h3>
                    <div class="box-materi">
                        <div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow="animation: pull">

                            <ul class="uk-slideshow-items">
                                @if (count($materi->slide)>0)
                                @foreach ($materi->slide as $img)
                                <li>
                                    <div class="uk-position-cover">
                                        <img src="/slide/{{ $img->slide }}" alt="" uk-cover>
                                    </div>
                                </li>
                                    
                                @endforeach
                                @endif
                                {{-- <li>
                                    <div class="uk-position-cover">
                                        <img src="{{ asset('img/cek-02.svg') }}" alt="" uk-cover>
                                    </div>
                                </li> --}}
                                <li>
                                    <div class="uk-position-cover">
                                        <img src="{{ asset('img/materi-05.svg') }}" alt="" uk-cover>
                                    </div>
                                </li>
                            </ul>
                        
                            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
                        
                            <a class="uk-button uk-button-danger uk-button-small" href="#" uk-slideshow-item="">JUMP TO FIRST</a>
                            <a class="uk-button uk-button-primary uk-button-small" style="background-color: yellow" href="#" uk-slideshow-item="previous">PREV</a>
                            <a class="uk-button uk-button-danger uk-button-small" href="#" uk-slideshow-item="next">NEXT</a>
                            <a class="uk-button uk-button-secondary uk-button-small" href="#" uk-slideshow-item="last">JUMP TO LAST</a>
                          
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
<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit-icons.min.js"></script>
@endsection