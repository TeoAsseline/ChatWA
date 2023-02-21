<?php
    $server = '145.14.156.192';
    $login = 'u563109936_weidnine';
    $mdp = 'TipTopLesHaric0ts';
    $db = 'u563109936_R410_Messageri';
    try {
        $db = new PDO("mysql:host=$server;dbname=$db", $login, $mdp);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    ///Capture des erreurs éventuelles
    catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
?>