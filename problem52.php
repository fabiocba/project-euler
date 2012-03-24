<?php
/**
 * It can be seen that the number, 125874, and its double, 251748, contain 
 * exactly the same digits, but in a different order.
 * Find the smallest positive integer, x, such that 2x, 3x, 4x, 5x, and 6x, 
 * contain the same digits.
 */

function has_same_digits($num) {
    $base = str_split("$num");

    $comp = array();

    for($i=2;$i<=6;$i++) {
        $i_times = $i*$num;
        foreach(str_split($i_times) as $n) {
            $comp[$n] = $n;
        }
    }

    return (count($comp) == count($base) && 
        count(array_diff($comp, $base))==0);

}

$i = 2;
while(!has_same_digits($i)) {
    $i++;
}

print "$i\n";
