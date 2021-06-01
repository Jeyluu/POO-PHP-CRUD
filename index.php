<?php

use App\Autoloader;
use App\Clients\Compte as CompteClient;
use App\Banques\{CompteCourant,CompteEpargne};


    require_once 'classes/Autoload.php';
    Autoloader::register();

    //On instancie le compte 1
    $compte1 = new CompteCourant('Jérémy', 5000, 200);
    $compte1->retirer(200);
    // var_dump($compte1);
    $compteEpargne = new CompteEpargne('Jérémy', 2000, 10, 200);
    
    // var_dump($compteEpargne);

    $compteEpargne->verserInteret();
    $compteEpargne->retirer(300);
    
    var_dump($compteEpargne);

    $client = new CompteClient;

    var_dump($client);

?>

