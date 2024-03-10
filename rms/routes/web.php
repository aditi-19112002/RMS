<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResultController;


Route::get("/",[ResultController::class,"index"])->name("home");
Route::get("/search",[ResultController::class,"search"])->name("search");
Route::match(["get","post"],"insert",[ResultController::class,"insert"])->name("insert"); 
Route::get("view/result/{id}",[ResultController::class,"viewResult"])->name("viewResult");
Route::get("/delete/{id}",[ResultController::class,"deleteResult"])->name("delete");
Route::match(["get","post"],"/edit/{id}",[ResultController::class,"editResult"])->name("edit"); 