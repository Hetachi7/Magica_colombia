<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartamentUserController extends Controller
{
  public function Cundinamarca (){
return view ('tarjetacundinamarca');    
  }

  public function Atlantico(){
    return view ('tarjetaAtlantico');
  }
  public function Santander (){
    return view ('tarjetaSantander');
  }
  public function Antioquia (){
    return view ('tarjetaAntioquia');
  }
  public function ValleDelCauca(){
    return view ('tarjetaValleDelCauca');
  }
  public function Risaralda(){
    return view ('tarjetaRisaralda');
  }
  public function Caldas (){
    return view ('tarjetaCaldas');
  }
  public function Quindio (){
    return view ('tarjetaQuindio');
  }
  public function Boyaca(){
    return view ('tarjetaBoyaca');
  }
  public function Casanare (){
    return view ('tarjetaCasanare');
  }
  public function NorteDeSantander (){
    return view ('tarjetaNorteSantander');
  }
  public function Bolivar (){
    return view ('tarjetaBolivar');
  }
  public function Tolima (){
    return view ('tarjetaTolima');
  }
  public function Meta (){
    return view ('tarjetaMeta');
  }
  public function Huila (){
    return view ('tarjetaHuila');
  }
}
