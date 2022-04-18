<section>
    <br>
    <h1 class="titulos2">Crear Ruta</h1>
    <div class="container">
        <form action="storeRuta.php" method="post">
        <div class="container">        
            <div class="form-group">
                <label class="label" for="capitalInicial"><h4>Capital Inicial </h4></label>
                <input type="text" class="form-control" id="capitalInicial" name="capitalInicial">
            </div> 
            <div class="form-group">
                <label class="label" for="fechaInicio"><h4>Fecha de Inicio </h4></label><br>
                <input type="text" class="form-control" id="fechaInicio" name="fechaInicio" value="<?= $fechaActual ?>" readonly>
            </div>
            <div class="form-group">
                <label class="label" for="usuario"><h4>Seleccione el Usuario</h4></label>
                <select class="form-control" id="usuario" name="usuario">
                    <?php foreach ($listaUsuarios as $usuario) { ?>
                        <option value="<?= $usuario->id ?>"><?= $usuario->nombre ?></option>
                    <?php } ?>
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-secondary" id="btnCrear"><h5>Crear</h5></button>
            <button style="margin-left: 41%" type="reset" class="btn btn-secondary"><h5>Restablecer</h5></button>
            </div>     
        </form>
    </div>
    <br>
</section>