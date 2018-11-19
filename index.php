<?php
require __DIR__.'/vendor/autoload.php';

use Table\Table;
use TableLeg\TableLeg;
use Book\Book;


$leg1 = new TableLeg(50, 2);
$leg2 = new TableLeg(50,2);
$leg3 = new TableLeg(50,2);
$leg4 = new Book(5,1);

$legs = array(
    3 * $leg4->getWidth(),
    $leg3->getHeight(),
    $leg2->getHeight(),
    $leg1->getHeight(),
);

$weight = array(
    3 * $leg4->getWeight(),
    $leg3->getWeight(),
    $leg2->getWeight(),
    $leg1->getWeight(),
);

$newTable = new Table($legs, $weight);

echo '<pre>';
print_r($newTable);
echo '</pre>';

if ($newTable->checkStabilization()) {
    echo 'STABLE<br />';
} else {
    echo 'NOt Stable<br />';
};

echo $newTable->getWeight();