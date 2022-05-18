<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstController extends Controller
{
    public function inicio(){
        $op=1;
        return view('home', compact("op"));
    }
    public function nosotros(){
        $op=2;
        return view('home', compact("op"));
    }
    public function admisiones(){
        $op=3;
        return view('home', compact("op"));
    }
    
    public function val(){
        $op=4;
        return view('home', compact("op"));
    }

    public function soportecnico(){
        $op=6;
        return view('home', compact("op"));
    }

    public function restablecerusuario(){
        $op=7;
        return view('home', compact("op"));
    }

    public function estadoproceso(){
        $op=8;
        return view('home', compact("op"));
    }
}
