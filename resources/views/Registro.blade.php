<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="/resources/css/Eregistrarse.css">
</head>
<body>

    <div class="formulario">
        <img class="avatar" src="../img/logo.png" alt="Logo de empresa">
        <h1>Registrate</h1>
        <form method= "post" action="/{{route('validar-Registro')}}">
               @csrf
                <label>Nombres</label>
                <input type="text" placeholder="Ingrese sus nombres">

                <label>Apellidos</label>
                <input type="text" placeholder="Ingrese sus Apellidos">

                <label>G-mail</label>
                <input type="text" placeholder="Ingrese su G-mail">
                
                <label>Contraseña</label>
                <input type="password" placeholder="Ingrese su contraseña">
                

                
                    <input href="index.html"type="submit" value="Registrarse">
                

                  
                <a href="iniciodesesion.html">¿Ya tiene cuenta?</a>
                <a href="recuperar.html">Ha olvidado su contraseña</a>
               

            
            

            </div>

        </form>

    </div>
    
</body>
</html>