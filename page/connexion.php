<?php
session_start();
if(isset($_POST['retour'])){
    ?><script type='text/javascript'>document.location.replace('index.php?page=salon');</script><?php
}
//si le bouton "Connexion" est cliqué
if(isset($_POST['submit'])){
    // on vérifie que le champ "Pseudo" n'est pas vide
    if(empty($_POST['username'])){
        session_unset();
        echo '<label class="errorL">Le champ Identifiant est vide.</label>';
    } else {
        // on vérifie maintenant si le champ "Mot de passe" n'est pas vide"
        if(empty($_POST['mdp'])){
            session_unset();
            echo '<label class="errorL">Le champ Mot de passe est vide.</label>';
        } else {
            $id=$_POST['username'];
            $mdp=$_POST['mdp'];
            $_SESSION['pseudo']=$id;
            ?>
            <script type='text/javascript'>document.location.replace('index.php?page=salon');</script>
            <?php
        }
    }
}
?>
<html>
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css" />
    <script src="./js/audio.js"></script>
 </head>
 <body class="index">
   <div class="signin"> <!--signin-->
      <div class="backimg"> <!--img-->
         <div class="signinTitre">
            <h2 class="active">CONNEXION</h2>
         </div>
         <div class="ligne">
         </div>
      </div> <!--fin img-->
      <div class="form-section">
         <form id="formConnect" onsubmit="pseudoWario();" method="POST"> <!--form-->
            <!--Email-->
            <div class="Cform">
               <label class="Clabel">Identifiant</label>
               <input class="" type="text" id="username" name="username" placeholder="Menwizz...">
            </div>
            <!--Password-->
            <div class="Cform">
               <label class="Clabel">Mot de Passe</label>
               <input class="" type="password" id="mdp" name="mdp" placeholder="monmdp...">
            </div>
            <input type="submit" name="submit" for="formConnect" class="signinBtn" value="SE CONNECTER"></input>
            <input type="submit" name="retour" for="formConnect" class="retour" value="ANNULER"></input>
         </form> <!--fin form-->
      </div>
   </div><!--fin signin-->
 </body>
</html>