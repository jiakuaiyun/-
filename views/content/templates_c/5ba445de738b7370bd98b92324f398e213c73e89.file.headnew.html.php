<?php /* Smarty version Smarty-3.1.18, created on 2016-07-22 05:31:13
         compiled from "./../content/themes/marvelous/headnew.html" */ ?>
<?php /*%%SmartyHeaderCode:15452725845791afa1439d17-71380219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ba445de738b7370bd98b92324f398e213c73e89' => 
    array (
      0 => './../content/themes/marvelous/headnew.html',
      1 => 1469165405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15452725845791afa1439d17-71380219',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'zzurl' => 0,
    'isVisitor' => 0,
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5791afa14d6b06_71643412',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5791afa14d6b06_71643412')) {function content_5791afa14d6b06_71643412($_smarty_tpl) {?>   <div class="ui container">
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
