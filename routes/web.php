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

Route::get('quienesomos', [IndexController::class, 'info'])->name('info');

Route::get('perfil', [IndexController::class, 'perfil'])->name('perfil');

Route::get('preview', [CreateHistoryController::class, 'Preview'])->name('Pre');

Route::get('subir_historia', [CreateHistoryController::class, 'CreateHistory'])->name('subirhistoria');

route::get('formulario', [CreateHistoryController::class, 'formulario'])->name('form');

Route::get('tarjetas_historia', [HistoryController::class, 'Tarjetas'])->name('historia');

Route::get('leyenda', [HistoryController::class, 'Leyenda'])->name('leyenda');

route::get('user/recuperar', [LoginUserController::class, 'Recuperar'])->name('recuperar');

route::get('Login', [LoginUserController::class, 'login'])->name('iniciosesion');

Route::get('validar-inicio', [LoginUserController::class, 'validarInicio']);

route::get('dosleyendas', [HistoryController::class, 'DosLeyendas']);

route::get('contacto', [IndexController::class, 'Contacto'])->name('contac');

Route::get('Registro', [Signupcontroller::class, 'Registro'])->name('registro');

Route::post('validar-registro', [Signupcontroller::class, 'validarRegistro']);

//RUTAS DEPARTAMENTOS


Route::get('tarjetaCundinamarca', [DepartamentUserController::class, 'Cundinamarca'])->name('cundi');

Route::get('tarjetaAntioquia', [DepartamentUserController::class, 'Antioquia'])->name('antiqi');

Route::get('tarjetaSantander', [DepartamentUserController::class, 'Santander'])->name('santa');

Route::get('tarjetaAtlantico', [DepartamentUserController::class, 'Atlantico'])->name('atlan');

Route::get('tarjetaValleDelCauca', [DepartamentUserController::class, 'ValleDelCauca'])->name('vallunomano');

Route::get('tarjetaRisaralda', [DepartamentUserController::class])->name('risas');

Route::get('tarjetaCaldas', [DepartamentUserController::class, 'Caldas'])->name('caldas');

Route::get('tarjetaAmazonas', [DepartamentUserController::class, 'Amazonas'])->name('amazing');

Route::get('tarjetaArauca', [DepartamentUserController::class, 'Arauca'])->name('aureano');

Route::get('tarjetaCauca', [DepartamentUserController::class, 'Cauca'])->name('caucasicos');

Route::get('tarjetaCesar', [DepartamentUserController::class, 'Cesar'])->name('cesaraugusto');

Route::get('tarjetaChoco', [DepartamentUserController::class, 'Choco'])->name('chocokripi');

Route::get('tarjetaCordoba', [DepartamentUserController::class, 'Cordoba'])->name('gordoba');

Route::get('tarjetaCaqueta', [DepartamentUserController::class, 'Caqueta'])->name('caquebrr');

Route::get('tarjetaGuainia', [DepartamentUserController::class, 'Guainia'])->name('guayayai');

Route::get('tarjetaGuaviare', [DepartamentUserController::class, 'Guaviare'])->name('suave');

Route::get('tarjetaGuajira', [DepartamentUserController::class, 'Guajira'])->name('naira');

Route::get('tarjetaMagdalena', [DepartamentUserController::class, 'Magdalena'])->name('oiemagda');

Route::get('tarjetaNariño', [DepartamentUserController::class, 'Nariño'])->name('nariñon');

Route::get('tarjetaPutumayo', [DepartamentUserController::class, 'Putumayo'])->name('utumaño');

Route::get('tarjetaSucre', [DepartamentUserController::class, 'Sucre'])->name('suck');

Route::get('tarjetaVichada', [DepartamentUserController::class, 'Vichada'])->name('fichada');

Route::get('tarjetaVaupes', [DepartamentUserController::class, 'Vaupes'])->name('elpez');

Route::get('tarjetaBolivar', [DepartamentUserController::class, 'Bolivar'])->name('bolivarianos');

Route::get('tarjetaBoyaca', [DepartamentUserController::class, 'Boyaca'])->name('boyacomans');

Route::get('tarjetaCasanare', [DepartamentUserController::class, 'Casanare'])->name('cazans');

Route::get('tarjetaHuila', [DepartamentUserController::class, 'Huila'])->name('aguila');

Route::get('tarjetaMeta', [DepartamentUserController::class, 'Meta'])->name('metantaforas');

Route::get('tarjetaNorteSantander', [DepartamentUserController::class, 'NorteDeSantander'])->name('norteños');

Route::get('tarjetaQuindio', [DepartamentUserController::class, 'Quindio'])->name('qinflow');

Route::get('tarjetaTolima', [DepartamentUserController::class, 'Tolima'])->name('laslechonas');


///// Creacion de Hitorias/////////////////////////////////////////////////////////////////////////////////


