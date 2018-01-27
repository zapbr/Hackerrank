<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

fscanf($_fp, "%i",$n);
while (($line = fgets($_fp)) !== false) {
    $arr[] = trim($line);
}
$tests = array_chunk($arr, 3);
foreach($tests as $t => $test)
{
	$m = intval($test[0]);
	$ices = array_map('intval', explode(' ', $test[2]));
	arsort($ices);
	$ant = 0;
	$r = [];

	$f = array_filter($ices, function($v) use ($m) { return $v < $m; });
	$n = 0;
	foreach ($f as $i => $ice)
	{

		$value = abs($m - $ice);
		$bs = array_filter($f, function($v, $k) use ($value, $i) { return $v == $value && $k != $i; }, ARRAY_FILTER_USE_BOTH);

		if( count($bs) > 0  )
		{
			$r[] = key($bs)+1;
		}
	}
	sort($r);
	echo implode(' ', $r), PHP_EOL;
}
