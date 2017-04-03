<h2>Produits récents</h2>

<!-- Filtre -->
<div class="col-md-2 bg-primary" style="height: 500px;">
    <h3>Filtre</h3>
</div>

<!-- Products -->
<div class="col-md-10">
    <div class="row">
        <div class="col-md-12">
            <form class="pull-right">
                Nombre de produits par pages :
                <select name="" id="nbProducts">
                    <option value="" selected disabled></option>
                    <option value="12">12</option>
                    <option value="6">6</option>
                    <option value="4">4</option>
                </select>
            </form>
        </div>
    </div>

    <?php if(isset($_GET["category"])): ?>
        <span id="productList">
            <?php foreach (getProductsByCategory(isset($_SESSION["nbProducts"]) ?$_SESSION["nbProducts"]: 12,  ($_GET["category"])) as $article): ?>
                <div class="col-md-3 well product" style="height: 300px">
                    <a href="?page=product&article=<?php echo $article->id_product; ?>">
                        <img src="<?php echo $article->image?>" class="img-responsive img-thumbnail">
                        <h3><?php echo $article->name; ?></h3>
                    </a>
                    <h4><?php echo $article->price; ?> €</h4>
                </div>
            <?php endforeach; ?>
        </span>
    <?php else: ?>
        <span id="productList">
            <?php foreach (getProducts(isset($_SESSION["nbProducts"]) ?$_SESSION["nbProducts"]: 12 ) as $article): ?>
                <div class="col-md-3 well product" style="height: 300px">
                    <a href="?page=product&article=<?php echo $article->id_product; ?>">
                        <img src="<?php echo $article->image?>" class="img-responsive img-thumbnail">
                        <h3><?php echo $article->name; ?></h3>
                    </a>
                    <h4><?php echo $article->price; ?> €</h4>
                </div>
            <?php endforeach; ?>
        </span>
    <?php endif; ?>
    
</div>
