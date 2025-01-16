<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::apiResource('products',ProductoController::class);
