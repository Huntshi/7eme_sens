<?php
    // JE DÉTRUIT LA SESSION ACTUELLE POUR QUE $_SESSION SOIT VIDE DE NOUVEAU COMME A L'ARRIVEE SUR L'APPLICATION
    session_destroy();
    // JE SUIS REDIRIGER VERS LA PAGE D'ACCEUIL EN TANT QUE SIMPLE VISITEUR
    header("location: ../Accueil/accueil_visiteur.php")
?>