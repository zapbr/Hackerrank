<?php

$handle = fopen ("php://stdin", "r");
function hackerrankInString($s) {
    //RegExp <3
    return ( preg_match('/[h].*[a].*[c].*[k].*[e].*[r].*[r].*[a].*[n].*[k]/', $s, $matches) > 0 )?'YES':'NO';
}

fscanf($handle, "%i",$q);
for($a0 = 0; $a0 < $q; $a0++){
    fscanf($handle, "%s",$s);
    $result = hackerrankInString($s);
    echo $result . "\n";
}
