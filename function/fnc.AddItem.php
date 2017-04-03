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
    $image = $_POST['image'];
    $price = $_POST['price'];

    // On définit $bdd comme etant une variable globale
    global $bdd;
    // Preparation de la requete
    $query = $bdd->prepare("INSERT INTO `product`(`id_category`, `name`, `description`, `image`, `price`) VALUES (:id_category, :name, :description, :image, :price)");
    // BindValue
    $query->bindParam(':id_category', $category, PDO::PARAM_INT);
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':description', $description, PDO::PARAM_STR);
    $query->bindParam(':image', $image, PDO::PARAM_STR);
    $query->bindParam(':price', $price, PDO::PARAM_INT);

    // Executiuon de la requete
    $query->execute();

    $last_id = $bdd->lastInsertId();
    //print_r($last_id);

    // renvoie vers la fiche client (lui affiche ses données personnelles)
    // redirection information
    header("location: index.php?page=product&article=".$last_id);
    exit;


}
