<?php
// session_start();
require('config.php');
require("GroovesharkAPI-PHP/gsAPI.php");
$gsapi = new gsAPI($api_key, $api_secret);
if (isset($_SESSION['gsSession'])) {
    $gsapi->setSession($_SESSION['gsSession']);
} else {
    $_SESSION['gsSession'] = $gsapi->startSession();
}
$gsapi->getCountry($_SERVER['REMOTE_ADDR']);

require("GroovesharkAPI-PHP/gsCustom.php");
// create new autplay
$gsCustom = new gsCustom();
$list = $gsCustom->getAutoplayTags();
?>