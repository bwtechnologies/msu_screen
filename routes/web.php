<?php

namespace App\Http\Resources;
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Broadcast;
use Auth;
use App\Events\ScreenAdded;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::view('/', 'base');
Route::view('/*/*/', 'base');

Route::get('/database', ScreenAdded::dispatch('Secondary Screen'));