<?php
// Was the form submitted?
if (isset($_POST["ForgotPassword"])) {

	// Harvest submitted e-mail address
	if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
		$email = $_POST["email"];

	}else{
		echo "Email invalide";
		exit;
	}

	// Check to see if a user exists with this e-mail
	$query = $conn->prepare('SELECT email FROM users WHERE email = :email');
	$query->bindParam(':email', $email);
	$query->execute();
	$userExists = $query->fetch(PDO::FETCH_ASSOC);
	$conn = null;

	if ($userExists["email"])
	{
		// Create a unique salt. This will never leave PHP unencrypted.
		$salt = "498#2D83B631%3800EBD!801600D*7E3CC13";

		// Create the unique user password reset key
		$password = hash('sha512', $salt.$userExists["email"]);

		// Create a url which we will direct them to reset their password
		$pwrurl = "www.localhost/git/ecommerce.com/reset_password.php?q=".$password;

		// Mail them their key
		$mailbody = "Veuillez cliquez sur le lien suivant" . $pwrurl . "afin de réinitialiser votre mot de passe.";
		//mail($userExists["email"], "www.yoursitehere.com - Password Reset", $mailbody);
		echo $mailbody;
		echo "Un code de réinitialisation de mot de passe a été envoyé à votre adresse email";

	}
	else
		echo "Cet email ne correspond pas à une adresse connue dans la base de donnée";
}
?>
