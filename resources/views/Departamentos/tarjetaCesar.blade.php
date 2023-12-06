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
   <h1>DEPARTAMENTO CESAR</h1>
</div>

<div class="container">
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/cauca/Caquiona/virgen.jpg') }}" >
        </figure>
        <div class="contenido">
            <h3>Leyenda Vallenata</h3>
            <p>En la leyenda de la Virgen del Rosario, Leyenda Vallenata o Fiesta del Milagro, se conjugan elementos históricos, sociológicos, fantásticos y religiosos que la distinguen como una de las tradiciones más antiguas de Valledupar y de la región. Fuentes escritas registran los sucesos históricos que inspiraron la leyenda, tales como el documento Constancia y Parte del Alzamiento de los Tupes contra la Ciudad de Valle de Upar, en el cual Sancho de Camargo, Escribano de Gobernación en la Provincia de Santa Marta, en 1582, confirma las declaraciones del gobernador Lope de Orozco en relación con el asalto de los indios Tupes e Itotos a dicha población, ocasionando numerosas muertes y la quema de la Iglesia Mayor y el Santísimo Sacramento.</p>
            <a href="{{route('leyanta')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/cauca/Caquiona/imagen 1.jpg') }}" >
        </figure>
        <div class="contenido">
            <h3>Espantos Aparecidos</h3>
            <p> 
Cuenta la gente de antaño que en épocas de luna nueva y luna llena aparecía por las noches un caballo sin jinete, bien aperado con adornos en la cabeza de color plateado, el repicar de sus pasos recorría calles, callejones y con un resplandor que iluminaba a su paso y antes de amanecer desaparecía, en épocas pasadas no existía la luz por interconexión eléctrica, se escuchaba y se sentía en las noches muy oscuras al arrastre de un cuero seco, fétido plagado de moscas, por las calles de las poblaciones. Asustaba a borrachos, serenateros y desprevenidos transeúntes
</p>
            <a href="{{route('espantoye')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/cauca/Caquiona/imagen 2.jpeg') }}" >
        </figure>
        <div class="contenido">
            <h3>La Cueva Los Siete Caballos</h3>
            <p>Francisco Mejía decía que su padre le contaba que viniendo de su finca El Ático, hoy lugar conocido como El Chorro, trató de ocultarse José Encarnación Mejía, papá de Pacho Mejía, de unos individuos que iban a caballo; estos le preguntaron por qué se ocultaba él; le respondió que creía que eran fuerza del gobierno que se encontraban acantonados en la población de El Molino. Es de afirmar que de esta respuesta se infiere que estos señores buscaban el camino que existía en ese entonces para ir a Venezuela.

Los siete caballeros sorprendidos le preguntaron si conocía un lugar oculto donde acampar; éste los llevó a la cabecera del manantial grande, hoy río Mocho, contiguo a su finca de El Ático. Allí fueron encontrados por el cazador Simón Ramírez quien luego le comunicó a sus compañero</p>
            <a href="{{route('caballitos')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/cauca/Caquiona/imagen 3.jpg') }}" >
        </figure>
        <div class="contenido">
            <h3>La Seiva</h3>
            <p>Cuenta la historia que Pedro Nolasco Martínez, famoso acordeonero pasero, padre del gran Samuelito Martínez, tuvo un encuentro a manera de piqueria con el diablo; de la siguiente forma la relata el medico Carlos Horacio González en su libro los últimos juglares
.
        Al finalizar en El Paso la fiesta anual de San Marcos, el patrono del pueblo, se dice que Pedro   Nolasco salió en su burro con la inseparable acordeón, la tarde de 26 de abril hacia La Ceibita y, como de costumbre, animaba su camino con música, cuando de repente esos mismos cantos interpretados con singular destreza por parte del diablo poblaron todo el ambiente con su mágico sonido, iniciándose una lucha en la que iban y venían canciones sin que ninguno se diera por vencido. 
</p>
            <a href="{{route('laseiv')}}">Leer más</a>

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




