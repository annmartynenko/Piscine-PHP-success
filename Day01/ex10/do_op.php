#!/usr/bin/php
<?php
$arr = $argv;
for($i = 1; $i < sizeof($arr); $i++)
	$arr[$i] = trim($arr[$i]);
$arr = array_filter($arr);
if ($arr[2] == '+')
	echo $arr[1] + $arr[3]."\n";
elseif ($arr[2] == '-')
	echo $arr[1] - $arr[3]."\n";
elseif ($arr[2] == '*')
	echo $arr[1] * $arr[3]."\n";
elseif ($arr[2] == '/')
	echo $arr[1] / $arr[3]."\n";
elseif ($arr[2] == '%')
	echo $arr[1] % $arr[3]."\n";
?>