<?php

require_once(__DIR__ . '/models/ABA.php');
require_once(__DIR__ . '/models/PiPay.php');
require_once(__DIR__ . '/models/Wing.php');

echo '<h1>Week 4 Assignment</h1>';

// ABA => 4
// PiPay => 1
// Wing => 3

$banks = [
    new ABA(1,5,1),
    new Wing(2,3,2),
    new ABA(3,4,1),
    new ABA(4,5,1),
    new PiPay(5,6,1),
    new ABA(6,10,1),
    new Wing(7,15,1),
    new Wing(8,2,1),
];

function renderDisplayBanks($banks)
{
    $str = '<table border="1"><tr><th>Item</th><th>Price</th><th>Quantity</th><th>Method</th><th>Total</th></tr>';
    foreach ($banks as $bank) {
        $str .= '<tr><td>' . $bank->getItems() . '</td><td>' . $bank->getPrice() . '</td><td>' . $bank->getQuantity()
        . '</td><td>' . $bank->getType(). '</td><td>' . $bank->getNumTotal() . '</td></tr>';
    }
    $str .= '</table>';

    return $str;
}
echo renderDisplayBanks($banks);

echo '<h3>1. Number of sales by ABA method</h3>';
$type = 'ABA';
$totalNumberABA = 0;
foreach ($banks as $bank) {
    if($type === $bank->getType()){
        $totalNumberABA += $bank->getQuantity();
    }
}
echo '<p>Total Number of sales by ABA : ' . $totalNumberABA  . ' </p>';
echo '<p>(I/m base on Quantity)' . ' </p>';

echo '<h3>2. Number of sales by PiPay and Wing method</h3>';
$typePiPay = 'PiPay';
$typeWing = 'Wing';
$totalNumberPiPayNWing = 0;
foreach ($banks as $bank) {
    if($typePiPay === $bank->getType() || $typeWing === $bank->getType()){
        $totalNumberPiPayNWing += $bank->getQuantity();
    }
}
echo '<p>Total Number of sales by PiPay and Wing : ' . $totalNumberPiPayNWing  . ' </p>';
echo '<p>(I/m base on Quantity)' . ' </p>';

echo '<h3>3. Display all sales ordering by biggest total amount</h3>';
usort($banks, fn ($s1, $s2) => $s2->getNumTotal() <=> $s1->getNumTotal());
echo renderDisplayBanks($banks);

?>