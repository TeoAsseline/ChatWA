<?php
    require_once('BDD.php');
    $db = ConnexionBD();
    $liste=null;
    $req = $db->prepare("SELECT * FROM conversations");
    $req->execute();
    if($req->rowCount() > 0){
        $liste = $req->fetchAll();
    }
?>