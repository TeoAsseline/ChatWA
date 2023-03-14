<?php
    require_once('BDD.php');
    $db = ConnexionBD();
    $listeA=null;
    //-------------------------------------------//
    /////// récupération des auteurs        ///////
    //-------------------------------------------//
    $req = $db->prepare("SELECT DISTINCT auteur FROM chat where conv=:conv");
    $req->execute(array(":conv"=>$idconv));
    if($req->rowCount() > 0){
        $listeA = $req->fetchAll();
    }
?>