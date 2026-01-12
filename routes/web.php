<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.himaprofile.home');
});
Route::get('/about', function () {
    return view('pages.himaprofile.about');
});
Route::get('/proker', function () {
    return view('pages.himaprofile.proker');
});
Route::get('/requirement', function () {
    return view('pages.himaprofile.requirement');
});