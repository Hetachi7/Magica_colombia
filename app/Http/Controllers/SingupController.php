<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class SingupController extends Controller
{
    public function formulario (){
    
        return view('formulario');
    }
    public function Registro(){
        return view('Registro');
    }
}
