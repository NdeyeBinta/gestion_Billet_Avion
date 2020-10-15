<?php
require_once'..\model\DB.php';
require_once'..\model\AchatDB.php';
require_once'..\public\Web\rooting.php';
if(isset($_POST['valider'])){
    extract($_POST);
    $idC=$_POST['idC'];
    $nomC=$_POST['nomC'];
    $adressC=$_POST['adressC'];
    $result=addAchat($nom,$prenom,$destination);
    header ("location:$base_url?page=Achat/confirm&idC=$idC&nomC=$nomC&adressC=$adressC&code=$code");
}
?>