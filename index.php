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



// Test faker
require_once '/vendor/fzaninotto/faker/src/autoload.php';

$faker = Faker\Factory::create();

echo "=====================<br> Test faker<br>";
echo $faker->name;
echo "<br>";
echo $faker->address;
echo "<br>";
echo $faker->text;
var_dump($_SESSION);
