<form method="POST">
	<label for="login" class="">Modifier le pseudo :</label>
	<input type="text" name="login" class="form-control" value="<?php echo $_SESSION['user']->login; ?>">
	<label for="mail" class="">Modifier l'adresse e-mail :</label>
	<input type="text" name="mail" class="form-control" value="<?php echo $_SESSION['user']->email; ?>">
	<label for="mail" class="">Nouveau mot de passe :</label>
	<input type="password" name="newpswd" class="form-control">
	<label for="mail" class="">Vérification nouveau mot de passe :</label>
	<input type="password" name="newpswdverif" class="form-control">

	<br>


	<button type="submit" class="btn btn-default btn-primary">Modifier</button>
</form>

<?php var_dump($_POST); ?>

<!-- Verif mdp 
Si new mdp est vide alors mdp = ancien mdp si new mdp n'est pas vide et si new mdp et new mdp verif sont égaux alors mdp = new mdp; -->

<?php  

if (empty($_POST['newpswd'])) {
	// Alors l'ancien mot de passe reste le mot de passe actuel
} else {

	// Alors on vérifie que les deux champs sont égaux et on fais les vérifs comme à l'inscription et on lance ou non la procédure de changement de mot de passe 
}



?>