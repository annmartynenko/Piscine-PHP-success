#!/usr/bin/php
<?php
$arr = array();
$small_arr = array();
for ($i = 1; $i < sizeof($argv); $i++)
{
	$small_arr = explode(' ', $argv[$i]);
	array_push($arr, ...$small_arr);
	unset($small_arr);
	$small_arr = array();
}
$arr = array_filter($arr);
sort($arr);
for ($i = 0; $i < sizeof($arr); $i++)
	echo $arr[$i]."\n";
?>