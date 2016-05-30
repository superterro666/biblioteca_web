<?php /* Smarty version Smarty-3.1.19, created on 2014-10-03 12:41:36
         compiled from "/home/u418302220/public_html/smarty/templates/user/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72108694654086b7d7079d3-90826885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b797b320d437564e9c164d404f759b3c5fd02f6' => 
    array (
      0 => '/home/u418302220/public_html/smarty/templates/user/index.tpl',
      1 => 1412332894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72108694654086b7d7079d3-90826885',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54086b7d7432a5_22924000',
  'variables' => 
  array (
    'error' => 0,
    'stats' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54086b7d7432a5_22924000')) {function content_54086b7d7432a5_22924000($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("user/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<body>
<div class="page-header">
  <h1>XPLAY <small>Administracion usuario</small></h1>
</div>







    <div class="container">
        
<?php echo $_smarty_tpl->getSubTemplate ("user/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
<div class="jumbotron">
  <div class="container">
    <h1>Error de formulario</h1>
    <p>Has comentido un error en el formulario y no a pasado la prueba php, si tienes desconectado javascript en el navegador, vuelve a conectarlo para ver los errores.</p>
    
  </div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['stats']->value) {?> 

   <div class="alert alert-warning alert-dismissable">
  <button type="button" class="close" id="recharge" data-dismiss="alert">&times;</button>
  <p><?php echo $_smarty_tpl->tpl_vars['stats']->value;?>
</p>
</div> 

<?php }?>








  <div class="row">
<?php echo $_smarty_tpl->getSubTemplate ("user/forms.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("user/tables.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("user/view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    
  </div>

  
       
   



        </div>


</body>
</html><?php }} ?>
