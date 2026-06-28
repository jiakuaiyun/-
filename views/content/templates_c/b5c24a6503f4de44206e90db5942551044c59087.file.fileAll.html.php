<?php /* Smarty version Smarty-3.1.18, created on 2016-06-25 16:40:53
         compiled from ".\..\content\themes\material\fileAll.html" */ ?>
<?php /*%%SmartyHeaderCode:98505763e127cf81e0-78550191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5c24a6503f4de44206e90db5942551044c59087' => 
    array (
      0 => '.\\..\\content\\themes\\material\\fileAll.html',
      1 => 1466842507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98505763e127cf81e0-78550191',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5763e128029484_28107101',
  'variables' => 
  array (
    'tit' => 0,
    'head' => 0,
    'zzurl' => 0,
    'isVisitor' => 0,
    'userinfo' => 0,
    'filedata' => 0,
    'jilu' => 0,
    'pre' => 0,
    'fy' => 0,
    'ne' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5763e128029484_28107101')) {function content_5763e128029484_28107101($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tit'=>$_smarty_tpl->tpl_vars['tit']->value,'head'=>$_smarty_tpl->tpl_vars['head']->value,'zzurl'=>$_smarty_tpl->tpl_vars['zzurl']->value,'isvisitor'=>$_smarty_tpl->tpl_vars['isVisitor']->value,'userinfo'=>$_smarty_tpl->tpl_vars['userinfo']->value), 0);?>

<title>文件广场 - <?php echo $_smarty_tpl->tpl_vars['tit']->value;?>
</title><?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tit'=>$_smarty_tpl->tpl_vars['tit']->value,'head'=>$_smarty_tpl->tpl_vars['head']->value,'zzurl'=>$_smarty_tpl->tpl_vars['zzurl']->value,'isvisitor'=>$_smarty_tpl->tpl_vars['isVisitor']->value,'userinfo'=>$_smarty_tpl->tpl_vars['userinfo']->value), 0);?>

<style type="text/css">
</style>
<div class="container">
    <div class="well bs-component">
        <h1>文件广场</h1>
       <table class="table table-striped table-hover ">
            <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>分享文件名</th>
                  
                    <th>下载次数</th>
                    <th>分享日期</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['two'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['two']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['two']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['filedata']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['two']['name'] = 'two';
$_smarty_tpl->tpl_vars['smarty']->value['section']['two']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['two']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['two']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['two']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['two']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['two']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['two']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['two']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['two']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['two']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['two']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['two']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['two']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['two']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['two']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['two']['total']);
?>
                <tr>
                    
                     <td><?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['two']['index']]['id'];?>
</td>
                   
                    <td><?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['two']['index']]['fname'];?>
.<?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['two']['index']]['ftype'];?>
</td>
                   
                    <td><?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['two']['index']]['downloadnum'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['two']['index']]['sstime'];?>
</td>
                    <td><a href="../f.php?k=<?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['two']['index']]['sskey'];?>
" target="_blank">查看</a>
                    </td>
                    </td><?php endfor; else: ?> <?php endif; ?></tbody>
        </table>
        <div class="row">
        <div class="col-md-6"><br><?php echo $_smarty_tpl->tpl_vars['jilu']->value;?>
</div>
        <div class="col-md-6"><nav>
  <ul class="pagination pagination-sm"style="float:right;">
    <li>
      <a href="<?php echo $_smarty_tpl->tpl_vars['pre']->value;?>
" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    
  <?php echo $_smarty_tpl->tpl_vars['fy']->value;?>

 
    <li>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ne']->value;?>
" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav></div>
</div>
    </div><?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('titm'=>$_smarty_tpl->tpl_vars['tit']->value,'head'=>$_smarty_tpl->tpl_vars['head']->value,'zzurl'=>$_smarty_tpl->tpl_vars['zzurl']->value,'isvisitor'=>$_smarty_tpl->tpl_vars['isVisitor']->value,'userinfo'=>$_smarty_tpl->tpl_vars['userinfo']->value), 0);?>

    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
content/themes/material/js/ZeroClipboard.js"></script>
    <script language="JavaScript">
 $("a[href='#").parent().addClass("active");
    </script>
   <?php }} ?>
