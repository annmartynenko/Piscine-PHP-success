#!/usr/bin/php
<?php
if (strpos($argv[1], '+'))
	$arr = explode('+', $argv[1]);
elseif (strpos($argv[1], '-'))
	$arr = explode('-', $argv[1]);
elseif (strpos($argv[1], '*'))
	$arr = explode('*', $argv[1]);
elseif (strpos($argv[1], '/'))
	$arr = explode('/', $argv[1]);
elseif (strpos($argv[1], '%'))
	$arr = explode('%', $argv[1]);
for($i = 0; $i < sizeof($arr); $i++)
{
	$arr[$i] = trim($arr[$i]);
	if (!is_numeric($arr[$i]))
	{
		echo "Syntax Error"."\n";
		exit();
	}
}
$arr = array_filter($arr);
if (strpos($argv[1], '+'))
	echo $arr[0] + $arr[1]."\n";
elseif (strpos($argv[1], '-'))
	echo $arr[0] - $arr[1]."\n";
elseif (strpos($argv[1], '*'))
	echo $arr[0] * $arr[1]."\n";
elseif (strpos($argv[1], '/'))
	echo $arr[0] / $arr[1]."\n";
elseif (strpos($argv[1], '%'))
	echo $arr[0] % $arr[1]."\n";