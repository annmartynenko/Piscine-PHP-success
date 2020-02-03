#!/usr/bin/php
<?php
$string = preg_replace('/ +/',  ' ', $argv[1]);
echo trim($string)."\n";
?>