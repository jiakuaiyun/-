<?php /* Smarty version Smarty-3.1.18, created on 2016-07-22 05:29:11
         compiled from "./../content/themes/default/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:9248029315791af276314b2-14306585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74b5056090af2c178287a76e49ca9c11c92b0aff' => 
    array (
      0 => './../content/themes/default/footer.html',
      1 => 1469165340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9248029315791af276314b2-14306585',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'zzurl' => 0,
    'tit' => 0,
    'jscode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5791af27662f13_03190814',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5791af27662f13_03190814')) {function content_5791af27662f13_03190814($_smarty_tpl) {?>


<br><br><br>
    <footer class="footer" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
content/themes/default/images/footer.png);background-repeat: repeat-x;
">
      <div class="container"> 
        <p class="text-muted">Copyright &copy; <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 echo date('Y'); <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo $_smarty_tpl->tpl_vars['tit']->value;?>
  <?php echo $_smarty_tpl->tpl_vars['jscode']->value;?>
 </p>
      </div>
    </footer><?php }} ?>
