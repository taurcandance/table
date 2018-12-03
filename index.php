<?php
require __DIR__.'/vendor/autoload.php';

use StandardWoodenLeg\StandardWoodenLeg;
use LegOfJunk\LegOfJunk;
use Table\Table;
use Book\Book;
use TableTop\TableTop;

$book            = new Book(5,10, 20, 2, 'yellow');
$partsJunkForLeg = [$book, $book, $book, $book, $book, $book, $book, $book, $book, $book];
$legOfJunk       = new LegOfJunk($partsJunkForLeg);
$leg1            = new StandardWoodenLeg(54, 2, 'wooden', 'oak');
$leg2            = new StandardWoodenLeg(55, 2, 'wooden','birch');
$leg3            = new StandardWoodenLeg(50, 2, 'wooden', 'pine');
$legs            = [$leg1, $leg2, $leg3, $legOfJunk];
$tableTop        = new TableTop(5, 7, 'green');

$newTable = new Table($tableTop, $legs);

var_dump($newTable);

if ($newTable->checkStabilization()) {
    echo 'STABLE<br />';
} else {
    echo 'NOt Stable<br />';
};

$newTable->getHighestLeg()->setWeight(20);
var_dump($newTable->getHighestLeg());
var_dump($newTable->getCountLegs());
var_dump($newTable->getHighestLegHeight());
var_dump($newTable->getHeight());
var_dump($newTable->getWeight());
//$legOfJunk->getColor(); new Exception