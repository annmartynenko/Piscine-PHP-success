#!/usr/bin/php
<?php
$arr = $argv;
print_r($arr);
for($i = sizeof($arr) - 1; $i > 1; $i--)
{
	if (strpos($arr[$i], $arr[1]) !== false)
	{
		$result = explode(':', $arr[$i]);
		echo $result[1]."\n";
		exit();
	}
}
?>