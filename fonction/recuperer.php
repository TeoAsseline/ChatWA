<?php
    require_once('BDD.php');
    $db = ConnexionBD();
    $liste=null;
    $req2 = $db->prepare("SELECT count(*) FROM chat");
    $req2->execute();
    $nb = $req2->fetchAll();
    $nb= (int) $nb[0]["count(*)"]-10;
    if(!isset($_GET['id'])){
        $req = $db->prepare("SELECT * FROM chat ORDER BY horaire LIMIT 10 OFFSET ".$nb);
        $req->execute();
    } else {
        $req = $db->prepare("SELECT * FROM chat WHERE id=:id ORDER BY horaire LIMIT 10 OFFSET ".$nb);
        $req->execute(array(':id' => $_GET['id']));
    }
    if($req->rowCount() > 0){
        $liste = $req->fetchAll();
    }
?>