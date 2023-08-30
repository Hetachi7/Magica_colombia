<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateHistoryController extends Controller
{
    public function Formulario(){
        return view('formulario');
    }
    public function CreateHistory(){
        return view('subirhistoria');
    }
    
}
