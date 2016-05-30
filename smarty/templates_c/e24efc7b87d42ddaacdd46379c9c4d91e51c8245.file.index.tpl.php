<?php /* Smarty version Smarty-3.1.19, created on 2014-09-02 13:26:56
         compiled from "/var/www/appSystem/smarty/templates/admin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68021230453ff506d5e7855-38186671%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e24efc7b87d42ddaacdd46379c9c4d91e51c8245' => 
    array (
      0 => '/var/www/appSystem/smarty/templates/admin/index.tpl',
      1 => 1409657212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68021230453ff506d5e7855-38186671',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ff506d5e8719_02732470',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ff506d5e8719_02732470')) {function content_53ff506d5e8719_02732470($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



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








  <div class="row">
<?php echo $_smarty_tpl->getSubTemplate ("admin/forms.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/tables.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
  </div>

  
       
   



        </div>


</body>
</html><?php }} ?>
