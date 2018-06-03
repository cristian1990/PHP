<?php
    echo "<br>DATOS INGRESADOS<br>";

    $nom = $_GET['nombre']; 
    $ape = $_GET['apellido']; 
    $dn = $_GET['dni'];
    $cor = $_GET['correo']; 
    $mat = $_GET['materias']; 
    $lib = $_GET['libros'];

    echo "El nombre es: " . $nom . "<br>";
    echo "El apellido es: " . $ape . "<br>";
    echo "El DNI es: " . $dn . "<br>";
    echo "El correo es: " . $cor . "<br>";
    echo "La materia es: " . $mat . "<br>";

    echo "Su libro favorito es: ";
    foreach ($lib as $valor) {
      echo "<br>" . $valor;
    }

    #---------------------------------------------------------------------

    echo "<hr>";
    echo "<br>ESTRUCTURA DEL ARRAY O METODO GET<br>";
    echo "<pre>";
    print_r($_GET);
?>
