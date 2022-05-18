<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form1305Controller extends Controller
{
    public function index(){
            $op='form';
            return view('home', compact("op"));
    }
}
