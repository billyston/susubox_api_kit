<?php

declare(strict_types=1);

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/test', fn (Request $request) => $request->user())->middleware('auth:sanctum');
