<section>
    <br>
    <h1 class="titulos2">Actualizar Usuario</h1>
    <div class="container"> 
        <form action="updateUsu.php" method="post">
        <div class="container"> 
            <div class="form-group">
                <label class="label" for="id"><h4>Nº Id </h4></label>
                <input type="number" class="form-control" id="id" name="id" value="<?= $usuarioId->id ?>" readonly>
            </div>        
            <div class="form-group"> 
                <label class="label" for="cedula"><h4>Cédula </h4></label>
                <input type="text" class="form-control" id="cedula" name="cedula" value="<?= $usuarioId->cedula ?>">
            </div> 
            <div class="form-group">
                <label class="label" for="nombre"><h4>Nombre </h4></label><br>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $usuarioId->nombre ?>">
            </div>
            <div class="form-group">
                <label class="label" for="apellido"><h4>Apellido </h4></label>
                <input type="text" class="form-control" id="apellido" name="apellido" value="<?= $usuarioId->apellido ?>">
            </div>
            <div class="form-group">
                <label class="label" for="telefono"><h4>Telefono </h4></label>
                <input type="text" class="form-control" id="telefono" name="telefono" value="<?= $usuarioId->telefono ?>">
            </div> 
            <div class="form-group">
                <label class="label" for="contrasena"><h4>Contraseña </h4></label>
                <input type="number" class="form-control" id="contrasena" name="contrasena" value="<?= $usuarioId->contrasena ?>" readonly>
            </div>
            <div class="form-group">
                <label class="label" for="tipo"><h4>Tipo de Usuario</h4></label>
                <select class="form-control" id="tipo" name="tipo">
                    <?php foreach ($listaTipoUsu as $tipoUsu) { ?>
                        <option value="<?= $tipoUsu->id ?>" <?php if ($tipoUsu->id == $usuarioId->tipoUsuarioId){ ?>
                            selected <?php } ?>
                            ><?= $tipoUsu->nombre ?></option> 
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label class="label" for="usuario"><h4>Usuario </h4></label>
                <input type="text" class="form-control" id="usuario" name="usuario" value="<?= $usuarioId->usuario ?>">
            </div>
            <br>
            <button type="submit" class="btn btn-secondary" id="btnCrear"><h5>Actualizar</h5></button>
            </div>     
        </form>
    </div>
    <br>
</section>