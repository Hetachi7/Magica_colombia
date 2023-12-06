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
    <h1>Keralia</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/cresta.png') }}"  alt="">
    </figure>
    <p>Keralia (Fuego Fatuo) es una criatura misteriosa (se puede presentar en forma de animal o persona) que surge en el enigmático departamento de la Guajira. Según se cuenta en la región, este ser ataca a los hombres y deja en cinta a las jóvenes con tan solo mirarlas.
El Keralia se presenta a las personas en forma de animal o persona. Keralia sale a media noche en las partes donde no haya vegetación, más que todo en las orillas del mar y en las salinas.
Keralia se transforma en persona al enamorarse y visita a la joven que le haya encantado. Esta queda en cinta, gracias al poder de la mirada de Keralia. Al dar a luz la joven muere, teniendo en su vientre culebras, sapos y toda clase de animales. De noche sale como si fuese la luz de un reflector. Si se encuentra con un hombre lo hace vomitar sangre y muere de inmediato.
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


