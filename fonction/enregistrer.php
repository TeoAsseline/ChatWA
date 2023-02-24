<?php 
    require_once('BDD.php');
    $sql = ConnexionBD();
    $pseudo = htmlspecialchars($_GET['pseudo']);
    $texte = htmlspecialchars($_GET['message']);
    date_default_timezone_set('Europe/Paris');
    $horaire = date("Y-m-d H:i:s");
    $req = $sql->prepare("INSERT INTO chat VALUES (null,:horaire,:pseudo,:texte)");
    $req->execute(array(':horaire' => $horaire, ':pseudo' => $pseudo, ':texte' => $texte));
?>
<script>
  window.location.href = "../index.php?pseudo=<?php echo $pseudo?>#message";
</script>