<?php

/**
 * Description of User
 *
 * @author Administrateur
 */
class User {
    
    private $prenom;
    private $panier;


    public function __construct($prenom = null) {
        $this->prenom = $prenom;
    }
    
    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }
    
    public function getPanier() {
        return $this->panier;
    }

    public function setPanier(Panier $panier) {
        $this->panier = $panier;
    }

        
    public function ajouterPanier(PanierInterface $panier) {

        $this->panier = $panier;
        return $this;
        
    }
    
    public function validerPanier() {
//        var_dump($this->panier);
        echo 'commit'; 
        
    }
    


    
}
