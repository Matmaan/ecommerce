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
<nav class="navigation post-navigation meta-box" role="navigation">
	<nav class="text-center">
        <ul class="pagination pagination-centered">
            <li><span class="pages">Page 1 of 128</span></li>
            <li></li>
            <li class="active"><span>1</span></li>
            <li><a class="page larger" href="http://www.hearthstonetopdecks.com/page/2/">2</a></li>
            <li><a class="page larger" href="http://www.hearthstonetopdecks.com/page/3/">3</a></li>
            <li><a class="page larger" href="http://www.hearthstonetopdecks.com/page/4/">4</a></li>
            <li><a class="page larger" href="http://www.hearthstonetopdecks.com/page/5/">5</a></li>
            <li><span class="extend">...</span></li>
            <li><a class="larger page" href="http://www.hearthstonetopdecks.com/page/10/">10</a></li>
            <li><a class="larger page" href="http://www.hearthstonetopdecks.com/page/20/">20</a></li>
            <li><a class="larger page" href="http://www.hearthstonetopdecks.com/page/30/">30</a></li>
            <li><span class="extend">...</span></li>
            <li><a class="nextpostslink" rel="next" href="http://www.hearthstonetopdecks.com/page/2/">»</a></li>
            <li><a class="last" href="http://www.hearthstonetopdecks.com/page/128/">Last »</a></li>
</ul>
            </nav>			</nav>