Route::post('/guardar-historia', [CreateHistoryController::class, 'guardarHistoria'])->name('guardarHistoria');

Route::post('/guardar-datos', [IndexController::class, 'guardarDatos'])->name('guardarDatos');


/// RUTA DEL REGISTRO ///

Route::get('/registro', [LoginUserController::class, 'crear'])->name('registro.crear');
Route::post('/registro', [LoginUserController::class, 'guardar'])->name('registro.guardar');
////////////////////// Historias/////////////////////////////////

////////////////////////////////////////CAQUETA//////////////////////////////////////////////////////////////////
Route::get('HistoriaCaq1', [HistoryController::class, 'HistoriaCaq1'])->name('Doncella');
Route::get('HistoriaCaq2', [HistoryController::class, 'HistoriaCaq2'])->name('Mula');
Route::get('HistoriaCaq3', [HistoryController::class, 'HistoriaCaq3'])->name('Pollo');
Route::get('HistoriaCaq4', [HistoryController::class, 'HistoriaCaq4'])->name('Tunjo');

////////////////////////////////////////CASANARE/////////////////////////////////////////////////////////////////
Route::get('HistoriaCas1', [HistoryController::class, 'HistoriaCas1'])->name('Bola');
Route::get('HistoriaCasa1', [HistoryController::class, 'HistoriaCasa1'])->name('Bola2');
Route::get('HistoriaCas2', [HistoryController::class, 'HistoriaCas2'])->name('Felipe');
Route::get('HistoriaCasa2', [HistoryController::class, 'HistoriaCasa2'])->name('Felip2');
Route::get('HistoriaCas3', [HistoryController::class, 'HistoriaCas3'])->name('Rompe');
Route::get('HistoriaCasa3', [HistoryController::class, 'HistoriaCasa3'])->name('Rompe2');
Route::get('HistoriaCas4', [HistoryController::class, 'HistoriaCas4'])->name('Super');
Route::get('HistoriaCasa4', [HistoryController::class, 'HistoriaCasa4'])->name('Super2');

////////////////////////////////////////CUNDINAMARCA/////////////////////////////////////////////////////////////

Route::get('HistoriaC1', [HistoryController::class, 'HistoriaC1'])->name('3brujas');
Route::get('HistoriaCu1', [HistoryController::class, 'HistoriaCu1'])->name('3brujas2');
Route::get('HistoriaC2', [HistoryController::class, 'HistoriaC2'])->name('david');
Route::get('HistoriaCu2', [HistoryController::class, 'HistoriacU2'])->name('david2');
Route::get('HistoriaC3', [HistoryController::class, 'HistoriaC3'])->name('Dama');
Route::get('HistoriaCu3', [HistoryController::class, 'HistoriaCu3'])->name('Dama2');

////////////////////////////////////////HUILA////////////////////////////////////////////////////////////////////

Route::get('HistoriaH1', [HistoryController::class, 'HistoriaH1'])->name('Guitana');
Route::get('HistoriaHu1', [HistoryController::class, 'HistoriaHu1'])->name('Guitana2');
Route::get('HistoriaH2', [HistoryController::class, 'HistoriaH2'])->name('Sombre');
Route::get('HistoriaHu2', [HistoryController::class, 'HistoriaHu2'])->name('Sombre2');
Route::get('HistoriaH3', [HistoryController::class, 'HistoriaH3'])->name('Taita');

////////////////////////////////////////META/////////////////////////////////////////////////////////////////////
Route::get('HistoriaM1', [HistoryController::class, 'HistoriaM1'])->name('candileja');
Route::get('HistoriaM2', [HistoryController::class, 'HistoriaM2'])->name('Silbon');
Route::get('HistoriaMS2', [HistoryController::class, 'HistoriaMs2'])->name('Silbon2');
Route::get('HistoriaM3', [HistoryController::class, 'HistoriaM3'])->name('juan');
Route::get('HistoriaMS3', [HistoryController::class, 'HistoriaMs3'])->name('juan2');
Route::get('HistoriaM4', [HistoryController::class, 'HistoriaM4'])->name('Rezo');

////////////////////////////////////////PUTUMAYO/////////////////////////////////////////////////////////////////
Route::get('HistoriaPu1', [HistoryController::class, 'HistoriaPu1'])->name('Chumbelo');
Route::get('HistoriaPu2', [HistoryController::class, 'HistoriaPu2'])->name('DiabloV');
Route::get('HistoriaPu3', [HistoryController::class, 'HistoriaPu3'])->name('Fuete');
Route::get('HistoriaPut3', [HistoryController::class, 'HistoriaPut3'])->name('Fuete2');
Route::get('HistoriaPu4', [HistoryController::class, 'HistoriaPu4'])->name('Yage');
Route::get('HistoriaPut4', [HistoryController::class, 'HistoriaPut4'])->name('Yage2');