<?php
namespace App\Banques;
/**
 * Objet compte bancaire, Un objet par fichier.
 */
abstract class Compte 
{
    //propriétés
    /**
     * Titulaire du compte
     *
     * @var string
     */
    private $titulaire;
    /**
     * Solde du compte
     *
     * @var float
     */
    protected $solde;

    //Constantes
    private const TAUX_INTERETS = 5;


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
     * Méthode magique pour la conversion en chaîne de caractères
     *
     * @return string
     */
    public function __toString()
    {
        return "Vous visualisez le compte de {$this->titulaire}, le solde est de {$this->solde} euros";
    }
    

    //Accesseurs
    /**
     * Getter de titulaire - Retourne la valeur du titulaire du compte
     *
     * @return string
     */
    public function getTitulaire(): string
    {
        return $this->titulaire;
    }

    /**
     * Modifie le nom du titulaire et retourne l'objet
     *
     * @param string $nom Nom du titulaire
     * @return Compte Compte bancaire
     */
    public function setTitulaire(string $nom): self
    {
        //On vérifie si on a un titulaire
        if($nom != ""){
            $this->titulaire = $nom;
        }
        
        return $this;
    }

    /**
     * Retourne le solde du compte
     *
     * @return float solde du compte
     */
    public function getSolde(): float
    {
        return $this->solde;
    }

    /**
     * Modifie le solde du compte
     *
     * @param float $montant Montant du solde
     * @return self compte bancaire
     */
    public function setSolde(float $montant): self
    {
        if($montant >= 0){
            $this->solde = $montant;
        }

        return $this;
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
            echo "Le montant que vous souhaitez retirer est invalide ou le solde de votre compte est insuffisant.". "<br>";
        }
    }

    
}
?>