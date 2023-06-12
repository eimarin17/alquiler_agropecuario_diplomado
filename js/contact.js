$(document).ready(function() {
    // save contact
    $("#formContact").on( "submit", function( event ) {        
      saveContact(this);
      event.preventDefault();
    });

});

function saveContact(aa)
{   
  var form = $(aa);
  var data = form.serialize();  
  
  $.ajax({
    url: './app/controllers/ContactController.php?action=saveContact',
    method: 'POST',    
    data : data,
    success: function(response) {         
      Swal.fire('Datos de contacto guardados correctamente!', '', 'success');
      form[0].reset();
    },
    error: function(xhr, status, error) {    
     
    }
  });
}