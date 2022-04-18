<section>
    <br>
    <h1 class="titulos2">Crear Cliente</h1>
    <div class="container">
        <form action="storeCli.php" method="post">
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
                <label class="label" for="direccion"><h4>Dirección </h4></label>
                <input type="text" class="form-control" id="direccion" name="direccion">
            </div>
            <div class="form-group">
                <label class="label" for="telefono"><h4>Teléfono </h4></label>
                <input type="number" class="form-control" id="telefono" name="telefono">
            </div>

            <?php 
            if ($_SESSION["tipo"] == 2){ ?>
            <div class="form-group">
                <label class="label" for="valor"><h4>Ruta</h4></label><br>
                <input type="number" class="form-control" id="ruta" name="ruta" value="<?= $rutaId->Ruta_N° ?>" readonly>
            </div>
            <?php } ?>

            <?php 
            if ($_SESSION["tipo"] == 1){ ?>
            <div class="form-group">
                <label class="label" for="ruta"><h4>Seleccione la Ruta</h4></label>
                <select class="form-control" id="ruta" name="ruta">
                    <option selected>Seleccione una Ruta</option>
                    <?php foreach ($listaRutas as $ruta) { ?>
                        <option value="<?= $ruta->id ?>"> <?= $ruta->id ?></option>
                    <?php } ?>
                </select>
            </div>
            <?php } ?> 
            
            <br>
            <button type="submit" class="btn btn-secondary" id="btnCrear"><h5>Crear</h5></button>
            <button style="margin-left: 41%" type="reset" class="btn btn-secondary"><h5>Restablecer</h5></button>
            </div>     
        </form>
    </div>
    <br>
</section>