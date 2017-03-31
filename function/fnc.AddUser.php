<?php

echo "test";


if (!empty($_POST)) {
    $pseudo     = $_POST['login'];
    $email      = $_POST['mail'];
    $password   = $_POST['pswd'];

    // verif

    if (true) {
        setUser($pseudo, $email, $password);
    } else {
        echo "Erreur dans les infos.";
    }

    header("location: ?page=home");
    exit;
    // print_r($_POST);
}
