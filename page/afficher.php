<!--page conversation-->
<?php
    require_once("./fonction/recupconversation.php");
?>
<main>
    <!--button retour-->
    <a id="retour" href="index.php?page=salon">Retour</a>
    <!--nom conversation---->
    <h1 class="titre"><?php echo $Nconv[0]['nom'];?></h1>
    <div class="discussion">
        <!--chaque message-->
        <div id="discussionMessage"></div>
        <!--envoie de message-->
        <form id="messageF" method="post">
            <input type="hidden" name="pseudo" id="pseudo" value="<?php echo $pseudo;?>" />
            <input type="hidden" name="datearrive" id="datearrive" value="<?php echo $datearrive;?>" />
            <input type="hidden" name="conv" id="conv" value="<?php echo $conv;?>"/>
            <input type="text" id="message" name="message" placeholder="Bonjour, ça va ?..." 
            <?php if(!isset($_SESSION['pseudo'])){ echo 'style="color:#588d9c"';echo 'disabled="true"';}?> required/>
            <input type="submit" class="button" name="envoyer" id="envoyer" value="Envoyer"
            <?php if(!isset($_SESSION['pseudo'])){ echo 'style="color:#588d9c"';echo 'disabled="true"';}?>/>
        </form>
    </div>
</main>
</body>
</html>