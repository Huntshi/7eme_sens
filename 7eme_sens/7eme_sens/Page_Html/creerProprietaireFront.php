<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
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
        <div class="row text-center headconn"> 
            <a class="offset-md-2 titre" href="creerCompte.html"><img src="svg/flecheRetour.svg"/></a>
            <h1  class="col-8 titre">Créer mon compte propriétaire  !</h1>
        </div>
    </header>
    <main class="container col-12" style="">
        <form  class="offset-md-1" action="creerProprietaireBack.php" method="post" enctype="multipart/form-data">

            <div class="row mt-5 offset-md-1">
                    <div class="column  col-5">
                        <label for="Prenom">Prenom</label>
                        <input type="text" id="Prenom" name="Prenom" class="custom-input text-center" placeholder="Prenom" required />
                    </div>
                    <div class="column col-5">
                        <label for="Nom">Nom</label>
                        <input type="text" id="Nom" name="Nom" class="custom-input text-center" placeholder="Nom" required />
                    </div>
            </div>

            <div class="row text-center mt-5">
                    <div class="column text-center col-7">
                        <label class="offset-md-3">Civilité</label>
                        <div>
                            <input class="offset-md-4" type="radio" id="genre1" name="genre" value="Homme" />
                            <label for="genre1">Homme</label>
                            <input class="offset-md-1" type="radio" id="genre2" name="genre" value="Femme" />
                            <label for="genre2">Femme</label>
                            <input class="offset-md-1" type="radio" id="genre3" name="genre" value="Autre" />
                            <label for="genre3">Autre</label>
                        </div>   
                    </div>    
                    <div class="row col-5 text-center">
                            <label class="offset-md-3" for="fichier">Carte d’identité</label>
                            <input class="offset-md-1 col-5" type="file" id="fichier" name="fichier" value="Importer le document" />
                            <label class="text-center offset-md-3 " for="fichier">Photo de profil</label>
                            <input class="offset-md-1 col-5" type="file" id="photoProfil" name="photoProfil" placeholder="Importer le document" required/>
                    </div>  
            </div>


            <div class="row offset-md-1 mt-3">
                    <div class="column col-5">
                    <label for="pseudo">Pseudo</label>
                        <input type="text" id="pseudo" name="pseudo"  class="custom-input text-center" placeholder="Pseudo" required />
                    </div>
                    <div class="column col-5">
                        <label for="Prenom">Téléphone</label>
                        <input type="tel" id="telephone" name="telephone"  class="custom-input text-center" placeholder="Téléphone" required/>
                    </div>
            </div>

            <div class="mt-5 offset-md-1 row ">
                <div class="column col-5">
                    <label for="Nom">Mail</label>
                    <input type="email" id="email" name="email"   class="custom-input text-center" placeholder="Mail"/>
                </div> 
                <div class="column col-5">
                    <label for="Nom">Date de naissance</label>
                    <input type="date" id="date" name="date"   class="custom-input text-center" placeholder="Date"/>
                </div> 
                
               
            </div>


            <div class="row offset-md-1 mt-5">
                    <div class="column col-5">
                        <label for="Prenom">Mot de passe</label>
                        <input type="password" id="motdepasse" name="motdepasse"  class="custom-input text-center" placeholder="Mot de passe" required/>
                    </div>
                    <div class="column col-5">
                        <label for="Nom">Confirmation de Mot de passe</label>
                        <input type="password" id="motdepasse" name="motdepasse"  class="custom-input text-center" placeholder="Confirmation Mot de passe" required/>
                    </div>
            </div>

            <div class="row offset-md-1 mt-5">
                    <div class="column col-5">
                        <label for="ville">Ville</label>
                        <input type="text" id="ville" name="ville" class="custom-input text-center" placeholder="Ville" required />
                    </div>
                    <div class="column col-5">
                        <label for="Nom">Code postal</label>
                        <input type="text" id="codePostal" name="codePostal"  class="custom-input text-center" placeholder="Code postal" required />
                    </div>
            </div>

            <div class="row offset-md-1 mt-5">
                    <div class="column col-2">
                        <label for="ville">N° de Rue</label>
                        <input type="text" id="numRue" name="numRue"  class="custom-input text-center" placeholder="N° Rue" required />
                    </div>
                    <div class="column col-8">
                        <label for="Nom">Nom de la Rue</label>
                        <input type="text" id="codePostal" name="codePostal"  class="custom-input text-center" placeholder="Nom de la Rue" required />
                    </div>
            </div>
            <div class="row offset-md-1 mt-5">
                <div class="col-5">
                        <label for="langue">Langue Origine</label>
                        <select id="langue" name="langue" class="custom-input text-center">
                            <option value="none" hidden>Langue</option>
                            <option value="fr">Français</option>
                            <option value="en">Anglais</option>
                            <option value="es">Espagnol</option>
                            <option value="de">Allemand</option>
                            <option value="it">Italien</option>
                            <option value="ja">Japonais</option>
                            <option value="zh">Chinois</option>
                            <option value="zh">Portugais</option>
                            <!-- Ajoutez plus d'options ici -->
                        </select>
                </div>
                <div class="column col-5">
                    <label class="rib" for="rib">RIB</label>
                    <input class="offset-md-1 col-6 rib" type="file" id="rib" name="rib" placeholder="Importer le document" required/>
                </div>
            </div>

            <div class="mt-5 offset-md-3">
                <input class="btn-compte col-7" type="submit" value="Suivant" />
            </div>
        </form>
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