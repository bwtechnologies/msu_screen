<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Events\ScreenAdded;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Http\Request;

class ScreensController extends Controller
{
    public function alert(){
        event(new ScreenAdded('secondary'));
        //ScreenAdded::dispatch();//'secondary');//env('APP_SCREEN','Laravel'));
    }
}
