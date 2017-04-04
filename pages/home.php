<?php

if (!isset($_GET["page"])) {
    header("location: ?page=home");
}
?>
<h2>Produits récents</h2>

<!-- Filtre -->
<div class="filter col-md-2 bg-primary">
    <h3>Filtre</h3>


</div>

<!-- Products -->
<div class="col-md-10">
    <div class="row">
        <div class="col-md-12">
            <form class="pull-right">
                Nombre de produits par pages :
                <select name="" id="nbProducts">
                    <option value="" selected disabled><?php echo $_SESSION["nbProducts"] ?></option>
                    <option value="48">48</option>
                    <option value="36">36</option>
                    <option value="24">24</option>
                </select>
            </form>
        </div>
    </div>

    <!-- Si la catégorie est définie -->
    <?php if(isset($_GET["category"])): ?>
        <span id="productList">
            <?php foreach ( getProductsByCategory(isset($_SESSION["nbProducts"]) ?$_SESSION["nbProducts"]: 24,  ($_GET["category"]), (isset($_GET["npage"]) ?$_GET["npage"] - 1:0)*$_SESSION["nbProducts"]) as $article): ?>
                <div class="col-md-3 well product" style="height: 300px">
                    <a href="?page=product&article=<?php echo $article->id_product; ?>">
                        <img src="<?php echo $article->image?>" class="img-responsive img-thumbnail">
                        <h4><?php echo $article->name; ?></h4>
                    </a>
                    <h4><?php echo $article->price; ?> €</h4>
                </div>
            <?php endforeach; ?>
        </span>
    <!-- Si la catégorie n'est pas définie -->
    <?php else: ?>
        <span id="productList">
            <?php foreach (getProducts(isset($_SESSION["nbProducts"]) ?$_SESSION["nbProducts"]: 24, (isset($_GET["npage"]) ?$_GET["npage"] - 1:0)*$_SESSION["nbProducts"] ) as $article): ?>
                <div class="col-md-3 well product" style="height: 300px">
                    <a href="?page=product&article=<?php echo $article->id_product; ?>">
                        <img src="<?php echo $article->image?>" class="img-responsive img-thumbnail">
                        <h4><?php echo $article->name; ?></h4>
                    </a>
                    <h4><?php echo $article->price; ?> €</h4>
                </div>
            <?php endforeach; ?>
        </span>
    <?php endif; ?>

</div>


<?php
// Récuperation de la page actuel
$_SESSION["currentPage"] = isset($_GET["npage"]) ? $_GET["npage"] : 1 ;

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

?>

<?php var_dump($_SESSION); ?>


<!--                         -->
<!--        Pagination       -->
<!--                         -->
<nav class="navigation post-navigation meta-box" role="navigation">
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
</nav>
