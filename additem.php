<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        <!-- <link rel="stylesheet" type="text/css" href="css/main.css"> -->
        <title></title>
    </head>
    <body>
        
        <div class="row">
            <div class="col-md-3">
                INCLUDE SIDE BAR
            </div>
            <div class="col-md-9">
                <form method="POST">
                    <div class="form-group">
                        <label for="name" class="control-label">Nom du produit</label>
                        <input type="text" name="name" value="" class="form-control">

                        <select name="category" id="category">
                        </select>

                        <label for="description" class="control-label">Description du produit</label>
                        <textarea name="description" rows="8" cols="80" class="form-control"></textarea>

                        <label for="image" class="control-label">Image</label>
                        <input type="text" name="productname" value="" class="form-control">

                    </div>
                </form>
            </div>
        </div>

        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/vendor/bootstrap.js"></script>
        <script src="app/app.js"></script>
    </body>
</html>
