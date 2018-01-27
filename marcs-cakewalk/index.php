<?php

$handle = fopen ("php://stdin", "r");
function marcsCakewalk($calorie) {
    rsort($calorie);
	$miles = 0;
	foreach ($calorie as $k => $c) {
		$miles = $miles + ($c * pow(2, $k));
	}
	return $miles;
}

fscanf($handle, "%i",$n);
$calorie_temp = fgets($handle);
$calorie = explode(" ",$calorie_temp);
$calorie = array_map('intval', $calorie);
$result = marcsCakewalk($calorie);
echo $result . "\n";

?>
