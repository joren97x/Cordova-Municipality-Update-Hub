<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Controllers\Controller;


class VisitorController extends Controller
{
    //
    public function essential_travel_facts() {
        return Inertia::render('User/Visitors/EssentialTravelFacts');
    }

    public function must_see_sites() {
        return Inertia::render('User/Visitors/MustSeeSites');
    }

    public function entertainment() {
        return Inertia::render('User/Visitors/EntertainmentShopping');
    }

    public function events() {
        return Inertia::render('User/Visitors/EventsFestivals');
    }

    public function bed_and_dine() {
        return Inertia::render('User/Visitors/BedAndDine');
    }

    public function around_the_city() {
        return Inertia::render('User/Visitors/MovingAroundTheCity');
    }

    public function money_exchange_centers() {
        return Inertia::render('User/Visitors/MoneyExchangeCenters');
    }

}
