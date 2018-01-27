<?php

$handle = fopen ("php://stdin", "r");
function timeConversion($s) {
    // Complete this function
    $d = new DateTime('2000-01-01 ' . $s);
	return $d->format('H:i:s');
}

fscanf($handle, "%s",$s);
$result = timeConversion($s);
echo $result . "\n";

?>
