<?php

use Illuminate\Support\Facades\Route;

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
    return view('layout.app');
});

Route::get('about.html', function () {
    return view('layout.about');
});

Route::get('service.html', function () {
    return view('layout.service');
});

Route::get('blog.html', function () {
    return view('layout.blog');
});

Route::get('detail.html', function () {
    return view('layout.detail');
});

Route::get('price.html', function () {
    return view('layout.price');
});

Route::get('feature.html', function () {
    return view('layout.feature');
});

Route::get('team.html', function () {
    return view('layout.team');
});

Route::get('testimonial.html', function () {
    return view('layout.testimonial');
});

Route::get('quote.html', function () {
    return view('layout.quote');
});

Route::get('contact.html', function () {
    return view('layout.contact');
});

Route::get('index.html', function () {
    return view('layout.index');
});
