<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
  public function Tarjetas(){
    return view('tarjetashistoria');
  }


  public function Leyenda (){
return view('leyenda');

  }
  public function DosLeyendas (){

    return view('dosleyenda');
  }
  //////////////////////////////CAQUETA///////////////////////////////
  
  public function HistoriaCaq1 (){
    return view('HistoriasCaqueta.HistoriaElencanto');
  }
  public function HistoriaCaq2 (){
    return view('HistoriasCaqueta.HistoriaLamula');
  }
  public function HistoriaCaq3 (){
    return view('HistoriasCaqueta.HistoriaPollomalo');
  }
  public function HistoriaCaq4 (){
    return view('HistoriasCaqueta.HistoriaTunjodeoro');
  }

  //////////////////////////////CASANARE//////////////////////////////
  public function HistoriaCas1 (){
    return view('HistoriasCasanare.HistoriaLaBoladefuego');
  }
  public function HistoriaCasa1 (){
    return view('HistoriasCasanare.HistoriaLaBoladefuego2');
  }
  public function Historiacas2 (){
    return view('HistoriasCasanare.HistoriaLachanzafelipe');
  }
  public function Historiacasa2 (){
    return view('HistoriasCasanare.HistoriaLachanzafelipe2');
  }
  public function HistoriaCas3 (){
    return view('HistoriasCasanare.HistoriaRompellano');
  }
  public function HistoriaCasa3 (){
    return view('HistoriasCasanare.HistoriaRompellano2');
  }
  public function HistoriaCas4 (){
    return view('HistoriasCasanare.HistoriaSupersticiones');
  }
  public function HistoriaCasa4 (){
    return view('HistoriasCasanare.HistoriasSupersticiones2');
  }
  //////////////////////////////CUNDINAMARCA//////////////////////////

  public function HistoriaC1 (){
    return view('HistoriasCundinamarca.Historia3Brujas');
  }
  public function HistoriaCu1 (){
    return view('HistoriasCundinamarca.Historia3Brujas2');
  }
  public function HistoriaC2 (){
    return view('HistoriasCundinamarca.HistoriaCasadavid');
  }
  public function HistoriaCu2 (){
    return view('HistoriasCundinamarca.HistoriaCasadavid2');
  }
  public function HistoriaC3 (){
    return view('HistoriasCundinamarca.HitoriaDamaverde');
  }
  public function HistoriaCu3 (){
    return view('HistoriasCundinamarca.HistoriaDamaverde2');
  }


  //////////////////////////////HUILA/////////////////////////////////

  public function HistoriaH1 (){
    return view('HistoriasHuila.HistoriaGuiatana');
  }
  public function HistoriaHu1 (){
    return view('HistoriasHuila.HistoriaGuitana2');
  }
  public function HistoriaH2 (){
    return view('HistoriasHuila.HistoriaSombreron');
  }
  public function HistoriaHu2 (){
    return view('HistoriasHuila.HistoriaSombreron2');
  }
  public function HistoriaH3 (){
    return view('HistoriasHuila.HistoriaTaitapuro');
  }

  //////////////////////////////Meta//////////////////////////////////
  public function HistoriaM1 (){
    return view('HistoriasMeta.HistoriaLaCandileja');
  }
  public function HistoriaM2 (){
    return view('HistoriasMeta.HistoriaDelSilbon');
  }
  public function HistoriaMs2 (){
    return view('HistoriasMeta.HistoriaDelSilbon2');
  }
  public function HistoriaM3 (){
    return view('HistoriasMeta.HistoriaJuanMachete');
  }
  public function HistoriaMs3 (){
    return view('HistoriasMeta.HistoriaJuanMachete2');
    
  }
  public function HistoriaM4 (){
    return view('HistoriasMeta.HistoriaElRezoDelPesacdo');
  }
  //////////////////////////////PUTUMAYO//////////////////////////////
  public function HistoriaPu1 (){
    return view('HistoriasPutumayo.HistoriaChumbelo');
  }
  public function HistoriaPu2 (){
    return view('HistoriasPutumayo.HistoriaDiabloVirgen');
  }
  public function HistoriaPu3 (){
    return view('HistoriasPutumayo.HistoriaFueteadora');
  }
  public function HistoriaPut3 (){
    return view('HistoriasPutumayo.HistoriaFueteadora2');
  }
  public function HistoriaPu4 (){
    return view('HistoriasPutumayo.HistoriaYage');
  }
  public function HistoriaPut4(){
    return view('HistoriasPutumayo.HistoriaYage2');
  }

}

