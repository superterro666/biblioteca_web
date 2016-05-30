<?php /* Smarty version Smarty-3.1.19, created on 2014-09-04 09:55:49
         compiled from "/var/www/appSystem/smarty/templates/admin/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151090038354018ec082e6f2-27207959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eed688bf91158063a92f5ba8394c7f5d70c7f0c6' => 
    array (
      0 => '/var/www/appSystem/smarty/templates/admin/navbar.tpl',
      1 => 1409817347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151090038354018ec082e6f2-27207959',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54018ec0831476_15110188',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54018ec0831476_15110188')) {function content_54018ec0831476_15110188($_smarty_tpl) {?><nav class="navbar navbar-default" role="navigation">
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
