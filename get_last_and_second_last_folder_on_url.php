<?php

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$full = explode('/', $actual_link);
$pop = array_pop($full);
$fullnlastfolder = implode('/', $full);
$secondfull = explode('/', $fullnlastfolder);
$secondpop = array_pop($secondfull);
$secondlast = implode('/', $secondfull);
$realpath = $fullnlastfolder;
$secondpath = $secondlast;

define('LAST', $realpath);

define('SECOND', $secondpath);

echo "LAST: " . LAST;

echo "<br />";

echo "SECOND: " . SECOND;
