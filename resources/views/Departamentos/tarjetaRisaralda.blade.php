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
   <h1>DEPARTAMENTO RISARALDA</h1>
</div>

<div class="container">
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/hi.jpg') }}" >
        </figure>
        <div class="contenido">
            <h3>Chinchia</h3>
            <p>Hay varias leyendas relacionadas con este municipio, por ejemplo, la leyenda de la diosa Michua que vivía en el Cerro Batero y exigía sacrificios humanos; la leyenda de Juan Tapao, que narra la vida de un minero ambicioso que no compartió su riqueza, ni guardaba los días de fiesta, y murió sepultado por un derrumbe.</p>
            <a href="{{route('chimpum')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/cauca/Caquiona/imagen 1.jpg') }}" >
        </figure>
        <div class="contenido">
            <h3>Santa Rosa</h3>
            <p>
Entre los mitos y leyendas se mencionan la Leyenda del Caimán, la Laguna Encantada, el Hechizo del Alto del Chuzo, el Espíritu del Alto de la Guerra y el Verraco de Guacas. Entre los representantes de la tradición oral se encuentran Gabriel Duque, Los Hermanos Romero y Jorge Hoyos Santa
</p>
            <a href="{{route('sanrrose')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/cauca/Caquiona/imagen 2.jpeg') }}" >
        </figure>
        <div class="contenido">
            <h3>Agueros</h3>
            <p>
Algunas costumbres familiares indígenas de los municipios de Mistrató y Pueblo Rico están ligadas a una serie de supersticiones. Por ejemplo, cuando la mujer está embarazada no puede comer frutos dobles como plátanos o mazorcas pegadas porque tendrá mellizos, lo cual es considerado como una desgracia. Tampoco comen chócolo o cualquier cosa cubierta porque se formará una doble placenta lo cual implica un parto difícil. No toman líquido en una totuma o taza nueva porque el bebé puede nacer calvo. No comen cangrejo porque el bebé nace negro. No toman agua o aguadepanela porque el parto puede ser penoso
</p>
            <a href="{{route('aguero')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/cauca/Caquiona/imagen 3.jpg') }}" >
        </figure>
        <div class="contenido">
            <h3>Presagios</h3>
            <p>la mariposa de la muerte. Se cree que cuando una mariposa oscura se posa en un sitio del hogar es porque anuncia que alguien cercano va a fallecer.


En diciembre se hace la prueba de los huevos, que indica si van a viajar en el nuevo año y qué otras cosas depara el destino. Además la prueba de las tres papas que se colocan debajo de la cama y a las 12 se sacan, si la escogida es la totalmente pelada, es porque la situación económica será mala, si es a medio pelar va estar regular de dinero y si escoge la que no se ha pelado es porque el año siguiente será muy bueno en la parte financiera. Para tener prosperidad se utilizan las espigas de trigo y la flor del ajo. Se acostumbra comer las doce uvas a las 12 de la noche, el 31 de diciembre. Las señoras creen que van a tener una sorpresa agradable cuando ven un carro con un trasteo.</p>
            <a href="{{route('presagio')}}">Leer más</a>

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


