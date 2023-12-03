<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangayController;
use App\Http\Controllers\User\ViewController;
use App\Http\Controllers\MunicipalAdmin\MunicipalAdminHomeController;
use App\Http\Controllers\MunicipalAdmin\MunicipalAdminPostController;
use App\Http\Controllers\MunicipalAdmin\QuestionController;

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
Route::get('/barangay/{brgy}', [ViewController::class, 'barangay_explore']);
Route::get('/Visitors/{topic}', function () {
    return Inertia::render('User/VisitorExplore');
});

Route::post('/signin', [AuthController::class, 'signin']);
Route::get('/sign-in', [AuthController::class, 'sign_in']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/forgot-password', [AuthController::class, 'forgot_password']);

Route::get('/municipal-admin/municipality', [MunicipalAdminHomeController::class, 'municipality']);
Route::get('/municipal-admin/manage-posts', [MunicipalAdminPostController::class, 'index']);
Route::get('/municipal-admin/pending-posts', [MunicipalAdminPostController::class, 'pending']);
Route::get('/municipal-admin/questions', [QuestionController::class, 'index']);
Route::get('/municipal-admin/dashboard', [MunicipalAdminHomeController::class, 'dashboard']);
Route::get('/municipal-admin/posts', [MunicipalAdminHomeController::class, 'posts']);
Route::get('/municipal-admin/requests', [MunicipalAdminHomeController::class, 'requests']);
Route::get('/municipal-admin/email-notify-lists', [MunicipalAdminHomeController::class, 'email_notify_lists']);
Route::get('/municipal-admin/visitor', [MunicipalAdminHomeController::class, 'visitor']);
Route::get('/municipal-admin/the-municipal', [MunicipalAdminHomeController::class, 'the_municipal']);
Route::post('/municipal-admin/update-barangay/{barangay}', [BarangayController::class, 'update']);
Route::get('/barangay/edit-barangay/{barangay}', [BarangayController::class, 'edit']);

Route::get('/barangay-admin/dashboard', [BarangayAdminHomeController::class, 'dashboard']);