<?php /* Smarty version Smarty-3.1.13, created on 2013-06-26 21:18:01
         compiled from "../../lib/gtsSmarty/templates/gtsGame.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40292703951cb48c41af7f0-43575207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45700cc071f730a3011fa973ebf2ebcdd3e2d20d' => 
    array (
      0 => '../../lib/gtsSmarty/templates/gtsGame.tpl',
      1 => 1372281453,
      2 => 'file',
    ),
    'f887735385c5362cac8cbe057d90aa6e5fc9e6d8' => 
    array (
      0 => '../../lib/gtsSmarty/templates/base.tpl',
      1 => 1372280638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40292703951cb48c41af7f0-43575207',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51cb48c45acd94_43779498',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51cb48c45acd94_43779498')) {function content_51cb48c45acd94_43779498($_smarty_tpl) {?><html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.min.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        

<script src="../swfobject/src/swfobject.js"></script>
<script>
console.log(swfobject);
    swfobject.embedSWF("http://grooveshark.com/APIPlayer.swf", "player", "0", "0", "9.0.0", "", {}, {allowScriptAccess: "always"}, {id:"groovesharkPlayer", name:"groovesharkPlayer"}, function(e) {
        console.log(e);
        var element = e.ref;

        if (element) {
            console.log("YAY")
            setTimeout(function() {
                window.player = element;
                window.player.setVolume(99);
            }, 1500);
        } else {
            console.log("BAD");
        }

    });
</script>


    </head>

<body class="container">
    <div class="wrapper start-menu">
        <div class="row">

            <div class="sidebar span3">
                <ul>
                    
<?php if (isset($_smarty_tpl->tpl_vars['genres']->value)){?>
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
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['playlists']->value)){?>
<?php  $_smarty_tpl->tpl_vars['playlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['playlist']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['playlists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['playlist']->key => $_smarty_tpl->tpl_vars['playlist']->value){
$_smarty_tpl->tpl_vars['playlist']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['playlist']->key;
?>
<li>
    <div class="sb-row genre" id="<?php echo $_smarty_tpl->tpl_vars['playlist']->value['PlaylistID'];?>
">
        <h4><?php echo $_smarty_tpl->tpl_vars['playlist']->value['PlaylistName'];?>
</h4>
    </div>
</li>
<?php } ?>
<?php }?>

                </ul>
            </div>

            <div class="main span7 offset1">
                <div class="page-header">
                  <h2>Guess That Song <small>powered by Grooveshark</small></h2>
                </div>
                
                
                
<div class="row">
    <div class="span3">
        <h4>Guess!</h4>
         <input type="text" class="search-query" >
    </div>

    <div class="span4">
        <h4>Song <span class="current_song">6</span> of <span class="total_songs">12</span></h4>
        <div class="progress progress-warning progress-striped active">
          <div class="bar" style="width:50%"></div>
        </div>
    </div>

</div>

<div class="row">

    <div class="span4 offset3">
        <h4>Timer: <span id="timer">0</span></h4>
        <h4>Points: 100</h4>
    </div>

</div>

<button class='btn btn-large btn-warning pull-right' id="playBtn"><i class="icon-music"></i>PLAY</button>


            </div>
        </div>
    </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    
<div id="player"></div>

<script src="../js/grooveshark.js"></script>



</body>
</html><?php }} ?>