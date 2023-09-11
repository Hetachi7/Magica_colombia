<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css_index/Eformulario.css')); ?>">
    <title>Cuadro de Texto a la Derecha</title>
</head>
<body>
    <header>

        <a href="<?php echo e(route('inicio')); ?>" class="logo">
            <img src="<?php echo e(asset('local_storage/img/logo.png')); ?>" alt="">
            <h2>La Mágica Colombia</h2>
        </a>
        
        
        <nav>
            <a href="<?php echo e(route('info')); ?>" class="link">¿Quienes Somos?</a>
            <a href="<?php echo e(route('contac')); ?>" class="link">Contacto</a>
        </nav>
        </header>
        
        
        <div class="subirh">
            <img src="<?php echo e(asset('local_storage/img/subirhistoria.png')); ?>" >
        </div>


    </header>

    <div class="contenedor">
        <div class="contenido">

            <div id="formulario">
                <form>
                    <h2 id="form1">¿De que Departamento es tú historia?</h2>
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
                        <h2 id="form1">¿De que Ciudad es tú historia?</h2>
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
                            <h2 id="form1">¿De que Género es tú historia?</h2>
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
                            <input type="file" name="archivo" id="archivo" style="display: none;">
                            <label for="archivo" class="boton-carga">Cargar Archivo</label>
            </div>
                <div class="cuadro-historia">
                    
                    <h1>Escribe tu historia</h1>

                    <textarea rows="56" cols="110"></textarea>
                </div> 
        </div>
           
    </div>



</body>
</html><?php /**PATH C:\xampp\htdocs\Magica_colombia\resources\views/formulario.blade.php ENDPATH**/ ?>