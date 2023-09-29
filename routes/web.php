<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [ViewController::class, 'index']);
Route::get('/barangays', [ViewController::class, 'barangays']);
Route::get('/municipal', [ViewController::class, 'municipal']);
Route::get('/visitors', [ViewController::class, 'visitors']);
Route::get('/sign-in', [AuthController::class, 'sign_in']);
Route::get('/support', [ViewController::class, 'support']);
Route::get('/contact-us', [ViewController::class, 'contact_us']);
Route::get('/about', function () {
    return Inertia::render('About');
});
