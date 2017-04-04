<?php
session_name("Ecommerce");
session_start();

require_once 'config.php';
require_once 'function/model.php';


require_once 'pages/header.php';

// echo "<pre>";
// var_dump($_SESSION);
// echo "</pre>";
// echo "<pre>";
// var_dump($_GET);
// echo "</pre>";

// Main content
if (isset($_GET["page"])) {
    if ( file_exists( 'pages/'.$_GET["page"].".php" ) ){
        include_once 'pages/'.$_GET["page"].".php";
    } else {
        include_once 'pages/'.'404'.".php";
    }
} else {
    require_once 'pages/home.php';
}

require_once 'pages/footer.php';



// Test faker
// require_once '/vendor/fzaninotto/faker/src/autoload.php';
//
// $faker = Faker\Factory::create();
//
// echo "=====================<br> Test faker<br>";
// echo $faker->name;
// echo "<br>";
// echo $faker->address;
// echo "<br>";
// echo $faker->text;
// echo "<br>";
// echo "<img src='$faker->imageUrl()'>";
// echo "<br>";
// var_dump($_SESSION);
