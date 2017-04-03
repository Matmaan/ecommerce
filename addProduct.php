<?php
// Add 100 product to the DB
include_once 'config.php';

function addProduct($name, $description, $image) {
    global $bdd;

    // Preparation de la requete
    $query = $bdd->prepare("INSERT INTO `product`(id_category, name, description, image, price, quantity) VALUES (:id_cat, :name,:description,:image, :price, 100)");

    // BindValue
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':description', $description, PDO::PARAM_STR);
    $query->bindParam(':image', $image, PDO::PARAM_STR);
    $price = rand();
    $query->bindParam(':price', $price, PDO::PARAM_INT);
    $id_cat = rand(1, 4);
    $query->bindParam(':id_cat', $id_cat, PDO::PARAM_INT);

    // Executiuon de la requete
    if ($query->execute()) {
        // Récupération du dernier enregistrement (ID)
        return "Success";
    }

    return "Error";
}
echo addProduct($_POST["name"], $_POST["description"], $_POST["img"]);
