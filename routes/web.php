<?php

// For development only
App\Http\Controllers\Auth\GateController::auth();

Route::get('/', function () {
    return view('pages.welcome.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
