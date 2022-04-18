<section>
    <br>
    <h1 class="titulos2">Actualizar Login</h1>
    <div class="container"> 
        <form action="updateDatos.php" method="post">
        <div class="container">
            <div class="form-group">
                <label class="label" for="contrasena"><h4>Id </h4></label>
                <input type="text" class="form-control" id="id" name="id" value="<?= $usuarioId->id ?>" readonly>
            </div>

            <div class="form-group">
                <label class="label" for="contrasena"><h4> Nueva Contraseña </h4></label>
                <input type="password" class="form-control" id="contrasena" name="contrasena">
            </div>
            <div class="form-group">
                <label class="label" for="usuario"><h4>Nuevo Usuario</h4></label>
                <input type="text" class="form-control" id="usuario" name="usuario" value="<?= $usuarioId->usuario ?>">
            </div>
            <br>
            <button type="submit" class="btn btn-secondary" id="btnCrear"><h5>Actualizar</h5></button>
        </div>     
        </form>
    </div>
    <br>
</section>