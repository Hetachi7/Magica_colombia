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
    <h1>Mamita</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/bufeo.png') }}"  alt="">
    </figure>
    <p>
    Habla de la aparición de una virgen viva en casa de Silvia Rua, tres días después de haber dado a luz en el año 1912
Según la leyenda, la señorita Rua vio una claridad en su cuarto y al despertarse vislumbró la imagen de su madre muerta en el dintel de la puerta de la habitación. “Hija mía - dijo- no temas por la claridad, soy tu madre, he venido a traerte una virgen, para que te cuide, te guarde y te acompañe, hasta que mueras”. La luz desapareció y en la mesa de noche, apareció un bustico de la Virgen de la Candelaria
La noticia se regó por todo el pueblo, convirtiéndose la casa en un santuario de la Virgen y sitio de romerías de decenas de personas buscando salud para los suyos.

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
