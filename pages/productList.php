<?php require_once '../function/model.php'; ?>
<?php require_once '../config.php'; ?>
<?php $_SESSION["nbProducts"] = $_GET["nbProducts"]; ?>

<?php foreach (getProducts(isset($_GET["nbProducts"]) ?$_GET["nbProducts"]: 12 ) as $article): ?>
    <div class="col-md-3 well product" style="height: 300px">
        <a href="?page=product&article=<?php echo $article->id_product; ?>">
            <img src="<?php echo $article->image?>" class="img-responsive img-thumbnail">
            <h3><?php echo $article->name; ?></h3>
        </a>
        <h4><?php echo $article->price; ?> €</h4>
    </div>
<?php endforeach; ?>
