<?php

namespace App\Http\Resources;
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::view('/', 'base');
Route::view('/*/*/', 'base');

Route::get('/database', [ScreensController::class, 'alert']);