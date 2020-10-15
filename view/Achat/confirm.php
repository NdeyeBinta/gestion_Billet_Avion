<?php
if((isset($_GET['idC'])) && (isset($_GET['nomC'])) && (isset($_GET['adressC']))  && (isset($_GET['code'])) ){


    echo"<div style='padding-top: 75px;'></div>";

    echo " vous etes sur le point de confirmer votre achat ";
    echo "<br/>";
    echo "ID :" .$_GET['idC'];
    echo "<br/>";
    echo "NOM: ".$_GET['nomC'];
    echo "<br/>";
    echo "Adress " .$_GET['adressC'];
    echo "<br/>";
    $idC=$_GET['idC'];
    $code=$_GET['code'];
    addConfirmation($_GET['code'],$_GET['idC']);
    echo"<a href='?page=Controller/ConfirmationController&code=$code&idC=$idC'> JE CONFIRMER</a>";


}