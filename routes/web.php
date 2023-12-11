<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BarangayController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\User\ViewController;
use App\Http\Controllers\MunicipalAdmin\AdminController;
use App\Http\Controllers\MunicipalAdmin\OfficialController;
use App\Http\Controllers\BarangayAdmin\BarangayAdminHomeController;
use App\Http\Controllers\BarangayAdmin\BarangayAdminPostController;
use App\Http\Controllers\MunicipalAdmin\MunicipalAdminHomeController;
use App\Http\Controllers\MunicipalAdmin\MunicipalAdminPostController;

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


Route::middleware('municipal_admin')->group(function () {
    Route::get('/municipal-admin/municipality', [MunicipalAdminHomeController::class, 'municipality']);
    Route::get('/municipal-admin/manage-posts', [MunicipalAdminPostController::class, 'index']);
    Route::get('/municipal-admin/pending-posts', [MunicipalAdminPostController::class, 'pending']);
    Route::get('/municipal-admin/questions', [QuestionController::class, 'index']);
    Route::get('/municipal-admin/dashboard', [MunicipalAdminHomeController::class, 'dashboard']);
    Route::get('/municipal-admin/posts', [MunicipalAdminHomeController::class, 'posts']);
    Route::get('/municipal-admin/admins', [MunicipalAdminHomeController::class, 'admins']);
    Route::get('/municipal-admin/requests', [MunicipalAdminHomeController::class, 'requests']);
    Route::get('/municipal-admin/email-notify-lists', [MunicipalAdminHomeController::class, 'email_notify_lists']);
    Route::get('/municipal-admin/visitor', [MunicipalAdminHomeController::class, 'visitor']);
    Route::get('/municipal-admin/the-municipal', [MunicipalAdminHomeController::class, 'the_municipal']);
    // Route::post('/municipal-admin/update-barangay/{barangay}', [BarangayController::class, 'update']);
    Route::post('/municipal_admin/create-admin', [AdminController::class, 'store']);
    Route::post('/municipal_admin/update-admin/{admin}', [AdminController::class, 'update']);
    Route::post('/municipal_admin/delete-admin/{admin}', [AdminController::class, 'destroy']);
    Route::post('/municipal-admin/officials', [OfficialController::class, 'index']);
    Route::delete('/municipal-admin/delete-question/{question}', [QuestionController::class, 'destroy']);
    Route::post('/municipal-admin/answer-question/{question}', [QuestionController::class, 'answer']);
    // Route::get('/barangay/edit-barangay/{barangay}', [BarangayController::class, 'edit']);
});

Route::middleware('barangay_admin')->group(function() {
    Route::get('/barangay-admin/dashboard', [BarangayAdminHomeController::class, 'dashboard']);
    Route::get('/barangay-admin/pending-posts', [BarangayAdminPostController::class, 'pending']);
    Route::get('/barangay-admin/posts', [BarangayAdminPostController::class, 'index']);
    Route::get('/barangay-admin/officials', [OfficialController::class, 'index']);
});

Route::middleware('auth')->group(function() {
    Route::post('/create-post', [PostController::class, 'store']);
});

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
Route::post('/create-question', [QuestionController::class, 'store']);
Route::get('/Visitors/{topic}', function () {
    return Inertia::render('User/VisitorExplore');
});

Route::post('/signin', [AuthController::class, 'signin']);
Route::get('/sign-in', [AuthController::class, 'sign_in']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/forgot-password', [AuthController::class, 'forgot_password']);
