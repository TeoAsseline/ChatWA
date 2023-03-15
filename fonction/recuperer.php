<?php
    require_once('BDD.php');
    require("./datefonction.php");
    $db = ConnexionBD();
    $liste=null;
    $conv=$_POST['conv'];
    $pseudo=$_POST['pseudo'];
    //--------------------------------------------//
    /////// compte nb de chat dans une conv  ///////
    //--------------------------------------------//
    try{
        $req2 = $db->prepare("SELECT count(*) FROM chat WHERE conv=:conv");
        $req2->execute(array(':conv' => $conv ));
        $nb = $req2->fetchAll();
        if($nb[0]["count(*)"]<=10){$nb=0;}else{$nb= (int) $nb[0]["count(*)"]-10;};
        //----------------------------------------------------------------------------//
        /////// récupère la liste des chats (10 derniers) ou un chat par son id  ///////
        //----------------------------------------------------------------------------//
        $req = $db->prepare("SELECT * FROM chat WHERE conv=:conv ORDER BY horaire LIMIT 10 OFFSET ".$nb);
        $req->execute(array(':conv' => $conv)); 
        if($req->rowCount() > 0){
            $liste = $req->fetchAll();
            foreach($liste as $message):?>
                <div class="divM" style="<?php if($message['auteur']==$pseudo){echo "border:solid 2px #f1d18a";}?>">
                    <label id="Mtemps"><?php echo tempsecoule($message['horaire']);?></label>
                    <label id="Mauteur" style="<?php if($message['auteur']==$pseudo){echo "color:#588d9c";}?>">
                        <?php echo $message['auteur'];?>
                    </label>
                    <label id="Mcontenu"><?php echo $message['contenu'];?></label>
                </div>
            <?php endforeach;
        } else {
            $liste =array();
        }
    } catch(Exception $e){
        die('Erreur : ' . $e->getMessage());
    }
?>