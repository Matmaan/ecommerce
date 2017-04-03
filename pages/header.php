<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ecommerce</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Montserrat" rel="stylesheet">
    </head>
    <body>

        <!-- Header -->
        <header class="main-header">
            <nav class="navbar navbar-default">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <a class="navbar-brand" href="?page=home">Ecommerce</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div>
                  <ul class="nav navbar-nav">
                  <?php foreach(getCategories() as $category): ?>
                      <li><a href="?category=<?php echo $category->id_category; ?>"><?php echo $category->category; ?></a></li>
                  <?php endforeach; ?>
                  </ul>

                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="?page=inscription">Inscription</a></li>
                    <li><a href="?page=connexion">Connexion</a></li>
                    <li><a href="?page=additem">Ajouter un article</a></li>
                  </ul>

                  <form  action="?page=99" class="navbar-form navbar-right">
                    <div class="form-group">
                      <input type="text" id="search" class="form-control" placeholder="Rechercher">
                    </div>
                  </form>

                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
        </header>

        <!-- Content -->
        <div class="main-content">
            <div class="container">
