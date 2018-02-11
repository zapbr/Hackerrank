<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
for($a0 = 0; $a0 < $t; $a0++){
	fscanf($handle,"%s",$expression);
	echo ((is_balanced($expression))? 'YES' : 'NO'), PHP_EOL;
}

function is_balanced($str)
{
	$arr = str_split($str);
	$r = [];
	foreach ($arr as $key => $a) {
		switch ($a) {
			case '{': $r[] = '}'; break;
			case '[': $r[] = ']'; break;
			case '(': $r[] = ')'; break;
			default:
				if( count($r) == 0 || $a != end($r) ) // COMPARA COM O ULTIMO ITEM ADICIONADO QUE DEVE BATER
				{
					return false;
				}
				array_pop($r); // REMOVE O ITEM ENCONTRADO
				break;
		}
	}
	return ( count($r) == 0 );
}
