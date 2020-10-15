<?php
if(isset($_GET['code']) && isset($_GET['idC']))
{
    $ok=updateConfirmation($_GET['code'],$_GET['idC'],1);
    header("location:$base_url?page=Achat/list&ok=$result");
}
?>