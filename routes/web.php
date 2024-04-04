<?php

use App\Http\Controllers\IssueController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/privacy_policy', function() {
    return view('privacy_policy');
})->name('privacy_policy');
Route::get('/terms_of_use', function () {
    return view('terms_of_use');
})->name('terms_of_use');

Route::get('/contact', function() {
    return view('contact_form');
})->name('contact_form');
Route::post('/contact_form', [IssueController::class, 'create_issue'])->name('create_issue');

Route::get('/auth', function () {
    return view('auth.login');
})->name('auth_page');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/profile', [ProfileController::class, 'generate_profile_page']);
});
