<?php

$name = "";
$description = "";
$price = "";


if (!empty($_POST)) {

    $name = $_POST['name'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];


    $error = [];

    print_r($error);

    if (strlen($name) < 2) {
        array_push($error, array(
            "field" => "name",
            "message" => "Le titre de votre rêve doit avoir au moins 2 caractères."
        ));
    };

    if (strlen($description) < 10) {
        array_push($error, array(
            "field" => "description",
            "message" => "La description de votre rêve doit avoir au moins 10 caractères."
        ));
    };

    if (empty($price)) {
        array_push($error, array(
            "field" => "price",
            "message" => "Veuillez indiquer un prix à votre rêve."
        ));
    };

    if (empty($error)) {
        $last_id = setProduct($name, $category, $description, $image, $price, $quantity);
        header("location: index.php?page=product&article=".$last_id);
        exit;
    } else {
        echo "<ul>";
        foreach ($error as $key => $value) {
            echo "<li>" . $value["message"] . "</li><br>";
        }
        echo "</ul>";
    };


    //print_r($last_id);

    // renvoie vers la fiche client (lui affiche ses données personnelles)
    // redirection information



}
