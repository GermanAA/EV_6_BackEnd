/* Cargar Ciudad */

$(document).ready(function(){
    $.ajax({
      type: 'POST',
      url: 'php/CargarCiudad.php'
    })
  
    .done(function(listas_rep){
      $('#selectCiudad').html( listas_rep)
    })
    .fail(function(){
      alert('Hubo un errror al cargar la CIUDAD')
    })
   
  })

  /* Cargar Tipo */

  $(document).ready(function(){
    $.ajax({
      type: 'POST',
      url: 'php/CargarTipo.php'
    })
  
    .done(function(listas_rep){
      $('#selectTipo').html( listas_rep)
    })
    .fail(function(){
      alert('Hubo un errror al cargar la Tipo')
    })
   
  })

    /* Cargar Tipo */

    $(document).ready(function(){
      $.ajax({
        type: 'POST',
        url: 'php/CargarTodo.php'
      })

        document.getElementById("tabla").innerHTML=$propiedades;
      
     
    })