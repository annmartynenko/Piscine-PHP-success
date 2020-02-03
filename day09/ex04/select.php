<?php
if (($fp = fopen('list.csv', 'r')) !== false) {
    while (($data = fgetcsv($fp, 1000, ';')) !== false) {
        $num = count($data);
        for ($c = 0; $c < $num; $c++) {
            echo $data[$c];
            if ($c % 2 == 1)
            	echo "-";
            else
            	echo ";";
        }
    }
    fclose($fp);
}
?>