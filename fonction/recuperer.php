<?php
    require_once('BDD.php');
    
    $sql = ConnexionBD();
        
    $req = $sql->prepare("SELECT * FROM chat LIMIT 10");
    $req->execute();    
    if($req->rowCount() > 0){
        $data = $req->fetchAll(PDO::FETCH_ASSOC);
        print_r ($data);
    }
?>