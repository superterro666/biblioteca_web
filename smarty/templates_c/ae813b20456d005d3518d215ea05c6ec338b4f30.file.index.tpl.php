<?php /* Smarty version Smarty-3.1.19, created on 2016-05-23 12:14:33
         compiled from "C:\xampp\htdocs\proyecto3\smarty\templates\user\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:301525710b598d2c0c2-00518500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae813b20456d005d3518d215ea05c6ec338b4f30' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto3\\smarty\\templates\\user\\index.tpl',
      1 => 1463998465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '301525710b598d2c0c2-00518500',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5710b598d77c80_75144832',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5710b598d77c80_75144832')) {function content_5710b598d77c80_75144832($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("user/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
