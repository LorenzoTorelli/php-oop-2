<?php

require_once __DIR__ .'/classes/users.php';
require_once __DIR__ .'/classes/stock.php';
require_once __DIR__ .'/classes/object.php';


$utente1 = new User("Mario", "Rossi", 50);

echo "<h3>{$utente1->getNome()}</h3>";
echo "<h3>{$utente1->getCognome()}</h3>";
echo "<h3>{$utente1->getEta()}</h3>";


$oggetto1 = new Oggetto("valigia", 50);
$oggetto2 = new Oggetto("lampada", 5);
$oggetto3 = new Oggetto("scrivania", 20);

$stock1 = new Stock("Scaffale1", [$oggetto1, $oggetto2, $oggetto3]);

echo "Lista oggetti: {$stock1->getStockName()}";
foreach ($stock1->getStock() as $item) {
    echo "<p>{$item->getName()}: {$item->getCosto()} euro </p>";
}

$stock1->addItem($oggetto2);
// $stock1->deleteItem($oggetto3);


$utente1->addMoney(100);
$utente1->compraOggetto($oggetto2, $stock1);

echo "Lista oggetti dopo delete: {$stock1->getStockName()}";
foreach ($stock1->getStock() as $item) {
    echo "<p>{$item->getName()}: {$item->getCosto()} euro </p>";
};

echo "<h2>{$utente1->getBudget()}</h2>";
// var_dump($stock1->getStock());



// echo "<h3>{$utente1->getBudget()}</h3>";
// $utente1->setBudget(40);
// echo "<h3>{$utente1->getBudget()}</h3>";
// $utente1->addMoney(15);
// echo "<h3>{$utente1->getBudget()}</h3>";
// $utente1->removeMoney(10);
// echo "<h3>{$utente1->getBudget()}</h3>";




