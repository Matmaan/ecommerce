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
                <select class="" name="">
                    <option value="12">12</option>
                    <option value="24">24</option>
                    <option value="36">36</option>
                </select>
            </form>
        </div>
    </div>

    <?php foreach (getProducts(10) as $article): ?>
        <div class="col-md-3 well product" style="height: 300px">
            <a href="?page=20&article=<?php echo $article->id_product; ?>">
                <img src="<?php echo $article->image?>" class="img-responsive img-thumbnail">
                <h3><?php echo $article->name; ?></h3>
            </a>
            <h4><?php echo $article->price; ?> €</h4>
        </div>
    <?php endforeach; ?>
</div>
