<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
  public function Tarjetas(){ 
    return view('tarjetahistoria');


  }

  public function Leyenda (){
return view('leyenda');

  }
  public function DosLeyendas (){

    return view('dosleyenda');
  }
}
