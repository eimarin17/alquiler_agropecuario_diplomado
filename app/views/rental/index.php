<?php 
session_start();
if (isset($_SESSION['usuario'])) {
  $user_autenticate = true;  
}
?>
<?php include('../../../header.php') ?>
<?php include('../../../menu.php') ?>

<script>    
    scriptLoader('./js/rental.js');
</script>

<div class="wrapper">
    <div class="content">
      <div class="container">
        <h1>Gestión alquiler de herramientas</h1>

        <div class="container">
          <div class="mb-3">
              <!-- Button trigger modal -->
            <button type="button" id="btn_create_customer" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Crear alquiler
            </button>
          </div>          
        </div>

        <!-- Alert message -->
        <div class="alert alert-success alert-dismissible fade show" id="messageAlert" role="alert" style="display: none;">
         <strong>Datos guardados!</strong> <p>se ha creado correctamente el cliente</p>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> 
        <!-- End alert message -->    
        
        <table class="table table-bordered table-striped" id="table_rental">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre Cliente</th>
              <th>Herramienta</th>
              <th>Fecha alquiler</th>              
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
        <h1 class="modal-title fs-5" id="exampleModalLabel">Crear alquiler</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="closeModalCreate"></button>
      </div>
      <div class="modal-body">

      <form id="formCreateRental">
            <!-- Name input -->
            <div class="form-outline mb-4">
            <label class="form-label" for="clientes">Seleccione un cliente</label>
            <select class="form-select" aria-label="Default select example" id="selectClientes" name="selectClientes">                
                <option selected>Seleccione un cliente</option>                
            </select>          
            </div>

            <div class="form-outline mb-4">
            <label class="form-label" for="tools">Seleccione una herramienta</label>
            <select class="form-select" aria-label="Default select example" id="selectTool" name="selectTool" >                
                <option selected>Seleccione una herramienta</option>                
            </select>          
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary" id="btn_guardar_rental" >Guardar</button>
            </div>
            <input type="hidden" name="typeFormRental" value="0">
        </form>

      </div>
      
    </div>
  </div>
</div>


<?php include('../../../footer.php') ?>