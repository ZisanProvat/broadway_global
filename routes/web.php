<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/immigration-skill-work', function () {
    return view('immigration');
});
Route::get('/immigration', function () {
    return view('immigration');
});

Route::get('/testimonials', function () {
    return view('testimonials');
});


// ── Destinations ──────────────────────────────────────────
Route::get('/destinations/malaysia',    fn() => view('destinations.malaysia'));
Route::get('/destinations/cyprus',      fn() => view('destinations.cyprus'));
Route::get('/destinations/france',      fn() => view('destinations.france'));
Route::get('/destinations/italy',       fn() => view('destinations.italy'));
Route::get('/destinations/croatia',     fn() => view('destinations.croatia'));
Route::get('/destinations/netherlands', fn() => view('destinations.netherlands'));
Route::get('/destinations/new-zealand', fn() => view('destinations.new-zealand'));
Route::get('/destinations/denmark',     fn() => view('destinations.denmark'));
Route::get('/destinations/hungary',     fn() => view('destinations.hungary'));
Route::get('/destinations/usa',         fn() => view('destinations.usa'));
Route::get('/destinations/canada',      fn() => view('destinations.canada'));
Route::get('/destinations/uk',          fn() => view('destinations.uk'));
Route::get('/destinations/australia',   fn() => view('destinations.australia'));
