<?php

class Stock {
    private $stockName;
    private $stock;

    public function __construct($_stockName, $_items) {
        $this->stockName = $_stockName;
        $this->stock = $_items;
    }

    public function getStockName() {
        return $this->stockName;
    }

    public function addItem($_item) {
        array_push($this->stock,$_item);
    }

    public function deleteItem($_item) {
        $key = array_search($_item, $this->stock);
        unset($this->stock[$key]);
    }

    public function getStock() {
        return $this->stock;
    }
}