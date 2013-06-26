<?php /* Smarty version Smarty-3.1.13, created on 2013-06-26 19:38:04
         compiled from "lib/gtsSmarty/templates/gtsLogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111640444951cb351b85d0d1-05056874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d709a317c8cfc7b2086237123b0b167e94f3c11' => 
    array (
      0 => 'lib/gtsSmarty/templates/gtsLogin.tpl',
      1 => 1372275399,
      2 => 'file',
    ),
    'c90c9471e300594cebafe9255898687b493ff060' => 
    array (
      0 => 'lib/gtsSmarty/templates/base.tpl',
      1 => 1372275473,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111640444951cb351b85d0d1-05056874',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51cb351bb18fe7_03898744',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51cb351bb18fe7_03898744')) {function content_51cb351bb18fe7_03898744($_smarty_tpl) {?><html>
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

            <div class="sidebar span2">
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
    
    
</body>
</html><?php }} ?>