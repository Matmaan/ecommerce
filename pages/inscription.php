<?php
include_once 'function/fnc.AddUser.php';
?>

<main>
	<form class="to_inscription" method="POST">
		<label for="login" class="">Pseudo :</label>
		<input type="text" name="login" class="form-control">
		<label for="mail" class="">E-mail :</label>
		<input type="text" name="mail" class="form-control">
		<label for="pswd" class="">Mot de passe :</label>
		<input type="password" name="pswd" class="form-control">
		<br>
		<button type="submit" class="btn">Inscription</button>
	</form>
</main>
