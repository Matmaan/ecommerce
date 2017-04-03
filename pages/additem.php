<?php
// include 'header.php';
include_once 'function/fnc.AddItem.php';
 ?>
        <div class="container text-center">
            <p>Racontez-nous votre rêve...</p>
        </div>
        <div class="container">
            <form method="POST">
                <div class="form-group">
                    <label for="name" class="control-label">Nom du rêve</label>
                    <input type="text" name="name" value="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="category" class="control-label">A quelle catégorie appartient votre rêve ?</label>

                    <select name="category" id="category" class="form-control">
                        <?php foreach (selectcategory() as $category) {
                            echo "<option value=".$category['id_category'].">".$category['category']."</option>";

                    <select name="category" id="category">
                        <?php foreach (getCategories() as $category) {
                            echo "<option value=".$category->id_category.">".$category->category."</option>";

                        } ?>    
                    </select>
                </div>

                <div class="form-group">
                    <label for="description" class="control-label">Description du rêve</label>
                    <textarea name="description" rows="8" cols="80" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="image" class="control-label">Dessinez-nous votre rêve</label>
                    <input type="text" class="form-control" id="image" name="image">
                </div>

                <div class="form-group">
                    <label for="price" class="control-label">Fixez un prix de vente pour votre rêve</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="form-group">
                    <label for="quantity" class="control-label">Quantité disponible</label>
                    <input type="text" class="form-control" id="quantity" name="quantity">
                </div>

                <button type="submit" class="btn btn-info">Valider</button>
            </form>
        </div>
