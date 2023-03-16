<?php
    //-------------------//
    /////// HEADER  ///////
    //-------------------//
    if(isset($_GET['page'])){
        $page=$_GET['page'];
        switch ($page) {
            //-------------------------//
            /////// CONNEXION     ///////
            //-------------------------//
            case "connexion":
                require_once("./page/connexion.php");
                break;
            //-------------------------//
            /////// CONVERSATION  ///////
            //-------------------------//
            case "afficher":
                require_once("./page/header.php");
                //-------------------------//
                /////// CONVERSATION  ///////
                //-------------------------//
                $conv=$_GET['conv'];
                //-------------------//
                /////// PSEUDO  ///////
                //-------------------//
                if(isset($_SESSION['pseudo']) && $_SESSION['pseudo']!=null){
                    $pseudo=htmlspecialchars($_SESSION['pseudo']);
                } else {
                    $pseudo=null;
                }
                //-------------------//
                /////// DATE    ///////
                //-------------------//
                date_default_timezone_set('Europe/Paris');
                $datearrive=date("y-m-d h:i:s",time());
                require("./page/afficher.php");
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