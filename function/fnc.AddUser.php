<?php

$pseudo = $_POST('login');
$email = $_POST('mail');
$password = $_POST('pswd');

function AddUser($pseudo, $email, $password) {

    // On définit $bdd comme etant une variable globale
    global $db;

    // Preparation de la requete
    $query = $db->prepare("INSERT INTO `users`(`email`, `password`, `login`, `registered_at`) VALUES (:email,:password,:pseudo,NOW())");

    // BindValue
    $query->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->bindParam(':role', $role, PDO::PARAM_STR);
    $query->bindParam(':InscriptDate', $InscriptDate, PDO::PARAM_STR);

    // Executiuon de la requete
    $query->execute();

    // Récupération du dernier enregistrement (ID)
    return $db->lastInsertId();
}
