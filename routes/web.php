<?php

use App\Http\Controllers\CreateHistoryController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LOginController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\SingupController;

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

 Route::get('/', [LOginController::class, 'index']);

 Route::get('subir_historia', [CreateHistoryController::class, 'CreateHistory']);

 Route::get('tarjetas_historia', [HistoryController::class, 'Tarjetas']);

 route::get ('user/recuperar', [LoginUserController::class ,'Recuperar']);

 route::get ('leyenda',[HistoryController::class, 'Leyenda']);

 route::get ('Login',[LOginController::class , 'iniciodesesion']);

 route::get ('formulario', [SingupController::class , 'formulario']);

 route::get ('leyenda/dosleyendas', [HistoryController::class , 'DosLeyendas']);


 
 route ::get ('contacto', [IndexController::class, 'Contacto']);