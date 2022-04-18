<section>
    <br>
    <h1 class="titulos2">Formulario de Registro</h1>
    <div class="container">
        <form action="storeUsu.php" method="post">
        <div class="container">         
            <div class="form-group">
                <label class="label" for="cedula"><h4>Cédula </h4></label>
                <input type="text" class="form-control" id="cedula" name="cedula">
            </div> 
            <div class="form-group">
                <label class="label" for="nombre"><h4>Nombre </h4></label><br>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="form-group">
                <label class="label" for="apellido"><h4>Apellido </h4></label>
                <input type="text" class="form-control" id="apellido" name="apellido">
            </div>
            <div class="form-group">
                <label class="label" for="telefono"><h4>Teléfono </h4></label>
                <input type="number" class="form-control" id="telefono" name="telefono">
            </div>
             <div class="form-group">
                <label class="label" for="contrasena"><h4>Ingrese una contraseña para el inicio de sesión</h4></label>
                <input type="password" class="form-control" id="contrasena" name="contrasena">
            </div>
             <div class="form-group">
                <label class="label" for="tipo"><h4>Tipo de Usuario</h4></label>
                <select class="form-control" id="tipo" name="tipo">
                    <?php foreach ($listaTiposUsu as $tipoUsu) { ?>
                        <option value="<?= $tipoUsu->id ?>"><?= $tipoUsu->nombre ?></option> 
                    <?php } ?>
                </select>
            </div>
             <div class="form-group">
                <label class="label" for="usuario"><h4>Ingrese un usuario para iniciar sesión </h4></label>
                <input type="text" class="form-control" id="usuario" name="usuario">
            </div>
            <button type="submit" class="btn btn-secondary" id="btnCrear"><h5>Registrar</h5></button>
            <button style="margin-left: 41%" type="reset" class="btn btn-secondary"><h5>Restablecer</h5></button>
            </div>     
        </form>
    </div>
    <br>
</section>