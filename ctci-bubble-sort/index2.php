<?php
/*
SECOND SOLUTION TO THE SAME PROBLEM 
BETTER PERFORMANCE!
*/
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$a_temp = fgets($handle);
$a = explode(" ",$a_temp);
array_walk($a,'intval');
$c = 0;
$sorted = false;
$lst = count($a)-1;
while (!$sorted) {
	$sorted = true;
	for ($j = 0; $j < $lst; $j++) {
		if( $a[$j] > $a[$j+1] )
		{
			$sorted = false;
			swap($a[$j], $a[$j+1]);
			$c++;
		}
	}
	$lst--;
}

echo "Array is sorted in $c swaps.", PHP_EOL;
echo "First Element: ", reset($a), PHP_EOL;
echo "Last Element: ", end($a), PHP_EOL;

function swap(&$x,&$y) {
    $tmp=$x;
    $x=$y;
    $y=$tmp;
}
?>
