<?php

$handle = fopen("./pangrams-testcases/input/input00.txt", "r");
// $handle = fopen ("php://stdin", "r");
$s = fgets($handle);
$letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
$s_arr = str_split(strtolower($s));
$return = array_diff($letters, $s_arr);
echo (count($return) == 0)? 'pangram' : 'not pangram';
