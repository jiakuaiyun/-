<?php /* Smarty version Smarty-3.1.18, created on 2016-07-22 14:04:54
         compiled from "content/themes/marvelous/headnew.html" */ ?>
<?php /*%%SmartyHeaderCode:17574198425791af928a13a3-70014559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0ba7a9077e6133d867caa4c0b9c711455f3c370' => 
    array (
      0 => 'content/themes/marvelous/headnew.html',
      1 => 1469166454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17574198425791af928a13a3-70014559',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5791af928e6378_17887437',
  'variables' => 
  array (
    'zzurl' => 0,
    'isVisitor' => 0,
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5791af928e6378_17887437')) {function content_5791af928e6378_17887437($_smarty_tpl) {?>   <div class="ui container">
      <div class="ui large secondary inverted pointing menu"id="pc2"style="display:none;">
        <a >
          <img style="vertical-align:middle;position: relative;top: 7px;"src="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
content/themes/marvelous/images/logo_s_s.png">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </a>
        <a class="item" hc="/"href="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
">首页</a>
        <a class="item"hc="/userIndex.php" href="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
views/userIndex.php">用户中心</a>
        <a class="item" href="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
views/fileRecent.php">最新文件</a>
        <a class="item">关于</a>
        <div class="right item">
        <?php if ($_smarty_tpl->tpl_vars['isVisitor']->value=="true") {?> 
          <a class="ui inverted button" href="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
views/login.php">登陆/注册</a>
          <?php } else { ?>
           <a class="ui inverted button" href="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
views/userIndex.php"><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['username'];?>
</a>
           <?php }?>
        </div>
      </div>
    </div><script type="text/javascript">
 var linkname = window.location.pathname;
 $("a[hc='"+linkname+"']").addClass("active");
</script><?php }} ?>
