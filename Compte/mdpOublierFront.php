<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mot de passe Oublié</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <main class="container offset-md-2 col-8">
        <?php
            session_start();
            if(isset($_SESSION["msg"])){
                ?><p><?php echo $_SESSION["msg"]?></p><?php
                unset($_SESSION["msg"]);
            }
        ?>
        <div class="mb-5 col-12 row h-10"> 
            <a href="connexionFront.php"><img src="svg/flecheRetour.svg"/></a>
            <h1>Récupération de compte</h1>
        </div>


        <form action="mdpOublierBack.php" method="post">

        <p class="text-center mb-5" style="font-size: 2em;">Renseignez votre adresse mail ou votre numéro de téléphone </p>

        <input type="text" id="mail" name="mail" style="height: 6vw;font-size: 2em;" placeholder="Adresse mail ou numéro" class="text-center custom-input mb-5" required />
        <br />

        <input style="height: 80px;" class="btn-compte offset-md-3 col-6 mb-5 mt-5" type="submit" value="Lancer la récupération" />

        </form>
        <article class="text-center mt-4"> 
            <a href="connexionFront.php" style="font-size: 2em;">Revenir à la page de connexion</a>
        </article>
    </main>

    <footer class="mt-4 container-fluid">
        <div class="mt-4 column">
            <div class="col-12 text-center">
                <a class="col-3" href="mailto:locbreizh@alaizbreizh.com">locbreizh@alaizbreizh.com</a>
                <a class="offset-md-2 col-1" href="tel:+33623455689">(+33) 6 23 45 56 89</a>
                <a class="offset-md-2 col-1" href="connexion.html"><img src="svg/instagram.svg">  @LocBreizh</a>
                <a class="offset-md-2 col-1" href="connexion.html"><img src="svg/facebook.svg">  @LocBreizh</a>
            </div>
            <hr>  
            <div class="offset-md-1 col-10 mt-4 text-center row">
                <p class="offset-md-1 col-2">©2023 Loc’Breizh</p>
                <p class="offset-md-1 col-3" style="text-decoration: underline;"><a href="connexion.html">Conditions générales</a></p>
                <p class="offset-md-1 col-4" >Développé par <a href="connexion.html" style="text-decoration: underline;">7ème sens</a></p>
            </div>
        </div>
    </footer>
</body>
</html>