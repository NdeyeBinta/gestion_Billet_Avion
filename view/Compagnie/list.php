<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compagnie</title>
    <link rel="stylesheet" type="text/css" href="./public/css/bootstrap-cerulean.min.css">
</head>
<body>
<div class="container " style="margin-top: 75px;">
    <div class="panel">
        <div class=" panel-heading" style="text-shadow: #d9edf7;">Compagnie</div>
        <div class="panel-body">
            <table class="table table-bordered table-responsive table-stripped">
                <tr>

                    <th>Identifiant</th>
                    <th>Nom Compagnie</th>
                    <th>Adress</th>
                    <th>Acheter</th>

                </tr>
        </div>
        <?php
        while($compagnie=mysqli_fetch_object($compagnies)){

            echo "<tr>
                            <td>".$compagnie->idC."</td>
                            <td>".$compagnie->nomC."</td>
                            <td>".$compagnie->adressC."</td>
                            <td><a href='?page=Achat/add&idC=".$compagnie->idC."&nomC=".$compagnie->nomC."&adressC=".$compagnie->adressC."'>Acheter</a></td>
                            </tr>";
        }


        ?>

        </table>
        <div class="btn btn-success">
            <a href="?page=Compagnie/add">AJOUTER</a>
        </div>
    </div>
</div>
</body>
</html>