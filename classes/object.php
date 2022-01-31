<?php

class Oggetto {
    private $name;
    private $costo;

    function __construct($_name, $_costo) {
        $this->name = $_name;
        $this->costo = $_costo;
    }

    public function getName() {
        return $this->name;
    }

    public function getCosto() {
        return $this->costo;
    }

    public function changeCosto($_newCosto) {
        $this->costo = $_newCosto;
    }

}
