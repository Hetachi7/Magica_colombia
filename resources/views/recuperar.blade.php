<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="{{asset('css_index/Erecuperar.css')}}">
</head>
<body>

    <div class="formulario">
        <img class="avatar" src="{{ asset('local_storage/img/logo.png') }}"  alt="Logo de empresa">
        <h1>Recuperación de cuenta</h1>
        <form action="post">
               
                <label>Escribe el G-mail registrado</label>
                <input type="text" placeholder="Ingrese su G-mail">
                
            

                
                

                
                    <input href="index.html"type="submit" value="Enviar correo">
                

                  
                <a href="registrarse.blade.php">Aún no tiene cuenta</a>
                <a href="iniciodesesion.blade.php">Iniciar sesión</a>
                <a href="index.blade.php">Ir al inicio</a>
               

            
            

            </div>

        </form>

    </div>
    
</body>
</html>