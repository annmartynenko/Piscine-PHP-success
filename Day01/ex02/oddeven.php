#!/usr/bin/php
<?php
$line = '';
while(1)
{
	echo "Enter a number: ";
	$line = trim(fgets(STDIN));
	if ($line == NULL)
	{
		echo "\n";
		exit();
	}
	if (is_numeric($line))
	{
		if ($line % 2 == 1)
			echo "The number $line is odd\n";
		else
 			echo "The number $line is even\n";
	}
	else
 		echo "'$line' is not a number\n";
}
 ?>