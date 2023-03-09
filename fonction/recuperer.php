<?php
    require_once('BDD.php');
    $db = ConnexionBD();
    $liste=null;
    //--------------------------------------------//
    /////// compte nb de chat dans une conv  ///////
    //--------------------------------------------//
    $req2 = $db->prepare("SELECT count(*) FROM chat WHERE conv=:conv");
    $req2->execute(array(':conv' => $_GET['conv']));
    $nb = $req2->fetchAll();
    if($nb[0]["count(*)"]<=10){$nb=0;}else{$nb= (int) $nb[0]["count(*)"]-10;};
    //------------------------------------------//
    /////// récupère les infos de la conv  ///////
    //------------------------------------------//
    $nomconv = $db->prepare("SELECT * FROM conversations WHERE id_conv=:conv");
    $nomconv->execute(array(':conv' => $_GET['conv']));
    $Nconv = $nomconv->fetchAll();
    //----------------------------------------------------------------------------//
    /////// récupère la liste des chats (10 derniers) ou un chat par son id  ///////
    //----------------------------------------------------------------------------//
    if(!isset($_GET['id'])){
        $req = $db->prepare("SELECT * FROM chat WHERE conv=:conv ORDER BY horaire LIMIT 10 OFFSET ".$nb);
        $req->execute(array(':conv' => $Nconv[0]['id_conv']));
    } else {
        $req = $db->prepare("SELECT * FROM chat WHERE conv=:conv AND id=:id ORDER BY horaire");
        $req->execute(array(':id' => $_GET['id'],':conv' => $Nconv[0]['id_conv']));
    }
    if($req->rowCount() > 0){
        $liste = $req->fetchAll();
    } else {
        $liste =array();
    }
?>