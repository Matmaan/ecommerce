<?php

session_start();

require_once 'config.php';
require_once 'function/model.php';


require_once 'pages/header.php';
require_once 'pages/'.$_GET["page"].".php";

require_once 'pages/footer.php';
