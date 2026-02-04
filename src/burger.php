<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

$database = new mysqli("db", "burger_api_user", "root", "burger_api");
mysqli_set_charset($database, "utf8mb4");




$burgers = $database->execute_query("SELECT * FROM burger")->fetch_all(MYSQLI_ASSOC);

$arrayFinal = [
    
    "burgers" => $burgers
];



echo json_encode($arrayFinal);
