<?php

use App\Http\Controllers\CreateHistoryController;
use App\Http\Controllers\DepartamentUserController;
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

 Route::get('/inicio', [IndexController::class, 'index'])->name('inicio');

 Route::get('quienesomos',[IndexController::class,'info'])->name('info');

 Route::get('perfil',[IndexController::class,'perfil'])->name('perfil');

 Route::get('subir_historia', [CreateHistoryController::class, 'CreateHistory'])->name('subirhistoria');

 route::get ('formulario', [CreateHistoryController::class , 'formulario'])->name('form');

 Route::get('tarjetas_historia', [HistoryController::class, 'Tarjetas'])->name('historia');

 Route::get ('leyenda',[HistoryController::class, 'Leyenda'])->name('leyenda');

 route::get ('user/recuperar', [LoginUserController::class ,'Recuperar'])->name('recuperar');

 route::get ('Login',[LoginUserController::class , 'login'])->name('iniciosesion');

 Route::get('validar-inicio', [LoginUserController::class, 'validarInicio']);

 route::get ('dosleyendas', [HistoryController::class , 'DosLeyendas']);
 
 route ::get ('contacto', [IndexController::class, 'Contacto'])->name('contac');

 Route::get('Registro', [Signupcontroller::class, 'Registro'])->name('registro');

 Route::post('validar-registro', [Signupcontroller::class, 'validarRegistro']);




