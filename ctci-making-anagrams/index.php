<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%s",$a);
fscanf($handle,"%s",$b);

$arr_a = str_split($a);
$arr_b = str_split($b);

$f = array_pad(array(), 26, 0); // initalize the array

foreach ($arr_a as $key => $va) {
	// var_dump($va, ord($va)-ord('a'));
	$f[ord($va)-ord('a')]++; // normalize de index using as base 'A' letter as first = 0
}

foreach ($arr_b as $key => $vb) {
	// var_dump($vb, ord($vb)-ord('a'));
  // if has the same letter and the same qntities of the same letter, the value is allways 0 
  // if has diff qntities, the value is the difference 
	$f[ord($vb)-ord('a')]--; 
}

$total = 0;
foreach ($f as $t) {
	$total += abs($t); // sum the values of deletions
}

echo $total;
