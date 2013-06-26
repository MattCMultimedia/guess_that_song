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

require("GroovesharkAPI-PHP/gsCustom.php");

$gsCustom = new gsCustom();

//get related songs to TAG (genre) ID
if(isset($_POST['autoPlayTag'])) {
	$autoPlayTag = $_POST['autoPlayTag'];
	$state = $gsCustom->startAutoplayTag($autoPlayTag);
	echo json_encode($state);
	//else reuse old state to get new song
}else{
	die("needs tag");
}


?>