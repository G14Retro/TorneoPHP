<?php
    include_once('../recursos/header.php');
?>


<body id="bodyRegistro">
    <div class="model-dialog">
        <div class="col-md-6 main-section mt-5">
            <div class="modal-header bg-dark text-center">
                <h4 class="text-white">Información de Registro</h4>
            </div>
            <div class="modal-content text-danger">
                <form class="col-12" action="../includes/registrar.php" method="POST">
                    <div class="row">
                        <div class="col">
                            <label class="form-label" form="tipo_documento">Tipo de Documento</label>
                            <select id="tipo_documento" class="form-control" name="tipo_documento">
                                <option value="index" selected>Seleccione una opción</option>
                                <option value="cc" selected>Cedula de Ciudadanía</option>
                                <option value="ce" selected>Cedula de Extrangería</option>
                                <option value="ti" selected>Tarjeta de Identidad</option>
                                <option value="pp" selected>Pasaporte</option>
                            </select>
                        </div>
                        <div class="col">
                            <label class="form-label">Número de Identificación</label>
                            <input type="text" class="form-control" name="documento" id="documento"
                            placeholder="Ingrese su Numero de Identifiación" require>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label">Nombres</label>
                            <input type="text" class="form-control" placeholder="Ingrese sus Nombres"
                            name="nombre" id="nombre">
                        </div>
                        <div class="col">
                            <label class="form-label">Apellidos</label>
                            <input type="text" class="form-control" placeholder="Ingrese sus Apellidos"
                            name="apellido" id="apellido">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label">Fecha de Nacimiento</label>
                            <input type="date" class="form-control"
                            name="fecha_nacimiento" id="fecha_nacimiento">
                        </div>
                        <div class="col">
                            <label class="form-label">NickName</label>
                            <input type="text" class="form-control" placeholder="Ingrese su NickName de Juego"
                            name="nickname" id="nickname">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label">Correo</label>
                            <input type="mail" class="form-control" placeholder="Ingrese un Correo Electronico"
                            name="correo" id="correo">
                        </div>
                        <div class="col">
                            <label class="form-label">Confirmar Correo</label>
                            <input type="mail" class="form-control" placeholder="Confirme su Correo Electronico">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label">Contraseña</label>
                            <input type="password" class="form-control" placeholder="Ingrese una Contraseña"
                            name="clave" id="clave">
                        </div>
                        <div class="col">
                            <label class="form-label">Confirmar Contraseña</label>
                            <input type="password" class="form-control" placeholder="Confirme su Contraseña">
                        </div>
                    </div>
                    <br>
                    <div class="container">
                        <div class="abs-center">
                        <button type="submit" class="btn btn-primary" name="registrarse">Registrarse</button>
                        <button type="submit" class="btn btn-danger" name="regresar">Regresar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<?php
    include_once('../recursos/footer.php');
?>