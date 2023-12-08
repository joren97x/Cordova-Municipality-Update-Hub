<?php

namespace App\Http\Controllers\MunicipalAdmin;

use App\Models\Barangay;
use Inertia\Inertia;
use App\Http\Controllers\Controller;


class MunicipalAdminHomeController extends Controller
{
    //

    public function municipality() {
        return Inertia::render('MunicipalAdmin/Municipality');
    }

    public function admins() {
        return Inertia::render('MunicipalAdmin/Admins');
    }

    public function dashboard() {
        return Inertia::render('MunicipalAdmin/Dashboard', ['barangays' => Barangay::all()]);
    }

    public function posts() {
        return Inertia::render('MunicipalAdmin/Posts');
    }

    public function requests() {
        return Inertia::render('MunicipalAdmin/Requests');
    }

    public function contact_us() {
        return Inertia::render('MunicipalAdmin/ContactUs');
    }

    public function email_notify_lists() {
        return Inertia::render('MunicipalAdmin/EmailNotifyList');
    }

    public function visitor() {
        return Inertia::render('MunicipalAdmin/Visitor');
    }

    public function the_municipal() {
        return Inertia::render('MunicipalAdmin/TheMunicipal');
    }

}