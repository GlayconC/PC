<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "local";


try {
    $conn = new PDO ("mysql:host=$host;dbname=" . $dbname, $user, $pass);

}catch(PDOException $err){

    echo "Não conectado" . $err -> getMessage();
}