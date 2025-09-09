<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.homepage.homepage');
}) ->name('home');

Route::get('/profile', function () {
    return view('pages.profile.profile');
}) ->name('profile');

Route::get('/history', function () {
    return view('pages.history.history');
}) ->name('history');


Route::get('/finance', function () {
    return view('pages.finance.finance');
}) ->name('finance');