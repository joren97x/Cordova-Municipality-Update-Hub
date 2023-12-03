<?php

namespace App\Http\Controllers\MunicipalAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class QuestionController extends Controller
{
    //
    public function index() {
        return Inertia::render('MunicipalAdmin/Questions');
    }
}
