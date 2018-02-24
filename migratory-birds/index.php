<?php

$handle = fopen ("php://stdin", "r");
function migratoryBirds($n, $ar) {
    $totals = array_count_values ($ar);
	asort($totals);
    $max = end($totals);
	$filtred = array_filter($totals, function($i) use ($max){ return ($i == $max); });
    ksort($filtred);
	return key($filtred);
}

fscanf($handle, "%i",$n);
$ar_temp = fgets($handle);
$ar = explode(" ",$ar_temp);
$ar = array_map('intval', $ar);
$result = migratoryBirds($n, $ar);
echo $result . "\n";
