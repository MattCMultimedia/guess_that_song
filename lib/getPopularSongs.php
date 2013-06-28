<?php
require('config.php');
session_start();
if (empty($gsapi)) {
    require("GroovesharkAPI-PHP/gsAPI.php");
    $gsapi = new gsAPI($api_key, $api_secret);
    if (isset($_SESSION['gsSession'])) {
        $gsapi->setSession($_SESSION['gsSession']);
    } else {
        $_SESSION['gsSession'] = $gsapi->startSession();
    }
    $gsapi->getCountry($_SERVER['REMOTE_ADDR']);
}
$popularSongs = $gsapi->getPopularSongsToday(10);

?>