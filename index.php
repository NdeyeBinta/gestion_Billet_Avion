<?php
require_once'public/Web/rooting.php';
require_once'public/Web/menu.php';
require_once'model/DB.php';
if(isset($_GET['page'])){
    switch($_GET['page']){
        case 'Compagnie/add':
            require_once'view/Compagnie/add.php';
            break;
        case 'Compagnie/list':
            require_once'model/CompagnieDB.php';
            $compagnies=listCompagnie();
            require_once'view/Compagnie/list.php';
            break;
        case 'Achat/add':
            require_once'model/AchatDB.php';
            require_once 'view/Achat/add.php';
            break;
        case 'Achat/confirm':
            require_once'model/ConfirmationDB.php';
            require_once 'view/Achat/confirm.php';
            break;
        case 'Achat/list':
            require_once'model/ConfirmationDB.php';
            require_once 'view/Achat/list.php';
            break;
        case'controller/ConfirmationController.php':
            require_once'model/ConfirmationDB.php';
            require_once 'controller/ConfirmationController.php';
            break;
        case 'Confirmation/listConfirme':
            require_once'model/ConfirmationDB.php';
            $listeConfirme=listeAchatConfirme();
            require_once'view/Confirmation/listConfirme.php';
            break;
        case 'Confirmation/listNonConfirme':
            require_once'model/ConfirmationDB.php';
            $listeConfirme=listeAchatNonConfirme();
            require_once'view/Confirmation/listeNonConfirme.php';
            break;
        default:
            header("location:$base_url");
            break;

    }

}
?>