<?php

namespace App\Http\Controllers\User;

use Inertia\Inertia;
use App\Models\Barangay;
use App\Models\Official;
use App\Http\Controllers\Controller;

class ViewController extends Controller
{
    //
    public function barangays() {
        return Inertia::render('User/Barangays', ['barangays' => Barangay::where('id', '!=', 14)->get()]);
    }

    public function events() {
        return Inertia::render('User/Events');
    }

    public function sports() {
        return Inertia::render('User/Sports');
    }

    public function local_news() {
        return Inertia::render('User/LocalNews');
    }

    public function health_wellness() {
        return Inertia::render('User/HealthWellness');
    }

    public function barangay_explore($brgy) {
        $barangay = Barangay::where('name', $brgy)->first();
        $SKofficials = Official::where('barangay_id', $barangay->id)->where('position_name', 'SK')->get();
        $Barangayofficials = Official::where('barangay_id', $barangay->id)->where('position_name', 'BO')->get();
        return Inertia::render('User/BarangayExplore', ['barangay' => $barangay, 'SKofficials' => $SKofficials, 'BOofficials' => $Barangayofficials]);
    }

    public function municipal() {
        return Inertia::render('User/Municipal');
    }

    public function visitors() {
        return Inertia::render('User/Visitors');
    }

    public function index() {
        return Inertia::render('User/Index');
    }

    public function contact_us() {
        return Inertia::render('User/ContactUs');
    }

    public function support() {
        return Inertia::render('User/Support');
    }

  
}
