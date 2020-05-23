<?php

use Illuminate\Support\Facades\Route;

Route::get('retrieve/{randomize}', 'RandomizeController@retrieve');
Route::post('generate', 'RandomizeController@generate');
