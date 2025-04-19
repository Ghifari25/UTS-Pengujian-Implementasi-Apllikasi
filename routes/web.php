<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimulasiController;

Route::get('/simulasi', [SimulasiController::class, 'index']);
