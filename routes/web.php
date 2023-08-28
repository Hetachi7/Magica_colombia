<?php

use App\Http\Controllers\CreateHistoryController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LOginController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\SingupController;
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

 Route::get('/', [IndexController::class, 'index']);

 Route::get('subir_historia', [CreateHistoryController::class, 'CreateHistory']);

 Route::get('tarjetas_historia', [HistoryController::class, 'Tarjetas']);

 route::get ('user/recuperar', [LoginUserController::class ,'Recuperar']);

 route::get ('leyenda',[HistoryController::class, 'Leyenda']);

 route::get ('formulario', [SingupController::class , 'formulario']);

 route::get ('leyenda/dosleyendas', [HistoryController::class , 'DosLeyendas']);

 route::get ('Login',[LOginController::class , 'iniciodesesion']);
 
 route ::get ('contacto', [IndexController::class, 'Contacto']);

 Route::get('Registro', [SingupController::class, 'Registro']);
 
 Route::get('privada', [UserController::class, 'index']);

Route::post('validar-registro', [LOginController::class, 'registro']);

Route::post('inicio-sesion' ,[Logincontroller::class,'Login' ]);

Route::get('Logout', [LOginController::class, 'Logout']);


