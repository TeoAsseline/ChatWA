<?php
    require_once('BDD.php');
    $db = ConnexionBD();
    $liste=null;
    //-------------------------------------------//
    /////// récupération des conversations  ///////
    //-------------------------------------------//
    if(!isset($_GET['conv'])){
        try{
            $req = $db->prepare("SELECT * FROM conversations");
            $req->execute();
            if($req->rowCount() > 0){
                $liste = $req->fetchAll();
            }
        } catch(Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
    } else {
        //------------------------------------------//
        /////// récupère les infos de la conv  ///////
        //------------------------------------------//
        try{
            $nomconv = $db->prepare("SELECT * FROM conversations WHERE id_conv=:conv");
            $nomconv->execute(array(':conv' => $_GET['conv']));
            $Nconv = $nomconv->fetchAll();
        } catch(Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
    }
?>