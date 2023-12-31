<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Page de connexion</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
        <?php
            session_start();
            function erreur($nomErreur)
            {
                if(isset($_SESSION["erreurs"][$nomErreur])){
                    ?><p><?php echo $_SESSION["erreurs"][$nomErreur]?></p><?php
                    unset($_SESSION["erreurs"][$nomErreur]);
                }
            }
        ?>
    <header>
        <div class="col-12 row text-center headconn"> 
            <a class="offset-md-2 titre" href="../Accueil/accueil_visiteur.php"><img src="../svg/flecheRetour.svg"></a>

            <h1 class="col-8 text-center titre">Bienvenue sur Loc’Breizh !</h1>
        </div>
    </header>
    <main class="container offset-md-2 col-8">
        <form action="connexionBack.php" method="post">
            <div class="form-group mt-2">
                <input type="text" id="pseudo" style="font-size: 2em;" name="pseudo" class=" offset-md-2 col-8 text-center custom-input mb-5" placeholder="Identifiant" value="<?php if(isset($_GET['pseudo'])) { echo htmlentities($_GET['pseudo']);}?>" />
                <?php
                    erreur("pseudo");
                ?>
            </div>
            <div class="form-group mt-2">
                <input type="password" id="motdepasse" style="font-size: 2em;" name="motdepasse" class=" offset-md-2 col-8  text-center custom-input mb-5" placeholder="Mot de passe"/>
                <?php
                    erreur("motdepasse");
                ?>
            </div>
            <button type="submit" class="btn-compte offset-md-3 col-6 mb-5 mt-5">Se connecter</button>
        </form>
        <article class="text-center mt-2"> 
            <span>Nouveau ici ? <a class="col-2" href="CreerCompte.html">Créer un compte</a> <a class="offset-md-1 col-2" href="mdpOublierFront.php">Mot de passe oublié ?</a></span>
        </article>
       
    </main>


    <footer class="container-fluid" >
        <div class="column">   
            <div class="text-center row">
                <p class="testfoot col-2"><a href="mailto:locbreizh@alaizbreizh.com">locbreizh@alaizbreizh.com</a></p>
                <p class="testfoot offset-md-2 col-2"><a href="tel:+33623455689">(+33) 6 23 45 56 89</a></p>
                <p class="testfoot offset-md-1 col-2"><a href="connexion.html"><img src="../svg/instagram.svg">  @LocBreizh</a></p>
                <p class="testfoot offset-md-1 col-2  "><a href="connexion.html"><img src="../svg/facebook.svg">  @LocBreizh</a></p>
            </div>
            <hr>  
            <div class="text-center row">
                <p class="offset-md-1 col-2 testfooter">©2023 Loc’Breizh</p>
                <p class="offset-md-1 col-3 testfooter" style="text-decoration: underline;"><a href="connexion.html">Conditions générales</a></p>
                <p class="offset-md-1 col-4 testfooter" >Développé par <a href="connexion.html" style="text-decoration: underline;">7ème sens</a></p>
            </div>
        </div>
    </footer>
</body>

</html>


<style>
    .popup {
        display: none;
        position: fixed;
        top: 15%;
        left: 91%;
        transform: translate(-50%, -50%);
        background-color: white;
        padding: 20px;
        border: 1px solid #ccc;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        z-index: 1000;
    }
</style>
<script>
// Ouvrir la popup
function openPopup() {
var popup = document.getElementById('popup');
popup.style.display = 'block';
}

// Fermer la popup
function closePopup() {
var popup = document.getElementById('popup');
popup.style.display = 'none';
}

// Ajouter des gestionnaires d'événements aux boutons
var profilButton = document.getElementById('profilButton');
profilButton.addEventListener('click', function() {
alert('Accéder au profil');
closePopup();
});

var deconnexionButton = document.getElementById('deconnexionButton');
deconnexionButton.addEventListener('click', function() {
alert('Se déconnecter');
closePopup();
});
</Script>