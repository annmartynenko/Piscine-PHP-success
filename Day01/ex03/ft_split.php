#!/usr/bin/php
<?php
function ft_split($line)
{
	$arr = explode(' ', $line);
	$arr = array_filter($arr);
	sort($arr);
	return $arr;
}
?>