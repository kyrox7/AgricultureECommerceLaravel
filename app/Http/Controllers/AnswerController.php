<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Question;
use Auth;

class AnswerController extends Controller
{
    public function index($id){
        $question = Question::find($id);
        // $answer = DB::table('answers')->where('question_id', $question->id);
        $answers = Answer::where('question_id', $question->id)->get();
        $question_answer = [$question,$answers];
        return view('Customer.viewanswers')->with('questionAnswer', $question_answer);
    }

    public function store(Request $request){
        $this->validate($request,[
            'description' => 'required',

        ]);
        $answer = new Answer();
        $answer->description = $request->description;
        $answer->username = auth()->user()->name;
        $answer->question_id = $request->questionId;
        Auth::user()->answers()->save($answer);
        $redirectVal = "/answer/".$request->questionId;
        return redirect($redirectVal); 
    }


   
}
