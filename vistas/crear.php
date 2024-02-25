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
   
   
	<!-----AÑADIR PASTILLA --->
	<div class="row g-5">
     

  <?php
  
              if (isset($data["errorinsercion"]))
              {
                ?>
                 <div class="alert alert-danger">
                  <?php echo $data["errorinsercion"];?>
                 </div>
                <?php
              }
              ?>

       <div class="col-md-2 col-lg-2"></div>
      <div class="col-md-8 col-lg-8">
        <h4 class="mb-3">Añadir una nueva pastilla</h4>
        <form class="needs-validation" method="POST" action="<?php echo $ruta;?>crear/anadir" novalidate>
          <div class="row g-3">
            

            

           

            <div class="col-12">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej: Pastilla Ibuprofeno Roja" required>
              <div class="invalid-feedback">
                Introduce el nombre de la pastilla
              </div>
            </div>

            <div class="col-md-4">
              <label for="duracion" class="form-label">Duración</label>
              <select class="form-select" name="duracion" id="duracion" required>
                <option value="">Selecciona la duración</option>
                <option value="1">1 día</option>
				<option value="2">2 días</option>
				<option value="3">3 días</option>
			
              </select>
              <div class="invalid-feedback">
                Selecciona la duración
              </div>
            </div>

            <div class="col-md-4">
              <label for="frecuencia" class="form-label">Frecuencia</label>
              <select class="form-select" name="frecuencia" id="frecuencia" required>
                <option value="">Elige frecuencia</option>
                 <option value="4">4 horas</option>
				 <option value="6">6 horas</option>
				 <option value="8">8 horas</option>
				 <option value="10">10 horas</option>
				 <option value="12">12 horas</option>
				 <option value="24">24 horas</option>
              </select>
              <div class="invalid-feedback">
                Selecciona una frecuencia 
              </div>
            </div>
			<div class="col-md-4">
              <label for="tipodepastilla" class="form-label">Tipo de pastilla</label>
              <select class="form-select" name="tipodepastilla" id="tipodepastilla" required>
                <option value="">Elige un tipo</option>
                 <option value="Pildora Roja">Pildora Roja</option>
				 <option value="Pastilla Roja">Pastilla Roja</option>
				 <option value="Pildora azul">Pildora Azul</option>
				 <option value="Pildora Roja y blanca">Pildora Roja y blanca</option>
              </select>
              <div class="invalid-feedback">
                Selecciona un tipo de pastilla 
              </div>
            </div>
           
          </div>

         
          

         

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Crear nueva pastilla</button>
        </form>
      </div>
    </div>
	<!-----FIN AÑADIR PASTILLA --->
	
  </main>
<!-----FIN CODIGO SECRETO --->
<?php

include "./vistas/inc/footer.php";

?>