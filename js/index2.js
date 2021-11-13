/* Cargar Ciudad */

$(document).ready(function () {
  $.ajax({
    type: 'POST',
    url: 'php/CargarCiudad.php'
  })

    .done(function (listas_rep) {
      $('#selectCiudad').html(listas_rep)
    })
    .fail(function () {
      alert('Hubo un errror al cargar la CIUDAD')
    })

})

/* Cargar Tipo */

$(document).ready(function () {
  $.ajax({
    type: 'POST',
    url: 'php/CargarTipo.php'
  })

    .done(function (listas_rep) {
      $('#selectTipo').html(listas_rep)
    })
    .fail(function () {
      alert('Hubo un errror al cargar la TIPO')
    })

});


$(document).ready(function(){

  var HtmlNode = document.getElementById('datos');

$.ajax({

  url: 'php/CargarTodo.php',
  type: 'POST',
  data: {},
  success: function (data) {

      HtmlNode.innerHTML = HtmlNode.innerHTML + '<li>' + [1].Ciudad + '</li>';
    
  }
})

});

console.log('correcto');

document.querySelector('#boton').addEventListener('click',traerdatos);

function traerdatos(){
  console.log('dentro de la funcion');
  const xhttp = new XMLHttpRequest();
  xhttp.open('GET','php/CargarTodo.php',true);
  xhttp.send();
  xhttp.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200);
    //console.log(this.responseText);
    let datos = JSON.parse(this.responseText);
    //console.log(datos);
    let res = document.querySelector('#res')
    res.innerHTML='';
    for(let item of datos){
      //console.log(item);
      res.innerHTML += `<li>${item.Id}</li>`


    }


  }
}




