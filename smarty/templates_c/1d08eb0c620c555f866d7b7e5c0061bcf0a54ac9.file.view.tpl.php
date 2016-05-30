<?php /* Smarty version Smarty-3.1.19, created on 2014-11-15 13:15:03
         compiled from "/var/www/appsystem/smarty/templates/admin/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:313791975546743c7d6c465-56044407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d08eb0c620c555f866d7b7e5c0061bcf0a54ac9' => 
    array (
      0 => '/var/www/appsystem/smarty/templates/admin/view.tpl',
      1 => 1416052214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '313791975546743c7d6c465-56044407',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546743c7d72e96_58134734',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546743c7d72e96_58134734')) {function content_546743c7d72e96_58134734($_smarty_tpl) {?><script>
    $(document).ready(function(){
    
    classIframe();
    
    });
</script>

<div class="page-header">
  <h1><?php echo $_smarty_tpl->tpl_vars['view']->value->title;?>
</h1>

<div class="embed-responsive embed-responsive-16by9">
    
 <?php echo $_smarty_tpl->tpl_vars['view']->value->url;?>

    
</div>

 </div>
       
 
       
       

       

   
   <?php }} ?>
