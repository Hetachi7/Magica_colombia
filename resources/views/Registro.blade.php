<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="{{asset('css_index')}}">
</head>
<body>

    <div class="formulario">
        <img class="avatar" src="{{ asset('local_storage/img/logo.png') }}"  alt="Logo de empresa">
        <h1>Registrate</h1>
        <form method= "post" action="">
               @csrf
                <label>Nombres</label>
                <input type="text" name="nombres" placeholder="Ingrese sus nombres">

                <label>Apellidos</label>
                <input type="text" name="apellidos" placeholder="Ingrese sus Apellidos">

                @error('apellidos')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>E-mail</label>
                <input type="text" name="email"  placeholder="Ingrese su G-mail">

                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label>Contraseña</label>
                <input type="password" name="pasword" placeholder="Ingrese su contraseña">

                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                
                    <input href="index.html"type="submit" value="Registrarse">
                

                  
                <a href="{{route('iniciosesion')}}">¿Ya tiene cuenta?</a>
                <a href="{{route('recuperar')}}">Ha olvidado su contraseña</a>
               

            
            

            </div>

        </form>

    </div>
    
</body>
</html>