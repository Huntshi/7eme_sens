<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <a class="col-1" href="connexionFront.php"><img src="svg/flecheRetour.svg"/></a>
            <h1  class="offset-md-0 col-8">Créer mon compte client  !</h1>
        </div>
        <form class="mt-5" action="creerClientBack.php" method="post">
            
            <div class="col-12">
                <input type="text" id="Prenom" name="Prenom"  style="height: 6vw;font-size: 2em;"  class="custom-input col-5 text-center" placeholder="Prenom" required />
                <input type="text" id="Nom" name="Nom"  style="height: 6vw;font-size: 2em;"  class="custom-input col-5 text-center" placeholder="Nom" required />
            </div>
            
            <br />

            <label>Civilité</label>
            <input type="radio" id="genre1" name="genre" value="Homme" />
            <label for="genre1">Homme</label>
            <input type="radio" id="genre2" name="genre" value="Femme" />
            <label for="genre2">Femme</label>
            <input type="radio" id="genre3" name="genre" value="Autre" />
            <label for="genre2">Autre</label>
        
            <br />

            <label for="fichier">Carte d’identité</label>
            <input type="file" id="fichier" name="fichier" value="Importer le document"/>
            
            <br />

            <input type="email" id="email" name="email" placeholder="Mail"/>
            <br />

            <input type="tel" id="telephone" name="telephone" placeholder="Téléphone" required/>
            <br />

            <input type="text" id="pseudo" name="pseudo" placeholder="Pseudo" required />
            <br />

            <label for="fichier">Photo de profil</label>
            <input type="file" id="photoProfil" name="photoProfil" placeholder="Importer le document" required/>
            <br />

            <input type="password" id="motdepasse" name="motdepasse" placeholder="Password" required/>
        
            <br />

            <input type="password" id="confirmationMDP" name="confirmationMDP" placeholder="Confirmation Mot de passe" required/>
            <br />

            <input type="text" id="ville" name="ville" placeholder="Ville" required />
            <br />

            <input type="text" id="codePostal" name="codePostal" placeholder="Code postal" required />
            <br />

            <input type="text" id="numRue" name="numRue" placeholder="N° Rue" required />
            <br />

            <input type="text" id="nomRue" name="nomRue" placeholder="Nom de  la rue" required />
            <br />

            <input type="submit" value="Se connecter" />

        </form>

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