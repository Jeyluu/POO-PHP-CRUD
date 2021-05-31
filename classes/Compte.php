<?php
/**
 * Objet compte bancaire, Un objet par fichier.
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



    // Méthodes
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

    /**
     * Retire un montant du solde du compte
     *
     * @param float $montant montant à retirer
     * @return void
     */
    public function retirer(float $montant){
        //On vérifie le montant et le solde
        if($montant > 0 && $this->solde >= $montant){
            $this->solde -= $montant;
        } else {
            echo "Le montant que vous souhaitez retirer est invalide ou le solde de votre compte est insuffisant.";
        }
    }
}
?>