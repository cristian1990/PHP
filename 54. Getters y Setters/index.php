<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    require "Persona.php";

    $pers = new Persona("Juan", "Silva", "3515949", "Masculino", "Balvanera");

    $pers->setLocalidad("Almagro");

    echo "DATOS DE LA PERSONA<br>";
    echo $pers->getNombre() . "<br>";
    echo $pers->getApellido() . "<br>";
    echo $pers->getDni() . "<br>";
    echo $pers->getSexo() . "<br>";
    echo $pers->getLocalidad() . "<br>";

    echo "<hr>";
    echo "ESTRUCTURA DEL OBJETO PERSONA (print_r)";
    echo "<pre>";
    print_r($pers);

    echo "<hr>";
    echo "ESTRUCTURA DEL OBJETO PERSONA (var_dump)";
    echo "<pre>";
    var_dump($pers);

    ?>
</body>
</html>
