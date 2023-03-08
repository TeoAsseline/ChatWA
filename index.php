<?php
    require_once("./page/header.php");
    if(isset($_GET['page'])){
        $page=$_GET['page'];
        switch ($page) {
            case "afficher":
                $conv=$_GET['conv'];
                echo $conv;
                require_once("./fonction/recuperer.php");
                require_once("./page/afficher.php");
                break;
            default:
                require_once('./fonction/recupconversation.php');
                require_once("./page/salon.php");
                break;
        }
    } else {
        require_once('./fonction/recupconversation.php');
        require_once("./page/salon.php");
    }
?>