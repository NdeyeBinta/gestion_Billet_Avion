<?php
function addConfirmation($code,$idC){

    $sql="INSERT INTO confirmation
          VALUES($code,$idC,0)";
    return executeSQL($sql);
}
function listConfirmation(){
    $sql="SELECT * FROM confirmation";
    return executeSQL($sql);
}
function updateConfirmation($code,$idC,$etat){

    $sql="UPDATE confirmation SET
          etat=$etat
    WHERE code=$code
    AND idC=$idC ";
    return executeSQL($sql);
}
function listeAchatConfirme(){
    $sql="SELECT * FROM compagnie C,achat A ,confirmation D
    WHERE C.idC=D.idC
    AND D.code=A.code
    AND etat=1";
    return executeSQL($sql);
}
function listeAchatNonConfirme(){
    $sql="SELECT * FROM compagnie C,achat A ,confirmation D
    WHERE C.idC=D.idC
    AND D.code=A.code
    AND etat=0";
    return executeSQL($sql);
}


?>