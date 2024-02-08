<?php
    //--------------------------//
    /////// Connexion BDD  ///////
    //--------------------------//
    function ConnexionBD(){
        ///Connexion au serveur MySQL avec PDO
        $server = 'localhost';
        $login = 'root';
        $mdp = '';
        $db = 'chatwa';
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