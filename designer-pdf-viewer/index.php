<?php

// $handle = fopen ("php://stdin", "r");
$handle = fopen("./designer-pdf-viewer-testcases/input/input00.txt", "r");

function designerPdfViewer($h, $word) {
    // Complete this function
	$letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
	$lh = array_combine($letters, $h);
	$arr = str_split($word);
	$tallest = -1;
	foreach ($arr as $k => $letter) {
		if($lh[$letter] > $tallest)
		{
			$tallest = $lh[$letter];
		}
	}
	return (count($arr) * 1 ) * $tallest;
}

$h_temp = fgets($handle);
$h = explode(" ",$h_temp);
$h = array_map('intval', $h);
fscanf($handle, "%s",$word);
$result = designerPdfViewer($h, $word);
echo $result . "\n";

?>
