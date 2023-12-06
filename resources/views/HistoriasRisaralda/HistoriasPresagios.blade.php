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
    <h1>Presagios</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/cresta.png') }}"  alt="">
    </figure>
    <p>la mariposa de la muerte. Se cree que cuando una mariposa oscura se posa en un sitio del hogar es porque anuncia que alguien cercano va a fallecer.


En diciembre se hace la prueba de los huevos, que indica si van a viajar en el nuevo año y qué otras cosas depara el destino. Además la prueba de las tres papas que se colocan debajo de la cama y a las 12 se sacan, si la escogida es la totalmente pelada, es porque la situación económica será mala, si es a medio pelar va estar regular de dinero y si escoge la que no se ha pelado es porque el año siguiente será muy bueno en la parte financiera. Para tener prosperidad se utilizan las espigas de trigo y la flor del ajo. Se acostumbra comer las doce uvas a las 12 de la noche, el 31 de diciembre. Las señoras creen que van a tener una sorpresa agradable cuando ven un carro con un trasteo.
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
