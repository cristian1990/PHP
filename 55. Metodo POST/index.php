<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Metodo POST</title>
</head>
<body>
    <form action="formPost.php" method="POST">
        <p>
            <label for="">Nombre</label>
            <input type="text" name="nombre" placeholder="Ingrese nombre" required="">
        </p>
        <p>
            <label for="">Apellido</label>
            <input type="text" name="apellido" placeholder="Ingrese apellido" required="">
        </p>
        <p>
            <label for="">DNI</label>
            <input type="text" name="dni" maxlength="8" placeholder="Ingrese dni" required="">
        </p>
        <p>
            <label for="">Correo</label>
            <input type="email" name="correo" placeholder="Ingrese correo" required="">
        </p>
        <p>
            <label>Localidad</label>
            <select name="localidad" required="">
                <option value="">--SELECCIONE--</option>
                <option value="MORENO">MORENO</option>
                <option value="FLORENCIO VARELA">FLORENCIO VARELA</option>
                <option value="MORON">MORON</option>
                <option value="LA MATANZA">LA MATANZA</option>
                <option value="ALMAGRO">ALMAGRO</option>
                <option value="MUNRO">MUNRO</option>
                <option value="AVELLANEDA">AVELLANEDA</option>
                <option value="LANUS">LANUS</option>
            </select>
        </p>
        <p>
            <label>Peliculas Favoritas</label><br>
            <input type="checkbox" name="peliculas[]" value="batman">Batman<br>
            <input type="checkbox" name="peliculas[]" value="superman">Superman<br>
            <input type="checkbox" name="peliculas[]" value="titanic">Titanic<br>
            <input type="checkbox" name="peliculas[]" value="hulk">Hulk<br>
        </p>

            <input type="submit" value="Registrar">
    <!--    
            <hr>
            <p>Range</p><br>
            <input type="range">

            <p>Color</p><br>
            <input type="color">

            <p>Time</p><br>
            <input type="time">

            <p>Week</p><br>
            <input type="week">

            <p>Search</p><br>
            <input type="search">

            <p>Password</p><br>
            <input type="password">
    -->
    </form>
</body>
</html>
