<?php

require("GroovesharkAPI-PHP/gsAPI.php");

$gsapi = new gsAPI('gs_mattcondon', '94d69e01a378fabc0520a0583719f090');
$gsapi->startSession();
$gsapi->getCountry($_SERVER['REMOTE_ADDR']);

require("gsSearch.php");

$gsSearch = new gsSearch();
$gsSearch->setTitle('Coastal Brake');

$results = $gsSearch->songSearchResults();
print_r($results);


?>