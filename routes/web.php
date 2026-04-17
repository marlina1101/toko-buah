<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuahController;

Route::get('/', function () {
    return redirect('/buah');
});

Route::resource('buah', BuahController::class);