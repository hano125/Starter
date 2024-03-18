<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TheamController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/////////////////Theam Route ///////////////////////////
Route::controller(TheamController::class)->group(function(){
    Route::get("/home","home")->name("theam.home");
    Route::get("/shop","shop")->name("theam.shop");
    Route::get("/about","about_us")->name("theam.about");
    Route::get("/Services","Services")->name("theam.Services");
    Route::get("/blog","blog")->name("theam.blog");
    Route::get("/Contact","Contact")->name("theam.contact");
    Route::post("/Contact/store","store")->name("theam.contact.store");
});
