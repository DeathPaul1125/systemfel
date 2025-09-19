<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Saludos desde Admin Panel';
})->name('panel');
