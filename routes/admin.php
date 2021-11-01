<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminGaleriaController;

Route::get('',[AdminController::class,'index']);
Route::resource('galeria',AdminGaleriaController::class)->names('admin.galeria');