<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Kontrol;

Route::get('/', function () {
    return ('Hello World');
});

Route::get('/kontrol',[Kontrol::class,'index']);
