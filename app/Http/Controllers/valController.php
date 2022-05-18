<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class valController extends Controller
{
    public function inicio(){
        $op=1;
        return view('home', compact("op"));
    }

    public function conducta(){
        $op=5;
        return view('home', compact("op"));
    }
    public function preinscripcion(){
        $op="valpre";
        return view('home', compact("op"));
    }
}

