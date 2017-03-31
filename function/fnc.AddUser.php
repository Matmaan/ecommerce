<?php

    $pseudo     = null;
    $email      = null;
    $password   = null;

if (!empty($_POST)) {
    $pseudo     = $_POST['login'];
    $email      = $_POST['mail'];
    $password   = $_POST['pswd'];

    // verif
    // Verifier que l'adresse mail n'est pas en bdd
    // Vérifier que le mot de passe ai bien 1maj 1min 1caracspé et 8 caractères
    // Cryptage mot de passe
    // Pseudo avec minimum 4caractères et n'existe pas en bdd

    $error = [];




        // Filter var email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($error, array(
            "field" => "email",
            "message" => "Vous devez saisir une adresse email valide (user@domain.com)."
        ));
            // if (!unique) {
            //     // Verifier que l'adresse mail n'est pas en bdd
            // }
        }
        // Verification longueur de mot de passe (8 caractères)
        if (strlen($password) < 8) {
            array_push($error, array(
                "field" => "password",
                "message" => "Le mot de passe doit contenir au moins 8 caractères."
            ));
        }
        // Vérifier que le mot de passe ai bien 1maj 1min 1caracspé

        else if (!preg_match("/(?=.*\d)(?=.*[a-zA-Z])(?=.*[#@!])[a-zA-Z0-9#@!]{8,}/", $password))
        {
            array_push($error, array(
                "field" => "password",
                "message" => "Le mot de passe doit contenir au moins 1 caractère numérique (0-1), un caractère en majuscule, un caractère spécial (#@!)."
            ));
        }

        if (strlen($pseudo) < 4) {
            array_push($error, array(
                "field" => "pseudo",
                "message" => "Votre pseudo doit contenir au moins 4 caractères."
            ));
        }
        // Cryptage mot de passe
        // Pseudo avec minimum 4caractères et n'existe pas en bdd

    if (empty($error)) {
        if (setUser($pseudo, $email, $password)) {
        header("location: ?page=home");
        exit;
        } 
    } else {
        array_push($error, array(
            "field" => "unique",
            "message" => "Votre pseudo ou votre adresse mail est déjà utilisé."
        ));
        echo "<ul>";
        foreach ($error as $key => $value) {
            echo "<li>" . $value["message"] . "</li><br>";
        }
        echo "</ul>";
    }
    // print_r($error);
}

