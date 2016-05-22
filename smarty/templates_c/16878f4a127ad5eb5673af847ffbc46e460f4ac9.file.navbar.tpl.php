<?php /* Smarty version Smarty-3.1.19, created on 2014-09-04 14:21:32
         compiled from "/var/www/appSystem/smarty/templates/user/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11482819095406cc9f72c885-35091373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16878f4a127ad5eb5673af847ffbc46e460f4ac9' => 
    array (
      0 => '/var/www/appSystem/smarty/templates/user/navbar.tpl',
      1 => 1409833286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11482819095406cc9f72c885-35091373',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5406cc9f72db04_99060899',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5406cc9f72db04_99060899')) {function content_5406cc9f72db04_99060899($_smarty_tpl) {?><nav class="navbar navbar-default" role="navigation">
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
          Cuenta  </a>
        <ul class="dropdown-menu">
          
          <li><a href="index.php?type=form&action=view">Cuenta</a></li>
          <li><a href="index.php?type=form&action=editU">Editar</a></li>
          
         
    
        </ul>
      
       </li>   
       
   
       
    
      
       
        <li class="dropdown">   
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Listados  </a>
        <ul class="dropdown-menu">
          
          <li><a href="index.php?type=list&action=appsUser">Apps</a></li>
          
         
    
        </ul>
      
       </li> 
         
          <li class="dropdown">   
        <a href="index.php?type=logout" >
          Logout</a>
        
      
         </li> 
         
         
         
  </div>
</nav>
  
      
      
     
      
     
  
<?php }} ?>
