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
            <table class="table table-stripped table-responsive table-stripped">
                <tr>

                    <th>Identifiant</th>
                    <th>Nom Compagnie</th>
                    <th>Adress</th>
                    <th>Nom Client</th>
                    <th>Prenom Client</th>
                    <th>Destination Client</th>
                </tr>
        </div>
        <?php
        while($Confirmation=mysqli_fetch_object($listeConfirme)){

            echo "<tr>
                            <td>".$Confirmation->idC."</td>
                            <td>".$Confirmation->nomC."</td>
                            <td>".$Confirmation->adressC."</td>
                            <td>".$Confirmation->nom."</td>
                            <td>".$Confirmation->prenom."</td>
                            <td>".$Confirmation->destination."</td>
                </tr>";
        }


        ?>

        </table>

    </div>
</div>
</body>
</html>