<?php

echo "test";


if (!empty($_POST)) {
    $pseudo     = $_POST['login'];
    $email      = $_POST['mail'];
    $password   = $_POST['pswd'];

    // verif

    if (true) {
        // cid = client Id
        $_SESSION["cid"] = setUser($pseudo, $email, $password);
        header("location: ?page=home");
        exit;
    } else {
        echo "Erreur dans les infos.";
    }

    // print_r($_POST);
}
