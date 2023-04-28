<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){ 


        return view("home");
    }

    public function folder_1(){
        return view("page_1");
    }
    public function folder_2(){
        return view("page_2");
    }

}
