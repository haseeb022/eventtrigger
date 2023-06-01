<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AdminEventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\PaymentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('frontend.index');
// });

Route::get('/', [HomeController::class, 'index']); 
// Route::view('event-details', 'frontend.event-details');
Route::get('event_details/{id}', [HomeController::class, 'event_details'])->name('event_details');
Route::get('events_list',[HomeController::class, 'events_list'])->name('events_list');

Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


// Participants 
Route::get('list-events', [AdminEventController::class, 'index'])->name('event.index');
Route::get('add-event', [AdminEventController::class, 'addEvent']);
Route::post('save-event', [AdminEventController::class, 'store'])->name('event.store');

Route::get('edit-event/{id}', [AdminEventController::class, 'edit'])->name('event.edit');
Route::post('update-event', [AdminEventController::class, 'update'])->name('event.update');
Route::delete('delete-event/{id}', [AdminEventController::class, 'destroy'])->name('event.destroy');
// public routes 

Route::view('contact', 'frontend.contact');
Route::view('about', 'frontend.about');
Route::view('blog', 'frontend.blog-grid');
Route::view('blog-details', 'frontend.blog-details');

Route::view('event-details', 'frontend.event-details');
Route::view('gallary', 'frontend.gallary');
Route::view('register', 'frontend.registration');
Route::view('speaker', 'frontend.speeker');
Route::view('speaker-detail', 'frontend.speeker-detail');
Route::view('pricing', 'frontend.pricing');

Route::post('pay', [PaymentController::class, 'pay'])->name('payment');
Route::get('success', [PaymentController::class, 'success']);
Route::get('error', [PaymentController::class, 'error']);