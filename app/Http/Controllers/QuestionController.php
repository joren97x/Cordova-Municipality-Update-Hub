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

        $request->validate([
            'answer' => 'required'
        ]);

        $question->answer = $request->answer;
        $question->status = "answered";
        $question->update();
        return back();
    }

    public function feature(Question $question, Request $request) {
        if($request->status == 'featured') {
            $question->status = "answered";
        }
        else {
            $question->status = "featured";
        }
        $question->update();
        return back();
    }

    public function index($category) {
        return Inertia::render('MunicipalAdmin/Questions', 
        [
            'questions' => Question::where('status', $category)->get(),
            'page_title' => $category
        ]);
    }

    public function destroy(Question $question) {
        $question->delete();
        return back()->with('message', 'Question deleted');
    }

    public function update(Question $question, Request $request) {
        $request->validate([
            'answer' => 'required'
        ]);
        $question->answer = $request->answer;
        $question->update();
        return back();
    }


}
