<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css_index/EThistoria.css')}}">

</head>
<body>

<header>
<a href="{{route('inicio')}}" class="logo">
    <img src="{{ asset('local_storage/img/logo.png') }}"   alt="">
    <h2>La Mágica Colombia</h2>
</a>


<nav>
    <a href="{{route('subirhistoria')}}" class="link">¿Quieres subir tú historia?</a>
    <a href="{{route('info')}}" class="link">¿Quienes Somos?</a>
    <a href="{{route('contac')}}" class="link">Contacto</a>
    <a href="{{route('registro')}}" class="link">Registráte</a>
</nav>
</header>

<div class="titulo">
   <h1>DEPARTAMENTO ANTIOQUIA</h1>
</div>

<div class="container">
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/beshhio.jpg') }}" >
        </figure>
        <div class="contenido">
            <h3>Jinete Sin Jamarro</h3>
            <p>Conocido en otras zonas de Colombia como El Sombrerón, se trata de una figura oscura que se muestra habitualmente por la noche.
En Antioquia se le describe normalmente como un hombre de gran estatura, delgado, que oculta su calavera bajo un sombrero negro de ala ancha.
El mito cuenta que viaja acompañado de un caballo negro como la noche más oscura. Cuando se encuentra en los caminos hombres que se están dejando llevar por el alcohol, el juego u otros vicios, los persigue entre amenazas arrojadas a gritos..</p>
            <a href="{{route('jamarro')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/eanim.jpg') }}" >
        </figure>
        <div class="contenido">
            <h3>El Anima Sola</h3>
            <p>El Mundo del sur del Tolima para los Indígenas según ese mito es así:
Dos relieves montañosos y entre ellos el río Magdalena. Del río sale el arco iris que va a las montañas. El mundo todo está flotando sobre el agua y esta sostenido por tres columnas, este mundo acuático, el agua, está dividido en dos partes: Unas aguas profundas donde moran los gigantes del principio del mundo y unas aguas superiores divididas en dos partes. En una está el mohán o poira, que es el dueño del pescado y en otros sitios están los viejos indígenas, los indígenas muertos, los antepasados y una gente rarísima, la gente sin rabito. De ahí hacia arriba viene la tierra</p>
            <a href="{{route('animaso')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/cauca/Caquiona/imagen 6.jpg') }}" >
        </figure>
        <div class="contenido">
            <h3>La virgen de Caquiona</h3>
            <p>La virguen de cquiona se caracteriza por destacar la tradicion paisa de  Todos la llaman “Mamá Concia”. representan como una mujer que padece tormentos en el purgatorio y recorre los caminos con las manos atadas con cadenas, asustando a todas las personas que se crucen en su camino.
Desde luegDicen los abuelos que ella se apareció en una montaña grande que era muy pendiente.</p>
            <a href="{{route('leyenda')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/horaki.jpg') }}" >
        </figure>
        <div class="contenido">
            <h3>Hojaraki</h3>
            <p>Una figura generalmente amable que habita en el bosque. Al igual que la Madremonte, su leyenda cambia de nombre en diversas regiones del mundo, pero conserva ciertas características entre las que se encuentran su aspecto cubierto por el musgo y el verdín y su carácter voluble.

Puede ayudar a cruzar el bosque a salvo a los que le caen en gracia, pero suele hacer que los humanos se pierdan por el bosque que guarda.</p>
            <a href="{{route('horaki')}}">Leer más</a>

        </div>

    </div>

</div>
<div class="container">
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/cauca/Caquiona/imagen 4.jpg') }}" >
        </figure>
        <div class="contenido">
            <h3>La virgen de Caquiona</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla asperiores nam repellendus dolor itaque, delectus fuga debitis corporis facilis veritatis.</p>
            <a href="{{route('leyenda')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/cauca/Caquiona/imagen 5.jpg') }}" >
        </figure>
        <div class="contenido">
            <h3>La virgen de Caquiona</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla asperiores nam repellendus dolor itaque, delectus fuga debitis corporis facilis veritatis.</p>
            <a href="{{route('leyenda')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/cauca/Caquiona/imagen 6.jpg') }}" >
        </figure>
        <div class="contenido">
            <h3>La virgen de Caquiona</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla asperiores nam repellendus dolor itaque, delectus fuga debitis corporis facilis veritatis.</p>
            <a href="blade.php">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/cauca/Caquiona/imagen 7.jpg') }}" >
        </figure>
        <div class="contenido">
            <h3>La virgen de Caquiona</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla asperiores nam repellendus dolor itaque, delectus fuga debitis corporis facilis veritatis.</p>
            <a href="blade.php">Leer más</a>

        </div>

    </div>
    <p></p>

</div>


