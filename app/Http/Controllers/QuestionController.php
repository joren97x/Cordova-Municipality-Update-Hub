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
            'email' => 'required',
            'question' => 'required'
        ]);

        $q['email'] = $request->email;
        $q['contact_no'] = $request->contact_no;
        Question::create($q);
        return back();

    }

    public function answer(Question $question, Request $request) {
        $question->answer = $request->answer;
        $question->status = "answered";
        $question->update();
        return back();
    }

    public function feature(Question $question) {
        $question->status = "featured";
        $question->update();
        return back();
    }

    public function index($category) {
        return Inertia::render('MunicipalAdmin/Questions', ['questions' => Question::where('status', $category)->get()]);
    }

    public function unanswered() {
        return Inertia::render('MunicipalAdmin/Questions', ['questions' => Question::where('status', 'unanswered')->get()]);
    }

    public function answered() {
        return Inertia::render('MunicipalAdmin/Questions', ['questions' => Question::where('status', false)->get()]);
    }

    public function featured() {
        return Inertia::render('MunicipalAdmin/Questions', ['questions' => Question::where('status', false)->get()]);
    }

    public function destroy(Question $question) {
        $question->delete();
        return back();
    }


}
