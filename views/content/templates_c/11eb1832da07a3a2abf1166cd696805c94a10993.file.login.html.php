<?php /* Smarty version Smarty-3.1.18, created on 2016-07-22 05:31:13
         compiled from "./../content/themes/marvelous/login.html" */ ?>
<?php /*%%SmartyHeaderCode:20923406205791afa1032cb2-96960812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11eb1832da07a3a2abf1166cd696805c94a10993' => 
    array (
      0 => './../content/themes/marvelous/login.html',
      1 => 1469165407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20923406205791afa1032cb2-96960812',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tit' => 0,
    'head' => 0,
    'zzurl' => 0,
    'isVisitor' => 0,
    'userinfo' => 0,
    'jscode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5791afa140f025_69901350',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5791afa140f025_69901350')) {function content_5791afa140f025_69901350($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
   <head> 
      <meta charset="UTF-8" /> 
      <title>登录 - <?php echo $_smarty_tpl->tpl_vars['tit']->value;?>
</title> 
      <meta name="renderer" content="webkit" /> 
      <link href="favicon.ico" rel="shortcut icon" /> 
      <link rel="stylesheet" href="../content/themes/marvelous/semantic/css/iosOverlay.css" /> 
      <link rel="stylesheet" href="../content/themes/marvelous/semantic/css/semantic.css" /> 
 <link href="//cdn.bootcss.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="../content/themes/marvelous/semantic/css/style.css" />
   </head>
   <body  id="sd_index" class="sdin">
     <?php echo $_smarty_tpl->tpl_vars['head']->value;?>
 
    <script type="text/javascript" src="../content/themes/marvelous/semantic/js/semantic.js"></script> 
        <script type="text/javascript" src="../content/themes/marvelous/js/iosOverlay.js"></script>
    <script type="text/javascript" src="../content/themes/marvelous/theme.js"></script> 
    <script type="text/javascript" src="../content/themes/marvelous/semantic/js/login.js"></script> 
    <style>
  body {

  	background-color: #F0F0F0;
    font-family:"微软雅黑";
  }
</style> 

<div class="pusher" id="laru">
  <div class="ui inverted vertical masthead center aligned segment">
<?php echo $_smarty_tpl->getSubTemplate ("headnew.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('head'=>$_smarty_tpl->tpl_vars['head']->value,'zzurl'=>$_smarty_tpl->tpl_vars['zzurl']->value,'isvisitor'=>$_smarty_tpl->tpl_vars['isVisitor']->value,'userinfo'=>$_smarty_tpl->tpl_vars['userinfo']->value), 0);?>



    <div class="ui text container"  >
    <div style="position: relative;top:230px;">
    <div class="login_content" style="display: none;"id="regform">
            <h4 class="loginhead">注册<?php echo $_smarty_tpl->tpl_vars['tit']->value;?>
</h4>
            <div class="loginform">
                  <form id="reg"class="dd">
                       <div class="ui form">
                        <div style="display: none;">
                          <input type="text" name="action"value="register">
                        </div>
                        
                          <div class="field">
                            
                            <label>邮箱：</label>
                            <input type="text"  name="username-reg" placeholder="邮箱">
                          </div>
                        
                          <div class="field">
                          <label class="sr-only" for="exampleInputAmount">密码</label>
                          <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></div>
                            <input type="password" class="form-control" name="password-reg" placeholder="密码，长度4-16字符">
                          </div>
                        </div>
                          <div class="field">
                          <label class="sr-only" for="exampleInputAmount">再输一遍密码：</label>
                          <div class="field">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></div>
                            <input type="password" class="form-control" name="password-check" placeholder="再输一次密码">
                          </div>
                        </div>
                        <a style="width:285px;"id="reg-button"class="ui secondary button fluid" onclick="reg();">注册</a>
                        <br>
                        <a  style="width:285px;"class="ui button fluid" onclick="showlogin();">返回登录</a>
                        </div>
                  </form>

            </div>
        </div>
        <div id="pc1" style="display: none">
        <div class="login_content" id="loginform" >
            <h4 class="loginhead">登录<?php echo $_smarty_tpl->tpl_vars['tit']->value;?>
</h4>
            <div class="loginform">
                  <form id="login"class="dd">
                  <div class="ui form">

    <div class="field">
      <label>用户名</label>
      <input type="text" name="username"placeholder="">
    </div> <div style="display: none;">
                          <input type="text" name="action"value="login">
                        </div>
                         
           
    <div class="field">
      <label>密码</label>
      <input type="password" name="password"placeholder="">
    </div>
              
                    <button style="width:285px;"id="login-button"class="ui secondary button fluid" onclick="login();">登陆</button>
                        <br>
                        <button type="button" style="width:285px;"class="ui button fluid"onclick="showreg();">没有账号？立即注册</button>
                  </form>  </div>  

            </div>
        </div>
       
    </div></div>


<div style="display: none">
<?php echo $_smarty_tpl->tpl_vars['jscode']->value;?>
 
</div>

    </div>

</div>  
 </body>
</html><?php }} ?>
