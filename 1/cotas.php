<?php

$temperaturas = [
    "lunes" => ["tmax" => 14],
    "mnartes" => ["tmax" => 12],
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
var_dump($temperaturasJSONLectura);
