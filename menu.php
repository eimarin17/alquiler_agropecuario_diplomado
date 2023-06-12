

<!-- Incio barra navegacion -->
<section>
	<nav class="navbar navbar-expand-lg bg-body-tertiary color-principal">
		<div class="container-fluid">
			<img src="<?= ROOT ?>images/pala_icon.png" alt="Mobirise Website Builder" style="height: 2.6rem;">
			<a class="navbar-brand" href="<?= ROOT ?>index.php">AlquilerAgropecuario				

			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="<?= ROOT ?>index.php">Inicio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= ROOT ?>nosotros.php">Nosotros</a>
					</li>
					<!-- Validate sesion -->
					<?php if(isset($user_autenticate)){ ?>
					<li class="nav-item">
						<a class="nav-link" href="<?= ROOT ?>app/views/tools/index.php">Herramientas</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="<?= ROOT ?>app/views/customer/index.php">Clientes</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="<?= ROOT ?>app/views/rental/index.php">Alquiler</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="<?= ROOT ?>app/views/contact/index.php">Gestión contactos</a>
					</li>				

					<?php }?>
					
					<?php if(!isset($user_autenticate)){ ?>
					<li class="nav-item">
						<a class="nav-link" href="<?= ROOT ?>app/views/login/login.php">Iniciar sesión</a>
					</li>
					<?php }?>
				</ul>

				<?php if(isset($user_autenticate)){ ?>
				<ul class="nav  justify-content-end">					
					<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Hola! <strong>Administrador</strong>
					</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="<?= ROOT ?>app/views/login/logout.php">Cerrar sesión</a></li>
						</ul>
        			</li>
				</ul>
				<?php }?>
				
			</div>
            
		</div>
	</nav>
</section>
<!-- fin barra navegacion-->