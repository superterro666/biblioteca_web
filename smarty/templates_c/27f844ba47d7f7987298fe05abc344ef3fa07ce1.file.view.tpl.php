<?php /* Smarty version Smarty-3.1.19, created on 2014-09-04 11:44:14
         compiled from "/var/www/appSystem/smarty/templates/user/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6458728805406cc9f7cdd52-56625636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27f844ba47d7f7987298fe05abc344ef3fa07ce1' => 
    array (
      0 => '/var/www/appSystem/smarty/templates/user/view.tpl',
      1 => 1409823850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6458728805406cc9f7cdd52-56625636',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5406cc9f7d6e90_48006525',
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5406cc9f7d6e90_48006525')) {function content_5406cc9f7d6e90_48006525($_smarty_tpl) {?><script>
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
