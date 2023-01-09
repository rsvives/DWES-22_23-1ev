<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>
    <form action="./controlador.php" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre">
        <br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email">
        <br>

        <label for="curso">Curso:</label><br>
        <select name="curso" id="curso">
            <option value="1">1º</option>
            <option value="2">2º</option>
        </select>
        <br>

        <input type="radio" name="ciclo" id="daw">
        <label for="daw">DAW</label>
        <br>
        <input type="radio" name="ciclo" id="dam">
        <label for="dam">DAM</label>
        <br>

        <input type="checkbox" name="emancipado" id="emancipado" value="si">
        <label for="emancipado">¿Estás emancipado?</label>
        <br>
        <br>
        <input type="submit" value="Enviar formulario">
    </form>
</body>

</html>