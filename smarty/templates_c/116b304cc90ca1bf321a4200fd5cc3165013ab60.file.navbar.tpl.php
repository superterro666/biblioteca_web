<?php /* Smarty version Smarty-3.1.19, created on 2014-10-01 13:21:08
         compiled from "/home/u418302220/public_html/smarty/templates/admin/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103193605554086c50687030-58290320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '116b304cc90ca1bf321a4200fd5cc3165013ab60' => 
    array (
      0 => '/home/u418302220/public_html/smarty/templates/admin/navbar.tpl',
      1 => 1412160218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103193605554086c50687030-58290320',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54086c506b5756_56769400',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54086c506b5756_56769400')) {function content_54086c506b5756_56769400($_smarty_tpl) {?><nav class="navbar navbar-default" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Logotipo</a>
  </div>
 
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
        
     <li class="dropdown">   
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            Regitros</a>
        <ul class="dropdown-menu">
          <li><a href="index.php?type=form&action=user">Usuarios</a></li>
         
         
          <li><a href="index.php?type=form&action=subCat">Subcategorias</a></li>
          <li><a href="index.php?type=form&action=patner">Patners</a></li>
          <li><a href="index.php?type=form&action=producer">Productoras</a></li>
          
         </ul> 
     </li> 
       
    
      
       
        <li class="dropdown">   
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Listados  </a>
        <ul class="dropdown-menu">
          <li><a href="index.php?type=list&action=members">Usuarios</a></li>
          <li><a href="index.php?type=list&action=apps">App</a></li>
          
          <li><a href="index.php?type=list&action=subCat">Subcategorias</a></li>
          <li><a href="index.php?type=list&action=patner">Patners</a></li>
          <li><a href="index.php?type=list&action=producer">Productoras</a></li>
           <li><a href="index.php?type=list&action=ads">Ads</a></li>
        </ul>
      
         </li> 
         
          <li class="dropdown">   
        <a href="index.php?type=logout">
          Logout</a>
        
      
         </li> 
         
         
         
  </div>
</nav>
  
      
      
     
      
     
  
<?php }} ?>
