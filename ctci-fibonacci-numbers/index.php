<?php
$handle = fopen ("php://stdin","r");

    function fibonacci($n) {
        // Write your code here.
        $fib = [0,1];
	    	for ($i=1; $i < $n; $i++) {
	    		// echo $fib[$i-1], ' + ', $fib[$i], ' = ', ($fib[$i-1] + $fib[$i]), PHP_EOL;
	    		$fib[] = ($fib[$i-1] + $fib[$i]);
	    	}
	    	return $fib[$n];        
    }

    $n = fgets($handle);

    printf("%d", fibonacci($n));

fclose($handle);
