<?php

/**
 * Surprisingly there are only three numbers that can be written as the sum of 
 * fourth powers of their digits:
 *
 * 1634 = 14 + 64 + 34 + 44
 * 8208 = 84 + 24 + 04 + 84
 * 9474 = 94 + 44 + 74 + 44
 * As 1 = 14 is not a sum it is not included.
 *
 * The sum of these numbers is 1634 + 8208 + 9474 = 19316.
 *
 * Find the sum of all the numbers that can be written as the sum of fifth 
 * powers of their digits.
 */

class FifthPower {

    protected $values = array(0, 1, 32, 243, 1024, 3125, 7776, 16807, 32768, 59049);

    function execute() {

        for ($i=2;$i<354294;$i++) {
            
            $asArray = str_split("$i");
            $sum = 0;
            foreach ($asArray as $j) {
                $sum += $this->values[$j];
            }
            if ($sum == $i)
                echo $i."\n";
        } 
    }
}

$fifth = new FifthPower();
$fifth->execute();
