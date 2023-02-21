<?php
    function ConnexionBD(){
        ///Connexion au serveur MySQL avec PDO
        $server = '145.14.156.192';
        $login = 'u563109936_weidnine';
        $mdp = 'm|8MmdqL^1E';
        $db = 'u563109936_R410_Messageri';
        try {
            $linkpdo = new PDO("mysql:host=$server;dbname=$db;charset=utf8mb4", $login, $mdp);
            $linkpdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        ///Capture des erreurs éventuelles
        catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        return $linkpdo;
    }
    function select($id=null){
        $db = ConnexionBD();
        if(is_null($id)){
            $req = $db->prepare("SELECT * FROM chat");
            $req->execute();
        } else {
            $req = $db->prepare("SELECT * FROM chat WHERE id=:id");
            $req->execute(array(':id' => $id));
        }
        return $req->fetchAll();
    }
?>