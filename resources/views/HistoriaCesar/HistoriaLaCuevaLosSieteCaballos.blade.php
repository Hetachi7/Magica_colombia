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
    <h1>La Cuevo Los Siete Caballos</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/cresta.png') }}"  alt="">
    </figure>
    <p>Francisco Mejía decía que su padre le contaba que viniendo de su finca El Ático, hoy lugar conocido como El Chorro, trató de ocultarse José Encarnación Mejía, papá de Pacho Mejía, de unos individuos que iban a caballo; estos le preguntaron por qué se ocultaba él; le respondió que creía que eran fuerza del gobierno que se encontraban acantonados en la población de El Molino. Es de afirmar que de esta respuesta se infiere que estos señores buscaban el camino que existía en ese entonces para ir a Venezuela.

Los siete caballeros sorprendidos le preguntaron si conocía un lugar oculto donde acampar; éste los llevó a la cabecera del manantial grande, hoy río Mocho, contiguo a su finca de El Ático. Allí fueron encontrados por el cazador Simón Ramírez quien luego le comunicó a sus compañero
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
