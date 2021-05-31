<?php
// On charge le Fichier compte dans le dossier classes.
    require_once ("classes/Compte.php");

    //On instancie le compte 1
    $compte1 = new Compte("Jérémy",1800);
    
    //On dépose de l'argent sur le compte.
    $compte1->deposer(0);

    echo "<pre>";
    var_dump($compte1);
    echo "</pre>";

    

    //On instancie le compte 2
    // $compte2 = new Compte("Mireille",989.50);
    

    // echo "<pre>";
    // var_dump($compte2);
    // echo "</pre>";
?>

<p><?= $compte1->voirSolde();?></p>