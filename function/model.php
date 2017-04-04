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


function countProducts(){

    global $bdd;
    $query = $bdd->query("SELECT COUNT(*) FROM product");

    return $query->fetch();
}
function countProductsByCategory($id_cat){
    global $bdd;
    $query = $bdd->query("SELECT COUNT(*) FROM product WHERE id_category = $id_cat");

    return $query->fetch();
}


function getProducts($nbProducts, $offset = 0) {
    global $bdd;
    $query = $bdd->query("SELECT * FROM product ORDER BY id_product DESC LIMIT $nbProducts OFFSET $offset");

    return $query->fetchAll(PDO::FETCH_OBJ);
}


function getProductsByCategory($nbProducts, $idCategory, $offset = 0) {
    global $bdd;
    $query = $bdd->query("SELECT * FROM product WHERE id_category = $idCategory ORDER BY id_product DESC LIMIT $nbProducts OFFSET $offset");

    return $query->fetchAll(PDO::FETCH_OBJ);
}


function getProduct($id) {
    global $bdd;
    $query = $bdd->query("SELECT * FROM product WHERE id_product = $id");

    return $query->fetch(PDO::FETCH_OBJ);
}


function setProduct($name, $category, $description, $image, $price, $quantity) {
    // On définit $bdd comme etant une variable globale
    global $bdd;
    // Preparation de la requete
    $query = $bdd->prepare("INSERT INTO `product`(
        `id_category`, `name`, `description`, `image`, `price`, `quantity`
    ) VALUES (
        :id_category, :name, :description, :image, :price, :quantity
    )");

    // BindValue
    $query->bindParam(':id_category', $category, PDO::PARAM_INT);
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':description', $description, PDO::PARAM_STR);
    $query->bindParam(':image', $image, PDO::PARAM_STR);
    $query->bindParam(':price', $price, PDO::PARAM_INT);
    $query->bindParam(':quantity', $quantity, PDO::PARAM_INT);

    // Executiuon de la requete
    $query->execute();

    return $bdd->lastInsertId();
}
