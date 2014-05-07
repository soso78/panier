<?php

/**
 *
 * @author Administrateur
 */
interface ProduitInterface {
    
    public function getNom();
    public function getQuantite();
    public function setNom($nom);
    public function setQuantite($quantite);
    public function getPrix();
    public function setPrix($prix);
    
}
