<?php

namespace App\Http\Controllers;

use App\Models\Barangay;
use Illuminate\Http\Request;

class BarangayController extends Controller
{
    //
    public function update(Barangay $barangay, Request $request) {
        $barangay->name = $request->name;
        $barangay->about = $request->about;
        $barangay->mission = $request->mission;
        $barangay->vision = $request->vision;
        $barangay->feast = $request->feast;
        // $barangay->image = $request->image;
        $barangay->update();
        return back();
    }
}
