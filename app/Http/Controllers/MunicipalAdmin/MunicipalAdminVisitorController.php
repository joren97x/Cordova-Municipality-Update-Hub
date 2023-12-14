<?php

namespace App\Http\Controllers\MunicipalAdmin;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MunicipalAdminVisitorController extends Controller
{
    //
    public function essential_travel_facts() {
        return Inertia::render('MunicipalAdmin/Visitors/EssentialTravelFacts');
    }

    public function must_see_sites() {
        return Inertia::render('MunicipalAdmin/Visitors/MustSeeSites');
    }

    public function entertainment() {
        return Inertia::render('MunicipalAdmin/Visitors/EntertainmentShopping');
    }

    public function events() {
        return Inertia::render('MunicipalAdmin/Visitors/EventsFestivals');
    }

    public function bed_and_dine() {
        return Inertia::render('MunicipalAdmin/Visitors/BedAndDine');
    }

    public function around_the_city() {
        return Inertia::render('MunicipalAdmin/Visitors/MovingAroundTheCity');
    }

    public function money_exchange_centers() {
        return Inertia::render('MunicipalAdmin/Visitors/MoneyExchangeCenters');
    }
}
