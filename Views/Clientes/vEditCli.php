<section>
    <br>
    <h1 class="titulos2">Actualizar Cliente</h1>
    <div class="container"> 
        <form action="updateCli.php" method="post">
        <div class="container"> 
            <div class="form-group">
                <label class="label" for="id"><h4>Nº Id </h4></label>
                <input type="number" class="form-control" id="id" name="id" value="<?= $clienteId->id ?>" readonly>
            </div>        
            <div class="form-group"> 
                <label class="label" for="cedula"><h4>Cédula </h4></label>
                <input type="text" class="form-control" id="cedula" name="cedula" value="<?= $clienteId->cedula ?>">
            </div> 
            <div class="form-group">
                <label class="label" for="nombre"><h4>Nombre </h4></label><br>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $clienteId->nombre ?>">
            </div>
            <div class="form-group">
                <label class="label" for="apellido"><h4>Apellido </h4></label>
                <input type="text" class="form-control" id="apellido" name="apellido" value="<?= $clienteId->apellido ?>">
            </div>
            <div class="form-group">
                <label class="label" for="direccion"><h4>Dirección </h4></label>
                <input type="text" class="form-control" id="direccion" name="direccion" value="<?= $clienteId->direccion ?>">
            </div> 
            <div class="form-group">
                <label class="label" for="telefono"><h4>Teléfono </h4></label>
                <input type="number" class="form-control" id="telefono" name="telefono" value="<?= $clienteId->telefono ?>">
            </div>
            <div class="form-group">
                <label class="label" for="ruta"><h4>Seleccione la Ruta</h4></label>
                <select class="form-control" id="ruta" name="ruta">
                    <option>Seleccione una Ruta</option>
                    <?php foreach ($listaRutas as $ruta) { ?>
                        <option value="<?= $ruta->id ?>" <?php if ($ruta->id == $clienteId->rutasId){ ?>
                            selected <?php } ?>
                        ><?= $ruta->id ?></option>

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