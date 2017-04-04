<?php
// Update les produits à afficher en ajax
require_once '../function/model.php';
require_once '../config.php';

session_name("Ecommerce");
session_start();
// var_dump($_SESSION);
// var_dump($_GET);

if ($_GET["category"] == "null") {
    // echo "category null";
    unset($_GET["category"]);
}

if ($_GET["npage"] == "null") {
    // echo "nbpages null";
    $_GET["npage"] = 1;
}

// var_dump($_GET);
// Récuperation de la page actuel
// $_SESSION["currentPage"] = isset($_GET["npage"]) ? $_GET["npage"] : 1 ;

// Nombre de produits total (avec filtre de catégorie)
if(isset($_GET["category"])) {
    $nbrProducts = countProductsByCategory($_GET["category"]);
    $category = "&category=".$_GET["category"];
} else {
    $nbrProducts = countProducts() ;
    $category = "";
}

// Nombre de page selon le nombre de produits par page demande par l'utilisateur
$nbPages = ceil( $nbrProducts[0] / $_SESSION["nbProducts"] );


// Result à mettre dans le <nav> de class = "navigation"?>

<nav class="text-center">
    <ul class="pagination pagination-centered">
        <!-- Position actuelle -->
        <li><span class="pages">Page <?php echo $_SESSION["currentPage"]; ?> of <?php echo $nbPages; ?></span></li>

        <!-- Affichage lien page 1 & page precedente -->
        <?php if ($_SESSION["currentPage"] != 1): ?>
            <li><a class="first" href="?page=<?php echo $_GET["page"] ?><?php echo $category; ?>&npage=1">« First</a></li>
            <li><a class="previouspostslink" rel="prev" href="?page=<?php echo $_GET["page"] ?><?php echo $category; ?>&npage=<?php echo $_SESSION["currentPage"]-1; ?>">«</a></li>
        <?php endif; ?>

        <!-- Affiche dynamique du nombre de page -->
        <?php for($i = 1; $i <= $nbPages; $i++ ): ?>
            <!-- Page courante -->
            <?php if ($i == $_SESSION["currentPage"]): ?>
                <li class="active"><span><?php echo $i; ?></span></li>
            <!-- Autre page -->
            <?php else: ?>
                <li><a class="page smaller" href="?page=<?php echo $_GET["page"] ?><?php echo $category; ?>&npage=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php endif; ?>
        <?php endfor; ?>

        <!-- Affichage lien page suivante & derniere page -->
        <?php if ($_SESSION["currentPage"] != $nbPages): ?>
            <li><a class="nextpostslink" rel="next" href="?page=<?php echo $_GET["page"] ?><?php echo $category; ?>&npage=<?php echo $_SESSION["currentPage"]+1; ?>">»</a></li>
            <li><a class="last" href="?page=<?php echo $_GET["page"] ?><?php echo $category; ?>&npage=<?php echo $nbPages; ?>">Last »</a></li>
        <?php endif; ?>
    </ul>
</nav>
