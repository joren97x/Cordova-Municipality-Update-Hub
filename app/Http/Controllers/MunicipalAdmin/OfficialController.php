<?php

namespace App\Http\Controllers\MunicipalAdmin;

use App\Http\Controllers\Controller;
use App\Models\Official;
use Illuminate\Http\Request;
use Inertia\Inertia;

class OfficialController extends Controller
{
    //
    
    public function store(Request $request) {
        
    }


    public function index() {
        return Inertia::render('BarangayAdmin/Officials', ['officials' => Official::where('barangay_id', auth()->user()->area_id)]);
    }

}
