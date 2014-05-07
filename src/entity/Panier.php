<?php

/**
 * Description of Panier
 *
 * @author Administrateur
 */
class Panier implements PanierInterface {
    
    private $contenu;
    
    public function __construct($contenu = array()) {
        $this->contenu = $contenu;
    }
    
    public function getContenu() {
        return $this->contenu;
    }

    public function setContenu($contenu) {
        $this->contenu = $contenu;
    }
    
    public function ajouterProduit(ProduitInterface $produit) {
        
        $this->contenu[] = $produit;
        
        return $this;
    }


}
