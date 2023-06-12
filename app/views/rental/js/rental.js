
$(document).ready(function() {

    getAllItemsCustomer();
    getAllItemsTools();

     // save customer
     $("#formCreateRental").on( "submit", function( event ) {      
        var typeForm = $('input[name="typeFormRental"]').val();     
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

function getAllItemsCustomer()
{ 
    $.ajax({
        url: '../../controllers/CustomerController.php?action=getAllItems',
        method: 'GET',
        dataType: 'json',
        success: function(response) {

        //   $("#selectClientes > option").empty();

            var html = '';
            response.forEach(function(customer, index)
            {    
                html += '<option value="'+customer.id+'">'+customer.nombres+'</option>';
            });

        $("#selectClientes").append(html);
         
        },
        error: function(xhr, status, error) {
          
        }
      });
}


function getAllItemsTools()
{ 
    $.ajax({
        url: '../../controllers/ToolsController.php?action=getAllItems',
        method: 'GET',
        dataType: 'json',
        success: function(response) {

          $("#selectTool").empty();

            var html = '';
            response.forEach(function(tool, index)
            {
                html += '<option value="'+tool.id+'">'+tool.nombre_herramienta+'</option>';
            });

        $("#selectTool").append(html);
         
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
    url: '../../controllers/RentalController.php?action=saveRental',
    method: 'POST',    
    data : data,
    success: function(response) {         
      
      form[0].reset(); 
      $('input[name="typeFormRental"]').val(0);     
      $("#closeModalCreate").click();      
    //   getAllItems();
      $("#messageAlert").show();     

    },
    error: function(xhr, status, error) {
      $("#messageAlert > strong").text("ERROR");
      $("#messageAlert > p").text(error);
      $("#messageAlert").removeClass("alert-success").addClass("alert-danger");
     
    }
  });
}