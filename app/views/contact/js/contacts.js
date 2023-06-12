$(document).ready(function() {    
    getAllItems();
});


function getAllItems()
{ 
    $.ajax({
        url: '../../controllers/ContactController.php?action=getAllItems',
        method: 'GET',
        dataType: 'json',
        success: function(response) {

          $("#table_contacts > tbody").empty();

            var html = '';
            response.forEach(function(tool, index)
            {
                html += '<tr>';
                html += '<td>'+tool.id+'</td>';
                html += '<td>'+tool.nombre+'</td>';
                html += '<td>'+tool.email+'</td>';
                html += '<td>'+tool.telefono+'</td>';
                html += '<td>'+tool.mensaje+'</td>';                
                html += '</tr>';
            });

        $("#table_contacts > tbody").append(html);
         
        },
        error: function(xhr, status, error) {
          
        }
      });
}