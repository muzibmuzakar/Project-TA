@extends('layouts.main')

@section('main')
<!-- UIkit CSS -->
<link rel="stylesheet" href="{{ asset('assets-frontend/css/quiz.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/css/uikit.min.css" />

    <!-- ======= Quis Section ======= -->
    <section id="quiz">
        <div class="container container-quiz">
            <div id="end" class="flex-center flex-column">
                <h1 id="finalScore"></h1>
                <form>
                    <h3>Selamat 
                        <input type="text" name="username" id="username" class="no-border readonly" value="{{ $loginUserInfo['username'] }}"/>, 
                        Kamu telah menyelesaikan Quiz {{ $materi->judul }} dengan skor 
                        <input type="text" name="username" id="finalScore2" class="no-border readonly" placeholder="username"/>
                    </h3>
                    {{-- <input type="text" name="username" id="username" value="{{ $loginUserInfo['username'] }}"/>
                    <input type="text" name="username" id="finalScore2" placeholder="username"/> --}}
                    {{-- <textarea id="finalScore2"></textarea> --}}
                    <button type="submit" class="btn" id="saveScoreBtn" onclick="saveHighScore(event)" disabled>
                        Save
                    </button>
                </form>
                <a class="btn" href="/game.html">Play Again</a>
                <a class="btn" href="/">Go Home</a>
            </div>
        </div>
    </section>
    <!-- End Quis Section -->

    <style>
        .container-quiz{
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            max-width: 80rem;
            margin-top: -70px;
            padding: 2rem;
        }
        .no-border{
            border: none;
            width: 100px;
            text-align: center;
        }

    </style>

    
    <script>
        const username = document.getElementById('username');
        const saveScoreBtn = document.getElementById('saveScoreBtn');
        const finalScore = document.getElementById('finalScore');
        const mostRecentScore = localStorage.getItem('mostRecentScore');

        const highScores = JSON.parse(localStorage.getItem('highScores')) || [];

        const MAX_HIGH_SCORES = 5;

        finalScore.innerText = mostRecentScore;
        finalScore2.setAttribute("value",mostRecentScore);

        username.addEventListener('keyup', () => {
            saveScoreBtn.disabled = !username.value;
        });

        saveHighScore = (e) => {
            e.preventDefault();

            const score = {
                score: mostRecentScore,
                name: username.value,
            };
            highScores.push(score);
            highScores.sort((a, b) => b.score - a.score);
            highScores.splice(5);

            localStorage.setItem('highScores', JSON.stringify(highScores));
            window.location.assign('/');
        };

    </script>
    
    <script src="{{ asset('assets-frontend/js/quiz.js') }}"></script>

@endsection