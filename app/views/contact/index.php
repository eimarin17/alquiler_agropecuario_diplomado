<?php 
session_start();
if (isset($_SESSION['usuario'])) {
  $user_autenticate = true;  
}
?>
<?php include('../../../header.php') ?>
<?php include('../../../menu.php') ?>

<script>    
    scriptLoader('./js/contacts.js');
</script>

<div class="container mt-5">
        <div class="row">
          <div class="col-md-12">
            <h1>Gestión de contactos</h1>
            <table class="table table-bordered table-striped" id="table_contacts">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Mensaje</th>             
                    </tr>
                </thead>
                <tbody>            
                    <!-- datos contactenos -->
                </tbody>
            </table>
          </div>          
        </div>
</div>

<!-- <div class="wrapper">
    <div class="content">
      <div class="container">
        <h1>Gestión de contactos</h1>
        <table class="table table-bordered table-striped" id="table_contacts">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Correo</th>
              <th>Teléfono</th>
              <th>Mensaje</th>             
            </tr>
          </thead>
          <tbody>            
            
          </tbody>
        </table>
      </div>
    </div>
</div> -->

<?php include('../../../footer.php') ?>