<?php

function execute() {
    $values = array();
    for($i=2;$i<=100;$i++) {
        for($j=2;$j<=100;$j++) {
            #$tmp = $j * log($i);
            $tmp = bcpow($i, $j);
            $values[] = $tmp;
        }
    }

    echo count(array_unique($values))."\n";
}

execute();
