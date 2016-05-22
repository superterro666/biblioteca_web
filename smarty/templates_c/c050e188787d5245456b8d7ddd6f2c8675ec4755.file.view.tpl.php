<?php /* Smarty version Smarty-3.1.19, created on 2014-10-01 13:21:08
         compiled from "/home/u418302220/public_html/smarty/templates/admin/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142549905254086c50719a94-36749818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c050e188787d5245456b8d7ddd6f2c8675ec4755' => 
    array (
      0 => '/home/u418302220/public_html/smarty/templates/admin/view.tpl',
      1 => 1412160222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142549905254086c50719a94-36749818',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54086c5073c237_91805468',
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54086c5073c237_91805468')) {function content_54086c5073c237_91805468($_smarty_tpl) {?><script>
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
