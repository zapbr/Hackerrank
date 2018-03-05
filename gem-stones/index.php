<?php

$handle = fopen ("php://stdin", "r");
function gemstones($arr){
	$arrin = [];
    foreach ($arr as $k => $s) {
    	if( $k > 0 )
    	{
    		$arrin = array_intersect($arrin, str_split($s));
    	} else {
    		$arrin = str_split($s);
    	}
    }

    return count(array_count_values($arrin)); //UNIQUE VALUES
}

fscanf($handle, "%i",$n);
$arr = array();
for($arr_i = 0; $arr_i < $n; $arr_i++){
   fscanf($handle,"%s",$arr[]);
}
$result = gemstones($arr);
echo $result . "\n";

?>
