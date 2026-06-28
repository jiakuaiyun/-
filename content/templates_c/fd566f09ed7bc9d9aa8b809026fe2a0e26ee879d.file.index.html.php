<?php /* Smarty version Smarty-3.1.18, created on 2016-07-22 14:04:54
         compiled from "content/themes/marvelous/index.html" */ ?>
<?php /*%%SmartyHeaderCode:19420036145791af925d8367-44679363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd566f09ed7bc9d9aa8b809026fe2a0e26ee879d' => 
    array (
      0 => 'content/themes/marvelous/index.html',
      1 => 1469166454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19420036145791af925d8367-44679363',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5791af92899e62_27416795',
  'variables' => 
  array (
    'tit' => 0,
    'kw' => 0,
    'des' => 0,
    'head' => 0,
    'static' => 0,
    'zzurl' => 0,
    'isVisitor' => 0,
    'userinfo' => 0,
    'jscode' => 0,
    'notice' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5791af92899e62_27416795')) {function content_5791af92899e62_27416795($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
 <head> 
  <meta charset="UTF-8" /> 
  <title><?php echo $_smarty_tpl->tpl_vars['tit']->value;?>
</title> 
  <meta name="renderer" content="webkit" /> 
     <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['kw']->value;?>
">
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['des']->value;?>
">
  <link href="favicon.ico" rel="shortcut icon" /> 
  <link rel="stylesheet" href="content/themes/marvelous/semantic/css/semantic.css" /> 
 <link href="//cdn.bootcss.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">

  <link rel="stylesheet" href="content/themes/marvelous/semantic/css/style.css" />

 </head>
 <body  id="sd_index" class="sdin">
   <?php echo $_smarty_tpl->tpl_vars['head']->value;?>
 
   <?php echo $_smarty_tpl->tpl_vars['static']->value;?>

  <script type="text/javascript" src="content/themes/marvelous/semantic/js/semantic.js"></script> 
  <script type="text/javascript" src="content/themes/marvelous/theme.js"></script> 

  <style>
body {

  font-family:"微软雅黑";
}
</style> 



<!-- Page Contents -->
<div class="pusher" id="laru">
  <div class="ui inverted vertical masthead center aligned segment">
<?php echo $_smarty_tpl->getSubTemplate ("headnew.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('head'=>$_smarty_tpl->tpl_vars['head']->value,'zzurl'=>$_smarty_tpl->tpl_vars['zzurl']->value,'isvisitor'=>$_smarty_tpl->tpl_vars['isVisitor']->value,'userinfo'=>$_smarty_tpl->tpl_vars['userinfo']->value), 0);?>

    <div class="ui container">
      <div class="ui large secondary inverted pointing menu"id="pc2"style="display:none;">
        <a >
          <img style="vertical-align:middle;position: relative;top: 7px;"src="content/themes/marvelous/images/logo_s.png">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </a>
        <a class="active item">首页</a>
        <a class="item" href="views/userIndex.php">用户中心</a>
        <a class="item" href="views/fileRecent.php">最新文件</a>
        <a class="item">关于</a>
        <div class="right item">
        <?php if ($_smarty_tpl->tpl_vars['isVisitor']->value=="true") {?> 
          <a class="ui inverted button" href="views/login.php">登陆/注册</a>
          <?php } else { ?>
           <a class="ui inverted button" href="views/userIndex.php"><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['username'];?>
</a>
           <?php }?>
        </div>
      </div>
    </div>

    <div class="ui text container" id="pc1"style="display: none" >
    <div name="danrude"id="shuo">
      <h1 class="ui inverted header">
        选择一个文件开始上传
      </h1>
      <h2>或者拖动文件至此</h2>
     <br>
      </div> 
      <div id="uu">
        <button class="ui huge inverted basic button" id="pickfiles"><i class="fa fa-plus"></i> 选择文件</button>
      </div>
        <div id="ss"></div>
         <table style="display:none" width="700"> 
         
          <tbody id="fsUploadProgress" >

          </tbody> 
         </table>

         <div class="ss"></div> 
         <div id="cuowu1" style="display:none;">
          <br />
          <div id="errinfo"style="width: 100%;"class="ui negative message">
          </div>
         </div> 
         <div id="gc"> 
          <div id="su" style="display:none;">
           <br />
           <div id"susu"="" class="ui success  message"  align="center" role="alert" style="width: 100%">
            处理中，请稍后...
           </div>
          </div>
         </div>
         <div id="cuowu" style="display:none;">
          <br />
          <div class="alert alert-danger" style="width:450px;" align="center" role="alert">
           上传失败，请稍后再试或联系站长
          </div>
         </div> 
       
    </div>


<div style="display: none">
<?php echo $_smarty_tpl->tpl_vars['jscode']->value;?>
 
</div>
<?php if ($_smarty_tpl->tpl_vars['notice']->value=='') {?>  
    <?php } else { ?>
<div class="notice" align="center" style="display: none;">
<div class="ui message">
  <i class="close icon"><i class="fa fa-close"></i></i>

   <?php echo $_smarty_tpl->tpl_vars['notice']->value;?>

</div>
</div><?php }?>
  </div><!--住框架-->





 


</div>

</body>
<div style="display: none">
<?php echo $_smarty_tpl->tpl_vars['jscode']->value;?>
 
</div>

</html><?php }} ?>
