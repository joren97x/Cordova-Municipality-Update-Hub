<?php

namespace App\Http\Controllers\BarangayAdmin;

use App\Http\Controllers\Controller;
use App\Models\Barangay;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BarangayAdminBarangayController extends Controller
{
    //
    public function show(Request $request, $barangay) {
        $b = Barangay::where('name', $barangay)->first();
        return Inertia::render('BarangayAdmin/Barangay', ['barangay' => $b]);
    }
}
