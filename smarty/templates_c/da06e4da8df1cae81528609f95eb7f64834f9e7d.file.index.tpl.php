<?php /* Smarty version Smarty-3.1.19, created on 2014-11-04 16:30:41
         compiled from "/home/u418302220/public_html/smarty/templates/admin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15673821154086c505d7268-42177302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da06e4da8df1cae81528609f95eb7f64834f9e7d' => 
    array (
      0 => '/home/u418302220/public_html/smarty/templates/admin/index.tpl',
      1 => 1415115038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15673821154086c505d7268-42177302',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54086c50682d88_60124171',
  'variables' => 
  array (
    'error' => 0,
    'stats' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54086c50682d88_60124171')) {function content_54086c50682d88_60124171($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<body>
<div class="page-header">
  <h1>Encabezado de página <small>con un texto secundario</small></h1>
</div>







    <div class="container">
        
<?php echo $_smarty_tpl->getSubTemplate ("admin/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
<?php echo $_smarty_tpl->getSubTemplate ("admin/forms.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/tables.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
  </div>

  
       
   



        </div>


</body>
</html><?php }} ?>
