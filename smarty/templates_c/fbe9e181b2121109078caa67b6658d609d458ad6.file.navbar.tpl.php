<?php /* Smarty version Smarty-3.1.19, created on 2014-11-12 15:35:10
         compiled from "/home/u418302220/public_html/smarty/templates/user/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206230310854086b7d74a168-17273062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbe9e181b2121109078caa67b6658d609d458ad6' => 
    array (
      0 => '/home/u418302220/public_html/smarty/templates/user/navbar.tpl',
      1 => 1415802902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206230310854086b7d74a168-17273062',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54086b7d74c6d1_85567055',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54086b7d74c6d1_85567055')) {function content_54086b7d74c6d1_85567055($_smarty_tpl) {?><nav class="navbar navbar-default" role="navigation">
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
