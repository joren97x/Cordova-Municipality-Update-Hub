<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //

    public function store(Request $request) {
        $q = $request->validate([
            'name' => 'required',
            'question' => 'required'
        ]);

        $q['email'] = $request->email;
        $q['contact_no'] = $request->contact_no;
        $q['is_answered'] = false;
        Question::create($q);
        return back();

    }

    public function answer(Question $question, Request $request) {
        $question->answer = $request->answer;
        $question->is_answered = true;
        $question->update();
        return back();
    }

    public function index() {
        return Inertia::render('MunicipalAdmin/Questions', ['questions' => Question::where('is_answered', false)->get()]);
    }

    public function destroy(Question $question) {
        $question->delete();
        return back();
    }


}
