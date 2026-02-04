<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

$database = new mysqli("db", "burger_api_user", "root", "burger_api");
mysqli_set_charset($database, "utf8mb4");




$avis = $database->execute_query("SELECT * FROM avis")->fetch_all(MYSQLI_ASSOC);

$arrayFinal = [
    
    "avis_clients" => $avis
];



echo json_encode($arrayFinal);
