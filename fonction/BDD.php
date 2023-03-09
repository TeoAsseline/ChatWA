<?php
    //--------------------------//
    /////// Connexion BDD  ///////
    //--------------------------//
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
?>