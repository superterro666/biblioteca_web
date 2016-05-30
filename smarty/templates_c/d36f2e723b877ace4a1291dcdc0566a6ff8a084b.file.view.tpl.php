<?php /* Smarty version Smarty-3.1.19, created on 2014-09-04 11:44:30
         compiled from "/var/www/appSystem/smarty/templates/admin/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9847569175405a72609a119-25089615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd36f2e723b877ace4a1291dcdc0566a6ff8a084b' => 
    array (
      0 => '/var/www/appSystem/smarty/templates/admin/view.tpl',
      1 => 1409821249,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9847569175405a72609a119-25089615',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5405a7260c4406_32073521',
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5405a7260c4406_32073521')) {function content_5405a7260c4406_32073521($_smarty_tpl) {?><script>
    $(document).ready(function(){
    
    classIframe();
    
    };)
</script>

<div class="page-header">
  <h1><?php echo $_smarty_tpl->tpl_vars['view']->value->title;?>
</h1>

<div class="embed-responsive embed-responsive-16by9">
    
 <?php echo $_smarty_tpl->tpl_vars['view']->value->url;?>

    
</div>

 </div>
       
 
       
       

       

   
   <?php }} ?>
