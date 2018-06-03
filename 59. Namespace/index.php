<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Namespace</title>
</head>
<body>
    <?php
    #Me redirige a todos los archivos
    require 'Autoload.php';

    $clientes[] = new Models\Cliente(
        new Models\Persona("Damian", "Sosa", "35188457", "Masculino", "Moreno"),
        "www.Codeando.com"
    );

    $clientes[] = new Models\Cliente(
        new Models\Persona("Sandra", "Valdivia", "45188954", "Femenino", "Burzaco"),
        "www.Estetica.com"
    );

    echo "<hr>";
    
    #cliente = objeto
    #$valor = contenido del objeto
    foreach ($clientes as $key => $valor)
    {
        echo $valor->getDatos() . "<br>";
    }

    echo "<hr>";

    $empleados[] = new Models\Empleado(
        new Persona("Damian", "Sosa", "35188457", "Masculino", "Moreno"),
        "vimeo ", "5678"
    );

    $empleados[] = new Models\Empleado(
        new Persona("Sandra", "Valdivia", "45188954", "Femenino", "Burzaco"),
        "hp ", "1234"
    );

    echo "<hr>";
    
    #cliente = objeto
    #$valor = contenido del objeto
    foreach ($empleados as $key => $valor)
    {
        echo $valor->getDatos() . "<br>";
    }

    ?>
</body>
</html>