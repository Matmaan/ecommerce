<?php
require_once '../function/model.php';
require_once '../config.php';

session_name("Ecommerce");
session_start();

// Update nbProducts à afficher
$_SESSION["nbProducts"] = $_GET["nbProducts"];
?>

<?php if(isset($_GET["category"])): ?>
    <?php foreach ( getProductsByCategory(isset($_SESSION["nbProducts"]) ?$_SESSION["nbProducts"]: 24,  ($_GET["category"]), (isset($_GET["npage"]) ?$_GET["npage"] - 1:0)*$_SESSION["nbProducts"]) as $article): ?>
        <div class="col-md-3 well product" style="height: 300px">
            <a href="?page=product&article=<?php echo $article->id_product; ?>">
                <img src="<?php echo $article->image?>" class="img-responsive img-thumbnail">
                <h4><?php echo $article->name; ?></h4>
            </a>
            <h4><?php echo $article->price; ?> €</h4>
        </div>
    <?php endforeach; ?>
<!-- Si la catégorie n'est pas définie -->
<?php else: ?>
    <?php foreach (getProducts(isset($_SESSION["nbProducts"]) ?$_SESSION["nbProducts"]: 24, (isset($_GET["npage"]) ?$_GET["npage"] - 1:0)*$_SESSION["nbProducts"] ) as $article): ?>
        <div class="col-md-3 well product" style="height: 300px">
            <a href="?page=product&article=<?php echo $article->id_product; ?>">
                <img src="<?php echo $article->image?>" class="img-responsive img-thumbnail">
                <h4><?php echo $article->name; ?></h4>
            </a>
            <h4><?php echo $article->price; ?> €</h4>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
