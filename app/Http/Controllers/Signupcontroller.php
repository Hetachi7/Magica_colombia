<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Signupcontroller extends Controller
{
    public function registro(){
        return view('Registro');
    }

    public function Validacion(Request $request)
{
    $validatedData = $request->validate([
        'nombres' => 'required',
        'apellidos' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
    ]);

    // Aquí puedes realizar el proceso de registro si la validación es exitosa
    // Por ejemplo: User::create($validatedData);

    User::create([
        'nombres'=>$request->input('nombres'),
        'apellidos'=>$request->input('apellidos'),
        'email'=>$request->input('email'),
        'password'=>$request->input('password'),
    ]);

    return redirect()->route('inicio')->with('success', 'Registro exitoso');
}


}
