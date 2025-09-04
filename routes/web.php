<?php

use Illuminate\Support\Facades\Route;


// admin
Route::get('/', function () {
    return view('pages.admin.homepage.homepage');
}) ->name('home');




// user
