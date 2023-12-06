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
    <h1>El Bari</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/cupurita.png') }}"  alt="">
    </figure>
    <p> Cuentan los que saben contar historias, que en el principio los indígenas no conocían ni el dolor, ni la tristeza, ni la muerte, hasta que apareció un espíritu maligno con cuerpo de mujer y cabeza de pájaro, se apoderó de la mujer indígena y ella llena de este espíritu del mal, tomó a su hijo y lo estranguló. Grande fue la tristeza del hombre indígena cuando vio que a sus tierras había llegado el dolor, la tristeza y la muerte. Por esto tomó a esta mujer y la abrió con su cuchillo, para sacarle el espíritu del mal y no lo encontró, por que el espíritu no es de palo ni de carne ni de hueso, pero tenía una solución purificarla con el fuego sagrado. </p>
    
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

