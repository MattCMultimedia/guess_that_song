<?php
require('../../lib/config.php');
require("../../lib/GroovesharkAPI-PHP/gsAPI.php");
session_start();
$gsapi = new gsAPI($api_key, $api_secret);
if (isset($_SESSION['gsSession'])) {
    $gsapi->setSession($_SESSION['gsSession']);
} else {
    $_SESSION['gsSession'] = $gsapi->startSession();
}
$gsapi->getCountry($_SERVER['REMOTE_ADDR']);

// require("GroovesharkAPI-PHP/gsPlaylist.php");
require("../../lib/GroovesharkAPI-PHP/gsUser.php");

$gsuser = new gsUser();
// set token and log in session variable
$token = $gsuser->setToken($_SESSION['token']);
$gsuser->setUsername($_SESSION['username']);
// getUserPlaylists
if ($gsapi->authenticate($gsuser)) {
    $user_playlists = $gsapi->getUserPlaylists();
} else {
    header("Location: /guess_that_song/pub/views/login.php");
}

require("../../lib/GroovesharkAPI-PHP/gsCustom.php");
$gsCustom = new gsCustom();
$genres = $gsCustom->getAutoplayTags();
// now that we have the user's playlists and genres, render a combined one




require('/opt/lib/smarty/Smarty.class.php');
$smarty_smartyTest = new Smarty();

$smarty_smartyTest->setTemplateDir('../../lib/gtsSmarty/templates');
$smarty_smartyTest->setCompileDir('../../lib/gtsSmarty/templates_c');
$smarty_smartyTest->setCacheDir('../../lib/gtsSmarty/cache');
$smarty_smartyTest->setConfigDir('../../lib/gtsSmarty/configs');


$smarty_smartyTest->assign('error_message', $error_message);
$smarty_smartyTest->assign('playlists', $user_playlists);
$smarty_smartyTest->assign('genres', $genres);
$smarty_smartyTest->display('gtsGame.tpl');


?>