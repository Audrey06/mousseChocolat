<?php

include('./Ingredient.php');
include('./Appareil.php');
include('./Ustensile.php');
include('./Recettes.php');

$ingredients = [
    $chocolat = new Ingredient("chocolat", 250, "gr"),
    $oeuf = new Ingredient("oeuf", 4, "unite"),
    $sucre = new Ingredient("sucre", 100, "gr"),
    $sel = new Ingredient("sel", 1, "gr"),

];


$ustensiles = [
    $saladier = new Ustensile("saladier", "contient", "verre"),
    $fouet = new Ustensile("fouet", "fouette", "latex"),
    $casserolle = new Ustensile("casserolle", "chauffer", "inox")
];

$appareils = [
    $batteur = new Appareil("batteur", "melange"),
    $gaziniere = new Appareil("gaziniere", "cuit"),
    $frigo = new Appareil("frigo", "refroidir"),
];

$mousseChoco =new Recettes($ingredients,$ustensiles,$appareils);
foreach($mousseChoco->getIngredient() as $ingredients){
    echo "vous aurez besoin de " . $ingredients->getQuantity() .''. $ingredients->getMesure() . 'de ' . $ingredients->getName();
}

    foreach ($mousseChoco->getUstensile() as $ustensile) {
        echo "vous allez utiliser un " . $ustensile->getName() .''. $ustensile->getMateriaux() . 'pour ' . $ustensile->getUtility();
    }
    
    foreach ($mousseChoco->getAppareil() as $appareils) {
        echo " vous allez utiliser un " . $appareils->getName() . ' pour ' . $appareils->getUtility() . '<br>';
    }
    


