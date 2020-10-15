<?php
function addAchat($nom,$prenom,$destination){

    $sql="INSERT INTO achat
          VALUES(null,'$nom','$prenom','$destination')";
    //echo $sql;
    return executeSQL($sql);
}
function updateClient($code,$nom,$prenom,$destination){
    $sql="UPDATE client SET
          nom='$nom',
          prenom='$prenom',
          destination='$destination'
          WHERE code=$code ";
    return executeSQL($sql);
}
function listAchat(){
    $sql="SELECT * FROM achat";
    return executeSQL($sql);
}

?>