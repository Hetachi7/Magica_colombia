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
   <h1>DEPARTAMENTO ATLANTICO</h1>
</div>

<div class="container">
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/cauca/Caquiona/virgen.jpg') }}" >
        </figure>
        <div class="contenido">
            <h3>La Hora Santa Marta</h3>
            <p>En el corregimiento de Arroyo de Piedra, en el municipio de Luruaco, en el occidente del departamento del Atlántico, cuentan los abuelos, existe una leyenda que se ha transmitido de generación en generación.

Humberto Currea, pescador nacido en esta tierra, explica que en la parte norte del corregimiento, existe “una cueva muy inmensa, que antes tenía agua; y que en cualquier momento del día, aparecía, de repente, una mujer muy bonita, cabellona, que se sentaba en las piedras, junto al agua pa’ bañarse”</p>
            <a href="{{route('leyenda')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/cauca/Caquiona/imagen 1.jpg') }}" >
        </figure>
        <div class="contenido">
            <h3>El Lucio</h3>
            <p>Cuenta que existió una vez un señor negro que adicionalmente se embadurnaba con carbón y manteca y salía de noche desnudo a acechar a las damas más bonitas del pueblo y las violaba. Todos los días, desde las seis de la tarde, las niñas se encerraban en sus casas por miedo a que las acechara. El Lucio se robaba también los calderos y las ollas de las casas. El pueblo, ya cansado de la situación, se armó en cuadrillas para agarrar a Lucio pero resultó ser que él era uno de los que lideraba las cuadrillas, lógicamente esa noche no lo encontraron, de hecho, él mismo decía: “dejémoslo quieto que esa noche no sale”.</p>
            <a href="{{route('lulu')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/cauca/Caquiona/imagen 2.jpeg') }}" >
        </figure>
        <div class="contenido">
            <h3>Mamita</h3>
            <p> Habla de la aparición de una virgen viva en casa de Silvia Rua, tres días después de haber dado a luz en el año 1912
Según la leyenda, la señorita Rua vio una claridad en su cuarto y al despertarse vislumbró la imagen de su madre muerta en el dintel de la puerta de la habitación. “Hija mía - dijo- no temas por la claridad, soy tu madre, he venido a traerte una virgen, para que te cuide, te guarde y te acompañe, hasta que mueras”. La luz desapareció y en la mesa de noche, apareció un bustico de la Virgen de la Candelaria
La noticia se regó por todo el pueblo, convirtiéndose la casa en un santuario de la Virgen y sitio de romerías de decenas de personas buscando salud para los suyos.</p>
            <a href="{{route('ma')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/cauca/Caquiona/imagen 3.jpg') }}" >
        </figure>
        <div class="contenido">
            <h3>Mohana</h3>
            <p>En el corregimiento de Arroyo de Piedra, en el municipio de Luruaco, en el occidente del departamento del Atlántico, cuentan los abuelos, existe una leyenda que se ha transmitido de generación en generación.

Humberto Currea, pescador nacido en esta tierra, explica que en la parte norte del corregimiento, existe “una cueva muy inmensa, que antes tenía agua; y que en cualquier momento del día, aparecía, de repente, una mujer muy bonita, cabellona, que se sentaba en las piedras, junto al agua pa’ bañarse”</p>
            <a href="{{route('mohana')}}">Leer más</a>

        </div>

    </div>

</div>
<div class="container">
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/cauca/Caquiona/imagen 4.jpg') }}" >
        </figure>
        <div class="contenido">
            <h3>La Hora Santa Marta</h3>
            <p>En el corregimiento de Arroyo de Piedra, en el municipio de Luruaco, en el occidente del departamento del Atlántico, cuentan los abuelos, existe una leyenda que se ha transmitido de generación en generación.

Humberto Currea, pescador nacido en esta tierra, explica que en la parte norte del corregimiento, existe “una cueva muy inmensa, que antes tenía agua; y que en cualquier momento del día, aparecía, de repente, una mujer muy bonita, cabellona, que se sentaba en las piedras, junto al agua pa’ bañarse”</p>
            <a href="{{route('ladificil')}}">Leer más</a>

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


