<?php /* Smarty version Smarty-3.1.19, created on 2016-05-23 12:26:25
         compiled from "C:\xampp\htdocs\proyecto3\smarty\templates\user\navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137025710b598da9bf0-18353703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8809586c5fcb313d35529e0cdd14a57116fc35e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto3\\smarty\\templates\\user\\navbar.tpl',
      1 => 1463998510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137025710b598da9bf0-18353703',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5710b598dac6a1_14868532',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5710b598dac6a1_14868532')) {function content_5710b598dac6a1_14868532($_smarty_tpl) {?> <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
                    <li class="selected"><a href="index.php"><i class="fa fa-bullseye"></i>Panel</a></li>
                    <li><a href="index.php?type=cargar"><i class="fa fa-tasks"></i>Cargar listado</a></li>
                  
              
                </ul>
              
            </div>
        </nav><?php }} ?>
