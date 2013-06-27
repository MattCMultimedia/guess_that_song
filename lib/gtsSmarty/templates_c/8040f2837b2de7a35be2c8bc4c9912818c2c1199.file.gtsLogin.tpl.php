<?php /* Smarty version Smarty-3.1.13, created on 2013-06-27 01:27:16
         compiled from "../../lib/gtsSmarty/templates/gtsLogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109686653551ca0559c3e100-62155857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8040f2837b2de7a35be2c8bc4c9912818c2c1199' => 
    array (
      0 => '../../lib/gtsSmarty/templates/gtsLogin.tpl',
      1 => 1372293850,
      2 => 'file',
    ),
    'f887735385c5362cac8cbe057d90aa6e5fc9e6d8' => 
    array (
      0 => '../../lib/gtsSmarty/templates/base.tpl',
      1 => 1372288202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109686653551ca0559c3e100-62155857',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ca0559d7e3b7_83117674',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ca0559d7e3b7_83117674')) {function content_51ca0559d7e3b7_83117674($_smarty_tpl) {?><html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.min.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        
<!-- <link rel="stylesheet" type="text/css" href="../gtsLogin.css"> -->

    </head>

<body class="container">
    <div class="wrapper start-menu">
        <div class="row">

            <div class="sidebar span3">
                <ul>
                    
<?php  $_smarty_tpl->tpl_vars['genre'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['genre']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['genres']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['genre']->key => $_smarty_tpl->tpl_vars['genre']->value){
$_smarty_tpl->tpl_vars['genre']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['genre']->key;
?>
<li>
    <div class="sb-row genre" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
        <h4><?php echo $_smarty_tpl->tpl_vars['genre']->value;?>
</h4>
    </div>
</li>
<?php } ?>

                </ul>
            </div>

            <div class="main span7 offset1">
                <div class="page-header">
                  <h2>Guess That Song <small>powered by Grooveshark</small></h2>
                </div>
                
<?php if (isset($_smarty_tpl->tpl_vars['error_message']->value)){?>
<div class="alert">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Warning!</strong> <?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>

</div>
<?php }?>

                

<form action="" method="POST">
    <h4>Username:</h4>
    <input class="input" type="text" name="un" required>
    <h4>Password:</h4>
    <input class="input" type="password" name="pw" required>
    <input type="submit" class="btn">
</form>



            </div>
        </div>
    </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    

<script src="../js/grooveshark.js"></script>


</body>
</html><?php }} ?>