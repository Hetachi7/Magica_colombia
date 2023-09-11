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

 Route::middleware(['auth'])->group(function(){


Route::post('Validacion','Signupcontroller')->name('Validar');

 });
 


 /////////////////////////ROUTES OF DEPARTAMENTS/////////////////////////////////////////////////////////////

Route ::get('tarjetaAmazonas',[DepartamentUserController::class,'Amazonas'])->name('Amaz');

Route ::get('tarjetaArauca',[DepartamentUserController::class,'Arauca'])->name('Arau');

Route ::get('tarjetaCaqueta',[DepartamentUserController::class,'Caqueta'])->name('Caque');

Route ::get('tarjetaCauca',[DepartamentUserController::class,'Cauca'])->name('Cau');

Route ::get('tarjetaCesar',[DepartamentUserController::class,'Cesar'])->name('Ces');

Route ::get('tarjetaChoco',[DepartamentUserController::class,'Choco'])->name('Cho');

Route ::get('tarjetaCordoba',[DepartamentUserController::class,'Cordoba'])->name('Cordo');

Route ::get('tarjetaGuainia',[DepartamentUserController::class,'Guainia'])->name('Guai');

Route ::get('tarjetaGuajira',[DepartamentUserController::class,'Guajira'])->name('Guaj');

Route ::get('tarjetaGuaviare',[DepartamentUserController::class,'Guaviare'])->name('Guave');

Route ::get('tarjetaMagdalena',[DepartamentUserController::class,'Magdalena'])->name('Magda');

Route ::get('tarjetaPutumayo',[DepartamentUserController::class,'Putumayo'])->name('Putum');

Route ::get('tarjetaSucre',[DepartamentUserController::class,'Sucre'])->name('Suc');

Route ::get('tarjetaVaupes',[DepartamentUserController::class,'Vaupes'])->name('Vaup');

Route ::get('tarjetaVichada',[DepartamentUserController::class,'Vichada'])->name('Vicha');

Route ::get('tarjetaNariño',[DepartamentUserController::class,'Nariño'])->name('Nari');