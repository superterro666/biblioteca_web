






{if $ampliacion_ok==true }<div class="alert alert-success">La actualizacion se hizo correctamente</div>{/if}
{if $ampliacion==true }<div class="alert alert-danger">Desde la web no puedes ampliar mas el plazo</div>{/if}

<table class="table table-striped">
    
    <tr> <th>titulo</th><th>Fecha Alta</th><th>Fecha Baja</th><th>Renovacion</th></tr>
    
  
        
       {foreach $items as $item}
         <tr>
           <td>{$item->titulo}</td>    <td>{$item->fecha_alta}</td>    <td>{$item->fecha_baja}</td></td>  
            <td><a href="index.php?type=renovar&id={$item->id_libro}"><i class="glyphicon glyphicon-plus"></i></a></td>
         </tr>
       {/foreach}
  
    
    
    
</table>


