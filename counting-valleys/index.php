<?php

$handle = fopen ("php://stdin", "r");
function countingValleys($n, $s) {
        
    $arr = str_split($s);
    $level = 0;
    $valleys = 0;
    $above = true;
    foreach ($arr as $key => $step) {

    	$level = ( $step == 'U' )? $level+1 : $level-1;

    	if( $level < 0 && $above )
    	{
    		$valleys++;
    		$above = false;
    	} elseif($level >= 0) {
    		$above = true;
    	}

    	// echo $level, '  ', $valleys, PHP_EOL;
    }

    return $valleys;
}

fscanf($handle, "%i",$n);
fscanf($handle, "%s",$s);
$result = countingValleys($n, $s);
echo $result . "\n";
