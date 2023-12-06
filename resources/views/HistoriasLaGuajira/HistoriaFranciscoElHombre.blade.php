<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css_index/Eleyenda.css')}}">

</head>
<body>

<header>
<a href="{{route('inicio')}}" class="logo">
    <img src="{{asset('local_storage/img/logo.png')}}"  alt="">
    <h2>La Mágica Colombia</h2>
</a>


<nav>
    <a href="{{route('subirhistoria')}}" class="link">¿Quieres subir tú historia?</a>
    <a href="{{route('info')}}" class="link">¿Quienes Somos?</a>
    <a href="{{route('contac')}}" class="link">Contacto</a>
    <a href="{{route('registro')}}" class="link">Registráte</a>
</nav>
</header>

<div class="audioo">
    <h2>Música de ambiente</h2>
    <div class="ojoo">
        <img src="{{ asset('local_storage/img/ojo.gif') }}" >
    </div>
<audio  controls autoplay >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>

<div class="leyenda">
    <div id="fondoo">

    </div>
    <h1>Francisco El Hombe</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/cresta.png') }}"  alt="">
    </figure>
    <p>La leyenda de Francisco el hombre narra el enfrentamiento musical que tuvo un juglar vallenato contra el mismísimo diablo. Francisco el hombre se ha convertido en una figura mítica dentro de la cultura vallenata especialmente en el Caribe colombiano y se ha transformado en el prototipo del “juglar vallenato” en Colombia.
Cuenta la leyenda que, una noche estrellada y de luna clara Francisco el hombre se encontraba viajando en su burro como de costumbre por un camino desolado tras volver de una parranda, para hacer mas ligero y llevadero el viaje comenzó a tocar su acordeón y a entonar cantos; de pronto comenzó a escuchar como sus tonadas eran contestadas con toques de acordeón y melodías mucho mejores que las suyas, sorprendido por aquel suceso Francisco siguió tocando y cantando para no dejarse vencer en aquella contienda que había iniciado sin el proponérselo.
         </p>
    
        
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>


