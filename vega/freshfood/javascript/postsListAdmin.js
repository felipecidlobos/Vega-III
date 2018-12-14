function borrarPost(id){

    alertify.confirm('Eliminar pago', '¿Esta seguro de borrar esa publicación?.', function(){envioBorrarPost(id) }
                  , function(){ alertify.error('Cancelado')});
                  RunOverloads
  }
function envioBorrarPost(id){
    cadena = "id=" + id;
    $.ajax({
      type:"POST",
      url:"php/deletePost.php",
      data: cadena,
      success:function(r){
        if (r==1){
          
            alertify.error("No se pudo eliminar.");
  
        }else{
          
          $('#row').load('../freshfood/php/postsListAdmin.php');
          alertify.success("Eliminado con exito.");
        }
      }
    }) 
} 

$(document).ready(function(){
    $('#row').load('../freshfood/php/postsListAdmin.php');
});
