<?php

namespace App\Http\Controllers\BarangayAdmin;

use Inertia\Inertia;
use App\Models\Barangay;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

    public function edit(Barangay $barangay) {
        return Inertia::render('MunicipalAdmin/EditBarangay', ['barangay' => $barangay]);
    }

}
