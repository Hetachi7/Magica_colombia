<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('css_index/Econtacto.css')); ?>">

</head>
<body>

<header>
<a href="<?php echo e(route('inicio')); ?>" class="logo">
    <img src="<?php echo e(asset('local_storage/img/bienvenido.png')); ?>"  alt="">
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

 <a href="#"><img src="<?php echo e(asset('local_storage/img/facebook.png')); ?>"  ></a>

 <a href="#"> <img src="<?php echo e(asset('local_storage/img/instagram.png')); ?>" ></a>

 <a href="#"><img src="<?php echo e(asset('local_storage/img/gmail.png')); ?>" ></a>





</div><?php /**PATH C:\xampp\htdocs\Magica_colombia\resources\views/Contacto.blade.php ENDPATH**/ ?>