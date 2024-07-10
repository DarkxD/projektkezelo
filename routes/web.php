<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('/projects', ProjectsController::class);
