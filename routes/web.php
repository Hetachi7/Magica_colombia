<?php

use App\Http\Controllers\CreateHistoryController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\Signupcontroller;
use Illuminate\Auth\Events\Login;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

 Route::get('/inicio', [IndexController::class, 'index']);

 Route::get('perfil',[IndexController::class,'perfil']);

 Route::get('subir_historia', [CreateHistoryController::class, 'CreateHistory']);

 route::get ('formulario', [CreateHistoryController::class , 'formulario']);

 Route::get('tarjetas_historia', [HistoryController::class, 'Tarjetas']);

 route::get ('leyenda',[HistoryController::class, 'Leyenda']);

 route::get ('user/recuperar', [LoginUserController::class ,'Recuperar']);

 route::get ('Login',[LoginUserController::class , 'login']);

 Route::get('validar-inicio', [LoginUserController::class, 'validarInicio']);

 route::get ('leyenda/dosleyendas', [HistoryController::class , 'DosLeyendas']);
 
 route ::get ('contacto', [IndexController::class, 'Contacto']);

 Route::get('Registro', [SingupController::class, 'Registro']);

 Route::post('validar-registro', [Singupcontroller::class, 'validarRegistro']);




