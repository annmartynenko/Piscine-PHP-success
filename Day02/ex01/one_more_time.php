#!/usr/bin/php
<?php
$check = preg_match('/^[A-z]{1}[a-z]+ \d{1,2} [A-z]{1}[a-z]+ \d{4} \d{2}\:\d{2}\:\d{2}$/', $argv[1]);
if ($check === 0)
	echo "Wrong Format\n";
else
{
	$str = explode(' ', $argv[1]);
	$week = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
	if (array_search(strtolower($str[0]), $week) == 0)
		echo "Wrong Format\n";
	else
	{
		$months = array(1 => 'janvier', 
			2 => 'février',
			4 => 'avril',
			5 => 'mai',
			3 => 'mars',
			6 => 'juin',
			7 => 'juillet',
			8 => 'aout',
			9 => 'septembre',
			10 => 'octobre',
			11 => 'novembre',
			12 => 'décembre'
		);
		$month = array_search(strtolower($str[2]), $months);
		if ($month == NULL)
			echo "Wrong Format\n";
		else
		{
			$time = explode(':', $str[4]);
			$sec = mktime($time[0] - 1, $time[1], $time[2], $month, $str[1], $str[3]);
			echo $sec."\n";
		}
	}
}
?>
