<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionCrudController extends Controller
{

    public function getAddQuestion()
    {
        return view('back.disease.addquestion');
    }

    public function postAddQuestion(Request $request)
    {

        $this->validate($request, [
            'question' => 'required',
            'organ_name' => 'required',
            'disease_name' => 'required',

        ]);
    }


}
