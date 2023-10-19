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
 <?php
            session_start();
            if(isset($_SESSION["msg"])){
                ?><p><?php echo $_SESSION["msg"]?></p><?php
                unset($_SESSION["msg"]);
            }
        ?>
    <header>
        <div class="col-12 row text-center"> 
            <a class="offset-md-2 titre" href="creerCompte.html"><img src="svg/flecheRetour.svg"/></a>
            <h1  class="col-8 titre">Créer mon compte client  !</h1>
        </div>
    </header>
    <main class="container offset-md-1 col-12">
        <form action="creerClientBack.php" method="post">
            
            <div>
                <input type="text" id="Prenom" name="Prenom" class="custom-input col-5 text-center" placeholder="Prenom" required />
                <input type="text" id="Nom" name="Nom" class="custom-input col-5 text-center" placeholder="Nom" required />
            </div>
                <div class="row text-center">
                    <div class="column col-5">
                        <label >Civilité</label>
                        <div>
                            <input type="radio" id="genre1" name="genre" value="Homme" />
                            <label for="genre1">Homme</label>
                            <input type="radio" id="genre2" name="genre" value="Femme" />
                            <label for="genre2">Femme</label>
                            <input type="radio" id="genre3" name="genre" value="Autre" />
                            <label for="genre3">Autre</label>
                        </div>   
                    </div>    
                    <div class="row col-5">
                            <label for="fichier">Carte d’identité</label>
                            <input class="offset-md-1 col-5" type="file" id="fichier" name="fichier" value="Importer le document" />
                            <label class="text-center" for="fichier">Photo de profil</label>
                            <input class="offset-md-1 col-5" type="file" id="photoProfil" name="photoProfil" placeholder="Importer le document" required/>
                    </div>  
                </div>

                <div>
                    
                    <input type="text" id="pseudo" name="pseudo" class="col-5 text-center custom-input" placeholder="Pseudo" required />
                    <input type="tel" id="telephone" name="telephone"   class="col-5 text-center custom-input" placeholder="Téléphone" required/>
                </div>

            <div> 
                <input type="email" id="email" name="email"   class="custom-input col-5 text-center" placeholder="Mail"/>
                <input type="date" id="date" name="date"   class="custom-input col-5 text-center" placeholder="Date"/>
            </div>
            </div>

            <div>
                <input type="password" id="motdepasse" name="motdepasse" class="custom-input col-5 text-center" placeholder="Mot de passe" required/>
                <input type="password" id="confirmationMDP" name="confirmationMDP"   class="custom-input col-5 text-center" placeholder="Confirmation Mot de passe" required/>
            </div>

            <div>
            <input type="text" id="ville" name="ville"   class="custom-input col-5 text-center" placeholder="Ville" required />
            <input type="text" id="codePostal" name="codePostal"   class="custom-input col-5 text-center" placeholder="Code postal" required />
            </div>

            <div>
            <input type="text" id="numRue" name="numRue"   class="custom-input col-5 text-center" placeholder="N° Rue" required />
            <input type="text" id="nomRue" name="nomRue" class="custom-input col-5 text-center" placeholder="Nom de  la rue" required />
            </div>

            <input class="btn-compte offset-md-3 col-4 mb-5" type="submit" value="Se connecter" />

        </form>

    </main>

    <footer class="mt-4 container-fluid">
        <div class="mt-4 column">   
            <div class="col-12 text-center">
                <a class="col-2" href="mailto:locbreizh@alaizbreizh.com">locbreizh@alaizbreizh.com</a>
                <a class="offset-md-1 col-2" href="tel:+33623455689">(+33) 6 23 45 56 89</a>
                <a class="offset-md-1 col-1" href="connexion.html"><img src="svg/instagram.svg">  @LocBreizh</a>
                <a class="offset-md-1 col-1" href="connexion.html"><img src="svg/facebook.svg">  @LocBreizh</a>
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