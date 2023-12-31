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
    <h1>Agueros</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/cupurita.png') }}"  alt="">
    </figure>
    <p>Los llaneros creen que las culebras suelen morder en la sabana en las horas en que el sol no es fuerte: hasta las 9:00 a.m. y después de las 4:00 p.m. 
Los perros aúllan o lloran cuando ven el diablo o cuando se va a morir alguien de la casa. 
La llama del fogón se agita produciendo un ruido especial cuando va a llegar visita. 
Los micos son ángeles malos que no alcanzaron a entrar al infierno y cayeron a la tierra. 
El llanero es supersticioso. Por eso cree en la mala sangre, o sea la fuerza que emana de algunas personas, casi siempre de ojos claros. Las mujeres embarazadas y los hombres que hayan tenido relaciones sexuales la noche anterior, hacen mala sangre. 
El arco iris sale de la cola de un gato escondido entre arbustos. Si alguien lo encuentra y el gato lo mira esa persona morirá, porque la carne se le irá cayendo a pedazos.. 

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

