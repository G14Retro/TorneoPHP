$(document).ready(function(){
    $.ajax({
        url: '../includes/users.php',
        type: 'GET',
        success: function(response){
          let usuarios = JSON.parse(response);
          let plantilla = '';
          usuarios.forEach(usuario => {
            plantilla += `
                <tr>
                    <td>${usuario.nombre}</td>
                    <td>${usuario.apellido}</td>
                    <td>${usuario.correo}</td>
                    <td>${usuario.estado}</td>
                </tr>
                `
          });
          console.log(plantilla);
          $('#users').html(plantilla);
        }
    });

});
