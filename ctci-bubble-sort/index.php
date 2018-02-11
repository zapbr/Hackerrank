<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$a_temp = fgets($handle);
$a = explode(" ",$a_temp);
array_walk($a,'intval');
$c = 0;
for ( $i = 0; $i < $n; $i++) {
    for ($j = 0; $j < ($n - 1); $j++) {
        if( $a[$j] > $a[$j+1] )
        {
        	swap($a[$j], $a[$j+1]);
        	$c++;
        }
    }
}

echo "Array is sorted in $c swaps.", PHP_EOL;
echo "First Element: ", reset($a), PHP_EOL;
echo "Last Element: ", end($a), PHP_EOL;

function swap(&$x,&$y) {
    $tmp=$x;
    $x=$y;
    $y=$tmp;
}
