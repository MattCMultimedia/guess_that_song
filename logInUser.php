<?php

require("GroovesharkAPI-PHP/gsAPI.php");
session_start();
$gsapi = new gsAPI('gs_mattcondon', '94d69e01a378fabc0520a0583719f090');
if (isset($_SESSION['gsSession'])) {
    $gsapi->setSession($_SESSION['gsSession']);
} else {
    $_SESSION['gsSession'] = $gsapi->startSession();
}
$gsapi->getCountry($_SERVER['REMOTE_ADDR']);

require("GroovesharkAPI-PHP/gsUser.php");
$gsuser = new gsUser();
// set token and log in session variable
$token = $gsuser->setTokenFromPassword('balls'); //$_POST['pw']
$_SESSION['token'] = $token;
// set username
$username = $gsuser->setUsername('balls'); //$_POST['un']
$_SESSION['username'] = $username;
// if auth successful,
if ($gsapi->authenticate($gsuser)) {
    // if successfully authenticated, redirect to homepage
    header("Location: /guess_that_song");
}

?>