<?php 
session_start();
if (isset($_SESSION['usuario'])) {
  $user_autenticate = true;  
}
?>
<?php include('../../../header.php') ?>
<?php include('../../../menu.php') ?>

<script>    
    scriptLoader('./js/customer.js');
</script>

<div class="wrapper">
    <div class="content">
      <div class="container">
        <h1>Gestión de clientes</h1>

        <div class="container">
          <div class="mb-3">
              <!-- Button trigger modal -->
            <button type="button" id="btn_create_customer" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Crear cliente
            </button>
          </div>          
        </div>

        <!-- Alert message -->
        <div class="alert alert-success alert-dismissible fade show" id="messageAlert" role="alert" style="display: none;">
         <strong>Datos guardados!</strong> <p>se ha creado correctamente el cliente</p>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> 
        <!-- End alert message -->    
        
        <table class="table table-bordered table-striped" id="table_customers">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombres</th>
              <th>Apellidos</th>
              <th>Correo</th>
              <th>Saldo</th>             
            </tr>
          </thead>
          <tbody>            
            <!-- datos clientes -->
          </tbody>
        </table>
      </div>
    </div>
  </div>

<!-- Modal  Create Tools -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Crear cliente</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="closeModalCreate"></button>
      </div>
      <div class="modal-body">

      <form id="formCreateCustomer">
            <!-- Name input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="name">Nombres</label>
              <input type="text" id="nombres" name="nombres" class="form-control" placeholder="Nombres" required />              
            </div>

            <div class="form-outline mb-4">
              <label class="form-label" for="apellidos">Apellidos</label>
              <input type="text" id="apellidos" name="apellidos" class="form-control" placeholder="Apellidos" required/>              
            </div>

            <div class="form-outline mb-4">
              <label class="form-label" for="correo">Correo</label>
              <input type="text" id="email" name="email" class="form-control" placeholder="Correo"/>              
            </div>

            <div class="form-outline mb-4">
              <label class="form-label" for="saldo">Saldo</label>
              <input type="text" id="saldo" name="saldo" class="form-control" placeholder="Saldo" required/>              
            </div>


            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary" id="btn_guardar_customer" >Guardar</button>
            </div>
            <input type="hidden" name="typeFormCustomer" value="0">
        </form>

      </div>
      
    </div>
  </div>
</div>


<?php include('../../../footer.php') ?>