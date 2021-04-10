$(document).ready(function(){
    let editar = false;
    let idPartida = location.search.substr(4);
    obtenerJugadores();
    obtenerPersonaje();
    obtenerEnfrentamientos();
    $('#jugador').click(function(){
        obtenerOponente();
    })
    obtenerResultado();
    function obtenerJugadores() {
        $.ajax({
            url: '../includes/jugadores.php',
            type:'GET',
            success: function(response){
               const jugadores = JSON.parse(response);
               jugadores.forEach(jugador => {
                $('#jugador').append("<option value='"+jugador.id+"'>"+jugador.nickname+"</option>");
               });
            }
        })
    }

    function obtenerPersonaje() {
        $.ajax({
            url: '../includes/personajes.php',
            type:'GET',
            success: function(response){
                const personajes = JSON.parse(response);
                personajes.forEach(personaje => {
                    $('#personaje').append("<option value='"+personaje.id+"'>"+personaje.nombre+"</option>"); 
                });
                
            }
        })
    }

    function obtenerOponente() {
        const data = {
            id : $('#jugador').val(),
            type: 'oponente'
        } 
        $.post('../includes/enfrentamiento.php',data,function(response){
            const oponentes = JSON.parse(response);
            $('#oponente').html('<option>Seleccionar</option>');
            oponentes.forEach(oponenete => {
                $('#oponente').append("<option value='"+oponenete.id+"'>"+oponenete.nickname+"</option>");
            });
        })
    }

    function obtenerResultado() {
        const data = {
            type: 'resultado'
        }
        $.post('../includes/enfrentamiento.php',data,function(response){
            const resultados = JSON.parse(response);
            $('#resultado').html('<option>Seleccionar</option>');
            resultados.forEach(resultado => {
                $('#resultado').append("<option value='"+resultado.id+"'>"+resultado.nombre+"</option>");
            });
        })
    }

    function obtenerEnfrentamientos() {
        const data = {
            id: idPartida,
            type: 'enfrentamientos'
        }
        $.post('../includes/enfrentamiento.php',data,function(response){
            const enfrentamientos = JSON.parse(response);
            let plantilla = '';
            enfrentamientos.forEach(enfrentamiento => {
                plantilla += `
                    <tr enfrentamientoId="${enfrentamiento.id}">
                        <td>${enfrentamiento.jugador}</td>
                        <td>${enfrentamiento.personaje}</td>
                        <td>${enfrentamiento.oponente}</td>
                        <td>${enfrentamiento.ronda}</td>
                        <td>${enfrentamiento.combates}</td>
                        <td>${enfrentamiento.resultado}</td>
                        <td>
                            <button class="editar btn btn-outline-primary">
                                Editar
                            </button>
                        </td>
                    </tr>
                    `
              });
              $('#partidas').html(plantilla);
        })
    }

    $(document).on('click','.editar',function(){
        if (confirm('¿Desea editar este registro?')) {
            let elemento = $(this)[0].parentElement.parentElement;
            const data = {
                id : $(elemento).attr('enfrentamientoId'),
                type: "busqueda"
            }
            $.post('../includes/enfrentamiento.php',data,function(response){
                const enfrentamiento = JSON.parse(response);
                $('#enfrentamientoId').val(enfrentamiento[0].id);
                $('#jugador').val(enfrentamiento[0].jugador);
                $('#personaje').val(enfrentamiento[0].personaje);
                obtenerOponente();
                $('#oponente').val(enfrentamiento[0].oponente);
                $('#ronda').val(enfrentamiento[0].ronda);
                $('#combate').val(enfrentamiento[0].combate);
                $('#resultado').val(enfrentamiento[0].resultado);
                editar = true;
            })
        }
    })

    $('#enfrentamiento-form').submit(function(e){
        let tipo = editar === false ? 'agregar': 'editar';
        const data = {
            id: $('#enfrentamientoId').val(),
            idPartida: idPartida,
            jugador: $('#jugador').val(),
            personaje: $('#personaje').val(),
            oponente: $('#oponente').val(),
            ronda: $('#ronda').val(),
            combate: $('#combate').val(),
            resultado: $('#resultado').val(),
            type: tipo
        }

        $.post('../includes/enfrentamiento.php',data,function(response){
            console.log(response);
            $('#enfrentamiento-form').trigger('reset');
            obtenerEnfrentamientos();
        })
        e.preventDefault();
    })

});
