<?php
require __DIR__ . '/vendor/autoload.php';
use Table\Table;
use TableLeg\TableLeg;
use Book\Book;

$leg1 = new TableLeg(49);
$leg2 = new TableLeg(50);
$leg3 = new TableLeg(50);
$leg4 = new TableLeg(50);
$leg5 = new Book(5);

$legs = array(
    10*$leg5->getHeight(),
    $leg2->getHeight(),
    $leg3->getHeight(),
    $leg4->getHeight()
);

$newTable = new Table($legs);

echo '<pre>';
print_r($newTable);
echo '</pre>';
echo $newTable->checkStabilization();