<?php /* Smarty version Smarty-3.1.19, created on 2016-05-23 20:01:38
         compiled from "/var/www/html/biblioteca_web/smarty/templates/user/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4331660935743396c6e5cc9-24490087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3548a1196b684b35488e7f29cca09be3091ee1af' => 
    array (
      0 => '/var/www/html/biblioteca_web/smarty/templates/user/navbar.tpl',
      1 => 1464026497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4331660935743396c6e5cc9-24490087',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5743396c6e6083_10903900',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5743396c6e6083_10903900')) {function content_5743396c6e6083_10903900($_smarty_tpl) {?> <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin Panel</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul id="active" class="nav navbar-nav side-nav">
                    <li class="selected"><a href="index.php"><i class="fa fa-bullseye"></i> Panel</a></li>

                    <li><a href="index.php?type=cargar"><i class="fa fa-tasks"></i> Cargar listado</a></li>
                  
                    <li><a href="index.php?type=cerrar"><i class="fa fa-close"></i> Cerrar</a></li>
              
                </ul>
              
            </div>
        </nav><?php }} ?>
