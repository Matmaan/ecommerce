<?php

function getCategories() {
    global $bdd;
    $query = $bdd->query("SELECT category FROM category");
    return $query->fetchAll(PDO::FETCH_OBJ);
}

function setUser($pseudo, $email, $password) {
    global $bdd;

    // Preparation de la requete
    $query = $bdd->prepare("INSERT INTO `users`(email, password, login, registered_at) VALUES (:email,:password,:pseudo,NOW())");

    // BindValue
    $query->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);

    // Executiuon de la requete
    if ($query->execute()) {
        // Récupération du dernier enregistrement (ID)
        return $bdd->lastInsertId();
    }

    return false;
}

