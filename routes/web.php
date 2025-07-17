<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccessController;


Route::post('/login', [AccessController::class, "login"]); 

Route::post('/signin', [AccessController::class, "signin"]); 
