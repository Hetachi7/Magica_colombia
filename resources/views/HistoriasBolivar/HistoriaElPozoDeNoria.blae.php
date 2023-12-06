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
    <h1>El Pozo De Noria</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/cupurita.png') }}"  alt="">
    </figure>
    <p>anastasia Vanegas ya le ha echado el cuento del Pozo de la Noria a más de un periodista, ella espera que de tanto repetirse la historia en periódicos y documentales gringos, suecos, italianos, mexicanos y españoles, alguien se la crea y, por fin, le compren su casa junto con el antiguo y misterioso pozo que hay en el traspatio de la propiedad, la que adquirió hace 22 años pagando 27 mil pesos.

Mientras no me den lo que necesito, yo sigo siendo la dueña y señora del Pozo de la Noria , dice la anciana, que ya pasa de los setenta, y comienza a hacer un recuento de la cantidad de repoteros que han llegado a Santa Cruz de Mompós, en busca de material para sus historias, y han terminado entrevistándola a ella.

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