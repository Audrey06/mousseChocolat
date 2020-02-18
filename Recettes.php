<?php

class Recettes {
    private $ingredients;
    private $ustensiles;
    private $appareils;


    /****************CONSTRUCTOR**********/

    public function __construct($ingredients, $ustensiles, $appareils){
        $this->setIngredient($ingredients);
        $this->setUstensile($ustensiles);
        $this->setAppareil($appareils);
    }

    /***************GETTER*************/

    /*
    *return $ingredients
    *type : array[object]
    */

    public function getIngredient(){
        return $this-> $ingredients;
    }

    /*
    *return $ustensiles
    *type: array[object]
    */

    public function getUstensile(){
        return $this-> $ustensiles;
    }

    /*
    *return $appareils
    *type: array[object]
    */

    public function getAppareil(){
        return $this-> $appareils;
    }

    /****************SETTER**************/

    /*
    *set value $ingredients
    *type : array[object]
    */

    public function setIngredient($ingredients){
        $this->ingredients = $ingredients;

    }

    /*
    *set value $ustensiles
    *type : array[object]
    */

    public function setUstensile($ustensiles){
        $this->ustensiles = $ustensiles;
    }

    /*
    *set value $appareils
    *type : array[object]
    */

    public function setAppareil($appareils){
        $this->appareils = $appareils;
    }

}