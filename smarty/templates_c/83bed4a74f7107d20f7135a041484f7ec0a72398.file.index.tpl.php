<?php /* Smarty version Smarty-3.1.19, created on 2014-09-03 10:09:03
         compiled from "/var/www/appSystem/smarty/templates/user/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3520936765406cc0fb82759-21358145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83bed4a74f7107d20f7135a041484f7ec0a72398' => 
    array (
      0 => '/var/www/appSystem/smarty/templates/user/index.tpl',
      1 => 1409731738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3520936765406cc0fb82759-21358145',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5406cc0fc09e55_22703293',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5406cc0fc09e55_22703293')) {function content_5406cc0fc09e55_22703293($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("user/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<body>
<div class="page-header">
  <h1>Encabezado de página <small>con un texto secundario</small></h1>
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








  <div class="row">
<?php echo $_smarty_tpl->getSubTemplate ("user/forms.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("user/tables.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("user/view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
  </div>

  
       
   



        </div>


</body>
</html><?php }} ?>
