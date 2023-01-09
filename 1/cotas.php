<?php

$temperaturas = [
    "lunes" => ["tmax" => 14],
    "martes" => ["tmax" => 12],
    "miercoles" => ["tmax" => 13],
    "jueves" => ["tmax" => 13],
    "viernes" => ["tmax" => 14],
    "sabado" => ["tmax" => 15],
    "domingo" => ["tmax" => 17],
];

// $temperaturas2= [
//     [
//         "dia"=>"lunes",
//         "tmax"=>14
//     ],
//     [
//         "dia"=>"lunes",
//         "tmax"=>14
//     ],
//     [
//         "dia"=>"lunes",
//         "tmax"=>14
//     ],
//     [
//         "dia"=>"lunes",
//         "tmax"=>14
//     ],
//     [
//         "dia"=>"lunes",
//         "tmax"=>14
//     ],
//     [
//         "dia"=>"lunes",
//         "tmax"=>14
//     ],
//     [
//         "dia"=>"lunes",
//         "tmax"=>14
//     ],
//     [
//         "dia"=>"lunes",
//         "tmax"=>14
//     ],
// ]


foreach ($temperaturas as $dia => $valores) {
    $max = $valores["tmax"];
    $min =  $max - rand(5, 10);
    $temperaturas[$dia]["tmin"] = $min;
    $temperaturas[$dia]["tmedia"] = ($max - $min) / 2;
}

// var_dump($temperaturas);

$temperaturasJSON = json_encode($temperaturas, JSON_UNESCAPED_UNICODE);
file_put_contents("./temperaturas.json", $temperaturasJSON);



$temperaturasJSONLectura = file_get_contents("./temperaturas.json");
$temperaturasLectura = json_decode($temperaturasJSONLectura, true, 512, JSON_UNESCAPED_UNICODE);


$temperaturasEntreSemana = array_splice($temperaturasLectura, 0, 5);
// print "<pre>" . print_r($temperaturasEntreSemana, true) . "</pre>";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .maxima {
            background-color: rgb(255, 60, 25);
        }

        .minima {
            background-color: rgb(0, 60, 255);
        }
    </style>
</head>

<body>
    <table border="1" cellspacing="0" cellpadding="20">
        <tr>
            <td>Temperatura</td>
            <?php foreach ($temperaturasEntreSemana as $key => $value) { ?>
                <td><?= $key ?></td>
            <?php } ?>
        </tr>
        <tr>
            <td>máxima</td>
            <?php foreach ($temperaturasEntreSemana as $key => $value) { ?>
                <td class="maxima"><?= $value["tmax"] ?></td>
            <?php } ?>
        </tr>
        <tr>
            <td>mínima</td>
            <?php foreach ($temperaturasEntreSemana as $key => $value) { ?>
                <td class="minima"><?= $value["tmin"] ?></td>
            <?php } ?>
        </tr>
        <tr>
            <td>media</td>
            <?php foreach ($temperaturasEntreSemana as $key => $value) { ?>
                <td><?= $value["tmedia"] ?></td>
            <?php } ?>
        </tr>
    </table>


    <?php

    if (!empty($_GET["dia"])) {
        $dia = $_GET["dia"];
        $tmaxGET = $temperaturasEntreSemana[$dia]["tmax"];
        $tminGET = $temperaturasEntreSemana[$dia]["tmin"];
        $tmediaGET = $temperaturasEntreSemana[$dia]["tmedia"];

        echo "<p>la temperatura máxima del $dia  es $tmaxGET</p>";
        echo "<p>la temperatura mínima del $dia  es $tminGET</p>";
        echo "<p>la temperatura máxima del $dia  es $tmediaGET</p>";
    }
    ?>

</body>

</html>