<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace'=>'Front'],function(){

    Route::get("show","userController@manarName");
});

// Route::group(['namespace'=>'Front','middleware'=>'auth'],function()
// {
//         Route::get("showname","adminController@showName");
//         Route::get("UpdateName","adminController@UpdateName");
//         Route::get("editName","adminController@editName");
//         Route::get("createName","adminController@createName");

// });

//must create route named logon to use full auth

Route::get("Login",function() {return "must be login"; } )->name("login");

Route::get("showname","Front\adminController@showName");

// here i use or craate view 

Route::get("index","Front\userController@getIndex");

//passsing data from route to view but this method is not good becouse if i use long line

//1- variable

    Route::get("getname","Front\userController@getIndex");

    //view page

    Route::get("landing",function(){
        return view("landing");
    });
