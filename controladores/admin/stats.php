<?php
include '../../configs/session.php';
include '../../stats/jpgraph.php';
include '../../stats/jpgraph_line.php';



$data=(object)$_GET;

$stats = new Stats($data,$db);

if(!$result=$stats->stats())
        return false;

  

        $ydata = array($result); 
       
        $graph = new Graph(450,250,'auto');

        $graph->SetScale('textlin');

        $graph->img->SetAntiAliasing();

        $graph->xgrid->Show();
        
        $lineplot=new LinePlot($ydata);

        $lineplot->SetColor('black');

        $lineplot->SetWeight(2);

        $lineplot->SetLegend('Horas');

        // Setup margin and titles

        $graph->img->SetMargin(40,20,20,40);

        $graph->title->Set('Ejemplo: Horas de Trabajo');

        $graph->xaxis->title->Set('Días');

        $graph->yaxis->title->Set('Horas de Trabajo');

        $graph->ygrid->SetFill(true,'#EFEFEF@0.5','#F9BB64@0.5');

        //$graph->SetShadow();

        $graph->Add($lineplot);

        $graph->Stroke();
        
        
