<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Info Personnelle</title>
    <link rel="stylesheet" type="text/css" href="./public/css/bootstrap-cerulean.min.css">
</head>
<body>
<div class="container" style='padding-top: 75px;'>
    <div class="panel panel-info">
        <div class="panel-heading">Formulaire  Achat du Client</div>
        <div class="panel-body">
            <form action="<?php echo $base_url;?>Controller/AchatController.php" method="POST">
                <div class="form-group">
                    <input readonly class="form-control" type="hidden" name="idC" id="idC" value="<?php if(isset($_GET['idC'])) echo $_GET['idC'];?>"/>
                </div>
                <div class="form-group">
                    <input readonly class="form-control" type="hidden" name="nomC" id="nomC" value="<?php if(isset($_GET['nomC'])) echo $_GET['nomC'];?>"/>
                </div>
                <div class="form-group">
                    <input readonly class="form-control" type="hidden" name="adressC" id="adressC" value="<?php if(isset($_GET['adressC'])) echo $_GET['adressC'];?>"/>
                </div>
                <div class="form-group">
                    <label class="control-label" >ID:</label>
                    <input readonly  class="form-control" type="text" name="idC" id="idC" value="<?php if(isset($_GET['idC'])) {echo $_GET['idC'];} ?>" />
                </div>
                <div class="form-group">
                    <label class="control-label">Nom du client</label>
                    <input class="form-control" type="text" name="nom" id="nom"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Prenom du client</label>
                    <input class="form-control" type="text" name="prenom" id="prenom"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Destination</label>
                    <select name="destination" id="destination" class="form-control">
                        <option value="">faite un choix</option>
                        <option value="France">France</option>
                        <option value="Hollande">Hollande</option>
                        <option value="USA">USA</option>
                        <option value="Senegal">Senegal</option>
                    </select>
                </div>
                <div>
                    <input type="submit" class="btn btn-success"  name="valider" id="valider" value="VALIDER"/>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>