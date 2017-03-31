<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$database = "ecommerce";

try {
    $bdd = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch(Exception $e) {
    die('Erreur : ' . $e->getMessage());
}


function selectcategory(){
    global $bdd;
    // Executiuon de la requete
    $query = $bdd->query("SELECT * FROM `category`");
    var_dump($query);
    return $query->fetchAll();
}

if (!empty($_POST)) {

    $name = $_POST['name'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    // On définit $bdd comme etant une variable globale
    global $bdd;
    // Preparation de la requete
    $query = $bdd->prepare("INSERT INTO `product`(`id_category`, `name`, `description`, `price`) VALUES (:id_category, :name, :description, :price)");
    // BindValue
    $query->bindParam(':id_category', $category, PDO::PARAM_INT);
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':description', $description, PDO::PARAM_STR);
    $query->bindParam(':price', $price, PDO::PARAM_INT);

    // Executiuon de la requete
    $query->execute();
    var_dump($query->execute());
    // print_r($_POST);
}
