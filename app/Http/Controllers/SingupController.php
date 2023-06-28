<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingupController extends Controller
{
    public function Formulario() {

        return view ('formulario');
    }
}
