<?php

$handle = fopen ("php://stdin", "r");
function getWays($n, $c, $i = 0, &$memo = []){
	// echo $n, ' - [', implode(',',$c), ']', PHP_EOL;
	$total = 0;
	$ways = 0;
	$key = $n . '-'. $i;
	
	if( isset($memo[$key]) )
	{
		return $memo[$key];
	}

	if($n == 0)
	{
		return 1;
	}

	if(!isset($c[$i]))
	{
		return 0;
	}

	while ( $total <= $n) {
		// echo $total, ' - ', $c[$i], ' : ', $i, PHP_EOL;
		$rest = $n - $total;
		$ways += getWays($rest, $c, ($i+1),$memo);
		$total += $c[$i];
	}

	$memo[$key] = $ways;
	return $ways;

    // echo $n, ' - [', implode(',',$c), ']', PHP_EOL;
    // foreach( $c as $coin )
    // {
    // 	echo $coin, ' : ', $n-$coin, PHP_EOL;
    // }
}

fscanf($handle, "%d %d", $n, $m);
$c_temp = fgets($handle);
$c = explode(" ",$c_temp);
$c = array_map('intval', $c);
// Print the number of ways of making change for 'n' units using coins having the values given by 'c'
$ways = getWays($n, $c);
echo $ways;
