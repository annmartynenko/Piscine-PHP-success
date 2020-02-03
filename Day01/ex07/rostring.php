#!/usr/bin/php
<?php
$string = preg_replace('/ +/',  ' ', $argv[1]);
$arr = explode(' ', $string);
for ($i = 1; $i < sizeof($arr); $i++)
	echo $arr[$i]." ";
echo $arr[0]."\n";
?>