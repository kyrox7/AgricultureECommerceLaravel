<?php

namespace App\Http\Controllers;
use App\Models\Question;
use Auth;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create()
    {
       return view('Customer.askquestion');
    }

    public function store(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
        ]);
            $question = new Question();
            $question->title = $request->title;
            $question->description = $request->description;
            $question->username = Auth::user()->name;
            Auth::user()->questions()->save($question);
            return redirect()->route('forum')->with('success', 'Your question has been submitted successfully');   
         }
}
