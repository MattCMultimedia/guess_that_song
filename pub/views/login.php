<?php

require('../../lib/config.php');
session_start();
if (isset($_SESSION['gsSession'])) {
    require("../../lib/GroovesharkAPI-PHP/gsAPI.php");
    $gsapi = new gsAPI($api_key, $api_secret);
    if (isset($_SESSION['gsSession'])) {
        $gsapi->setSession($_SESSION['gsSession']);
    } else {
        $_SESSION['gsSession'] = $gsapi->startSession();
    }
    $gsapi->getCountry($_SERVER['REMOTE_ADDR']);

    require("../../lib/GroovesharkAPI-PHP/gsUser.php");
    $gsuser = new gsUser();
    // set token and log in session variable
    if (isset($_SESSION['token'])) {
        $gsuser->setToken($_SESSION['token']);
    } else {
        $token = $gsuser->setTokenFromPassword($_POST['pw']); //$_POST['pw']
        $_SESSION['token'] = $token;
    }
    // set username
    if (isset($_SESSION['username'])) {
        $gsuser->setUsername($_SESSION['username']);
    } else {
        $username = $gsuser->setUsername($_POST['un']); //$_POST['un']
        $_SESSION['username'] = $username;
    }
    // if auth successful,
    if ($gsapi->authenticate($gsuser)) {
        // if successfully authenticated, redirect to homepage
        header("Location: /guess_that_song/pub/views/game.php");
        echo "Successful Log in.";
    } else {
        $error_message = "Login Failed. Please check your Credentials";
    }
}

// require('../../lib/getGenreList.php');
if (isset($gsapi)) {
    // already have api
    require("../../lib/GroovesharkAPI-PHP/gsCustom.php");
    $gsCustom = new gsCustom();
    $list = $gsCustom->getAutoplayTags();
} else {
    require '../../lib/getGenreList.php';
}
// put full path to Smarty.class.php

require('/opt/lib/smarty/Smarty.class.php');
$smarty_smartyTest = new Smarty();

$smarty_smartyTest->setTemplateDir('../../lib/gtsSmarty/templates');
$smarty_smartyTest->setCompileDir('../../lib/gtsSmarty/templates_c');
$smarty_smartyTest->setCacheDir('../../lib/gtsSmarty/cache');
$smarty_smartyTest->setConfigDir('../../lib/gtsSmarty/configs');


$smarty_smartyTest->assign('error_message', $error_message);
$smarty_smartyTest->assign('genres', $list);
$smarty_smartyTest->display('gtsLogin.tpl');


?>
