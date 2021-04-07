// $('#userForm').hide();
$(document).ready(function(){
    obtenerUsuarios();
    function obtenerUsuarios() {
        $.ajax({
            url: '../includes/users.php',
            type: 'GET',
            success: function(response){
              let usuarios = JSON.parse(response);
              let plantilla = '';
              usuarios.forEach(usuario => {
                plantilla += `
                    <tr userId="${usuario.id}">
                        <td>${usuario.nombre}</td>
                        <td>${usuario.apellido}</td>
                        <td>${usuario.correo}</td>
                        <td>${usuario.estado}</td>
                        <td>
                            <button class="editar btn btn-outline-primary">
                                Editar
                            </button>
                        </td>
                    </tr>
                    `
              });
              $('#users').html(plantilla);
            }
        });
    }

    $(document).on('click','.editar',function(){
        if (confirm('¿Desea editar este usuario?')) {
            let elemento = $(this)[0].parentElement.parentElement;
            let id = $(elemento).attr('userId');
            $.post('../includes/user-edit.php',{id},function(response){
                const usuario = JSON.parse(response);
                $('#idUsuario').val(usuario.id);
                $('#nombre').val(usuario.nombre);
                console.log($('#nombre').val());
                $('#userForm').show();
            })
        }
    })

    $('#cancelarForm').click(function(){
        console.log($('#nombre').val());
        $('#userForm').hide();
    })
});
