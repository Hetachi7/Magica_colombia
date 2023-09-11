<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginUserController extends Controller
{
    public function Recuperar(){
        return view('Recuperar');


    }
    public function login(){
        return view('iniciodesesion');
    }
    
    public function validarInicio(Request $request)
{
    $validatedData = $request->validate([
        'nombres' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
    ]);

    // Aquí puedes realizar el proceso de registro si la validación es exitosa
    // Por ejemplo: User::create($validatedData);

    

    return redirect()->route('inicio')->with('success', 'Inicio correcto');
}
}

