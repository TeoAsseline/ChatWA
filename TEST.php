<?php
    require_once('BDD.php');
    $req = $db->prepare('SELECT * FROM chat');
    $req->execute();
    $liste= $req->fetchAll();
    print_r($liste);
?>