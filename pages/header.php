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
                <div class="container navContainer">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="?page=home">Ecommerce</a>
                    </div>

                    <div>
                        <ul class="nav navbar-nav">
                        <?php foreach(getCategories() as $category): ?>
                            <li class="<?= (isset($_GET["category"]) && $_GET["category"] == $category->id_category)? "active" : "" ;?>"><a href="?page=home&category=<?php echo $category->id_category; ?>"><?php echo $category->category; ?></a></li>
                        <?php endforeach; ?>
                        </ul>

                        <!-- Inscription, connexion OU Profil -->
                        <ul class="nav navbar-nav navbar-right">
                        <?php if (isset($_SESSION['user'])) :?>
                            <li class="<?= ($_GET["page"]=="contact-profile")? "active" : "" ; ?>"><a href="?page=contact-profile">
                                <?= "Bonjour ".($_SESSION['user']->login); ?>
                            </a></li>
                        <?php else: ?>
                            <li class="<?= ($_GET["page"]=="inscription")? "active" : "" ; ?>"><a href="?page=inscription">Inscription</a></li>
                            <li class="<?= ($_GET["page"]=="connexion")? "active" : "" ; ?>"><a href="?page=connexion">Connexion</a></li>
                        <?php endif; ?>
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
