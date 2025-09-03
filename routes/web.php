<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.homepage.homepage');
}) ->name('home');
