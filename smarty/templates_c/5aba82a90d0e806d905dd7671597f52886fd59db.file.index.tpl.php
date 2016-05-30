<?php /* Smarty version Smarty-3.1.19, created on 2016-05-23 19:10:04
         compiled from "/var/www/html/biblioteca_web/smarty/templates/user/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11585305445743396c6dc212-33172843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5aba82a90d0e806d905dd7671597f52886fd59db' => 
    array (
      0 => '/var/www/html/biblioteca_web/smarty/templates/user/index.tpl',
      1 => 1464022073,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11585305445743396c6dc212-33172843',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5743396c6e3df3_69744936',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5743396c6e3df3_69744936')) {function content_5743396c6e3df3_69744936($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("user/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body>
    <div id="wrapper">
      <?php echo $_smarty_tpl->getSubTemplate ("user/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      
      
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Panel Administracion<small> Mis libros</small></h1>
                    
                    <?php echo $_smarty_tpl->getSubTemplate ("user/tables.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php }} ?>
