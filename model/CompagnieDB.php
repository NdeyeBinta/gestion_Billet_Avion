<?php
function addCompagnie($nomC,$adressC){

    $sql="INSERT INTO compagnie
          VALUES(null,'$nomC','$adressC')";
    //echo $sql;
    return executeSQL($sql);
}
function updateCompagnie($idC,$nomC,$adressC){
    $sql="UPDATE vehicule SET
          nomC='$nomC',
          adressC=$adressC,
          WHERE idC=$idC";
    return executeSQL($sql);
}
function listCompagnie(){
    $sql="SELECT * FROM compagnie";
    return executeSQL($sql);
}
?>