$('#userForm').hide();
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
            const data = {
                id : $(elemento).attr('userId'),
                type: "busqueda"
            }
            $.post('../includes/user-edit.php',data,function(response){
                const usuario = JSON.parse(response);
                $('#idUsuario').val(usuario[0].id);
                $('#nombre').val(usuario[0].nombre);
                $('#apellido').val(usuario[0].apellido);
                $('#correo').val(usuario[0].correo);
                $('#estado').val(usuario[0].estado);
                $('#tipo_usuario').val(usuario[0].tipo_usuario);
                $('#userForm').show();
            })
        }
    })

    $('#userForm').submit(function(e){
        const data = {
            id: $('#idUsuario').val(),
            nombre: $('#nombre').val(),
            apellido: $('#apellido').val(),
            correo: $('#correo').val(),
            estado: $('#estado').val(),
            tipo_usuario: $('#tipo_usuario').val(),
            type: "edit"
        }
        console.log(data.estado);
        $.post('../includes/user-edit.php',data,function(response){
            alert(response);
            $('#userForm').hide();
            obtenerUsuarios();
        })
        e.preventDefault();
    })

    $('#cancelarForm').click(function(){
        $('#userForm').hide();
    })
});
