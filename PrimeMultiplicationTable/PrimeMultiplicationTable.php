<?php

class PrimeMultiplicationTable
{
    public static function isPrimeNumber($number)
    {
        if ($number <= 1) {
            return false;
        }

        for ($i = 2; $i <= $number/2; $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }

        return true;
    }

    public static function generatePrimeNumbers($count)
    {
        $primes = [];
        $num = 2;
        $i = 0;

        while ($i < $count) {
            if (self::isPrimeNumber($num)) {
                $primes[] = $num;
                $i++;
            }
            $num++;
        }

        return $primes;
    }

    public static function generateTable($primes, $number)
    {
        $firstRow = '';
        $rows = '';
        $countColumn = 0;

        foreach ($primes as $row) {
            $firstRow = $firstRow . "\t" . $row;
            foreach ($primes as $column) {
                $cellValue = $row * $column;
                $rows = $rows . "\t" . $cellValue;
                $countColumn++;

                if ($countColumn == $number) {
                    $rows = $rows . PHP_EOL;
                    $countColumn = 0;
                }
            }
        }


        return $firstRow . PHP_EOL . $rows;
    }
}