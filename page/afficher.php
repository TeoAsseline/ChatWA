<!--page conversation-->
<?php
    require("./fonction/datefonction.php");
    //-------------------//
    /////// PSEUDO  ///////
    //-------------------//
    if(isset($_GET['pseudo']) && $_GET['pseudo']!=null){
        $pseudo=htmlspecialchars($_GET['pseudo']);
        $pseudoR="?pseudo=".htmlspecialchars($_GET['pseudo']);
    } else {
        $pseudo=null;
        $pseudoR="";
    }
?>
<main>
    <!--button retour-->
    <a id="retour" href="index.php<?php echo $pseudoR;?>">Retour</a>
    <!--nom conversation---->
    <h1 class="titre"><?php echo $Nconv[0]['nom'];?></h1>
    <div class="discussion">
        <!--chaque message-->
        <?php foreach($liste as $message):?>
            <div class="divM" style="<?php if($message['auteur']==$pseudo){echo "border:solid 2px #f1d18a";}?>">
                <label id="Mtemps"><?php echo tempsecoule($message['horaire']);?></label>
                <label id="Mauteur" style="<?php if($message['auteur']==$pseudo){echo "color:#588d9c";}?>">
                    <?php echo $message['auteur'];?>
                </label>
                <label id="Mcontenu"><?php echo $message['contenu'];?></label>
            </div>
        <?php endforeach;?>
        <!--envoie de message-->
        <form id="messageF" action="./fonction/enregistrer.php">
            <input type="hidden" name="pseudo" value="<?php echo $pseudo?>" />
            <input type="hidden" name="conv" value="<?php echo $Nconv[0]['id_conv']?>" />
            <input type="text" id="message" name="message" placeholder="Bonjour, ça va ?..." 
            <?php if(!isset($_GET['pseudo'])){ echo 'style="color:#588d9c"';echo 'disabled="true"';}?> required/>
            <input type="submit" class="button" name="envoyer" value="Envoyer"
            <?php if(!isset($_GET['pseudo'])){ echo 'style="color:#588d9c"';echo 'disabled="true"';}?>/>
        </form>
    </div>
    </main>
</body>
</html>