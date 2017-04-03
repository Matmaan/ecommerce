<?php
    // Récupération de la fiche produit
    isset($_GET["article"]) ?
        $article = getProduct($_GET["article"])
        : header("location: index.php?page=404") ;

?>

<div class="container">
    <!-- ****************************************** -->
    <!-- 				1st image 					-->
    <!-- ****************************************** -->
    <div class="row">
        <div class="col-md-8 well">
            <img class="img-responsive center-block" src="<?php echo $article->image; ?>" alt="">
        </div>
        <div class="col-md-4 bg-warning" style="padding: 30px;">
            <div class="row">
                <h2><?php echo $article->name; ?></h2>
                <p id="description"><?php echo $article->description ?></p>
            </div>
            <div class="row">
                <div class="form-group">
                    <span>Quantité :</span>

                    <select class="" name="">
                        <?php for($i = 1; $i < 7; $i++): ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn">Ajouter au panier</button>
                </div>
            </div>
        </div>
    </div><!-- End row -->
</div>
