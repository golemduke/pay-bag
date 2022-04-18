<section>
    <br>
    <h1 class="titulos2">Actualizar Ruta</h1>
    <div class="container"> 
        <form action="updateRuta.php" method="post">
        <div class="container">
            <div class="form-group">
                <label class="label" for="id"><h4>Nº Id </h4></label>
                <input type="number" class="form-control" id="id" name="id" value="<?= $rutaId->id ?>" readonly>
            </div>        
            <div class="form-group">
                <label class="label" for="capitalInicial"><h4>Capital Inicial </h4></label>
                <input type="text" class="form-control" id="capitalInicial" name="capitalInicial" value="<?= $rutaId->capitalInicial ?>">
            </div> 
            <div class="form-group">
                <label class="label" for="fechaInicio"><h4>Fecha de Inicio </h4></label><br>
                <input type="date" class="form-control" id="fechaInicio" name="fechaInicio" value="<?= $rutaId->fechaInicio ?>">
            </div>
            <div class="form-group">
                <label class="label" for="usuario"><h4>Seleccione el Usuario</h4></label>
                <select class="form-control" id="usuario" name="usuario">
                    <?php foreach ($listaUsuario as $usuario) { ?>
                        <option value="<?= $usuario->id ?>" <?php if ($usuario->id == $rutaId->usuariosId){ ?>
                            selected <?php } ?>
                        ><?= $usuario->nombre ?></option>
                    <?php } ?>
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-secondary" id="btnCrear"><h5>Actualizar</h5></button>
            </div>     
        </form>
    </div>
    <br>
</section>