$(document).ready(function(){
    let editar = false;
    obtenerPartidas();
    function obtenerPartidas() {
        $.ajax({
            url: '../includes/torneo.php',
            type: 'GET',
            success: function(response){
              let partidas = JSON.parse(response);
              let plantilla = '';
              partidas.forEach(partida => {
                plantilla += `
                    <tr partidaId="${partida.id}">
                        <td>${partida.id}</td>
                        <td>${partida.nombre}</td>
                        <td>${partida.fecha}</td>
                        <td>
                            <button class="editar btn btn-outline-primary">
                                Editar
                            </button>
                        </td>
                        <td>
                            <button class="organizar btn btn-dark">
                                <a href="enfrentamientos.php?id=${partida.id}" class="badge-dark">
                                    Enfrentamientos
                                </a>
                            </button>
                        </td>
                    </tr>
                    `
              });
              $('#partidas').html(plantilla);
            }
        });
    }

    $('#form-torneo').submit(function(e){
        let tipo = editar === false ? 'agregar': 'editar';
        const data = {
            id: $('#id-partida').val(),
            nombre: $('#partida').val(),
            fecha: $('#partida-fecha').val(),
            type: tipo
        }

        $.post('../includes/torneo-fun.php',data,function(response){
            console.log(response);
            $('#form-torneo').trigger('reset');
            obtenerPartidas();
        })
        e.preventDefault();
    })

    $(document).on('click','.editar',function(){
        let elemento = $(this)[0].parentElement.parentElement;
        const data = {
            id: $(elemento).attr('partidaId'),
            type: "buscar-id"
        }
        $.post('../includes/torneo-fun.php',data,function(response){
            const partida = JSON.parse(response);
            $('#id-partida').val(partida[0].id);
            $('#partida').val(partida[0].nombre);
            $('#partida-fecha').val(moment(partida[0].fecha).format('YYYY-MM-DDTHH:mm:SS'));
            editar = true;
        })
    });

});