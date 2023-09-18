<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartamentUserController extends Controller
{
  public function Cundinamarca()
  {
    return view('../Departamentos/tarjetaCundinamarca');
  }

  public function Atlantico()
  {
    return view('tarjetaAtlantico');
  }
  public function Santander()
  {
    return view('tarjetaSantander');
  }
  public function Antioquia()
  {
    return view('tarjetaAntioquia');
  }
  public function ValleDelCauca()
  {
    return view('tarjetaValleDelCauca');
  }
  public function Risaralda()
  {
    return view('tarjetaRisaralda');
  }
  public function Caldas()
  {
    return view('tarjetaCaldas');
  }
  public function Quindio()
  {
    return view('tarjetaQuindio');
  }
  public function Boyaca()
  {
    return view('tarjetaBoyaca');
  }
  public function Casanare()
  {
    return view('tarjetaCasanare');
  }
  public function NorteDeSantander()
  {
    return view('tarjetaNorteSantander');
  }
  public function Bolivar()
  {
    return view('tarjetaBolivar');
  }
  public function Tolima()
  {
    return view('tarjetaTolima');
  }
  public function Meta()
  {
    return view('tarjetaMeta');
  }
  public function Huila()
  {
    return view('tarjetaHuila');
  }
  public function Amazonas()
  {
    return view('tarjetaAmazonas');
  }
  public function Arauca()
  {
    return view('tarjetaArauca');
  }
  public function Caqueta()
  {
    return view('tarjetaCaqueta');
  }
  public function Cauca()
  {
    return view('tarjetaCauca');
  }
  public function Cesar()
  {
    return view('tarjetaCesar');
  }
  public function Choco()
  {
    return view('tarjetaChoco');
  }
  public function Cordoba()
  {
    return view('tarjetaCordoba');
  }
  public function Guainia()
  {
    return view('tarjetaGuainia');
  }
  public function Guajira()
  {
    return view('tarjetaGuajira');
  }
  public function Guaviare()
  {
    return view('tarjetaGuaviare');
  }
  public function Magdalena()
  {
    return view('tarjetaMagdalena');
  }
  public function Putumayo()
  {
    return view('tarjetaPutumayo');
  }
  public function Sucre()
  {
    return view('tarjetaSucre');
  }

  public function Vichada()
  {
    return view('tarjetaVichada');
  }
  public function Vaupes()
  {
    return view('tarjetaVaupes');
  }
}
