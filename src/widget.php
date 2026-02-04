<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");
// connexion a ma base
$database = new mysqli("db", "burger_api_user", "root", "burger_api");
mysqli_set_charset($database, "utf8mb4");




$article4 = $database->execute_query("SELECT * FROM article WHERE article.id = 4")->fetch_all(MYSQLI_ASSOC);

$arrayFinal = [
    "article4" => $article4
];


echo json_encode($arrayFinal);