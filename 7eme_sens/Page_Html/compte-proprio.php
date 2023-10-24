<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="script.js"></script>
</head>

<body>
<header class="row col-12">
            <div class="row col-3">
                <img src="svg//logo.svg">
                <h2 style="margin-top: auto; margin-bottom: auto; margin-left: 10px;">Loc'Breizh</h2>
            </div>

            <div class="row col-3">
                <img class="col-2" src="svg//filtre.svg">
                <input class="col-7" id="searchbar" type="text" name="search" style="height: 50px; margin-top: auto; margin-bottom: auto;">
                <img class="col-2" src="svg//loupe.svg">
            </div>
                <div class="row col-3 offset-md-1">
                    <img src="svg//booklet-fill 1.svg">
                    <a href="logement.php" style="margin: auto;margin-left: 10px;"><h4 style="color:#000;">Accèder à mes réservations</h4></a>
                </div>
                

            <div class="col-2 row">
                <a class="offset-md-6 row"><img src="svg/message.svg"></a>
                <a class="offset-md-2 row"><img src="svg/compte.svg"></a> 
            </div>
    </header>
    <main>

        <div class="column">
            <div class="row text-center headconn"> 
                <h1 class="col-8 text-center titre">MON COMPTE</h1>
            </div> 
            <div class="row offset-md-2">
                <div class="column">
                    <div class="row">
                        <label for="prenom">PRÉNOM</label>
                        <p>Alain</p>
                        <button type="submit" class="btn-accueil">modifier</button>
                    </div>
                    <div class="row">
                        <label for="nom">NOM</label>
                        <p>Provist</p>
                        <button type="submit" class="btn-accueil">modifier</button>
                    </div> 
                    <div class="row">
                        <label for="pseudo">PSEUDO</label>
                        <p>Alain_prvt</p>
                        <button type="submit" class="btn-accueil">modifier</button>
                    </div> 
                    <div class="row">
                        <label for="email">E-MAIL</label>
                        <p>Alain.provist@ex-terieur.com</p>
                        <button type="submit" class="btn-accueil">modifier</button>
                    </div> 
                    <div class="row">
                        <label for="tel">TELEPHONE</label>
                        <p>07 - XX - XX - 23 - 56</p>
                        <a href="">Supprimer</a>
                        <button type="submit" class="btn-accueil">modifier</button>
                    </div> 
                    <div class="row">
                        <label for="carteidentite">CARTE IDENTITE</label>
                        <p>ma_carte_identité.png</p>
                        <img src="svg/eye-line.svg">
                        <button type="submit" class="btn-accueil">modifier</button>
                    </div> 
                    <div class="row">
                        <label for="mdp">MOT DE PASSE</label>
                        <p>Alain.provist@ex-terieur.com</p>
                        <button type="submit" class="btn-accueil">modifier</button>
                    </div>
                    <div class="row">
                        <label for="datenaisance">DATE DE NAISSANCE</label>
                        <p>25/01/1990</p>
                        <button type="submit" class="btn-accueil">modifier</button>
                    </div>
                    <div class="row">
                        <label for="rib">RIB</label>
                        <p>mon_rib_alnprvst.png</p>
                        <img src="svg/eye-line.svg">
                        <button type="submit" class="btn-accueil">modifier</button>
                    </div>   
                </div> 

                <div class="column">
                    <img src="Ellipse.svg">
                    <h2>Photo de profil</h2>
                    <button type="submit" class="btn-secondary">Changer de photo de profil</button>
                </div> 
            </div> 
            <div class="row offset-md-2">
                <div class="column">
                    <h2>Suppression du compte</h2>
                    <p>DISCLAIMER - La suppression du compte est définitve.</p>
                    <p>Condition requise : aucun logement en ligne et aucune réservation prévue.</p>
                </div>
                <button type="submit" class="btn-accueil">SUPPRIMER LE COMPTE</button>
            </div>
        </div>


    </main>
    <footer class="container-fluid" >
        <div class="column">   
            <div class="text-center row">
                <p class="testfoot col-2"><a href="mailto:locbreizh@alaizbreizh.com">locbreizh@alaizbreizh.com</a></p>
                <p class="testfoot offset-md-2 col-2"><a href="tel:+33623455689">(+33) 6 23 45 56 89</a></p>
                <p class="testfoot offset-md-1 col-2"><a href="connexion.html"><img src="svg/instagram.svg">  @LocBreizh</a></p>
                <p class="testfoot offset-md-1 col-2  "><a href="connexion.html"><img src="svg/facebook.svg">  @LocBreizh</a></p>
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