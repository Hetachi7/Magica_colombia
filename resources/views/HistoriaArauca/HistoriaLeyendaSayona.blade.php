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
    <h1>Leyenda Sayona</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/bufeo.png') }}"  alt="">
    </figure>
    <p>
    Otro de los espantos muy nombrados es la famosa Sayona. Los abuelos contaban la historia y la gente salía viendo visiones pues los pelos se ponían de punta. La Sayona se muestra como una mujer delgada, muy elegante, alta; dicen que puede medir tres metros, larga cabellera y unas uñas como pa`rascar dormidos.
Acostumbra a presentarse a los hombres enamorados y que le son infieles a su esposa. La gente en común la considera como un símbolo castigador de la mala conducta de deslices amorosos.
Según relata uno de los abuelos, la historia va más o menos así: “resulta que yo estaba ajuntao con la abuela pero tenía amores con una muchacha que vivía como a una hora de camino y yo me volaba tarde de la noche a visitarla</p>
    
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
