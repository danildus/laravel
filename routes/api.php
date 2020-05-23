<?php

use Illuminate\Support\Facades\Route;

Route::get('randomizes/{randomize}', 'RandomizeController@show');
Route::post('generate', 'RandomizeController@generate');
