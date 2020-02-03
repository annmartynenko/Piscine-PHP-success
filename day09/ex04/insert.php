<?php
	$file = fopen('list.csv', 'r');
	$last_value = 0;
		while (($data_tmp = fgetcsv($file, 1000, ";")) !== FALSE) {

		    print_r($data_tmp);
		    if ($data_tmp[1])
				$last_value++;
		}
	fclose($file);
    $fp = fopen('list.csv', 'a');
    $line = array($last_value, $_GET['text']);
    fputcsv($fp, $line, ';');
    fclose($fp);
?>