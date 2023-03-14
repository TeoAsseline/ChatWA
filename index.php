<?php
    //-------------------//
    /////// HEADER  ///////
    //-------------------//
    if(isset($_GET['page'])){
        $page=$_GET['page'];
        switch ($page) {
            //-------------------------//
            /////// CONVERSATION  ///////
            //-------------------------//
            case "connexion":
                require_once("./page/connexion.php");
                break;
            //-------------------------//
            /////// CONVERSATION  ///////
            //-------------------------//
            case "afficher":
                require_once("./page/header.php");
                $conv=$_GET['conv'];
                echo $conv;
                require_once("./page/afficher.php");
                break;
            //-------------------//
            /////// SALON   ///////
            //-------------------//
            default:
                require_once("./page/header.php");
                require_once('./fonction/recupconversation.php');
                require_once("./page/salon.php");
                break;
        }
    } else {
        //-------------------//
        /////// SALON   ///////
        //-------------------//
        require_once("./page/header.php");
        require_once('./fonction/recupconversation.php');
        require_once("./page/salon.php");
    }
?>