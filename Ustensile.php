<?php

class Ustensile{
    private $name;
    private $utility;

    public function __construct($name, $utility) {
        $this->setName($name);
        $this->setUtility($utility);
    }

    /**************** GETTERS ******************/

    /*
    * return $name
    * type: string
    */
    public function getName() {
        return $this->name;
    }

    /*
    * return $utiliyy
    * type: string
    */
    public function getUtility() {
        return $this->utility;
    }

    /***************** SETTERS *******************/

    /*
    * set value $name
    * type: string
    */
    public function setName($name) {
        $this->name = $name;
    }

        /*
    * set value $utility
    * type: string
    */
    public function setUtility($utility) {
        $this->utility = $utility;
    }
}

$casserole = new Ustensile('casserole', 'cuit');
echo $casserole->getName().' '.$casserole->getUtility();


