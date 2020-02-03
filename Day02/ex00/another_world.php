#!/usr/bin/php
<?php
$str = preg_replace('/[ \t]+/', ' ', $argv[1]);
$str = preg_replace('/^[ ]/', '', $str);
$str = preg_replace('/[ ]$/', '', $str);
echo $str."\n";
?>