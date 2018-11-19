<?php
require __DIR__.'/vendor/autoload.php';

use Table\Table;
use TableLeg\TableLeg;
use Book\Book;


$leg1 = new TableLeg(50);
$leg2 = new TableLeg(50);
$leg3 = new TableLeg(50);
$leg4 = new Book(5);

$legs = array(
    3 * $leg4->getWidth(),
    $leg3->getHeight(),
    $leg2->getHeight(),
    $leg1->getHeight(),
);

$newTable = new Table($legs);

echo '<pre>';
print_r($newTable);
echo '</pre>';

if ($newTable->checkStabilization()) {
    echo 'STABLE';
} else {
    echo 'NOt Stable';
};