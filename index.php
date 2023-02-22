<?php
    require_once("./page/header.php");
    require_once('./fonction/BDD.php');
    $liste = select();
    require_once("./page/accueil.php");
?>