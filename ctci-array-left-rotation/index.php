<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$n,$k);
$a_temp = fgets($handle);
$a = explode(" ",$a_temp);
$a = array_map('intval', $a);
$na = [];
foreach( $a as $i => $item )
{
	$nk = ( $i - $k < 0 )? ($i - $k)+count($a):($i - $k);
	$na[$nk] = $item;
}
ksort($na);
echo implode(' ', $na);
