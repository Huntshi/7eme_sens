<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="../style.css">
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
            <img class="col-2" src="../svg/filtre.svg">
            <input class="col-7" id="searchbar" type="text" name="search" style="height: 50px; margin-top: auto; margin-bottom: auto;">
            <img class="col-2" src="../svg/loupe.svg">
        </div>
        <div class="row col-3 offset-md-1">
            <img src="svg//booklet-fill 1.svg">
            <a href="logement.php" style="margin: auto;margin-left: 10px;"><h4>Accèder à mes logements</h4></a>
        </div>
            

        <div class="col-2 row">
            <a href="acceuil_proprio.html" class="offset-md-6 row"><img src="../svg/message.svg"></a>
            <a href="acceuil_proprio.html" class="offset-md-2 row"><img src="../svg/compte.svg"></a> 
        </div>
    </header>
    <main>
        <?php
        try {
            include('../Connexion/page_connexion.php');

            $dbh = new PDO("$driver:host=$server;dbname=$dbname", $user, $password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            $stmt = $dbh->prepare(
                'SELECT photo_principale, libelle_logement, tarif_base_ht, nb_personnes_logement, note_avis, debut_plage_ponctuelle, fin_plage_ponctuelle
                from locbreizh._logement 
                    INNER JOIN locbreizh._avis ON logement = id_logement
                    INNER JOIN locbreizh._planning ON _planning.code_planning = _logement.code_planning
                    INNER JOIN locbreizh._plage_ponctuelle ON _planning.code_planning = _plage_ponctuelle.code_planning;'
            );
        } catch (PDOException $e) {
            print "Erreur !:" . $e->getMessage() . "<br/>";
            die();
        }

        function formatDate($start, $end)
        {
            $startDate = date('j', strtotime($start));
            $endDate = date('j', strtotime($end));
            $month = date('M', strtotime($end));

            return "$startDate-$endDate $month";
        }

        $stmt->execute();
        foreach ($stmt->fetchAll() as $card) {
            echo '<div class="card">';
            echo '<img src="' . $card['photo_principale'] . '">';
            echo '<h3>' . $card['libelle_logement'] . '</h3>';
            echo '<h4>' . $card['tarif_base_ht'] . '€</h4>';
            echo '<img src="svg//star.svg"> . <h4>' . $card['note_avis'] . '</h4>';
            echo '<h4>' . formatDate($card['debut_plage_ponctuelle'], $card['fin_plage_ponctuelle']) . '</h4>';
            echo '<h4>' . $card['nb_personnes_logement'] . ' personnes</h4>';
        }
        ?>

        <div class='voir_plus'>
            <hr>
            <h4>Voir plus</h4>
            <hr>
        </div>
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