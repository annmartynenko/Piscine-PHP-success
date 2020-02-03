#!/usr/bin/php
<?php
$result = file_get_contents($argv[1]);
echo $string;
	function change($matches) {
	return $matches[1] . "" . strtoupper($matches[2]) . "" . $matches[3];
	}
$result = preg_replace_callback("/(title=\")(.*?)(\")/m", "change", $result);
$result = preg_replace_callback("/(a .*>)(.*?)(<)/m", "change", $result);
$result = preg_replace_callback("/(a .*?>)(.*?)(<.*?><)/m", "change", $result);
echo $result;
?>