<?php

require '../vendor/autoload.php';


$user = new User('JL');
$produit = new Produit('Livre', 5, 20);
$produit2 = new Produit('Voiture', 1, 1000);
$panier = new Panier();

$user->ajouterPanier($panier);

$user->getPanier()
    ->ajouterProduit($produit)
    ->ajouterProduit($produit2)
;

$user->validerPanier();


var_dump($user->getPanier());




//$panier = $user->ajouterPanier($maCommande);
//$user->commander($produit, 4);

//var_dump($user);
//var_dump($produit);
//var_dump($panier);



//$user->commanderPanier($panier);