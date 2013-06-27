<?php
require('config.php');
require("GroovesharkAPI-PHP/gsAPI.php");
session_start();
$gsapi = new gsAPI($api_key, $api_secret);
if (isset($_SESSION['gsSession'])) {
    $gsapi->setSession($_SESSION['gsSession']);
} else {
    $_SESSION['gsSession'] = $gsapi->startSession();
}
$gsapi->getCountry($_SERVER['REMOTE_ADDR']);

require("GroovesharkAPI-PHP/gsSearch.php");

$gsSearch = new gsSearch();
$gsSearch->setTitle($_POST['title']);

$results = $gsSearch->songSearchResults($max=10);
$html_result = array('options' => array());
foreach ($results as $i => $song) {
    array_push($html_result['options'], $song['SongName']);
}


echo json_encode(array('options' => array('a', 'b', 'c', 'd', 'e', 'f'), 'ids' => array(123456, 1234, 54546, 23453, 23454, 345435)));


?>