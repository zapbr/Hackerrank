<?php

$handle = fopen ("php://stdin", "r");
function solve($n, $s, $d, $m){
    $ways = 0;
    foreach ($s as $i => $sq) {
    	if( array_sum(array_slice($s, $i, $m)) === $d )
    	{
    		$ways++;
    	}
    }
    return $ways;
}

fscanf($handle, "%d",$n);
$s_temp = fgets($handle);
$s = explode(" ",$s_temp);
$s = array_map('intval', $s);
fscanf($handle, "%d %d", $d, $m);
$result = solve($n, $s, $d, $m);
echo $result . "\n";
