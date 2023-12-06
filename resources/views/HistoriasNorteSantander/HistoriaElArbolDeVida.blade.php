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
    <h1>Aguersticiones</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/cresta.png') }}"  alt="">
    </figure>
    <p>Un árbol tan alto, tan alto que su copa traspasaba las nubes y tocaba el cielo, y tan grueso, tan grueso, que cincuenta hombres no eran capaces de abrazarlo y empezaron a empujarlo y lo empujaron con tanta fuerza, que cuando el árbol cayó la tierra se estremeció y de las entrañas del árbol brotó agua y fue así como nacieron los ríos Catatumbo y de Oro, los mares y los océanos y sus aguas ahogaron a muchos hombres del color de la ceniza, los que no pudieron traspasar esas aguas para traer más odio, ambición y guerra, tuvieron que pedirle perdón al indígena barí quien fue muchas madrugadas al río Catatumbo a lavar su corazón del odio y del rencor, para poder perdonar al hombre del color de la ceniza</p>
    
        
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>
