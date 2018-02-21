<?php
/*
  THIS SOLUTION WORKS VERY FAST ON 10 OF 14 TEST CASES.
  THE FAILURE IS IN THE TESTS THEY HAVE MORE OF ONE SOLUTION.
*/
$handle = fopen ("php://stdin", "r");
function palindromeIndex($s){
	if($s === strrev($s))
	{
		return -1;
	}
	$t = strlen($s);
	for( $i = 0; $i < $t; $i++)
	{
		$e = ($t-$i)-1;
		$ret = (substr($s, $i, 1) <=> substr($s, $e, 1));
		if( ($ret === 1 && $i === 0) || ($ret !=0 && $i > 0) )
		{
			return $i;
		}
	}
}

fscanf($handle, "%i",$q);
for($a0 = 0; $a0 < $q; $a0++){
    fscanf($handle, "%s",$s);
    $result = palindromeIndex($s);
    echo $result . "\n";
}
