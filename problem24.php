<?php
/**
 * A permutation is an ordered arrangement of objects. For example, 3124 is one
 * possible permutation of the digits 1, 2, 3 and 4. If all of the permutations
 * are listed numerically or alphabetically, we call it lexicographic order. 
 * The lexicographic permutations of 0, 1 and 2 are:
 * 012   021   102   120   201   210
 * What is the millionth lexicographic permutation of the digits 
 * 0, 1, 2, 3, 4, 5, 6, 7, 8 and 9?
 */

class Perm {

    protected $values; // values from 0 to num
    protected $num; // how many items in the set
    protected $max; // defines the quantity of permutations

    function Perm($num) {
        $this->num = $num;
        $this->max = $this->factorial($num);

        $this->values = array();
        for ($i=0;$i<$num;$i++) {
            $this->values[] = $i;
        }
        //$this->info();
    }

    function factorial($num) {
        if ($num==1)
            return 1;
        return $num * $this->factorial($num-1);
    }

    function printa($array) {
        foreach($array as $i) {
            echo $i." ";
        }
        echo "\n";
    }

    function getNext() {
        
        $i = $this->num - 1;
        while ($this->values[$i-1] >= $this->values[$i])
            $i--;

        $j = $this->num;
        while ($this->values[$j-1] <= $this->values[$i-1])
            $j--;

        $tmp = $this->values[$i-1];
        $this->values[$i-1] = $this->values[$j-1];
        $this->values[$j-1] = $tmp;

        $i++;
        $j = $this->num;

        while ($i < $j) {
            $tmp = $this->values[$i-1];
            $this->values[$i-1] = $this->values[$j-1];
            $this->values[$j-1] = $tmp;

            $i++;
            $j--;
        }
    }

    function execute() {
        for ($a=0;$a<=999998/*$this->max-2*/;$a++) {
            $this->getNext();
        }

        foreach($this->values as $v)
            echo "$v";
    }
}

$perm = new Perm(10);
$perm->execute();

