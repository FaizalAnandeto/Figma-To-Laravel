<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Kontrol;
use App\Http\Controllers\seckon;
use App\Http\Controllers\NewsController;

Route::get('/', function () {
    return ('Hello World');
});

Route::get('/kontrol',[Kontrol::class,'index']);
Route::get('/seckon',[seckon::class,'index']);


//News
Route::get ('news', [NewsController::class, "index"]);