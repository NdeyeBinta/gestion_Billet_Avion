<?php
if((isset($_GET['idC'])) && (isset($_GET['nomC'])) && (isset($_GET['adressC']))  && (isset($_GET['code'])) ){

    echo"<div style='padding-top: 75px;'></div>";
    echo " Information ";
    echo "<br/>";
    echo "NOM: ".$_GET['nomC'];
    echo "<br/>";
    echo "Vous Remercie" ;
    echo "<br/>";
    echo "A Bientot" ;
    $idC=$_GET['idC'];
    $code=$_GET['code'];
    addConfirmation($_GET['code'],$_GET['idC']);
   // echo"<a href='?page=Controller/ConfirmationController&code=$code&idC=$idC'> JE CONFIRMER</a>";


}