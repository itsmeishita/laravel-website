<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/contact', function () {
    return view('contact');
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
