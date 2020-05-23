<?php

use Illuminate\Support\Facades\Route;

Route::get('randomizes/{randomize}', 'RandomizeController@retrieve');
Route::post('generate', 'RandomizeController@generate');
