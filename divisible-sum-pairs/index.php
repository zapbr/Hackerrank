<?php

$handle = fopen ("php://stdin", "r");
function divisibleSumPairs($n, $k, $ar) {
	$c = 0;
	foreach ($ar as $i => $a) {
		$left = count($ar);
		$start = $i+1;
		if( ($left-$start) >= 1 )
		{
			for ($j=$start; $j < $left; $j++) {
				if( ($a+$ar[$j])%$k === 0 )
				{
					$c++;
				}
			}
		}
	}
	return $c;
}

fscanf($handle, "%i %i", $n, $k);
$ar_temp = fgets($handle);
$ar = explode(" ",$ar_temp);
$ar = array_map('intval', $ar);
$result = divisibleSumPairs($n, $k, $ar);
echo $result . "\n";
