<?php
include('PrimeMultiplicationTable.php');

$number = 10;
$primes = PrimeMultiplicationTable::generatePrimeNumbers($number);
$table = PrimeMultiplicationTable::generateTable($primes, $number);
print $table;