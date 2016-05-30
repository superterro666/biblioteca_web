<?php /* Smarty version Smarty-3.1.19, created on 2014-10-01 16:01:51
         compiled from "/home/u418302220/public_html/smarty/templates/user/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21345287954086b7d75b2c2-38706714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '722ddb12145e99843a9256fdcbecc3e81195a34e' => 
    array (
      0 => '/home/u418302220/public_html/smarty/templates/user/view.tpl',
      1 => 1412160230,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21345287954086b7d75b2c2-38706714',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54086b7d764b06_14984998',
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54086b7d764b06_14984998')) {function content_54086b7d764b06_14984998($_smarty_tpl) {?><script>
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
