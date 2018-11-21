<?php
$start = microtime(true);
require __DIR__.'/vendor/autoload.php';

use Table\Table;
use TableLeg\TableLeg;
use Book\Book;
use TableTop\TableTop;

$tableTop = new TableTop(5, 2, 'green');
$newTable = new Table($tableTop);

$newTable->addLeg(new Book(5,1,'blue'));
$newTable->addLeg(new TableLeg(50,1,'blue'));
$newTable->addLeg(new TableLeg(54, 2, 'red'));
$newTable->addLeg(new TableLeg(50, 2, 'blue'));

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

echo 'Время выполнения скрипта: '.round(microtime(true) - $start, 4).' сек.';