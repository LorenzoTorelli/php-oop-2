<?php

class User {
    private $nome;
    private $cognome;
    private $eta;
    private $budget = 0;


    function __construct($_nome, $_cognome, $_eta ) {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->eta = $_eta;
    }

    public function getNome() {
        return $this->nome;
    }
    
    public function getCognome() {
        return $this->cognome;
    }

    public function getEta() {
        return $this->eta;
    }

    public function getBudget() {
        return $this->budget; 
    }
    public function setBudget($_budget) {
        $this->budget = $_budget;
    }

    public function addMoney($_money) {
        $this->budget += $_money;
    }
    
    public function removeMoney($_money) {
        $this->budget -= $_money;
    }

    public function compraOggetto($_oggetto, $_scaffale) {
        $costo = $_oggetto->getCosto();
        if ( $costo > $this->budget) {
            echo "<h2>NON TE LO PUOI PERMETTERE</h2>";
        }
        else {
            $this->removeMoney($costo);
            $_scaffale->deleteItem($_oggetto);
        }

    }

}