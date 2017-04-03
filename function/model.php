<?php

function getCategories() {
    global $bdd;
    $query = $bdd->query("SELECT * FROM category");
    return $query->fetchAll(PDO::FETCH_OBJ);
}

function setUser($pseudo, $email, $password) {
    global $bdd;

    // Preparation de la requete
    $query = $bdd->prepare("INSERT INTO `users`(email, password, login, registered_at) VALUES (:email,:password,:pseudo,NOW())");

    // BindValue
    $query->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);

    // Executiuon de la requete
    if ($query->execute()) {
        // Récupération du dernier enregistrement (ID)
        return $bdd->lastInsertId();
    }

    return false;
}

function getProducts($nbProducts) {
    global $bdd;

    $query = $bdd->query("SELECT * FROM product ORDER BY id_product DESC LIMIT $nbProducts");

    return $query->fetchAll(PDO::FETCH_OBJ);
}
function getProductsByCategory($nbProducts, $idCategory) {
    global $bdd;

    $query = $bdd->query("SELECT * FROM product WHERE id_category = $idCategory ORDER BY id_product DESC LIMIT $nbProducts");

    return $query->fetchAll(PDO::FETCH_OBJ);
}

function getProduct($id) {
    global $bdd;
    $query = $bdd->query("SELECT * FROM product WHERE id_product = $id");

    return $query->fetch(PDO::FETCH_OBJ);
}

function setProduct($name, $category, $description, $image, $price) {
    // On définit $bdd comme etant une variable globale
    global $bdd;
    // Preparation de la requete
    $query = $bdd->prepare("INSERT INTO `product`(`id_category`, `name`, `description`, `image`, `price`, `quantity`) VALUES (:id_category, :name, :description, :image, :price, 50)");
    // BindValue
    $query->bindParam(':id_category', $category, PDO::PARAM_INT);
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':description', $description, PDO::PARAM_STR);
    $query->bindParam(':image', $image, PDO::PARAM_STR);
    $query->bindParam(':price', $price, PDO::PARAM_INT);

    // Executiuon de la requete
    $query->execute();

    return $bdd->lastInsertId();
}
