<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangayAdmin\AnnouncementController;
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
use App\Http\Controllers\BarangayAdmin\BarangayAdminBarangayController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\MunicipalAdmin\MunicipalAdminVisitorController;
use App\Http\Controllers\User\VisitorController;
use App\Models\Email;

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
    Route::put('/municipal-admin/approve-post', [MunicipalAdminPostController::class, 'approve']);
    Route::put('/municipal-admin/decline-post', [MunicipalAdminPostController::class, 'decline']);
    Route::get('/municipal-admin/pending-posts', [MunicipalAdminPostController::class, 'pending']);
    Route::get('/municipal-admin/questions/{category}', [QuestionController::class, 'index']);
    Route::get('/municipal-admin/cordova-municipality', [MunicipalAdminHomeController::class, 'the_municipal']);
    Route::get('/municipal-admin/posts', [MunicipalAdminHomeController::class, 'posts']);
    Route::get('/municipal-admin/admins', [MunicipalAdminHomeController::class, 'admins']);
    Route::get('/municipal-admin/requests', [MunicipalAdminHomeController::class, 'requests']);
    Route::get('/municipal-admin/email-notify-lists', [MunicipalAdminHomeController::class, 'email_notify_lists']);
    Route::get('/municipal-admin/visitor', [MunicipalAdminHomeController::class, 'visitor']);
    Route::get('/municipal-admin/the-municipal', [MunicipalAdminHomeController::class, 'the_municipal']);
    Route::post('/municipal_admin/create-admin', [AdminController::class, 'store']);
    Route::post('/municipal_admin/update-admin/{admin}', [AdminController::class, 'update']);
    Route::post('/municipal_admin/delete-admin/{admin}', [AdminController::class, 'destroy']);
    Route::post('/municipal-admin/officials', [OfficialController::class, 'index']);
    Route::put('/municipal-admin/answer-question/{question}', [QuestionController::class, 'answer']);
    Route::put('/municipal-admin/feature-question/{question}', [QuestionController::class, 'feature']);
    Route::get('/municipal-admin/visitors/events', [MunicipalAdminVisitorController::class, 'events']);
    Route::get('/municipal-admin/visitors/bed-and-dine', [MunicipalAdminVisitorController::class, 'bed_and_dine']);
    Route::get('/municipal-admin/visitors/must-see-sites', [MunicipalAdminVisitorController::class, 'must_see_sites']);
    Route::get('/municipal-admin/visitors/entertainment', [MunicipalAdminVisitorController::class, 'entertainment']);
    Route::get('/municipal-admin/visitors/around-the-city', [MunicipalAdminVisitorController::class, 'around_the_city']);
    Route::get('/municipal-admin/visitors/money-exchange-centers', [MunicipalAdminVisitorController::class, 'money_exchange_centers']);
    Route::get('/municipal-admin/visitors/essential-travel-facts', [MunicipalAdminVisitorController::class, 'essential_travel_facts']);
    Route::delete('/municipal-admin/delete-question/{question}', [QuestionController::class, 'destroy']);
    Route::delete('/municipal-admin/delete-email/{email}', [EmailController::class, 'destroy']);
    Route::put('/municipal-admin/update-answer/{question}', [QuestionController::class, 'update']);
});

Route::middleware('barangay_admin')->group(function() {
    Route::get('/barangay-admin/dashboard', [BarangayAdminHomeController::class, 'dashboard']);
    Route::get('/barangay-admin/barangay/{barangay}', [BarangayAdminBarangayController::class, 'show']);
    Route::get('/barangay-admin/pending-posts', [BarangayAdminPostController::class, 'pending']);
    Route::get('/barangay-admin/posts', [BarangayAdminPostController::class, 'index']);
    Route::get('/barangay-admin/officials', [OfficialController::class, 'index']);
    Route::get('/barangay-admin/announcements/local-news', [AnnouncementController::class, 'local_news']);
    Route::get('/barangay-admin/announcements/events', [AnnouncementController::class, 'events']);
    Route::get('/barangay-admin/announcements/sports', [AnnouncementController::class, 'sports']);
    Route::get('/barangay-admin/announcements/health-and-wellness', [AnnouncementController::class, 'health_and_wellness']);
});

Route::middleware('auth')->group(function() {
    Route::post('/create-post', [PostController::class, 'store']);
    Route::delete('/delete-post/{post}', [PostController::class, 'destroy']);
});

Route::get('/visitors/essential-travel-facts', [VisitorController::class, 'essential_travel_facts']);
Route::get('/visitors/must-see-sites', [VisitorController::class, 'must_see_sites']);
Route::get('/visitors/entertainment', [VisitorController::class, 'entertainment']);
Route::get('/visitors/bed-and-dine', [VisitorController::class, 'bed_and_dine']);
Route::get('/visitors/around-the-city', [VisitorController::class, 'around_the_city']);
Route::get('/visitors/money-exchange-centers', [VisitorController::class, 'money_exchange_centers']);
Route::get('/visitors/events', [VisitorController::class, 'events']);

Route::get('/{barangay}/events', [ViewController::class, 'events']);
Route::get('/{barangay}/sports', [ViewController::class, 'sports']);
Route::get('/{barangay}/local-news', [ViewController::class, 'local_news']);
Route::get('/{barangay}/health-and-wellness', [ViewController::class, 'health_and_wellness']);
Route::get('/', [ViewController::class, 'index'])->name('index');
Route::get('/barangays', [ViewController::class, 'barangays']);
Route::get('/the-municipal', [ViewController::class, 'municipal']);
Route::get('/visitors', [ViewController::class, 'visitors']);
Route::get('/support', [ViewController::class, 'support']);
Route::get('/contact-us', [ViewController::class, 'contact_us']);
Route::get('/forgotpassword', [ViewController::class, 'forgotpassword']);
Route::get('/barangay/{brgy}', [ViewController::class, 'barangay_explore']);


Route::post('/create-question', [QuestionController::class, 'store']);
Route::get('/Visitors/{topic}', function () {
    return Inertia::render('User/VisitorExplore');
});
Route::post('/signin', [AuthController::class, 'signin']);
Route::get('/sign-in', [AuthController::class, 'sign_in']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/forgot-password', [AuthController::class, 'forgot_password']);
Route::post('/email-notify', [EmailController::class, 'store']);