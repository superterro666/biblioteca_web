<?php /* Smarty version Smarty-3.1.19, created on 2016-05-23 12:26:25
         compiled from "C:\xampp\htdocs\proyecto3\smarty\templates\user\tables.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98445710b598dd9412-97212194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ca0c49cbe1bd5063938d30f9b5adb6fedf2d322' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto3\\smarty\\templates\\user\\tables.tpl',
      1 => 1463999182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98445710b598dd9412-97212194',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5710b598ddcf88_50971431',
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5710b598ddcf88_50971431')) {function content_5710b598ddcf88_50971431($_smarty_tpl) {?>







<table class="table table-striped">
    
    <tr> <th>titulo</th><th>Fecha Alta</th><th>Fecha Baja</th><th>Renovacion</th></tr>
    
    <tr>
        
       <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
       
           <td><?php echo $_smarty_tpl->tpl_vars['item']->value->titulo;?>
</td>    <td><?php echo $_smarty_tpl->tpl_vars['item']->value->fecha_alta;?>
</td>    <t<?php echo $_smarty_tpl->tpl_vars['item']->value->fecha_baja;?>
d></td>  <td>+</td>
       
       <?php } ?>
    </tr>
    
    
    
</table>


<?php }} ?>
