<?php
require __DIR__.'/vendor/autoload.php';

use BaseLeg\BaseLeg;
use LegOfJunk\LegOfJunk;
use Table\Table;
use Book\Book;
use TableTop\TableTop;

$book            = new Book(6, 1, 'red');
$partsJunkForLeg = [$book, $book, $book, $book, $book, $book, $book, $book, $book, $book];
$legOfJunk       = new LegOfJunk($partsJunkForLeg);
$leg1            = new BaseLeg(54, 2, 'wooden');
$leg2            = new BaseLeg(55, 2, 'wooden');
$leg3            = new BaseLeg(50, 2, 'wooden');
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