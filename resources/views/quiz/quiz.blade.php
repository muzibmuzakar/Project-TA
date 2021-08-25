@extends('layouts.main')

@section('main')
<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/css/uikit.min.css" />

    <!-- ======= Quis Section ======= -->
    <section id="quiz">
      <div class="container">
        <div id="home" class="">
          <h1>Quick Quiz</h1>
          <a class="btn uk-button uk-button-primary" href="/game.html">Play</a>
          <a class="btn uk-button uk-button-primary" href="/highscores.html">High Scores</a>
        </div>
      </div>
    </section>
    <!-- End Quis Section -->
    <style>
      #quiz{
        background-color: #ecf5ff;
      }
      .btn {
        width: 200px;
        margin: 5px;
      }
      #home{
        margin-top: 100px;
        padding-top: 100px;
        padding-bottom: 100px;
        justify-content: center;
        align-items: center;
        display: flex;
        flex-direction: column;
      }
    </style>
@endsection