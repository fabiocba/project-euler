<?php
/**
 * 145 is a curious number, as 1! + 4! + 5! = 1 + 24 + 120 = 145.
 *
 * Find the sum of all numbers which are equal to the sum of the factorial of 
 * their digits.
 *
 * Note: as 1! = 1 and 2! = 2 are not sums they are not included.
 */

// 0 to 9 factorial
$factorial = array(1,1,2,6,24,120,720,5040,40320,362880);
for($i=1;$i<=2540160;$i++) {
    $asArray = str_split("$i");
    $sum = 0;
    foreach($asArray as $j) {
        $sum += $factorial[$j];
    }

    if ($sum == $i) {
        echo $i."\n";
    }
}
