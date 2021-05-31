<?php
/**
 * Objet compte bancaire
 */
class Compte 
{
    //propriétés
    /**
     * Titulaire du compte
     *
     * @var string
     */
    public $titulaire;

    /**
     * Solde du compte
     *
     * @var float
     */
    public $solde;


    /**
     * Contructeur du compte bancaire
     *
     * @param string $nom nom du titulaire
     * @param float $montant solde du compte à l'ouverture
     */
    public function __construct(string $nom, float $montant = 150)
    {
        // On attribue le nom à la propriété titulaire de l'instance créée
        $this->titulaire = $nom;

        //On attribue le montant à la propriété Solde
        $this->solde = $montant;
    }

    /**
     * Déposer de l'argent sur le compte bancaire.
     *
     * @param float $montant
     * @return void
     */
    public function deposer(float $montant){
        if($montant > 0){
            $this->solde += $montant;
        }
    }

    
    /**
     * Retourne une chaine de caractères affichant le solde
     *
     * @return string
     */
    public function voirSolde(){
        return "Le solde du compte est de $this->solde €.";
    }
}
?>