<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Metodo GET</title>
</head>
<body>
    <form action="formGet.php" method="GET">
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
            <label>Materia</label>
            <select name="materias" required="">
                <option value="">--SELECCIONE--</option>
                <option value="Programacion">Programacion</option>
                <option value="Laboratorion">Laboratorion</option>
                <option value="Matematica">Matematica</option>
                <option value="Ingles">Ingles</option>
                <option value="Estadistica">Estadistica</option>
                <option value="Contabilidad">Contabilidad</option>
            </select>
        </p>
        <p>
            <label>Libros Favoritos</label><br>
            <input type="checkbox" name="libros[]" value="Orgullo y prejuicio">Orgullo y prejuicio<br>
            <input type="checkbox" name="libros[]" value="Crimen y castigo">Crimen y castigo<br>
            <input type="checkbox" name="libros[]" value="Matar un ruiseñor">Matar un ruiseñor<br>
            <input type="checkbox" name="libros[]" value="Blade Runner">Blade Runner<br>
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
