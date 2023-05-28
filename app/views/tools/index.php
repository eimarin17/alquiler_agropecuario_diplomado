<?php include('../../../header.php') ?>
<?php include('../../../menu.php') ?>

<script>    
    scriptLoader('./js/tools.js');
</script>

<div class="wrapper">
    <div class="content">
      <div class="container">
        <h1>Gestión de herramientas</h1>

        <div class="container">
          <div class="mb-3">
              <!-- Button trigger modal -->
            <button type="button" id="btn_create_tool" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Crear herramienta
            </button>
          </div>          
        </div>

        <!-- Alert message -->
        <div class="alert alert-success alert-dismissible fade show" id="messageAlert" role="alert" style="display: none;">
         <strong>Datos guardados!</strong> <p>se ha creado correctamente una herramienta</p>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> 
        <!-- End alert message -->    
        
        <table class="table table-bordered table-striped" id="table_tools">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Cantidad</th>
              <th>Descripción</th>
              <th>Precio alquiler</th>             
            </tr>
          </thead>
          <tbody>            
            <!-- datos herramientas -->
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
        <h1 class="modal-title fs-5" id="exampleModalLabel">Crear herramienta</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="closeModalCreate"></button>
      </div>
      <div class="modal-body">

      <form id="formCreate">
            <!-- Name input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="name">Nombre</label>
              <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" required />              
            </div>

            <div class="form-outline mb-4">
              <label class="form-label" for="cantidad">Cantidad</label>
              <input type="number" id="cantidad" name="cantidad" class="form-control" placeholder="Cantidad" required/>              
            </div>

            <div class="form-outline mb-4">
              <label class="form-label" for="descripcion">Descripcion</label>
              <input type="text" id="descripcion" name="descripcion" class="form-control" placeholder="Descripción"/>              
            </div>

            <div class="form-outline mb-4">
              <label class="form-label" for="precio_alquiler">Precio alquiler</label>
              <input type="text" id="precio_alquiler" name="precio_alquiler" class="form-control" placeholder="Precio alquiler" required/>              
            </div>


            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary" id="btn_guardar" >Guardar</button>
            </div>
            <input type="hidden" name="typeForm" value="0">
        </form>

      </div>
      
    </div>
  </div>
</div>


<?php include('../../../footer.php') ?>