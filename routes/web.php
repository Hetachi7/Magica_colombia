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

 Route::get('vali
 
 
 
 dar-inicio', [LoginUserController::class, 'validarInicio']);

 route::get ('dosleyendas', [HistoryController::class , 'DosLeyendas']);
 
 route ::get ('contacto', [IndexController::class, 'Contacto'])->name('contac');

 Route::get('Registro', [Signupcontroller::class, 'Registro'])->name('registro');

 Route::post('validar-registro', [Signupcontroller::class, 'validarRegistro']);


//VISTA DE LOS DEPARTAMENTOS 


 Route::get('tarjetacundinamarca',[DepartamentUserController::class, 'Cundinamarca'])->name ('cundi');

Route::get('tarjetaAtlantico',[DepartamentUserController::class, 'Atlantico'])->name ('atlan');

Route::get('tarjetaSantander', [DepartamentUserController::class,'Santander'])->name('santa');

Route::get('tarjetaAntioquia', [DepartamentUserController::class, 'Antioquia'])->name ('antiqi');

Route::get('tarjetaValleDelCauca', [DepartamentUserController::class, 'ValleDelCauca'])->name ('vallunomano');

Route::get('tarjetaRisaralda', [DepartamentUserController::class, 'Risaralda'])->name ('risas');

Route::get('tarjetaCaldas', [DepartamentUserController::class, 'Caldas'])->name ('caldas');

Route::get('tarjetaQuindio', [DepartamentUserController::class, 'Quindio'])->name ('qinflow');

Route::get('tarjetaBoyaca', [DepartamentUserController::class, 'Boyaca'])->name ('boyacomans');

Route::get('tarjetaCasanare', [DepartamentUserController::class, 'Casanare'])->name ('cazans');

Route::get('tarjetaNorteSantander', [DepartamentUserController::class,'NorteDeSantander'])->name ('norteños');

Route::get('tarjetaBolivar',[DepartamentUserController::class, 'Bolivar'])->name ('bolivarianos');

Route::get ('tarjetaTolima',[DepartamentUserController::class, 'Tolima'])->name ('laslechonas');

Route::get ('tarjetaMeta',[DepartamentUserController::class, 'Meta'])->name ('metantaforas');

Route::get('tarjetaHuila',[DepartamentUserController::class, 'Huila'])->name('aguila');