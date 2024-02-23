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
   
   
	<!-----AÑADIR PASTILLA --->
	<div class="row g-5">
     
       <div class="col-md-2 col-lg-2"></div>
      <div class="col-md-8 col-lg-8">
        <h4 class="mb-3">Añadir una nueva pastilla</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            

            

           

            <div class="col-12">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombre" placeholder="Ej: Pastilla Ibuprofeno Roja" required>
              <div class="invalid-feedback">
                Introduce el nombre de la pastilla
              </div>
            </div>

            <div class="col-md-4">
              <label for="duracion" class="form-label">Duración</label>
              <select class="form-select" id="duracion" required>
                <option value="">Selecciona la duración</option>
                <option>2 días</option>
				<option>3 días</option>
				<option>4 días</option>
				<option>Crónico</option>
              </select>
              <div class="invalid-feedback">
                Selecciona la duración
              </div>
            </div>

            <div class="col-md-4">
              <label for="frecuencia" class="form-label">Frecuencia</label>
              <select class="form-select" id="frecuencia" required>
                <option value="">Elige frecuencia</option>
                 <option>4 horas</option>
				 <option>6 horas</option>
				 <option>8 horas</option>
				 <option>10 horas</option>
				 <option>12 horas</option>
				 <option>24 horas</option>
              </select>
              <div class="invalid-feedback">
                Selecciona una frecuencia 
              </div>
            </div>
			<div class="col-md-4">
              <label for="tipodepastilla" class="form-label">Tipo de pastilla</label>
              <select class="form-select" id="tipodepastilla" required>
                <option value="">Elige un tipo</option>
                 <option>Pildora Roja</option>
				 <option>Pastilla Roja</option>
				 <option>Pildora Azul</option>
				 <option>Pildora Roja y blanca</option>
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