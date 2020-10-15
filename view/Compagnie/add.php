<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Add Compagnie</title>
    <link rel="stylesheet" type="text/css" href="./public/css/bootstrap-cerulean.min.css">
</head>
<body>
<?php
if(isset($_GET['ok'])) {
    if ($_GET['ok'] == 1) {
        echo '<div  class="alert alert-success" style="margin-top:60px">donnees ajoutees</div>';

    } else {
        echo '<div  class="alert alert-danger" style="margin-top:60px;">donnees non ajoutees</div>';
    }
}

?>

<div class="container" style='padding-top: 75px;'>
    <div class="panel panel-info">
        <div class="panel-heading">Formulaire des Compagnie</div>
        <div class="panel-body">
            <form action="<?php echo $base_url;?>controller/CompagnieController.php" method="POST">
                <div class="form-group">
                    <label class="control-label">nom Compagnie</label>
                    <input class="form-control" type="text" name="nomC" id="nomC"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Adress</label>
                    <input class="form-control" type="text" name="adressC" id="adressC"/>
                </div>
                <div>
                    <input type="submit" class="btn btn-success"  name="valider" id="valider" value="Envoyer"/>
                    <input type="submit" class="btn btn-warning" name="annuler" id="annuler" value="Annuler" />
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>