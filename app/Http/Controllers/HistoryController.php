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
  //////////////////////////////AMAZONAS//////////////////////////////

  public function HistoriaA1 (){
    return view('HistoriasAmazonas.HistoriaBufeo');
  }
  public function HistoriaA2 (){
    return view('HistoriasAmazonas.HistoriaChuya');
  }
  public function HistoriaA3 (){
    return view('HistoriasAmazonas.HistoriaCreacion');
  }
  public function HistoriaAm3 (){
    return view('HistoriasAmazonas.HistoriaCreacion2');
  }
  public function HistoriaA4 (){
    return view('HistoriasAmazonas.HistoriaCupurita');
  }

  //////////////////////////////BOYACA////////////////////////////////
  public function HistoriaB1 (){
    return view('HistoriasBoyaca.HistoiraPajaro');
  }
  public function HistoriaB2 (){
    return view('HistoriasBoyaca.HistoriaCaciqueR');
  }
  public function HistoriaB3 (){
    return view('HistoriasBoyaca.HistoriaElperro');
  }
  public function HistoriaB4 (){
    return view('HistoriasBoyaca.HistoriaGorancha');
  }
  public function HistoriaBo4 (){
    return view('HistoriasBoyaca.HistoriaGoroncha2');
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
  //////////////////////////////CAUCA/////////////////////////////////
  public function HistoriaCau1 (){
    return view('HistoriasCaqueta.HistoriaElencanto');
  }
  public function HistoriaCau2 (){
    return view('HistoriasCaqueta.HistoriaElencanto');
  }
  public function HistoriaCA2 (){
    return view('HistoriasCaqueta.HistoriaElencanto');
  }
  public function HistoriaCau3 (){
    return view('HistoriasCaqueta.HistoriaElencanto');
  }
  public function HistoriaCA3 (){
    return view('HistoriasCaqueta.HistoriaElencanto');
  }
  public function HistoriaCau4 (){
    return view('HistoriasCaqueta.HistoriaElencanto');
  }
  //////////////////////////////CHOCO/////////////////////////////////
  public function HistoriaCho1 (){
    return view('HistoriasChoco.Historiaindio');
  }
  public function HistoriaCho2 (){
    return view('HistoriasChoco.HistoriaMohan');
  }
  public function HistoriaCho2a (){
    return view('HistoriasChoco.HistoriaMohan2');
  }
  public function HistoriaCho3 (){
    return view('HistoriasChoco.HistoriaMuelona');
  }
  public function HistoriaCho3a (){
    return view('HistoriasChoco.HistoriaMuelona2');
  }
  public function HistoriaCho4 (){
    return view('HistoriasChoco.HitoriaAnima');
  }
  //////////////////////////////CORDOBA////////////////////////////////

 public function HistoriaCor1 (){
    return view('HistoriasCordoba.HistoriaAguerosCo');
  }
  
  public function HistoriaCor2 (){
    return view('HistoriasCordoba.HistoriaAguja');
  }
  public function HistoriaCor3 (){
    return view('HistoriasCordoba.HistoriaAnimes');
  }
  public function HistoriaCor4 (){
    return view('HistoriasCordoba.HistoriaElGriton');
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

////////////////////////////////GUAINIA///////////////////////////////
public function HistoriaG1 (){
  return view('HistoriasGuainia.Historiaflor');
}
public function HistoriaGu1 (){
  return view('HistoriasGuainia.Historiaflor2');
}
public function HistoriaG2 (){
  return view('HistoriasGuainia.Historiaindia');
}
public function HistoriaGu2 (){
  return view('HistoriasGuainia.Historiaindia2');
}
public function HistoriaG3 (){
  return view('HistoriasGuainia.HistoriaSoto');
}
////////////////////////////////GUAVIARE/////////////////////////////

public function HistoriaGv1 (){
  return view('HistoriasGuaviare.HistoriaCompadre');
}
public function HistoriaGv2 (){
  return view('HistoriasGuaviare.HistoriaCrea');
}
public function HistoriaGuv2 (){
  return view('HistoriasGuaviare.HistoriaCrea2');
}
public function HistoriaGv3 (){
  return view('HistoriasGuaviare.Historiamotorista');
}
public function HistoriaGv4 (){
  return view('HistoriasGuaviare.HistoriaYurupari');
}
public function HistoriaGuv4 (){
  return view('HistoriasGuaviare.HistoriaYuripari2');
}
///////////////////////////////HUILA/////////////////////////////////

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
////////////////////////////////MAGDALENA/////////////////////////////

public function HistoriaMa1 (){
  return view('HistoriasMagdalena.HistoriaBramadora');
}
public function HistoriaMa2 (){
  return view('HistoriasMagdalena.HistoriaCaiman');
}
public function HistoriaMa2a (){
  return view('HistoriasMagdalena.HistoriaCaiman2');
}
public function HistoriaMa3 (){
  return view('HistoriasMagdalena.HistoriaCasa');
}
public function HistoriaMa4 (){
  return view('HistoriasMagdalena.HistoriaPata');
}
public function HistoriaMa4a (){
  return view('HistoriasMagdalena.HistoriaPata2');
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
  //////////////////////////////NARIÑO////////////////////////////////
  public function HistoriaÑ1 (){
    return view('HistoriasNariño.HistoriaCueche');
  }
  public function HistoriaÑa1 (){
    return view('HistoriasNariño.HistoriaCueche2');
  }
  public function HistoriaÑ2 (){
    return view('HistoriasNariño.Historialaguna');
  }
  public function HistoriaÑa2 (){
    return view('HistoriasNariño.Historialaguna2');
  }
  public function HistoriaÑ3 (){
    return view('HistoriasNariño.Historiapadre');
  }
  public function HistoriaÑ4 (){
    return view('HistoriasNariño.HistoriaViuda');
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
  //////////////////////////////SUCRE////////////////////////////////
  public function HistoriaSu1 (){
    return view('HistoriasSucre.HistoriaCorcovao');
  }
  public function HistoriaSu2 (){
    return view('HistoriasSucre.HistoriaJuan');
  }
  //////////////////////////////VALLE DEL CAUCA//////////////////////
  public function HistoriaVll1 (){
    return view('HistoriasValledelcauca.HistoriaBurizaco');
  }
  public function HistoriaVll2 (){
    return view('HistoriasValledelcauca.HistoriaMano');
  }
  public function HistoriaVll3 (){
    return view('HistoriasValledelcauca.HistoriaTunda');
  }
  //////////////////////////////VAUPES///////////////////////////////
  public function HistoriaVa1 (){
    return view('HistoriasVaupes.Historiaagueros');
  }
  public function HistoriaVau1 (){
    return view('HistoriasVaupes.Historiaagueros2');
  }
  public function HistoriaVa2 (){
    return view('HistoriasVaupes.HistoriaDanta');
  }
  public function HistoriaVa3 (){
    return view('HistoriasVaupes.HistoriaSol');
  }
  public function HistoriaVau3 (){
    return view('HistoriasVaupes.HistoriaSol2');
  }
  public function HistoriaVau4 (){
    return view('HistoriasVaupes.Historiasol3');
  }
  public function HistoriaVau5 (){
    return view('HistoriasVaupes.HistoriaSol4');
  }
  public function HistoriaVa4 (){
    return view('HistoriasVaupes.HistoriaVaupes');
  }
  public function HistoriaVau6 (){
    return view('HistoriasVaupes.Historiavaupes2');
  }
  public function HistoriaVau7 (){
    return view('HistoriasVaupes.Historiavaupes3');
  }
  //////////////////////////////VICHADA//////////////////////////////
  public function HistoriaV1 (){
    return view('HistoriasVichada.HistoriaLaja');
  }
  public function HistoriaV2 (){
    return view('HistoriasVichada.HistoriaLeko');
  }
////////////////////////////// ATLANTICO //////////////////////////
public function HistoriaATL1 (){
  return view('HistoriasAtlantico.HistoriaElLucio');
}
public function HistoriaATL2 (){
  return view('HistoriasAtlantico.HistoriaMamita');
}
public function HistoriaATL3 (){
  return view('HistoriasAtlantico.HistoriaMohana');
}
public function HistoriaATL4 (){
  return view('HistoriasAtlantico.HistoriaLaHoraSantaMarta');
}

/////////////////////////// LA GUAJIRA //////////////////////////////

public function HistoriaLG1 (){
  return view('HistoriasLaGuajira.HistoriaFranciscoElHombre');
}
public function HistoriaLG2 (){
  return view('HistoriasLaGuajira.HistoriaKeralia');
}
public function HistoriaLG3 (){
  return view('HistoriasLaGuajira.HistoriaElJinete');
}
public function HistoriaLG4 (){
  return view('HistoriasLaGuajira.HistoriaSerraniaMacuira');
}

///////////////////////////// ARAUCA //////////////////////////////

public function HistoriaAR1 (){
  return view('HistoriasArauca.HistoriaLeyendaSayona');
}
public function HistoriaAR2 (){
  return view('HistoriaArauca.HistoriaMadreVieja');
}
public function HistoriaAR3 (){
  return view('HistoriaArauca.HistoriaSupersticiones');
}
public function HistoriaAR4 (){
  return view('HistoriasArauca.HistoriaAgueros');
}
////////////////////// BOLIVAR ///////////////////////
public function HistoriaBV1 (){
  return view('HistoriaBolivar.HistoriaElAnimero');
}
public function HistoriaBV2 (){
  return view('HistoriaBolivar.HistoriaElNazarenoDeOtroMundo');
}
public function HistoriaBV3 (){
  return view('HistoriaBolivar.HistoriaElPozoDeNoria');
}
public function HistoriaBV4 (){
  return view('HistoriasBolivar.HistoriaCaballoCojo');
}

////////////////////// CALDAS //////////////////////////

public function HistoriaCD1 (){
  return view('HistoriaCaldas.HistoriaPatetarro');
}
public function HistoriaCD2 (){
  return view('HistoriaCaldas.HistoriaLaMadreMonte');
}
public function HistoriaCD3 (){
  return view('HistoriaCaldas.HistoriaPataSola');
}
public function HistoriaCD4 (){
  return view('HistoriasCaldas.HistoriaAguersticiones');
}

/////////////////////////// CESAR //////////////////////

public function HistoriaCS1 (){
  return view('HistoriaCesar.HistoriaLeyendaVallenata');
}
public function HistoriaCS2 (){
  return view('HistoriaCesar.HistoriaEspantosAparecidos');
}
public function HistoriaCS3 (){
  return view('HistoriaCesar.HistoriaLaCuevaLosSieteCaballos');
}
public function HistoriaCS4 (){
  return view('HistoriasCesar.HistoriaLaSeiva');
}

//////////////// NORTE DE SANTANDER /////////////////////7

public function HistoriaNST1 (){
  return view('HistoriaNorteSantander.HistoriaLeyendaVallenata');
}
public function HistoriaNST2 (){
  return view('HistoriaNorteSantander.HistoriaEspantosAparecidos');
}
public function HistoriaNST3 (){
  return view('HistoriaNorteSantander.HistoriaEspantoEnElPueblo');
}
public function HistoriaNST4 (){
  return view('HistoriasNorteSantander.HistoriaElBorracho');
}
////////////////// QUINDIO ////////////////////////////

public function HistoriaQN1 (){
  return view('HistoriaQuindio.HistoriasGruposAncestrales');
}
public function HistoriaQN2 (){
  return view('HistoriaQuindio.HistoriaMamont');
}
public function HistoriaQN3 (){
  return view('HistoriaQuindio.HistoriaHojarasquinDelMonte');
}
public function HistoriaQN4 (){
  return view('HistoriasQuindio.HistoriasMas');
}

//////////////// RISARALDA  ////////////////////

public function HistoriaRL1 (){
  return view('HistoriaRisaralda.HistoriasChinchia');
}
public function HistoriaRL2 (){
  return view('HistoriaRisaralda.HistoriaSantaRosa');
}
public function HistoriaRL3 (){
  return view('HistoriaRisaralda.HistoriaAguero');
}
public function HistoriaRL4 (){
  return view('HistoriasRisaralda.HistoriaPresagio');
}

/////////////// TOLIMA /////////////////////////////
public function HistoriaTL1 (){
  return view('HistoriaTolima.HistoriaElLuango');
}
public function HistoriaTL2 (){
  return view('HistoriaTolima.HistoriaTolimences');
}
public function HistoriaTL3 (){
  return view('HistoriaTolima.HistoriaMedicas');
}
public function HistoriaTL4 (){
  return view('HistoriaTolima.HistoriaIndigenas');
}

//////////// ANTIOQUIA /////////////

public function HistoriaAN1 (){
  return view('HistoriaAntioquia.HistoriaElJineteSinJamarro');
}
public function HistoriaAN2 (){
  return view('HistoriaAntioquia.HistoriaAnimaSola');
}
public function HistoriaAN3 (){
  return view('HistoriaAntioquia.HistoriaMedicas');
}
public function HistoriaAN4 (){
  return view('HistoriaAntioquia.HistoriaHojaraki');
}

}



