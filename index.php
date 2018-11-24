<?php
$start = microtime(true);
require __DIR__.'/vendor/autoload.php';

use Table\Table;
use Book\Book;
use TableTop\TableTop;

$tableTop = new TableTop(5, 2, 'green');
$newTable = new Table($tableTop);

$book = new Book(5, 1, 'blue');
$newTable->addLeg($book->getWidth(), $book->getWeight(), $book->getColor());
$newTable->addLeg(50, 1, 'blue');
$newTable->addLeg(54, 2, 'red');
$newTable->addLeg(50, 2, 'blue');

var_dump($newTable);

if ($newTable->checkStabilization()) {
    echo 'STABLE<br />';
} else {
    echo 'NOt Stable<br />';
};

echo $newTable->getWeight().'<br />';
echo $newTable->getHeight().'<br />';
echo $newTable->getHighestLegHeight().'<br />';

var_dump($newTable->getHighestLeg());
$newTable->getHighestLeg()->setWeight(10);
var_dump($newTable->getHighestLeg());

echo 'Count legs :'.$newTable->getCountLegs().'<br />';
echo 'Время выполнения скрипта: '.round(microtime(true) - $start, 4).' сек.';