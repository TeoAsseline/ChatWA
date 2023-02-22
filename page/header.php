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
</head>
<body>
    <!--Menu de navigation-->
    <header>
            <div class="menuleft">
                <a href='#' class="button" >Accueil</a>
                <?php if(isset($_GET['pseudo'])):?>
                <label class="label" id="affichP"><?php echo $_GET['pseudo'];?></label>
                <?php endif;?>
            </div>
            <div class="menucenter">
                <img class="logo" src="./image/logo.png" alt="LogoDuSite">
            </div>
            <div class="menuright">
                <form action="#">
                    <label class="label" for="pseudo">Pseudo</label>
                    <input type="text" class="button" id="pseudo" name="pseudo" placeholder="Menwizz..." required/>
                    <input type="submit" class="button" name="rechercher" value="Envoyer"/>
                </form>
            </div>      
    </header>