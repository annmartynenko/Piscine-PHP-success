#!/usr/bin/php
<?php
function ft_is_sort($string)
{
	$issort = 0;
	$isrsort = 0;
	$sorted = $string;
	$rsorted = $string;
	sort($sorted);
	rsort($rsorted);
	for ($i = 0; $i <= sizeof($sorted); $i++)
	{
		if ($sorted[$i] != $string[$i])
		{
			$issort = 1;
			break;
		}
	}
	for ($i = 0; $i <= sizeof($sorted); $i++)
	{
		if ($rsorted[$i] != $string[$i])
		{
			$isrsort = 1;
			break;
		}
	}
	if ($isrsort == 1 || $issort == 1)
		return 0;
	return 1;
}
?>