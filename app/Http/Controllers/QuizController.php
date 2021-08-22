<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Quiz;
use App\Models\Soal;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ['loggedUserInfo' =>Admin::where('id', '=', session('LoggedUser'))->first()];

        return view('admin.quiz.quiz', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = ['loggedUserInfo' =>Admin::where('id', '=', session('LoggedUser'))->first()];

        return view('admin.quiz.addQuiz', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quiz =Quiz :: create([
            "pelajaran_id" =>$request->pelajaran_id,
            "materi_id" =>$request->materi_id,
        ]);

        $jumlah = count($request->question);
        for ($i =0; $i < $jumlah; $i++){
            Soal :: create([
                'quiz_id' => $quiz->id,
                'question' => $request->question[$i],
                'choice1' => $request->choice1[$i],
                'choice2' => $request->choice2[$i],
                'choice3' => $request->choice3[$i],
                'choice4' => $request->choice4[$i],
                'answer' => $request->answer[$i],
            ]);
        }

        return redirect()->route('quiz.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
