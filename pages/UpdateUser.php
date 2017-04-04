<form method="POST">
	<label for="login" class="">Modifier le pseudo :</label>
	<input type="text" name="login" class="form-control" value="<?php echo $_SESSION['user']->login; ?>">
	<label for="mail" class="">Modifier l'adresse e-mail :</label>
	<input type="text" name="mail" class="form-control" value="<?php echo $_SESSION['user']->email; ?>">
	<label for="mail" class="">Nouveau mot de passe :</label>
	<input type="password" name="newpswd" class="form-control">

	<br>


	<button type="submit" class="btn btn-default btn-primary">Modifier</button>
</form>

<?php var_dump($_POST); ?>

<!-- Verif mdp 
Si new mdp est vide alors mdp = ancien mdp si new mdp n'est pas vide et si new mdp et new mdp verif sont égaux alors mdp = new mdp; -->

<?php  

if (!isset($_SESSION)) {
	echo "Vous devez être connecté pour pouvoir modifier vos informations";
	exit;
}

// Requête update !



?>