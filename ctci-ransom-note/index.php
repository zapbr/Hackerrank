<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$m,$n);
$magazine_temp = fgets($handle);
$magazine = explode(" ",trim($magazine_temp));
$ransom_temp = fgets($handle);
$ransom = explode(" ",trim($ransom_temp));

$notfoundcounter = 0;
foreach($ransom as $word)
{	
	$index = array_search($word, $magazine);
	if( $index !== false )
	{
		// found!
		array_splice($magazine, $index , 1);
	} else {
		$notfoundcounter++;
	}
}

echo ($notfoundcounter > 0)? 'No'  : 'Yes';

?>
