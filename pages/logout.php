<?php
// Execution de la déconnexion
// session_destroy();
unset($_SESSION["user"]);

// Redirection de l'utilisateur
header("location: ?page=home");
exit;
