<?php
require __DIR__.'/vendor/autoload.php';

use Table\Table;
use TableLeg\TableLeg;
use Book\Book;
use TableTop\TableTop;


$leg1 = new TableLeg(54, 2, 'red');
$leg2 = new TableLeg(50, 2, 'blue');
$leg3 = new TableLeg(50, 2, 'yellow');
$leg4 = new Book(5, 1, 'green');
$legs = [$leg1, $leg2, $leg3, $leg4];

$tableTop = new TableTop(5, 2, 'green');

$newTable = new Table($legs, $tableTop);

echo '<pre>';
print_r($newTable);
echo '</pre>';

if ($newTable->checkStabilization()) {
    echo 'STABLE<br />';
} else {
    echo 'NOt Stable<br />';
};

echo $newTable->getWeight().'<br />';
echo $newTable->getHeight().'<br />';
echo $newTable->getHighestLegHeight().'<br />';

echo '<pre>';
print_r($newTable->getHighestLeg());
echo '</pre>';

$newTable->getHighestLeg()->setWeight(10);

echo '<pre>';
print_r($newTable->getHighestLeg());
echo '</pre>';
