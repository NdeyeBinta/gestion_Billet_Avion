<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Accueil</title>
        <link rel="stylesheet" href="<?php echo $base_url;?>public/css/bootstrap-cerulean.min.css"/>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <ul class="nav navbar-nav">
                <li><a href="?page=Compagnie/list">Liste des Compagnie </a></li>
                <li><a href="?page=Confirmation/listConfirme">Visualiser les Achats confirmes</a></li>
                <li><a href="?page=Confirmation/listNonConfirme">Visualiser les Achats non confirme</a></li>
            </ul>
        </div>
    </body>
</html>