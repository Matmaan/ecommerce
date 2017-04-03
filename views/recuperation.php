<?php

    //require_once('../config.php');
    //require_once('functions.php');

    if(isset($_POST['recup_submit'], $_POST['recup_email'])) {
        if(!empty($_POST['recup_email'])) {
            $recup_email = htmlspecialchars($_POST['recup_email']);
            if(filter_var($recup_email, FILTER_VALIDATE_EMAIL)) {

                $email_exist = $bdd->prepare('SELECT id, login FROM users WHERE email=?');
                $email_exist->execute(array($recup_email));
                $email_exist_count = $email_exist->rowCount();

                if ($email_exist == 1) {
                    $login = $email_exist->fetch();
                    $login = $login['login'];
                    
                    $_SESSION['recup_email'] = $recup_email;
                    $recup_code = "";
                    for ($i=0; $i < 8  ; $i++) {
                        $recup_code .= mt_rand(0,9);
                }

                    $_SESSION['recup_code'] = $recup_code;

                    $email_recup_exist = $bdd->prepare('SELECT id FROM recuperation WHERE email = ?');
                    $email_recup_exist->execute(array($recup_email));
                    $email_recup_exist = $email_recup_exist->rowCount();

                    if ($email_recup_exist == 1) {
                        $recup_insert = $bdd->prepare('UPDATE recuperation SET code = ? WHERE email = ?');
                        $recup_insert->execute(array($recup_code, $recup_email));
                    } else {
                        $recup_insert = $bdd->prepare('INSERT INTO recuperation(email,code) VALUES (?, ?)');
                        $recup_insert->execute(array($recup_email, $recup_code));
                    }

                } else {
                    $error = "Cette adresse mail n'est pas enregistrée";
                }
            } else {
                $error = "Adresse email non valide";
            }
        } else {
            $error = "Veuillez entrer un email valide";
        }
    }

    require_once('recuperation.view.php');
 ?>
