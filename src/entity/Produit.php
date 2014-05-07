<?php


/**
 * Description of Produit
 *
 * @author Administrateur
 */
class Produit implements ProduitInterface 
{
    
    private $nom;
    private $quantite;
    private $prix;
    
    public function __construct($nom = NULL, $quantite = 0, $prix = 0) {
        $this->nom = $nom;
        $this->quantite = $quantite;
        $this->prix = $prix;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getQuantite() {
        return $this->quantite;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setQuantite($quantite) {
        $this->quantite = $quantite;
    }
    
    public function getPrix() {
        return $this->prix;
    }

    public function setPrix($prix) {
        $this->prix = $prix;
    }




    
    
}
