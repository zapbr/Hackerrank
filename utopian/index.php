<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

fscanf($_fp,"%d",$n);
while (($line = fgets($_fp)) !== false) {
    echo (preg_match('/^[a-z]{0,3}[0-9]{2,8}[A-Z]{3,}/', $line))? 'VALID' : 'INVALID', PHP_EOL;
}
