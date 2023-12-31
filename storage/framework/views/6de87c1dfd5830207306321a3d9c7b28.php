<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('css_index/Equiensomos.css')); ?>">
</head>
<body>

<header>
<a href="<?php echo e(route('inicio')); ?>" class="logo">
    <img src="<?php echo e(asset('local_storage/img/logo.png')); ?>" alt="">
    <h2>La Mágica Colombia</h2>
</a>


<nav>
    <a href="<?php echo e(route('subirhistoria')); ?>" class="link">¿Quieres subir tú historia?</a>
    <a href="<?php echo e(route('info')); ?>" class="link">¿Quienes Somos?</a>
    <a href="<?php echo e(route('contac')); ?>" class="link">Contacto</a>
    <a href="<?php echo e(route('registro')); ?>" class="link">Registráte</a>
</nav>
</header>

<div class="fonhis1">
    <img src="<?php echo e(asset('local_storage/img/fonhis1.png')); ?>"  alt="">
</div>
<div class="fonhis2">
    <img src="<?php echo e(asset('local_storage/img/fonhis2.png')); ?>"  alt="">
</div>

<div class="texto">

    <div class="pregunta"><img src="<?php echo e(asset('local_storage/img/quiensomos.png')); ?>"  id="historia"></div>

<p><h2>Somos un aplicativo creado con el fin de dar a conocer todas esas historias tradicionales, aquellos relatos que cubren nuestro hermoso
    pais colombiano. Brindando a nuestros usuarios, la capasidad de interactuar en una aplicacion destinada a las magicas historias de Colombia 
</h2></p>
<p><h1>Nuestro Logo</h1></p>

<div class="logotext">
    
<img src="<?php echo e(asset('local_storage/img/logo.png')); ?>" alt="">
</div>

<h2>Creado por Alejandro Cruz, nuestro logo está representado por una leyenda colombiana llamada "El sombrerero". 
    Y en las letras representa los colores de nuestra bandera.
</h2>





</div><?php /**PATH C:\xampp\htdocs\Magica_colombia\resources\views/quiensomos.blade.php ENDPATH**/ ?>