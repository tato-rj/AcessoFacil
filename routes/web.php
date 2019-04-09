<?php

// For development only
App\Http\Controllers\Auth\GateController::auth();

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
