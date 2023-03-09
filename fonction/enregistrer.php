<?php 
    require_once('BDD.php');
    $sql = ConnexionBD();
    //------------------------------------//
    /////// recuperation de données  ///////
    //------------------------------------//
    $pseudo = htmlspecialchars($_GET['pseudo']);
    $texte = htmlspecialchars($_GET['message']);
    $conv = htmlspecialchars($_GET['conv']);
    date_default_timezone_set('Europe/Paris');
    $horaire = date("Y-m-d H:i:s");
    //----------------------------------------//
    /////// requete d'insertion de chat  ///////
    //----------------------------------------//
    $req = $sql->prepare("INSERT INTO chat VALUES (null,:horaire,:pseudo,:texte,:conv)");
    $req->execute(array(':horaire' => $horaire, ':pseudo' => $pseudo, ':texte' => $texte,':conv' => $conv));
?>
<!--Redirection de page-->
<script>
  window.location.href = "../index.php?page=afficher&pseudo=<?php echo $pseudo?>&conv=<?php echo $conv;?>";
</script>