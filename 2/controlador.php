<?php
require("./alumno.php");

$alumno = new Alumno($_POST["nombre"], $_POST["email"], $_POST["curso"], $_POST["ciclo"], $_POST["emancipado"]);

echo $alumno;
