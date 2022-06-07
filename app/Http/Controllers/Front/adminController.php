<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\controller;

class adminController extends Controller
{

    //here i use constrector to use full auth on the function and i accept shom function use (except)

    public function __construct(){

        $this->middleware("auth")->except("showName");
    }
    


    public function showName(){

        return "<h1> The show name func </h1>";
    }

    public function UpdateName(){

        return "<h1> The Update name func </h1>";
    }

    public function editName(){

        return "<h1> The edit name func </h1>";
    }

    public function createName(){

        return "<h1> The create name func </h1>";
    }
    

}
