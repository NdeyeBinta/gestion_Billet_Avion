<?php
function getConnexion(){
    $host="";
    $user="root";
    $password="";
    $dbname="gestion_Billet_Avion";
    $con=mysqli_connect($host,
        $user,
        $password,
        $dbname);
    return $con;
}
function executeSQL($sql){
    $connexion=getConnexion();
    $exact=mysqli_query($connexion,$sql);//or die(mysqli_error($connexion));
    //echo $exact;
    return $exact;
}
?>