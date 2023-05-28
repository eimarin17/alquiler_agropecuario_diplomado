$(document).ready(function() {

    getAllItems();

    $("#btn_create_tool").on( "click", function( event ) {
      
      var form = $("#formCreate");
      form[0].reset(); 
      $('input[name="typeForm"]').val(0);

      event.preventDefault();
    });

    // save tool
    $("#formCreate").on( "submit", function( event ) {      
      var typeForm = $('input[name="typeForm"]').val();     
      if(typeForm>0)
      {
        updateTool(typeForm);
      }else
      {
        saveCreate(this);
      }
      
      event.preventDefault();
    });

});


function getAllItems()
{ 
    $.ajax({
        url: '../../controllers/ToolsController.php?action=getAllItems',
        method: 'GET',
        dataType: 'json',
        success: function(response) {

          $("#table_tools > tbody").empty();

            var html = '';
            response.forEach(function(tool, index)
            {
                html += '<tr>';
                html += '<td>'+tool.id+'</td>';
                html += '<td>'+tool.nombre_herramienta+'</td>';
                html += '<td>'+tool.cantidad+'</td>';
                html += '<td>'+tool.descripcion+'</td>';
                html += '<td>'+tool.precio_alquiler+'</td>';
                html += '<td><button class="btn btn-warning"  onclick="getToolById('+tool.id+')" >Editar</button></td>';
                html += '<td><button class="btn btn-danger"  onclick="deleteToolById('+tool.id+',\''+tool.nombre_herramienta+'\')" >Eliminar</button></td>';
                html += '</tr>';
            });

        $("#table_tools > tbody").append(html);
         
        },
        error: function(xhr, status, error) {
          
        }
      });
}


function saveCreate(aa)
{
  var form = $(aa);
  var data = form.serialize();
  
  $.ajax({
    url: '../../controllers/ToolsController.php?action=saveTool',
    method: 'POST',    
    data : data,
    success: function(response) {         
      
      form[0].reset(); 
      $('input[name="typeForm"]').val(0);     
      $("#closeModalCreate").click();      
      getAllItems();
      $("#messageAlert").show();     

    },
    error: function(xhr, status, error) {
      $("#messageAlert > strong").text("ERROR");
      $("#messageAlert > p").text(error);
      $("#messageAlert").removeClass("alert-success").addClass("alert-danger");
     
    }
  });
}

function getToolById(id)
{    
    $.ajax({
        url: '../../controllers/ToolsController.php?action=getToolById&id='+id,
        method: 'GET',
        dataType: 'json',
        success: function(response) { 
          $('#exampleModal').modal('show');  
          var form = $("#formCreate");
          form[0].reset();      
          
          $("#exampleModalLabel").text('Editar herramienta');
          $('input[name="nombre"]').val(response[0].nombre_herramienta);
          $('input[name="cantidad"]').val(response[0].cantidad);
          $('input[name="descripcion"]').val(response[0].descripcion);
          $('input[name="precio_alquiler"]').val(response[0].precio_alquiler);
                   
          $('input[name="typeForm"]').val(id);

        },
        error: function(xhr, status, error) {
          $("#messageAlert").show();
          $("#messageAlert > strong").text("ERROR");
          $("#messageAlert > p").text(error);
          $("#messageAlert").removeClass("alert-success").addClass("alert-danger");
        }
      });
  }

  function updateTool(id)
  {    
    var form = $("#formCreate");
    var data = form.serialize();
    
    $.ajax({
      url: '../../controllers/ToolsController.php?action=updateTool&id='+id,
      method: 'POST',    
      data : data,
      success: function(response) {           
        getAllItems();
        form[0].reset(); 
       
        $('input[name="typeForm"]').val(0);     
        $("#closeModalCreate").click();      
     
        $("#messageAlert").show();        
        $("#messageAlert > p").text("la herramienta se ha actualizada correctamente");   
  
      },
      error: function(xhr, status, error) {        
        $("#messageAlert > strong").text("ERROR");
        $("#messageAlert > p").text(error);
        $("#messageAlert").removeClass("alert-success").addClass("alert-danger");
       
      }
    });
  }


function deleteToolById(id, nombre_herramienta)
{
  Swal.fire({
    title: 'Esta seguro que desea eliminar la herramienta <strong>'+nombre_herramienta+' </strong> ?',
    showDenyButton: true,
    showCancelButton: false,
    confirmButtonText: 'Si',
    denyButtonText: `No`,
    cancelButtonText: `Cancelar`,
  }).then((result) => {
    
    if (result.isConfirmed) {     
      $.ajax({
        url: '../../controllers/ToolsController.php?action=deleteToolById&id='+id,
        method: 'GET',        
        success: function(response) { 
          console.log(response);
          getAllItems();
          Swal.fire('Herramienta eliminada correctamente!', '', 'success');
          $('input[name="typeForm"]').val(0); 

        },
        error: function(xhr, status, error) {
         
          $("#messageAlert").show();
          $("#messageAlert > strong").text("ERROR");
          $("#messageAlert > p").text(error);
          $("#messageAlert").removeClass("alert-success").addClass("alert-danger");
        }
      });

    } 
    
  })

    
  }