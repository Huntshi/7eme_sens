<?php
    // lancement de la session
    session_start(); 

    // import parametre de connexion + nouvelle instance de PDO
    include('../parametre_connexion.php');
    // id fictif pour les tests
    $_SESSION['id'] = 4;
    try {
        $dbh = new PDO("$driver:host=$server;dbname=$dbname", $user, $pass);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
    //ajout facture
    $stmt = $dbh->prepare("INSERT into locbreizh._facture(num_devis, url_facture) values({$_GET['devis']}, 'facure{$_POST['devis']}.pdf');");
    $stmt->execute();
    $id_facture = $dbh->lastInsertId();

    // cherche le logement associé au devis
    $stmt = $dbh->prepare("SELECT id_logement from locbreizh._devis d
    join locbreizh._demande_devis dd on dd.num_demande_devis = d.num_demande_devis
    join locbreizh._logement l on l.id_logement = dd.logement
    where dd.id_devis = {$_GET['devis']};");
    $stmt->execute();
    $logement = $stmt->fetch();

    // ajout reservation
    $stmt = $dbh->prepare("INSERT into locbreizh._reservation(reservation_annulee, client, logement, facture) values(False, {$_SESSION['id']}, {$logement['id_logement']}, {$num_facture['num_facture']});");
    $stmt->execute();
?>