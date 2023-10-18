<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <?php
            session_start();
            if(isset($_SESSION["msg"])){
                ?><p><?php echo $_SESSION["msg"]?></p><?php
                unset($_SESSION["msg"]);
            }
        ?>
        <a href="connexionFront.php"><img src="./images/flecheRetour.svg"/></a>
        <h1>Créer mon compte propriétaire  !</h1>

        <form action="creerProprietaireBack.php" method="post" enctype="multipart/form-data">

            <input type="text" id="prenom" name="prenom" placeholder="Prenom" required />
            <br />

            <input type="text" id="nom" name="nom" placeholder="Nom" required />
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
            <input type="file" id="carteIdentite" name="carteIdentite" placeholder="Importer le document" required/>
            <br />

            <input type="email" id="email" name="email" placeholder="Mail" required/>
            <br />

            <input type="tel" id="telephone" name="telephone" placeholder="Téléphone" required/>
            <br />

            <input type="text" id="pseudo" name="pseudo" placeholder="Pseudo" required />
            <br />

            <label for="fichier">Photo de profil</label>
            <input type="file" id="photoProfil" name="photoProfil" placeholder="Importer le document" required/>
            <br />

            <label for="fichier">RIB</label>
            <input type="file" id="rib" name="rib" placeholder="Importer le document" required/>
            <br />

            <input type="password" id="motdepasse" name="motdepasse" placeholder="Mot de passe" required/>
            <br />

            <input type="password" id="motdepasse" name="motdepasse" placeholder="Confirmation Mot de passe" required/>
            <br />

            <input type="text" id="ville" name="ville" placeholder="Ville" required />
            <br />

            <input type="text" id="codePostal" name="codePostal" placeholder="Code postal" required />
            <br />

            <input type="text" id="numRue" name="numRue" placeholder="N° Rue" required />
            <br />

            <input type="text" id="nomRue" name="nomRue" placeholder="Nom de  la rue" required />
            <br />

            <input type="submit" value="Suivant" />

        </form>
    </main>

    <footer>
        <div>
            <a href="mailto:locbreizh@alaizbreizh.com">locbreizh@alaizbreizh.com</a>
            <a href="tel:+33623455689">(+33) 6 23 45 56 89</a>
            <a href="connexion.html"><img src="./images/instagram.svg">@LocBreizh</a>
            <a href="connexion.html"><img src="./images/facebook.svg">@LocBreizh</a>
        </div>

        <hr/>

        <div>
            <p>©2023 Loc’Breizh</p>
            <a href="connexion.html">Conditions générales</a>
            <p>Developpé par <a href="connexion.html">7ème sens</a></p>
        </div>
    </footer>
</body>
</html>