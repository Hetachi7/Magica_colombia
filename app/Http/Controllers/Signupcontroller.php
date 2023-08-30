<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Signupcontroller extends Controller
{
    public function registro(){
        return view('Registro');
    }

    public function validarRegistro(Request $request)
{
    $validatedData = $request->validate([
        'nombres' => 'required',
        'apellidos' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
    ]);

    // Aquí puedes realizar el proceso de registro si la validación es exitosa
    // Por ejemplo: User::create($validatedData);

    return redirect()->route('/')->with('success', 'Registro exitoso');
}


}
