<?php echo'
<form action="reset.php" method="POST">
Votre adresse email: <input type="text" name="email" size="20" /><br />
Nouveau mot de passe: <input type="password" name="password" size="20" /><br />
Confirmation du nouveau mot de passe: <input type="password" name="confirmpassword"/><br />
<input type="hidden" name="q" value="';

if (isset($_GET["q"])) {

    echo $_GET["q"];

}

    echo '" /><input type="submit" name="ResetPasswordForm" value="Reset Password" />

</form>';



?>
