<?php

function is_palindromic($i) {
    return "$i"==strrev("$i");
}

for ($i=1;$i<=1000000;$i+=2) {
    if (is_palindromic($i) && is_palindromic(decbin($i)))
        echo $i."\n";
}
