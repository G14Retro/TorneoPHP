<?php
    include_once('../recursos/header.php');
?>


<body id="bodyRegistro">
    <div class="model-dialog">
        <div class="col-md-6 main-section mt-5">
            <div class=" modal-header bg-dark">
                <h4 class="informacion">Información de Registro</h4>
            </div>
            <div class="contenedor modal-content text-danger">
            
                <form class="col-12" action="../includes/registrar.php" method="POST" id="formRegistro">
                    <div class="row">
                        <div class="col">
                            <label class="form-label" form="tipo_documento">Tipo de Documento</label>
                            <select id="tipo_documento" class="form-control" name="tipo_documento" required>
                                <option >Seleccione una opción</option>
                                <option value="cc">Cedula de Ciudadanía</option>
                                <option value="ce">Cedula de Extrangería</option>
                                <option value="ti">Tarjeta de Identidad</option>
                                <option value="pp">Pasaporte</option>
                            </select>
                        </div>
                        <div class="col">
                            <label class="form-label">Número de Identificación</label>
                            <input type="text" class="form-control" name="documento" id="documento"
                            placeholder="Ingrese su Numero de Identifiación" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label">Nombres</label>
                            <input type="text" class="form-control" placeholder="Ingrese sus Nombres"
                            name="nombre" id="nombre" required>
                        </div>
                        <div class="col">
                            <label class="form-label">Apellidos</label>
                            <input type="text" class="form-control" placeholder="Ingrese sus Apellidos"
                            name="apellido" id="apellido" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label">Fecha de Nacimiento</label>
                            <input type="date" class="form-control"
                            name="fecha_nacimiento" id="fecha_nacimiento" required>
                        </div>
                        <div class="col">
                            <label class="form-label">NickName</label>
                            <input type="text" class="form-control" placeholder="Ingrese su NickName de Juego"
                            name="nickname" id="nickname" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label">Correo</label>
                            <input type="mail" class="form-control" placeholder="Ingrese un Correo Electronico"
                            name="correo" id="correo" required>
                        </div>
                        <div class="col">
                            <label class="form-label">Confirmar Correo</label>
                            <input type="mail" class="form-control" placeholder="Confirme su Correo Electronico"
                            required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label">Contraseña</label>
                            <input type="password" class="form-control" placeholder="Ingrese una Contraseña"
                            name="clave" id="clave"
                            required>
                        </div>
                        <div class="col">
                            <label class="form-label">Confirmar Contraseña</label>
                            <input type="password" class="form-control" placeholder="Confirme su Contraseña"
                            required>
                        </div>
                    </div>
                    <br>
                    <div class="botones">
                        <div class="abs-center">
                        <button type="submit" class="boton1 btn btn-warning font-weight-bold" name="registrarse">Registrarse</button>
                        <a href="login.php" class="boton2 btn btn-outline-secondary text-dark font-weight-bold" >Regresar</a>
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