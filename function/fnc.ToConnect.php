<?php

if (!empty($_POST)) {
	$pseudo = $_POST['pseudo'];
	$password = $_POST['pswd'];

	function getUserByPseudo($pseudo) {

    // On définit $bdd comme etant une variable globale
    global $bdd;

    // Préparation de la requete
    $query = $bdd->prepare("SELECT `id_user`, `email`, `password`, `role`, `login`, `registered_at` FROM `users` WHERE login=:PseudoUser");

    $query->bindValue(":PseudoUser", $pseudo, PDO::PARAM_STR);
    $query->execute();

    $result = $query->fetch(PDO::FETCH_OBJ);
    $query->closeCursor();

    return $result;
}

	$user = getUserByPseudo($pseudo);

	print_r($user);

    if (password_verify($password, $user->password)) {
    	echo "Yolo";
    }

}



?>