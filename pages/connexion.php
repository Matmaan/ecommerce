<?php
include_once 'function/fnc.ToConnect.php';
?>
<form method="POST">
	<label for="pseudo">Pseudonyme :</label>
	<input type="text" name="pseudo" class="form-control">
	<label for="pswd">Mot de passe :</label>
	<input type="password" name="pswd" class="form-control">
	<br>
	<button type="submit" class="btn btn-default btn-primary">Connexion</button>
	<button type="button" class="btn btn-default btn-primary"><a href="forgot_password.php">Mot de passe oublié ?</a></button>
</form>