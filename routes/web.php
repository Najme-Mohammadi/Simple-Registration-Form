<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [RegistrationController::class, 'store']);

