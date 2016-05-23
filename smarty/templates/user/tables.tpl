







<table class="table table-striped">
    
    <tr> <th>titulo</th><th>Fecha Alta</th><th>Fecha Baja</th><th>Renovacion</th></tr>
    
    <tr>
        
       {foreach $items as $item}
       
           <td>{$item->titulo}</td>    <td>{$item->fecha_alta}</td>    <t{$item->fecha_baja}d></td>  <td>+</td>
       
       {/foreach}
    </tr>
    
    
    
</table>


