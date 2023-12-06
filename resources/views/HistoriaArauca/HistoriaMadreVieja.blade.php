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
    <h1>Madre Vieja</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/bufeo.png') }}"  alt="">
    </figure>
    <p>La leyenda de La Madre vieja, es un relato muy arraigado en la tradición oral campesina del departamento de Arauca, Colombia. La Madre vieja es comúnmente representada como una descomunal serpiente de 7 cabezas que habita el humedal o Madrevieja situada en el municipio de Arauca, Arauca.

Cuenta también la tradición primitivo-popular de Arauca que en el preciso momento que la serpiente se remueva invirtiendo su posición, es decir, cuando su enorme cabeza ocupe el lugar que tenía la cola, se produce el hundimiento de la Iglesia de Santa Bárbara de Arauca. Para sacar la serpiente, hay que tirarle un Viernes Santo un ramal de anzuelos con siete niños sin bautizo.

</p>
        <a href="{{route('Felipe2')}}"><img id="flecha" src="{{ asset('local_storage/img/derecha.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>
