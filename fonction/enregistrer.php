<?php 
    session_start();
    require_once('BDD.php');
    $sql = ConnexionBD();
    //------------------------------------//
    /////// recuperation de données  ///////
    //------------------------------------//
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $texte = htmlspecialchars($_POST['message']);
    $conv = htmlspecialchars($_POST['conv']);
    date_default_timezone_set('Europe/Paris');
    $horaire = date("Y-m-d H:i:s");
    //----------------------------------------//
    /////// requete d'insertion de chat  ///////
    //----------------------------------------//
    $req = $sql->prepare("INSERT INTO chat VALUES (null,:horaire,:pseudo,:texte,:conv)");
    $req->execute(array(':horaire' => $horaire, ':pseudo' => $pseudo, ':texte' => $texte,':conv' => $conv));
?>