<?php /* Smarty version Smarty-3.1.19, created on 2016-04-15 11:34:16
         compiled from "C:\xampp\htdocs\proyecto3\smarty\templates\user\navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137025710b598da9bf0-18353703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8809586c5fcb313d35529e0cdd14a57116fc35e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto3\\smarty\\templates\\user\\navbar.tpl',
      1 => 1454223790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137025710b598da9bf0-18353703',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5710b598dac6a1_14868532',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5710b598dac6a1_14868532')) {function content_5710b598dac6a1_14868532($_smarty_tpl) {?><nav class="navbar navbar-default" role="navigation">
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
    <ul class="nav navbar-nav" >
        
   
        <li>   
        
       
          
          <li><a href="index.php?type=form&action=view" style="color:black; " class="btn btn-success btn-xs" role="button">Cuenta</a></li>
         
          
         
    
       
      
       </li>   
       
   
       
    
      
       
        <li>   
       
       
          
          <li><a href="index.php?type=list&action=appsUser" style="color:black; margin-left: 2px; " class="btn btn-success btn-xs" role="button">My app</a></li>
          
         
    
       
      
       </li> 
       
       
       <li>
       
       <a href="index.php?type=form&action=files&id" style="color:black; margin-left: 2px;" class="btn btn-success btn-sm" role="button">Add file</a>
       
       </li>
       
       <li>
       
       <a href="index.php?type=list&action=files&id" style="color:black; margin-left: 2px;" class="btn btn-success btn-sm" role="button">List file</a>
       
       </li>
       
       
          <li>   
        <a href="index.php?type=logout"  style="color:black; margin-left: 2px;" class="btn btn-danger btn-sm " role="button">
          Logout</a>
        
      
         </li> 
         
    </ul>     
         
  </div>
</nav>
  
      
      
     
      
     
  
<?php }} ?>
