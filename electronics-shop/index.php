<?php

$handle = fopen ("php://stdin", "r");
function getMoneySpent($keyboards, $drives, $s){
    $v = [];
    foreach ($keyboards as $i => $keyboard) {
    	foreach ($drives as $j => $drive) {
    		$sum = ($keyboard+$drive);
    		// echo $keyboard, ' + ', $drive, ' = ', $sum, PHP_EOL;
    		if($sum <= $s)
    		{
    			$v[] = $sum;
    		}
    	}
    }
    sort($v);
    $ret = end($v); // greater value
    // var_dump($v);
    return ($ret > 0)? $ret : -1;
}

fscanf($handle,"%d %d %d",$s,$n,$m);
$keyboards_temp = fgets($handle);
$keyboards = explode(" ",$keyboards_temp);
$keyboards = array_map('intval', $keyboards);
$drives_temp = fgets($handle);
$drives = explode(" ",$drives_temp);
$drives = array_map('intval', $drives);
//  The maximum amount of money she can spend on a keyboard and USB drive, or -1 if she can't purchase both items
$moneySpent = getMoneySpent($keyboards, $drives, $s);
echo $moneySpent . "\n";
