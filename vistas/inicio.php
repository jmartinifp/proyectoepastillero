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
<link href="<?php echo $ruta; ?>assets/css/bootstrap.min.css" rel="stylesheet">

   

    
   
  </head>
  <body>
    


<div class="container py-3">

<?php

include "./vistas/inc/header.php";


?>
<!-----CUERPO --->

  <main>
    
  
   <!-----CODIGO SECRETO --->
   <div class="row g-5">
       <div class="col-md-2 col-lg-2"></div>
      <div class="col-md-8 col-lg-8">
      
        <form class="needs-validation" method="POST" action="<?php echo $ruta;?>inicio/validar" novalidate>
          <div class="row g-3">
           
              <?php

              if (isset($data["errorvalidacion"]))
              {
                ?>
                 <div class="alert alert-danger">
                  <?php echo $data["errorvalidacion"];?>
                 </div>
                <?php
              }
              ?>

            <div class="col-12">
              <label for="username" class="form-label">Introduce tu código secreto. </label>
              <div class="input-group has-validation">
                <span class="input-group-text">Código</span>
                <input type="text" class="form-control"  id="codigo" name="codigo" placeholder="Mi código secreto " required>
              <div class="invalid-feedback">
                 Error al introducir el código de acceso. Recuerda que es un número de 4 dígitos. Si tienes problemas para acceder llama al número: 
				 <a href="tel:+34626786545"><strong>Tel: 626.786.545</strong></a>
                </div>
              </div>
            </div>

        
          <button class="w-100 btn btn-primary btn-lg" type="submit">Envia tu código de acceso</button>
        </form>
      </div>
    </div>
	<!-----FIN CODIGO SECRETO --->
   
	
  </main>
<!-----FIN CODIGO SECRETO --->
<?php

include "./vistas/inc/footer.php";

?>