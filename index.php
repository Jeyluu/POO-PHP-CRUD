<?php
// On charge le Fichier compte dans le dossier classes.
    require_once ("classes/Compte.php");
    require_once ("classes/CompteCourant.php");
    require_once ("classes/CompteEpargne.php");
    require_once ("classes/CompteEpargneCourant.php");

    //On instancie le compte 1
    $compte1 = new CompteCourant('Jérémy', 500, 200);
    $compte1->retirer(200);
    // var_dump($compte1);
    $compteEpargne = new CompteEpargneCourant('Jérémy', 200, 10, 200);
    
    var_dump($compteEpargne);

    $compteEpargne->verserInteret();
    $compteEpargne->retirer(300);
    var_dump($compteEpargne);
?>

