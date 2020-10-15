<?php
require_once'..\model\DB.php';
require_once'..\model\CompagnieDB.php';
require_once'..\public\Web\rooting.php';
require_once '../controller/CompagnieController.php';
if(isset($_POST['valider'])){
    extract($_POST);
    $result=addCompagnie($nomC,$adressC);
   // $base = base_url();
    header ("location:$base_url?page=Compagnie/add&ok=$result");
}

else
    echo "no";
?>