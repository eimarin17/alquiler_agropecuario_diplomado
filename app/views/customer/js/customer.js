$(document).ready(function() {

    getAllItems();

    $("#btn_create_customer").on( "click", function( event ) {
      
      var form = $("#formCreateCustomer");
      form[0].reset(); 
      $('input[name="typeFormCustomer"]').val(0);

      event.preventDefault();
    });

    // save customer
    $("#formCreateCustomer").on( "submit", function( event ) {      
      var typeForm = $('input[name="typeFormCustomer"]').val();     
      if(typeForm>0)
      {
        updateCustomer(typeForm);
      }else
      {
        saveCreateCustomer(this);
      }
      
      event.preventDefault();
    });

});


function getAllItems()
{ 
    $.ajax({
        url: '../../controllers/CustomerController.php?action=getAllItems',
        method: 'GET',
        dataType: 'json',
        success: function(response) {

          $("#table_customers > tbody").empty();

            var html = '';
            response.forEach(function(customer, index)
            {
                html += '<tr>';
                html += '<td>'+customer.id+'</td>';
                html += '<td>'+customer.nombres+'</td>';
                html += '<td>'+customer.apellidos+'</td>';
                html += '<td>'+customer.correo_electronico+'</td>';
                html += '<td>'+customer.saldo+'</td>';
                html += '<td><button class="btn btn-warning"  onclick="getCustomerById('+customer.id+')" >Editar</button></td>';
                html += '<td><button class="btn btn-danger"  onclick="deleteToolById('+customer.id+',\''+customer.nombres+'\')" >Eliminar</button></td>';
                html += '</tr>';
            });

        $("#table_customers > tbody").append(html);
         
        },
        error: function(xhr, status, error) {
          
        }
      });
}


function saveCreateCustomer(aa)
{
  var form = $(aa);
  var data = form.serialize();
  
  $.ajax({
    url: '../../controllers/CustomerController.php?action=saveCustomer',
    method: 'POST',    
    data : data,
    success: function(response) {         
      
      form[0].reset(); 
      $('input[name="typeFormCustomer"]').val(0);     
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

function getCustomerById(id)
{    
    $.ajax({
        url: '../../controllers/CustomerController.php?action=getToolById&id='+id,
        method: 'GET',
        dataType: 'json',
        success: function(response) { 
          $('#exampleModal').modal('show');  
          var form = $("#formCreateCustomer");
          form[0].reset();      
          
          $("#exampleModalLabel").text('Editar cliente');
          $('input[name="nombres"]').val(response[0].nombres);
          $('input[name="apellidos"]').val(response[0].apellidos);
          $('input[name="email"]').val(response[0].correo_electronico);
          $('input[name="saldo"]').val(response[0].saldo);
                   
          $('input[name="typeFormCustomer"]').val(id);

        },
        error: function(xhr, status, error) {
          $("#messageAlert").show();
          $("#messageAlert > strong").text("ERROR");
          $("#messageAlert > p").text(error);
          $("#messageAlert").removeClass("alert-success").addClass("alert-danger");
        }
      });
  }

  function updateCustomer(id)
  {    
    var form = $("#formCreateCustomer");
    var data = form.serialize();
    
    $.ajax({
      url: '../../controllers/CustomerController.php?action=updateCustomer&id='+id,
      method: 'POST',    
      data : data,
      success: function(response) {           
        getAllItems();
        form[0].reset(); 
       
        $('input[name="typeFormCustomer"]').val(0);     
        $("#closeModalCreate").click();      
     
        $("#messageAlert").show();        
        $("#messageAlert > p").text("el cliente se ha actualizada correctamente");   
  
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
    title: 'Esta seguro que desea eliminar el cliente <strong>'+nombre_herramienta+' </strong> ?',
    showDenyButton: true,
    showCancelButton: false,
    confirmButtonText: 'Si',
    denyButtonText: `No`,
    cancelButtonText: `Cancelar`,
  }).then((result) => {
    
    if (result.isConfirmed) {     
      $.ajax({
        url: '../../controllers/CustomerController.php?action=deleteToolById&id='+id,
        method: 'GET',        
        success: function(response) {           
          getAllItems();
          Swal.fire('Cliente eliminado correctamente!', '', 'success');
          $('input[name="typeFormCustomer"]').val(0); 

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