<?php

$user = $_SERVER["REMOTE_USER"];
$path = './port.number.ini';
$ini = parse_ini_file($path);
$port = $ini[$user];
$url = "http://localhost:$port";
print "<html><head></head><body><div id='content'>";
include($url);
print "</div></body></html>";
?>

