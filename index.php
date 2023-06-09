<?php 
session_start();
if (isset($_SESSION['usuario'])) {
  $user_autenticate = true;  
}
?>

<?php
    include('config/config.php');
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alquiler agropecuario</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="js/script.js"></script>
</head>

<body>

<?php include('menu.php'); ?>

<!-- Inicio carrusel -->
<section>
	<div id="carouselExample" class="carousel slide carousel-fade">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="images/motosierra.jpg"
					class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="images/fondo1.jpg"
					class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="images/fondo2.jpg"
					class="d-block w-100" alt="...">
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
</section>
	<!-- Fin carrusel -->

	<!-- Inicio servicios -->
	<section class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-6 col-sm-12">
				<h1>Servicios</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-12">
				<img src="images/motosierra.jpg" width="300" height="200" >
				<h2>Motosierra</h2>
                <p>
					Es una herramienta motorizada utilizada para cortar madera. Consiste en una cuchilla dentada de cadena que gira alrededor de una barra guía, impulsada por un motor de gasolina, electricidad o batería
				</p>
            </div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<img src="images/guadaña.jpg" width="300" height="200" >
				<h2>Guadaña</h2>
                <p>
					Una guadaña es una herramienta agrícola utilizada para cortar hierba, heno u otras plantas. Consiste en una larga y delgada cuchilla curva montada en un mango largo.
				</p>
            </div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<img src="images/pala.jpg" width="300" height="200" >
				<h2>Pala</h2>
                <p>
					Una pala es una herramienta manual utilizada para cavar, mover tierra, arena o cualquier otro material a granel.
				</p>
            </div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<img src="images/azadon.jpg" width="300" height="200" >
				<h2>Azadón</h2>
                <p>
					Herramienta agrícola manual que se utiliza para remover la tierra, eliminar maleza, y cavar surcos o zanjas en la tierra. Está compuesto por una hoja metálica en forma de pala, generalmente en forma de corazón, que se fija perpendicularmente a un mango largo de madera
				</p>
            </div>
		</div>
	</section>
	<!-- fin servicios -->	
	

	<!-- Inicio tabla herramientas -->
	<section class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-6 col-sm-12">
				<h1>Listado herramientas y precios</h1>
			</div>
		</div>		
	</section>
	<section class="container-fluid">
	  <div class="table-responsive">
		<table class="table table-bordered table-striped">
		  <thead class="color-principal text-white">
			<tr>
			  <th>Nombre de la herramienta</th>
			  <th>Descripción</th>
			  <th>Precio</th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <td>Azadón</td>
			  <td>Para cavar, remover maleza y hacer surcos en la tierra</td>
			  <td>$ 10.000</td>
			</tr>
			<tr>
			  <td>Motosierra</td>
			  <td>Para cortar árboles y ramas</td>
			  <td>$50.000</td>
			</tr>
			<tr>
			  <td>Guantes de jardinería</td>
			  <td>Para proteger las manos mientras se trabaja en el jardín</td>
			  <td>$5000</td>
			</tr>
			<tr>
			  <td>Rastrillo</td>
			  <td>Para recoger hojas, ramitas y otros desechos en el jardín</td>
			  <td>$8.000</td>
			</tr>
			<tr>
			  <td>Cortasetos</td>
			  <td>Para cortar y dar forma a setos y arbustos</td>
			  <td>$12.000</td>
			</tr>
		  </tbody>
		</table>
	  </div>
	</section>
	<!--Fin tabla herramientas-->

	<!-- Inicio formulario contactenos -->
	<section class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-6 col-sm-12">
				<h1>Contáctenos</h1>
			</div>
		</div>		
	</section>	
	  <section class="d-flex justify-content-center align-items-center">
		<div class="container">
		  <form>
			<div class="mb-3">
			  <label for="nombre" class="form-label">Nombre</label>
			  <input type="text" class="form-control" id="nombre" required>
			</div>
			<div class="mb-3">
			  <label for="correo" class="form-label">Correo electrónico</label>
			  <input type="email" class="form-control" id="correo" required>
			</div>
			<div class="mb-3">
			  <label for="telefono" class="form-label">Teléfono</label>
			  <input type="tel" class="form-control" id="telefono" required>
			</div>
			<div class="mb-3">
			  <label for="mensaje" class="form-label">Mensaje</label>
			  <textarea class="form-control" id="mensaje" rows="3" required></textarea>
			</div>

			<div class="mb-3">
				<div class="d-grid gap-2">
					<button type="submit" class="btn btn-primary color-principal" >Enviar</button>				
				</div>
			</div>
			
		  </form>
		</div>
	  </section>
	  <!--Fin formulario contactenos-->

      <?php include('footer.php'); ?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
		crossorigin="anonymous"></script>
</body>

</html>