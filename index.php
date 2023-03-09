<?php
    //-------------------//
    /////// HEADER  ///////
    //-------------------//
    require_once("./page/header.php");
    if(isset($_GET['page'])){
        $page=$_GET['page'];
        switch ($page) {
            //-------------------------//
            /////// CONVERSATION  ///////
            //-------------------------//
            case "afficher":
                $conv=$_GET['conv'];
                echo $conv;
                require_once("./fonction/recuperer.php");
                require_once("./page/afficher.php");
                break;
            //-------------------//
            /////// SALON   ///////
            //-------------------//
            default:
                require_once('./fonction/recupconversation.php');
                require_once("./page/salon.php");
                break;
        }
    } else {
        //-------------------//
        /////// SALON   ///////
        //-------------------//
        require_once('./fonction/recupconversation.php');
        require_once("./page/salon.php");
    }
?>