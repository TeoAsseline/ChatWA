<!--page conversation-->
<?php
    session_start();
    require("./fonction/datefonction.php");
    require_once("./fonction/recuperer.php");
    //-------------------//
    /////// PSEUDO  ///////
    //-------------------//
    if(isset($_SESSION['pseudo']) && $_SESSION['pseudo']!=null){
        $pseudo=htmlspecialchars($_SESSION['pseudo']);
    } else {
        $pseudo=null;
    }
?>
<main>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!--button retour-->
    <a id="retour" href="index.php?page=salon">Retour</a>
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
        <a href="#" onclick="SALUT(); return false;">Test</a>
        <script type="text/javascript" src="../js/oui.js"></script>
    </div>
    </main>
</body>
</html>