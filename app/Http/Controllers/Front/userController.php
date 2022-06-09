<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class userController extends Controller
{
    public function manarName(){
        return "Ilove U";
    }

    public function getIndex()
    {
        //passsing data from route to view but this method is not good becouse if i use long line and i can passing string 

            //1- variable
        // return view("front\indux")->with('data',12);

        //2- Groupe  but i must define variable array empty like theat data[]=

        // $data=[];
        // $data['id']="12";
        // $data["FirstName"]="Mohannad";
        // $data["LastName"]="Abbas";

        // return view("front\indUx",$data);

        //3- i use oop for passing data like that -->

        $obj=new \stdClass();

        $obj->Fname="Mohannad";
        $obj->Lname="abbad";
        $obj->Age=25;
        //function compuct use to passing data from obj with out ($) 
        return view("front\indux",compact('obj'));





    }
}
