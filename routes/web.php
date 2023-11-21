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


Route::get('/', [ViewController::class, 'index'])->name('index');
Route::get('/barangays', [ViewController::class, 'barangays']);
Route::get('/municipal', [ViewController::class, 'municipal']);
Route::get('/visitors', [ViewController::class, 'visitors']);
Route::get('/support', [ViewController::class, 'support']);
Route::get('/contact-us', [ViewController::class, 'contact_us']);
Route::get('/forgotpassword', [ViewController::class, 'forgotpassword']);
Route::get('/about', function () {
    return Inertia::render('About');
});
Route::get('/MunicipalAdminLayout', function () {
    return Inertia::render('Layouts/MunicipalAdminLayout');
});
Route::get('/BarangayAdminLayout', function () {
    return Inertia::render('Layouts/BarangayAdminLayout');
});
Route::get('/barangay/{brgy}', [ViewController::class, 'barangay_explore']);
Route::get('/Visitors/{topic}', function () {
    return Inertia::render('User/VisitorExplore');
});
Route::get('MunicipalAdmin/Dashboard', function() {
    return Inertia::render('MunicipalAdmin/Dashboard');
});
Route::post('/signin', [AuthController::class, 'signin']);
Route::post('/signup', [AuthController::class, 'sign_up']);
Route::get('/sign-in', [AuthController::class, 'sign_in']);
Route::get('/sign-up', [AuthController::class, 'signUp']);
Route::get('/logout', [AuthController::class, 'logout']);

