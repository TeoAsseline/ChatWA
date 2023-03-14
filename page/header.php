<?php
session_start();
?>
<!--header-->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="icon" href="./image/logo.png">
    <title>Chat WA</title>
    <script src="./js/audio.js"></script>
</head>
<body>
    <!--Menu de navigation-->
    <header>
            <!--champ de saisie pseudo-->
            <div>
                <?php if(!isset($_SESSION['pseudo'])):?>
                    <a class="button" name="connexion" href='index.php?page=connexion'>Connexion</a>
                <?php endif;?>
            </div> 
            <!--logo-->
            <div>
                <a href="#" style="background-color: #588d9c;"><img class="logo" src="./image/logo.png" alt="LogoDuSite" onclick="logoWario();"></a>
            </div>
            <!--deconnexion-->
            <div>
                <?php if(isset($_SESSION['pseudo'])):?>
                    <label class="label" id="affichP"><?php echo $_SESSION['pseudo'];?></label>   
                    <a class="button" name="Deconnexion" href='./fonction/deconnexion.php'>Deconnexion</a>
                <?php else: ?>
                    <label class="label" style="display:block;">Bienvenue sur Chat WA, veuillez vous connecter pour commencer à WAAA !</label>
                <?php endif;?>
            </div>     
    </header>