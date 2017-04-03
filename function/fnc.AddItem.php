<?php

if (!empty($_POST)) {

    $name = $_POST['name'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $last_id = setProduct($name, $category, $description, $image, $price, $quantity);
    //print_r($last_id);

    // renvoie vers la fiche client (lui affiche ses données personnelles)
    // redirection information
    header("location: index.php?page=product&article=".$last_id);
    exit;


}
