<?php

$handle = fopen ("php://stdin", "r");

function gameOfThrones($s){
	$v = array_count_values(str_split($s));
	$odd = 0;
	foreach ($v as $i => $value) {
		if( $value%2 != 0 )
		{
			$odd++;
		}
	}
	return ($odd > 1)? 'NO' : 'YES';
}

fscanf($handle, "%s",$s);
$result = gameOfThrones($s);
echo $result . "\n";
