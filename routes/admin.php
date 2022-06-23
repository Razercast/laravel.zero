<?php

use Illuminate\Support\Facades\Route;

Route::get("login",[\App\Http\Controllers\AuthController::class,'index'])->name("login");
Route::get("login_process",[\App\Http\Controllers\AuthController::class,'login'])->name("login_process");
Route::middleware("auth:admin")->group(function(){
    Route::resource('posts',\App\Http\Controllers\Admin\PostController::class);
});

