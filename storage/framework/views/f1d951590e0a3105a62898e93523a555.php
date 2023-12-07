<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('css_index/EThistoria.css')); ?>">

</head>
<body>

<header>
<a href="<?php echo e(route('inicio')); ?>" class="logo">
    <img src="<?php echo e(asset('local_storage/img/logo.png')); ?>"   alt="">
    <h2>La Mágica Colombia</h2>
</a>


<nav>
    <a href="<?php echo e(route('subirhistoria')); ?>" class="link">¿Quieres subir tú historia?</a>
    <a href="<?php echo e(route('info')); ?>" class="link">¿Quienes Somos?</a>
    <a href="<?php echo e(route('contac')); ?>" class="link">Contacto</a>
    <a href="<?php echo e(route('registro')); ?>" class="link">Registráte</a>
</nav>
</header>

<div class="titulo">
   <h1>DEPARTAMENTO CALDAS</h1>
</div>

<div class="container">
    <div class="tarjetas">
        <figure>
            <img src="<?php echo e(asset('local_storage/img/pataentarro.jpg')); ?>" >
        </figure>
        <div class="contenido">
            <h3>Patetarro</h3>
            <p>Leyenda de las zonas mineras de Antioquia, Chocó, Cundinamarca y otras regiones de Colombia. Algunos mineros dicen que han visto a un hombre y a una mujer andando juntos. El hombre tiene un cuerpo descomunalmente grande y peludo, le falta una pierna de la rodilla para abajo y  la ha reemplazado con un palo de guadua, que a su vez parece un tarro y usa para hacer sus necesidades. Cuando está lleno de inmundicia, derrama el tarro en algo sembrado y allí nace la gusanera, y todas las plagas. Como consecuencia, las cosechas se dañan. </p>
            <a href="<?php echo e(route('patetarru')); ?>">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="<?php echo e(asset('local_storage/img/mamont.jpg')); ?>" >
        </figure>
        <div class="contenido">
            <h3>La Madre Monte</h3>
            <p>Cuenta la leyenda que los campesinos y leñadores que la han visto, dicen que es una señora corpulenta, elegante, vestida de hojas frescas y musgo verde, mitad mujer y mitad monte, con un sombrero cubierto de hojas y plumas verdes, que no permite ver su rostro.Algunos aseguran escuchar sus gritos y bramidos en noches oscuras y de tempestad peligrosa. 

Vive en sitios enmarañados, con árboles frondosos, alejada del ruido de la civilización y en los bosques cálidos, con animales peligrosos…Los campesinos cuentan que cuando la Madre monte se baña en las cabeceras de los ríos, estos se enturbian y se desbordan, causan inundaciones, borrascas fuertes, que ocasionan daños espantosos
</p>
            <a href="<?php echo e(route('mamonte')); ?>">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="<?php echo e(asset('local_storage/img/jajaja.jpg')); ?>" >
        </figure>
        <div class="contenido">
            <h3>Pata Sola</h3>
            <p>La leyenda de La Pata Sola, es un relato muy arraigado en la tradición oral de los campesinos colombianos. La Pata Sola es comúnmente representada como el alma en pena de una bella mujer que cuenta con una sola pierna, de mirada hipnotizante y provocativa silueta, que fue condenada a vagar por montes, valles y llanuras por deshonrar a sus hijos e irrespetar a su matrimonio.</p>
            <a href="<?php echo e(route('palone')); ?>">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="<?php echo e(asset('local_storage/img/cositas.jpg')); ?>" >
        </figure>
        <div class="contenido">
            <h3>Aguersticiones</h3>
            <p>Cuando canta un cirirí (pajaro), se dice que alguien está “en agonías” o quien lo escucha va a ser testigo de una desgracia. 
Cuando en un lugar se ven luces de color azul en las noches se dice que en ese lugar hay un entierro.
En relación con los sueños se dice que: soñarse con serpientes es estar metido en enredos, con agua es buena suerte.
Cuando hay una persona indeseada en la casa, se acostumbra parar la escoba detrás de la puerta para que se vaya.
Regar sal dentro de una casa es de mala suerte. 
Romper un espejo, es señal de mala suerte
</p>
            <a href="<?php echo e(route('aguerque')); ?>">Leer más</a>

        </div>

    </div>

</div>
<div class="container">
    <div class="tarjetas">
        <figure>
            <img src="<?php echo e(asset('local_storage/img/cauca/Caquiona/imagen 4.jpg')); ?>" >
        </figure>
        <div class="contenido">
            <h3>La virgen de Caquiona</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla asperiores nam repellendus dolor itaque, delectus fuga debitis corporis facilis veritatis.</p>
            <a href="<?php echo e(route('leyenda')); ?>">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="<?php echo e(asset('local_storage/img/cauca/Caquiona/imagen 5.jpg')); ?>" >
        </figure>
        <div class="contenido">
            <h3>La virgen de Caquiona</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla asperiores nam repellendus dolor itaque, delectus fuga debitis corporis facilis veritatis.</p>
            <a href="<?php echo e(route('leyenda')); ?>">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="<?php echo e(asset('local_storage/img/cauca/Caquiona/imagen 6.jpg')); ?>" >
        </figure>
        <div class="contenido">
            <h3>La virgen de Caquiona</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla asperiores nam repellendus dolor itaque, delectus fuga debitis corporis facilis veritatis.</p>
            <a href="blade.php">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="<?php echo e(asset('local_storage/img/cauca/Caquiona/imagen 7.jpg')); ?>" >
        </figure>
        <div class="contenido">
            <h3>La virgen de Caquiona</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla asperiores nam repellendus dolor itaque, delectus fuga debitis corporis facilis veritatis.</p>
            <a href="blade.php">Leer más</a>

        </div>

    </div>
    <p></p>

</div>


<?php /**PATH C:\xampp\htdocs\Magica_colombia\resources\views////Departamentos/tarjetaCaldas.blade.php ENDPATH**/ ?>