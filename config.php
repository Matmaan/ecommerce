<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$database = "ecommerce";

try {
    $bdd = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $pass);
} catch(Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
