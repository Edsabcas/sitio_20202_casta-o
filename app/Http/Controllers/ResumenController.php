<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumenController extends Controller
{
    public function index(){
        $op='resumen';
        return view('home', compact("op"));
    }
}
