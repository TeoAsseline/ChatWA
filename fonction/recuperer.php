<?php
    session_start();
    require_once('BDD.php');
    require("./datefonction.php");
    $db = ConnexionBD();
    $liste=array();
    $conv=$_POST['conv'];
    $pseudo=$_POST['pseudo'];
    $datearrive=$_POST['datearrive'];
    try{
        //-----------------------------------------------------//
        /////// récupère la liste des chats (10 derniers) ///////
        //-----------------------------------------------------//
        $dixmessage = $db->prepare("SELECT * FROM chat WHERE conv=:conv AND horaire < :dateA ORDER BY horaire DESC LIMIT 10");
        $dixmessage->execute(array(':conv' => $conv,':dateA' => $datearrive));
        if($dixmessage->rowCount() > 0){
            $liste = $dixmessage->fetchAll();
            $liste = array_reverse($liste);
        }
        //------------------------------------------------------------//
        /////// récupère la liste des chats arrivé apres horaire ///////
        //------------------------------------------------------------//
        $derniermessage = $db->prepare("SELECT * FROM chat WHERE conv=:conv AND horaire > :dateA ORDER BY horaire");
        $derniermessage->execute(array(':conv' => $conv,':dateA' => $datearrive));
        if($derniermessage->rowCount() > 0){
            $liste = array_merge_recursive($liste,$derniermessage->fetchAll());
        }
        foreach($liste as $message):?>
            <div class="divM" style="<?php if($message['auteur']==$pseudo){echo "border:solid 2px #f1d18a";}?>">
                <label id="Mtemps"><?php echo tempsecoule($message['horaire']);?></label>
                <label id="Mauteur" style="<?php if($message['auteur']==$pseudo){echo "color:#588d9c";}?>">
                    <?php echo $message['auteur'];?>
                </label>
                <label id="Mcontenu"><?php echo $message['contenu'];?></label>
            </div>
        <?php endforeach;
    } catch(Exception $e){
        die('Erreur : ' . $e->getMessage());
    }
?>