<?php /* Smarty version Smarty-3.1.13, created on 2013-06-25 20:05:34
         compiled from "../../lib/gtsSmarty/templates/gtsLogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54465548051c9d5c1c1bbf1-46638382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8040f2837b2de7a35be2c8bc4c9912818c2c1199' => 
    array (
      0 => '../../lib/gtsSmarty/templates/gtsLogin.tpl',
      1 => 1372190730,
      2 => 'file',
    ),
    'f887735385c5362cac8cbe057d90aa6e5fc9e6d8' => 
    array (
      0 => '../../lib/gtsSmarty/templates/base.tpl',
      1 => 1372187969,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54465548051c9d5c1c1bbf1-46638382',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51c9d5c2094ab8_30157774',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c9d5c2094ab8_30157774')) {function content_51c9d5c2094ab8_30157774($_smarty_tpl) {?><html>
<head>
    <meta charset="UTF-8">
    <title>Guess That Song!</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="base.css">
    
<link rel="stylesheet" type="text/css" href="gtsLogin.css">

</head>
<body>
    <div class="container">
        <div class="sidebar">

            

<div class="sb-row">
    <h4>Title</h4>
    <small>Description or List of songs...</small>
</div>



        </div>
        <div class="main-content">
            <div class="gtsTitle"><h1>Guess That Song!</h1></div>
            <div class="game">
                

<form action="" method="POST" class="form-horizontal">
    <div class="control-group">
        <label class="control-label" for="un">Email</label>
        <div class="controls">
            <input id="un" name="un" type="text" placeholder="Username or Email">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="pw">Grooveshark Password</label>
        <div class="controls">
            <input id="pw" name="pw" type="password" placeholder="Grooveshark Password">
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <input type="submit" class="btn btn-primary" value="Login with Grooveshark">
        </div>
    </div>
</form>



            </div>
        </div>
    </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="gtsLogin.js"></script>
</body>
</html><?php }} ?>