<?php 
session_start();
if (isset($_SESSION['usuario'])) {
  $user_autenticate = true;  
}
?>

<?php include('header.php') ?>
<?php include('menu.php') ?>

<!-- Inicio seccion nosotros-->
<div class="container mt-5">
        <div class="row">
          <div class="col-md-6">
            <h1>Nosotros</h1>
            <p>Somos una empresa líder en la distribución de herramientas agropecuarias de alta calidad. Nos enorgullece ofrecer una amplia selección de herramientas de marcas reconocidas, con el objetivo de ayudar a nuestros clientes a hacer crecer sus negocios y mejorar su productividad.</p>
            <p>Desde azadones hasta tractores, tenemos todo lo que necesita para mantener sus cultivos y campos en las mejores condiciones. Nuestro equipo de expertos en herramientas agropecuarias está aquí para asesorarlo y brindarle el mejor servicio posible.</p>
          </div>
          <div class="col-md-6">
            <img src="images/imagen-nostros.jpg" alt="Herramientas Agropecuarias" class="img-fluid rounded">
          </div>
        </div>
    </div>
<!-- Fin seccion nostros -->

<!-- Inicio seccion ventajas herramientas-->
<div class="container mt-5">
    <h1>Ventajas de utilizar herramientas en el sector agropecuario</h1>
    <hr>
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-3">
          <div class="card-body bg-success text-light">
            <h5 class="card-title">Aumento de la productividad</h5>
            <p class="card-text">Las herramientas agropecuarias permiten a los agricultores realizar tareas de manera más rápida y eficiente, lo que se traduce en un aumento de la productividad.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-3">
          <div class="card-body bg-info text-light">
            <h5 class="card-title">Mejora de la calidad</h5>
            <p class="card-text">Al utilizar herramientas de alta calidad, se puede mejorar la calidad de los cultivos y la producción ganadera.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-3">
          <div class="card-body bg-warning text-light">
            <h5 class="card-title">Reducción de costos</h5>
            <p class="card-text">La utilización de herramientas adecuadas puede reducir los costos de producción al disminuir la necesidad de mano de obra y aumentar la eficiencia en las tareas.</p>
          </div>
        </div>
      </div>
    </div>
</div>
<!--Fin seccion nosotros-->

<!-- Inicio video heramienta-->
<div class="container mt-5">
    <div class="video-container" style="height: 500px;">
        <iframe width="100%" height="100%" src="https://player.vimeo.com/video/715426909?title=0&portrait=0&byline=0&autoplay=1&loop=1&transparent=1" frameborder="0" allowfullscreen></iframe>
      </div>
</div>
<!-- fin video herramienta -->

<br/>


<?php include('footer.php') ?>