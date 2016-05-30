<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 13:15:03
         compiled from "/var/www/appsystem/smarty/templates/admin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29648995546743c7ce7109-05813887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83544cad86137c17688b8a22d80e357dcc46c5d0' => 
    array (
      0 => '/var/www/appsystem/smarty/templates/admin/index.tpl',
      1 => 1416052215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29648995546743c7ce7109-05813887',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'stats' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546743c7d43986_05109506',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546743c7d43986_05109506')) {function content_546743c7d43986_05109506($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



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
