<?php
$id = $_GET['id'];
$file = fopen('list.csv', 'r');
$data=array();
while (($data_tmp = fgetcsv($file, 1000, ";")) !== FALSE) {
    array_push($data, $data_tmp);
}
fclose($file);


$file = fopen('list.csv', 'w');
fprintf($file, chr(0xEF).chr(0xBB).chr(0xBF));
foreach($data as $d){
	if ($d[0] != $id)
    	fputcsv($file, $d, ';');
}
fclose($file);

?>