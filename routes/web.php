<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MunicipalAdminHomeController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\BarangayController;
use App\Models\Barangay;
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
Route::get('/the-municipal', [ViewController::class, 'municipal']);
Route::get('/visitors', [ViewController::class, 'visitors']);
Route::get('/support', [ViewController::class, 'support']);
Route::get('/contact-us', [ViewController::class, 'contact_us']);
Route::get('/forgotpassword', [ViewController::class, 'forgotpassword']);
Route::get('/{barangay}/events', [ViewController::class, 'events']);
Route::get('/{barangay}/sports', [ViewController::class, 'sports']);
Route::get('/{barangay}/local-news', [ViewController::class, 'local_news']);
Route::get('/{barangay}/health-wellness', [ViewController::class, 'health_wellness']);
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
Route::get('/forgot-password', [AuthController::class, 'forgot_password']);

Route::get('/municipal-admin/municipality', [MunicipalAdminHomeController::class, 'municipality']);
Route::get('/municipal-admin/dashboard', [MunicipalAdminHomeController::class, 'dashboard']);
Route::get('/municipal-admin/posts', [MunicipalAdminHomeController::class, 'posts']);
Route::get('/municipal-admin/requests', [MunicipalAdminHomeController::class, 'requests']);
Route::get('/municipal-admin/contact-us', [MunicipalAdminHomeController::class, 'contact_us']);
Route::get('/municipal-admin/email-notify-lists', [MunicipalAdminHomeController::class, 'email_notify_lists']);
Route::get('/municipal-admin/visitor', [MunicipalAdminHomeController::class, 'visitor']);
Route::get('/municipal-admin/the-municipal', [MunicipalAdminHomeController::class, 'the_municipal']);
Route::post('/municipal-admin/update-barangay/{barangay}', [BarangayController::class, 'update']);


Route::get('/visitors/essential-travel-facts', function() {
    return Inertia::render('User/VisitorExplore');
});


Route::get('/barangay/edit-barangay/{barangay}', [BarangayController::class, 'edit']);
