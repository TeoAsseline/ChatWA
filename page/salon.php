<?php
    session_start();
?>
<main>
    <!--nom salon-->
    <h1 class="titre">Salon des Conversations</h1>
    <div class="salon">
         <!--chaque salon-->
        <?php foreach($liste as $conv):?>
            <div class="divC">
                <label id="Cnom"><?php echo $conv['nom'];?></label>
                <div id="lienC">
                    <a href="./index.php?page=afficher&conv=<?php echo $conv['id_conv']?>" style="background-color:white;">
                        <img src="./image/fleche-droite.png" alt="Lien Conv"/>
                    </a>
                </div>
                <?php $idconv=$conv['id_conv'];
                require_once("./fonction/listeAuteur.php");                
                ?>
                <div>
                    <p style=" background-color: white;">
                    <?php foreach($listeA as $auteur){
                        echo " // ".$auteur['auteur'];
                    } echo " // ";?>
                    </p>
                </div>
            </div>
        <?php endforeach;?>
    </div>
    </main>
</body>
</html>