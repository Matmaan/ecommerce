<!doctype html>
    <html>
        <head>
            <meta charset="utf8">
            <meta name="viewport" content="width=device-width", initial-scale="1.0">
            <title>Récupération de mot de passe</title>
        </head>
        <body>
            <?php include_once('pages/header.php'); ?>
            <div class="container">
                <div class="row">
                    <h4 class="title-element">Récupérer votre mot de passe</h4>
                    <form method="post" class="defaut-form" action="recuperation.php">
                        <input type="email" placeholder="Votre email" name="recup_email"/><br/>
                        <input type="submit" value="Valider" name="recup_submit"/>
                    </form>
                </div>
            </div>
            <?php if(isset($error)) {echo '<span style="color:red">' .$error.'</span>';}
            else { echo "<br />"; } ?>
        </body>
    </html>
