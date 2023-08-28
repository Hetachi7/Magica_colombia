<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Contacto(){
        return view('Contacto');


    }
    public function Index (){
        return view('index');
    }
}
