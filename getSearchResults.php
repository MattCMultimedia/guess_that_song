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
echo json_encode($results);


?>