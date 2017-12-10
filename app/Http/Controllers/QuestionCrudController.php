<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Organ;

class QuestionCrudController extends Controller
{

    public function getAddQuestion()
    {
        return view('back.question.addquestion');
    }

    public function postAddQuestion(Request $request)
    {

        $this->validate($request, [
            'question' => 'required',
            'organ_id' => 'required',
            'disease_id' => 'required',
        ]);
        $question = new Question;

        $question->disease_id = $request->input('disease_id');
        $question->organ_id = $request->input('organ_id');
        $question->question = $request->input('question');

        $question->save();

        return redirect()->route('viewallquestion');

    }


}
