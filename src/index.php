<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');


if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// connexion a ma base
$database = new mysqli("db", "burger_api_user", "root", "burger_api");
mysqli_set_charset($database, "utf8mb4");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 if(!empty($_POST)) {

 $stmt = $database->prepare("INSERT INTO contact (name, mail, message, date_envoi) VALUES(?, ?, ?, ?)");
        $stmt->bind_param("ssss", $_POST['nom'], $_POST['email'], $_POST['message'], date("Y-m-d H:i:s"));
        $resultDb = $stmt->execute();


 }else {
    http_response_code(400);
    echo json_encode(["message" => "Données manquantes"]);
    exit;
 }
}

echo json_encode($arrayFinal);
