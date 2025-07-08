<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class recibo extends Controller
{
    public function main(){
        return view('inicio');
    }
    public function new(){
        return view("new");
    }
}
