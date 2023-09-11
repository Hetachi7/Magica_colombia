<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartamentUserController extends Controller
{
    public function Amazonas(){
        return view ('tarjetaAmazonas');
    }
    public function Arauca (){
        return view ('tarjetaArauca');
    }
    public function Caqueta (){
        return view ('tarjetaCaqueta');
    }
    public function Cauca (){
        return view ('tarjetaCauca');
    }
    public function Cesar (){
        return view ('tarjetaCesar');
    }
    public function Choco (){
        return view ('tarjetaChoco');
    }
    public function Cordoba (){
        return view ('tarjetaCordoba');
    }
    public function Guainia (){
        return view ('tarjetaGuiania');
    }
    public function Guajira (){
        return view ('tarjetaGuajira');
    }
    public function Guaviare (){
        return view ('tarjetaGuaviare');
    }
    public function Magdalena (){
        return view ('tarjetaMagdalena');
    }
    public function Putumayo (){
        return view ('tarjetaPutumayo');
    }
    public function Sucre (){
        return view ('tarjetaSucre');
    }

    public function Vichada(){
        return view('tarjetaVichada');
    }
    public function Vaupes(){
        return view('tarjetaVaupes');
    }
}
