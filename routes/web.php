<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DomaininfoController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\RamadanController;
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

Route::get('/', function () {
    return view('index');
});
Route::prefix('contact')->group(function () {
    Route::get('/', function () {
        return view('contact');
    });

    Route::post('/send', [ContactController::class, 'send'])->name('contact.send');
});

Route::get('/services', function () {
    return view('services');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/socialmedia', function () {
    return view('socialmedia');
});
Route::get('/website-designing', function () {
    return view('website-designing');
});
Route::get('/website-development', function () {
    return view('website-development');
});
Route::get('/mobile-application', function () {
    return view('mobile-application');
});
Route::get('/digital-marketing', function () {
    return view('digital-marketing');
});
Route::get('/seo-writing', function () {
    return view('seo-writing');
});
Route::get('/ramadan-2025', function () {
    return view('ramadan.ramadan-2025');
});
Route::get('/ramadan-form', function () {
    return view('ramadan.ramadan-form');
});
Route::get('/ramadan-api-documentation', function () {
    return view('ramadan.ramadan-api-documentation');
});
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});
Route::get('/terms-conditions', function () {
    return view('terms-conditions');
});
Route::get('/domain-details', [DomaininfoController::class, 'showDomainInfo']);

