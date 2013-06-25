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

// require("GroovesharkAPI-PHP/gsPlaylist.php");
require("GroovesharkAPI-PHP/gsUser.php");

$gsuser = new gsUser();
// set token and log in session variable
$token = $gsuser->setToken($_SESSION['token']);
$gsuser->setUsername($_SESSION['username']);
// getUserPlaylists
if ($gsapi->authenticate($gsuser)) {
    echo json_encode($gsapi->getUserPlaylists());
} else {
    echo "Error authenticating user. Please sign in again.";
}



?>