<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="Hugo 0.84.0">
    <title>ePastillero v1.0</title>

    

    <!-- Bootstrap core CSS -->
<link href="./assets/css/bootstrap.min.css" rel="stylesheet">

   

    
   
  </head>
  <body>
    


<div class="container py-3">

<?php

include "./vistas/inc/header.php";

?>
<!-----CUERPO --->

  <main>
   <?php



   ?>
 
   
 <!-----LISTADO PASTILLAS --->
    <h2 class="display-6 text-center mb-4">Calendario de Pastillas</h2>

    <div class="table-responsive">
      <table class="table text-center">
        <thead>
          <tr>
            <th style="width: 34%;"></th>
            <th style="width: 22%;">Hora</th>
            <th style="width: 22%;">Dia</th>
            <th style="width: 22%;">Mes</th>
          </tr>
        </thead>
        

        <tbody>


      <?php

       for ($i=0; $i < count($data); $i++)
       {
        
           ?>
<tr class="alert alert-light">
            <th scope="row" class="text-start"><button type="button" class="btn btn-info">Tomada</button> <?php echo $data[$i]["nombre"];?> (<?php echo $data[$i]["tipo"];?> )</th>
            <td><?php echo $data[$i]["duracion"];?> </td>
            <td><?php echo $data[$i]["frecuencia"];?> </td>
            <td><?php echo $data[$i]["fechacreacion"];?> </td>
			 <td><button type="button" class="btn btn-primary">Editar</button></td>
          </tr>
           <?php
       }

      ?>

       
        </tbody>
      </table>
    </div>
	
	<!-----FIN LISTADO PASTILLAS --->

<?php

include "./vistas/inc/footer.php";

?>