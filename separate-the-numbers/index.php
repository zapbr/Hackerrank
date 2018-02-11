<?php

$handle = fopen ("php://stdin", "r");
function separateNumbers($s) {
    if( strlen($s) == 1 )
    {
    	// only one char =P
    	echo 'NO', PHP_EOL;
    	return;
    }

    // split the string to 16 - max possible division and try
    $splitable = false;
    $lesser = null;
    for ($i=1; $i <= 16 ; $i++) {
    	$lesser = null;
    	$int = (int) substr($s, 0, $i);
    	$left = substr($s, ($i-strlen($s)));
    	$c = 1;
    	$next = ($int+1);

    	while(strlen($left) > 0)
    	{
    		// echo $s, '- ', $next, ' - ', $left, ' - ', strpos($left, (string) $next),  PHP_EOL;
    		if( strpos($left, (string) $next) === 0 ) // right next!
    		{
    			$qtchrs = strlen($next);
    			$left = substr($left, $qtchrs);
				$splitable = true;
				$lesser = $int;
    		}else{
    			$splitable = false;
    			// echo 'EXIT', PHP_EOL;
    			break;
    		}
    		$next++;
    	}

    	// $splitable = ( strlen($left) > 0 );
    	// echo strlen($left), '------------------------------------------------ WHILE', PHP_EOL;

    	if($splitable)
    	{
    		break;
    	}
    	// echo 'YES', PHP_EOL;
    	// var_dump($int, $left);
    }

    echo ($splitable)? 'YES '. $lesser : 'NO' ;
    echo PHP_EOL;
    // echo '------------------------------------------------', PHP_EOL;
}

fscanf($handle, "%i",$q);
for($a0 = 0; $a0 < $q; $a0++){
    fscanf($handle, "%s",$s);
    separateNumbers($s);
}

