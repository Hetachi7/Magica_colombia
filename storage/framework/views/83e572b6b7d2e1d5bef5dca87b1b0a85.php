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

<div class="form">

    <form action="<?php echo e(route('guardarDatos')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <label for="opciones">Opciones:</label>
        <select name="opciones" id="opciones">
          
        </select>
        <br>
        <label for="texto">Texto:</label>
        <textarea name="texto" id="texto" rows="60" cols="100"></textarea>
        <br>
        <label for="imagen">Imagen:</label>
        <input type="file" name="imagen" id="imagen">
        <br>
        <input type="submit" value="Guardar">
      </form>



</div><?php /**PATH C:\xampp\htdocs\Magica_colombia\resources\views/Contacto.blade.php ENDPATH**/ ?>