<?php /* Smarty version Smarty-3.1.19, created on 2016-04-15 11:34:16
         compiled from "C:\xampp\htdocs\proyecto3\smarty\templates\user\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:265255710b598df0327-19508770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f785bb3bcdb1258675a249f23c0705ec4fdc713' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto3\\smarty\\templates\\user\\view.tpl',
      1 => 1454223784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '265255710b598df0327-19508770',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5710b598df7cf8_78469913',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5710b598df7cf8_78469913')) {function content_5710b598df7cf8_78469913($_smarty_tpl) {?><script>
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
