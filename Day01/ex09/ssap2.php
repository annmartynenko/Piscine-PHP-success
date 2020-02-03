#!/usr/bin/php
<?php
$mustsort = "AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
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
$i = -1;
while ($arr[++$i])
{
	$j = -1;
	while ($arr[++$j])
	{
		$z = -1;
		while ($arr[$j][++$z])
		{
			if ($arr[$j+1] && $arr[$j][$z] != $arr[$j+1][$z])
			{
				$s1 = strpos($mustsort, $arr[$j][$z]);
				$s2 = strpos($mustsort, $arr[$j+1][$z]);
				if ($s1 > $s2)
				{
					$tmp = $arr[$j];
					$arr[$j] = $arr[$j+1];
					$arr[$j+1] = $tmp;
				}
				break;
			}
		}
	}
}
for ($i = 0; $i < sizeof($arr); $i++)
	echo $arr[$i]."\n";
?>