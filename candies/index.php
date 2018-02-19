<?php

$handle = fopen ("php://stdin", "r");
function candies($n, $r) {

	$c = [];
	$c[0] = 1;
	$numcandies = 1;
	for ($i=1; $i < $n; $i++) {
		if( $r[$i] > $r[$i-1] )
		{
			$numcandies++;
		} elseif( $r[$i] <= $r[$i-1] )
		{
			$numcandies = 1;
		}
		$c[] = $numcandies;
	}
	$numcandies = 1;
	$total = $c[$n-1];
	for ($i=($n-2); $i >=0 ; $i--) {
		if( $r[$i] > $r[$i+1] )
		{
			$numcandies++;
		} elseif( $r[$i] <= $r[$i+1] )
		{
			$numcandies = 1;
		}
		$c[$i] = ( $numcandies > $c[$i] )? $numcandies : $c[$i];
		$total += $c[$i];
	}

	return $total;
}
fscanf($handle, "%i",$n);
$arr = array();
for($arr_i = 0; $arr_i < $n; $arr_i++){
   fscanf($handle,"%i",$arr[]);
}

$result = candies($n, $arr);
echo $result . "\n";
