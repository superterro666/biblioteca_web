<?php /* Smarty version Smarty-3.1.19, created on 2016-05-23 19:56:57
         compiled from "/var/www/html/biblioteca_web/smarty/templates/user/tables.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20400716055743396c6e6a20-01852899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a929ec41f7eb1d202bb038f2d3bba3f6482ebbc9' => 
    array (
      0 => '/var/www/html/biblioteca_web/smarty/templates/user/tables.tpl',
      1 => 1464026215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20400716055743396c6e6a20-01852899',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5743396c6ed1a5_23808956',
  'variables' => 
  array (
    'ampliacion_ok' => 0,
    'ampliacion' => 0,
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5743396c6ed1a5_23808956')) {function content_5743396c6ed1a5_23808956($_smarty_tpl) {?>






<?php if ($_smarty_tpl->tpl_vars['ampliacion_ok']->value==true) {?><div class="alert alert-success">La actualizacion se hizo correctamente</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['ampliacion']->value==true) {?><div class="alert alert-danger">Desde la web no puedes ampliar mas el plazo</div><?php }?>

<table class="table table-striped">
    
    <tr> <th>titulo</th><th>Fecha Alta</th><th>Fecha Baja</th><th>Renovacion</th></tr>
    
  
        
       <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
         <tr>
           <td><?php echo $_smarty_tpl->tpl_vars['item']->value->titulo;?>
</td>    <td><?php echo $_smarty_tpl->tpl_vars['item']->value->fecha_alta;?>
</td>    <td><?php echo $_smarty_tpl->tpl_vars['item']->value->fecha_baja;?>
</td></td>  
            <td><a href="index.php?type=renovar&id=<?php echo $_smarty_tpl->tpl_vars['item']->value->id_libro;?>
"><i class="glyphicon glyphicon-plus"></i></a></td>
         </tr>
       <?php } ?>
  
    
    
    
</table>


<?php }} ?>
