<?php


require('../../lib/config.php');
if (isset($_POST['un']) && isset($_POST['pw'])) {
    echo "POST WORKED";
    require('config.php');
    require("GroovesharkAPI-PHP/gsAPI.php");
    session_start();
    $gsapi = new gsAPI($api_key, $api_secret);
    if (isset($_SESSION['gsSession'])) {
        $gsapi->setSession($_SESSION['gsSession']);
    } else {
        $_SESSION['gsSession'] = $gsapi->startSession();
    }
    print_r($gsapi->getCountry($_SERVER['REMOTE_ADDR']));

    require("GroovesharkAPI-PHP/gsUser.php");
    $gsuser = new gsUser();
    // set token and log in session variable
    $token = $gsuser->setTokenFromPassword($_POST['pw']); //$_POST['pw']
    $_SESSION['token'] = $token;
    // set username
    $username = $gsuser->setUsername($_POST['un']); //$_POST['un']
    $_SESSION['username'] = $username;
    // if auth successful,
    if ($gsapi->authenticate($gsuser)) {
        // if successfully authenticated, redirect to homepage
        // header("Location: /guess_that_song/pub/test/game.php");
        echo "Successful Log in.";
    } else {
        $error_msg = "Login Failed. Please check your Credentials";
    }
}

// put full path to Smarty.class.php
require('/opt/lib/smarty/Smarty.class.php');
$smarty_smartyTest = new Smarty();

$smarty_smartyTest->setTemplateDir('../../lib/gtsSmarty/templates');
$smarty_smartyTest->setCompileDir('../../lib/gtsSmarty/templates_c');
$smarty_smartyTest->setCacheDir('../../lib/gtsSmarty/cache');
$smarty_smartyTest->setConfigDir('../../lib/gtsSmarty/configs');



$smarty_smartyTest->assign('name', 'MATT');
$smarty_smartyTest->display('gtsLogin.tpl');



?>
