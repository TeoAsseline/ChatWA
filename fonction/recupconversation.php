<?php
    require_once('BDD.php');
    $db = ConnexionBD();
    $liste=null;
    //-------------------------------------------//
    /////// récupération des conversations  ///////
    //-------------------------------------------//
    $req = $db->prepare("SELECT * FROM conversations");
    $req->execute();
    if($req->rowCount() > 0){
        $liste = $req->fetchAll();
    }
?>