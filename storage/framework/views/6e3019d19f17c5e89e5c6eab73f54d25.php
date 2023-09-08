<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('css_index/Eformulario.css')); ?>">

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
    <img src="<?php echo e(asset('local_storage/img/fonhis1.png')); ?>" alt="">
</div>
<div class="fonhis2">
    <img src="<?php echo e(asset('local_storage/img/fonhis2.png')); ?>"  alt="">
</div>

<div class="subirh">
    <img src="<?php echo e(asset('local_storage/img/subirhistoria.png')); ?>" >
</div>

<div class="formulario">
    <form>
    <h2>¿De que Departamento es tú historia?</h2>
    <select id="form">
        <option disabled selected="">Seleccione el departamento</option>
        <option>Amazonas</option>
        <option>Antioquia</option>
        <option>Arauca</option>
        <option>Atlántico</option>
        <option>Bogotá</option>
        <option>Bolívar</option>
        <option>Boyacá</option>
        <option>Caldas</option>
        <option>Caquetá</option>
        <option>Casanare</option>
        <option>Cauca</option>
        <option>Cesar</option>
        <option>Chocó</option>
        <option>Córdoba</option>
        <option>Cundinamarca</option>
        <option>Guainía</option>
        <option>Guaviare</option>
        <option>Huila</option>
        <option>La Guajira</option>
        <option>Magdalena</option>
        <option>Meta</option>
        <option>Nariño</option>
        <option>Norte de Santander</option>
        <option>Putumayo</option>
        <option>Quindío</option>
        <option>Risaralda</option>
        <option>Santander</option>
        <option>Sucre</option>
        <option>Tolima</option>
        <option>Valle del Cauca</option>
        <option>Vaupés</option>
        <option>Vichada</option>
    </select>


    </form>
    <form>
        <h2>¿De que Ciudad es tú historia?</h2>
        <select id="form">
            <option disabled selected="">Seleccione la ciudad</option>
            <option>Amazonas</option>
            <option>Antioquia</option>
            <option>Arauca</option>
            <option>Atlántico</option>
            <option>Bogotá</option>
            <option>Bolívar</option>
            <option>Boyacá</option>
            <option>Caldas</option>
            <option>Caquetá</option>
            <option>Casanare</option>
            <option>Cauca</option>
            <option>Cesar</option>
            <option>Chocó</option>
            <option>Córdoba</option>
            <option>Cundinamarca</option>
            <option>Guainía</option>
            <option>Guaviare</option>
            <option>Huila</option>
            <option>La Guajira</option>
            <option>Magdalena</option>
            <option>Meta</option>
            <option>Nariño</option>
            <option>Norte de Santander</option>
            <option>Putumayo</option>
            <option>Quindío</option>
            <option>Risaralda</option>
            <option>Santander</option>
            <option>Sucre</option>
            <option>Tolima</option>
            <option>Valle del Cauca</option>
            <option>Vaupés</option>
            <option>Vichada</option>
        </select>
    
    
        </form>
        <form>
            <h2>¿De que Género es tú historia?</h2>
            <select id="form">
                <option disabled selected="">Seleccione el Género</option>
                <option>Gore</option>
                <option>Horror</option>
                <option>Thriller</option>
                <option>Terror psicologico</option>
                <option>Creepypastas</option>
                <option>Invocaciones</option>
                <option>Leyendas</option>
                <option>Mitos</option>
                <option>Historias encantadas</option>
               
            </select>
        
        
            </form>
            <input type="submit" value="Adjuntar Archivo">
</div><?php /**PATH C:\xampp\htdocs\Magica_colombia\resources\views/formulario.blade.php ENDPATH**/ ?>