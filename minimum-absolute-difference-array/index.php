<?php

$handle = fopen ("php://stdin", "r");
function minimumAbsoluteDifference($n, $arr) {
    // Complete this function
	$min = 9999999;
	rsort($arr);
	foreach($arr as $i=>$a)
	{
		$adv = ( $i+1 < count($arr) )? $i+1 : 0;
		$diff = abs($a - $arr[$adv]);

		if($diff < $min)
		{
			$min = $diff;
		}		

	}
	
	return $min;
}

fscanf($handle, "%i",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
$arr = array_map('intval', $arr);
$result = minimumAbsoluteDifference($n, $arr);
echo $result . "\n";

?>
