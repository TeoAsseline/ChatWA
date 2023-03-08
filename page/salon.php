<?php
    if(isset($_GET['pseudo']) && $_GET['pseudo']!=null){
        $pseudo="&pseudo=".htmlspecialchars($_GET['pseudo']);
    } 
?>
<main>
    <h1 class="titre">Salon des Conversations</h1>
    <div class="salon">
        <?php foreach($liste as $conv):?>
            <div class="divC">
                <label id="Cnom"><?php echo $conv['nom'];?></label>
                <div id="lienC">
                    <a href="./index.php?page=afficher&conv=<?php echo $conv['id_conv'];if(isset($pseudo)){echo $pseudo;}?>" style="background-color:white;"><img src="./image/fleche-droite.png" alt="Lien Conv"/></a>
                </div>
            </div>
        <?php endforeach;?>
    </div>
    </main>
</body>
</html>