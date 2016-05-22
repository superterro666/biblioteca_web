{include file="admin/header.tpl"}


<body>
<div class="page-header">
  <h1>Encabezado de página <small>con un texto secundario</small></h1>
</div>







    <div class="container">
        
{include file="admin/navbar.tpl"}

{if $error}
<div class="jumbotron">
  <div class="container">
    <h1>Error de formulario</h1>
    <p>Has comentido un error en el formulario y no a pasado la prueba php, si tienes desconectado javascript en el navegador, vuelve a conectarlo para ver los errores.</p>
    
  </div>
</div>
{/if}

{if $stats} 

   <div class="alert alert-warning alert-dismissable">
  <button type="button" class="close" id="recharge" data-dismiss="alert">&times;</button>
  <p>{$stats}</p>
</div> 

{/if}









  <div class="row">
{include file="admin/forms.tpl"}
{include file="admin/tables.tpl"}
{include file="admin/view.tpl"}
{include file="admin/stats.tpl"}
    
  </div>

  
       
   



        </div>


</body>
</html>