<?php

$handle = fopen ("php://stdin", "r");
function alternatingCharacters($s){
	$arr = str_split($s);
	$previus = null;
	$same = 0;
	foreach ($arr as $i => $a) {
		if( $a == $previus )
		{
			$same++;
		}
		$previus = $a;
	}
	return $same;
}

fscanf($handle, "%i",$q);
for($a0 = 0; $a0 < $q; $a0++){
    fscanf($handle, "%s",$s);
    $result = alternatingCharacters($s);
    echo $result . "\n";
}

?>
