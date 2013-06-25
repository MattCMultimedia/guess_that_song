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

require("GroovesharkAPI-PHP/gsUser.php");
$gsuser = new gsUser();
// set token and log in session variable
$token = $gsuser->setTokenFromPassword($test_username); //$_POST['pw']
$_SESSION['token'] = $token;
// set username
$username = $gsuser->setUsername($test_password); //$_POST['un']
$_SESSION['username'] = $username;
// if auth successful,
if ($gsapi->authenticate($gsuser)) {
    // if successfully authenticated, redirect to homepage
    header("Location: /guess_that_song");
}

?>