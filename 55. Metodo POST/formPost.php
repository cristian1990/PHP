<?php
    echo "<br>DATOS INGRESADOS<br>";

    $nom = $_POST['nombre']; //Toma el nombre del index por metodo POST
    $ape = $_POST['apellido']; //Toma el apellido del index por metodo POST
    $dn = $_POST['dni']; //Toma el dni del index por metodo POST
    $cor = $_POST['correo']; //Toma el correo del index por metodo POST
    $loc = $_POST['localidad']; //Toma la localidad del index por metodo POST
    $pel = $_POST['peliculas']; //Toma la pelicula del index por metodo POST

    echo "El nombre es: " . $nom . "<br>";
    echo "El apellido es: " . $ape . "<br>";
    echo "El DNI es: " . $dn . "<br>";
    echo "El correo es: " . $cor . "<br>";
    echo "La localidad es: " . $loc . "<br>";

    echo "Su pelicula favorita es: ";
    foreach ($pel as $valor) {
      echo "<br>" . $valor;
    }

    #---------------------------------------------------------------------

    echo "<hr>";
    echo "<br>ESTRUCTURA DEL ARRAY O METODO POST<br>";
    echo "<pre>";
    print_r($_POST);
?>
