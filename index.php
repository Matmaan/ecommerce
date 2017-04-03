<?php

session_start();

require_once 'config.php';
require_once 'function/model.php';


require_once 'pages/header.php';

// Main content
if (isset($_GET["page"])) {
    require_once 'pages/'.$_GET["page"].".php";
} else {
    require_once 'pages/home.php';
}

require_once 'pages/footer.php';
