$(document).ready(function(){
    obtenerJugadores();
    obtenerPersonaje();
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
});
