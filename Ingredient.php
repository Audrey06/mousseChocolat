<?php

class Ingredient {
    private $name;
    private $quantity;
    private $mesure;

    public function __construct($name, $quantity, $mesure) {
        $this->setName($name);
        $this->setQuantity($quantity);
        $this->setMesure($mesure);
    }

    /****************GETTERS*************/
    /*
    *return $name;
    *type: string
    */
     public function getName() {
        return $this->name;
    }

    /*
    *return $quantity
    *type: integer
    */
     public function getQuantity() {
        return $this->quantity;
    }

    /*
    *return $mesure
    *type: string
    */
    public function getMesure() {
        return $this->mesure;
    }


    /********************SETTERS****************/

    /*
    *set value $name
    *type: string
    */
    public function setName($name) {
        $this->name = $name;
    }

    /*
    * set value $quantity
    *type: float
    */
    public function setQuantity($quantity) {
        $this->quantity =$quantity;
    }

    /*
    *set value $mesure
    *type : string
    */
    public function setMesure($mesure) {
        $this->mesure =$mesure;
    }

}

$test = new Ingredient('chocolat', 100, 'grammes');
echo $test->getName();
echo $test->getQuantity();
echo $test->getMesure();



