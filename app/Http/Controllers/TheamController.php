<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TheamController extends Controller
{
    public function home(){
        return view("Theam.home");
    }
    public function shop(){
        return view("Theam.shop");

    }
    public function about_us(){
        return view("Theam.about_us");
    }
    public function Services(){
        return view("Theam.Services");
    }
    public function blog(){
        return view("Theam.blog");
    }
    public function Contact(){
        return view("Theam.Contact");
    }
    public function store(Request $request){
        // $validate=$request->validate([
        //     "fname"=>['required','max:255'],
        //     "lname"=>['required','max:255'],
        //     "email"=>['required','max:255','email']
        // ]);
        dd($request->all());
    }

}
