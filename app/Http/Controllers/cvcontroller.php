<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cvcontroller extends Controller
{
    public function index(){
        return view('cv');
    }
}
