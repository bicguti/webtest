$(document).ready(function() {
  var URLdomain = window.location.host;//obtener el dominio de la url
  var protocolo = window.location.protocol;//obtener el protocolo que se esta utilizando
  $('#btn-buscarNit').click(function(event) {
    event.preventDefault();
    var url = protocolo+'//'+URLdomain + '/personal/buscar.php';
    var nit = $('#nit').val();
    $('.carga-modal').animate({top:'0'}, 500);//mostrar el mensaje de carga mientras se obtienen los datos
    $.ajax({
      url: url,
      type: 'GET',
      dataType: 'json',
      data: {dato: nit, opcion:'nit'}
    }).success(function(data) {
      var html = '';
      if (data == false) {
        html = '<tr><td>No se encontraron coincidencias con el nit</td></tr>';
      }else {
        $(data).each(function(index, el) {
          html += '<tr>';
          html += '<td>'+(index+1)+'</td>';
          html += '<td>'+el.nombre_personal.toUpperCase()+'</td>';
          html += '<td>'+el.apellidos_personal.toUpperCase()+'</td>';
          html += '<td><a href="/test/personal/editar.php?id='+el.id_personal+'" class="button info">Editar</a></td>';
          html += '<td><a href="/test/personal/eliminar.php?id='+el.id_personal+'" class="button danger">Eliminar</a></td>';
          html += '</tr>';
        });
      }
      $('#resultados').html(html);
      $('.carga-modal').animate({top:'100%'}, 500);//mostrar el mensaje de carga mientras se obtienen los datos
    }).error(function(error) {
      console.log(error);
      console.log('Error');
      $('.carga-modal').animate({top:'100%'}, 500);//mostrar el mensaje de carga mientras se obtienen los datos
    });

  });//fin del evento click

  $('#btn-buscarNom').click(function(event) {
    event.preventDefault();
    var url = protocolo+'//'+URLdomain + '/personal/buscar.php';
    var nombre = $('#nombres').val();
    $('.carga-modal').animate({top:'0'}, 500);//mostrar el mensaje de carga mientras se obtienen los datos
    $.ajax({
      url: url,
      type: 'GET',
      dataType: 'json',
      data: {dato: nombre, opcion:'nombre'}
    }).success(function(data) {
      var html = '';
      if (data == false) {
        html = '<tr><td>No se encontraron coincidencias con el nombre indicado</td></tr>';
      }else {
        $(data).each(function(index, el) {
          html += '<tr>';
          html += '<td>'+(index+1)+'</td>';
          html += '<td>'+el.nombre_personal.toUpperCase()+'</td>';
          html += '<td>'+el.apellidos_personal.toUpperCase()+'</td>';
          html += '<td><a href="/test/personal/editar.php?id='+el.id_personal+'" class="button info">Editar</a></td>';
          html += '<td><a href="/test/personal/eliminar.php?id='+el.id_personal+'" class="button danger">Eliminar</a></td>';
          html += '</tr>';
        });
      }
      $('#resultados').html(html);
      $('.carga-modal').animate({top:'100%'}, 500);//mostrar el mensaje de carga mientras se obtienen los datos
    }).error(function(error) {
      console.log(error);
      console.log('Error');
      $('.carga-modal').animate({top:'100%'}, 500);//mostrar el mensaje de carga mientras se obtienen los datos
    });
  });//fin del evnto click

});//fin del document ready
