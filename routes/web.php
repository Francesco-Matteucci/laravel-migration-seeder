<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainController;
use App\Http\Controllers\PassengerController;


Route::get('/', [TrainController::class, 'index']);
Route::get('/passengers', [PassengerController::class, 'index']);