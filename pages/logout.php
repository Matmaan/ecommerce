<?php
// Execution de la déconnexion
session_destroy();

// Redirection de l'utilisateur
header("location: ?page=home");
exit;
