<!--header-->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="icon" href="./image/logo.png">
    <title>Chat WA</title>
    <script> 
    let audioG = new Audio('./audio/wario.mp3');
    let audioO = new Audio('./audio/wariomath.mp3');
    function go(){
        audioG.volume = 0.2;
        audioG.play();
    }
    function out(){
        audioO.volume = 0.2;
        audioO.play();
    }
    </script>
</head>
<body>
    <!--Menu de navigation-->
    <header>
            <div>
                <form onsubmit="go();">
                    <label class="label" for="pseudo">Pseudo</label>
                    <input type="text" class="button" id="pseudo" name="pseudo" placeholder="Menwizz..." required/>
                    <input type="submit" class="button" name="rechercher" 
                    <?php if(isset($_GET['pseudo'])):?>value="Changer" <?php else: ?> value="Choisir" <?php endif;?>/>
                </form>
            </div> 
            <div>
                <a href="#" style="background-color: #588d9c;"><img class="logo" src="./image/logo.png" alt="LogoDuSite" onclick="out();"></a>
            </div>
            <div>
                <?php if(isset($_GET['pseudo'])):?>
                    <form>
                        <label class="label" id="affichP"><?php echo $_GET['pseudo'];?></label>
                        <input type="submit" class="button" name="deconnexion" value="Déconnexion"/>
                    </form>
                <?php else: ?>
                    <label class="label" style="display:block;">Bienvenue sur Chat WA, veuillez entrer un pseudo pour commencer à WAAA !</label>
                <?php endif;?>
            </div>     
    </header>