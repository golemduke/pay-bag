<section>
    <br>
    <h1 class="titulos2">Registro de Gastos</h1>
    <div class="container">
        <form action="storeGas.php" method="post">
        <div class="container">         
            <div class="form-group">
                <label class="label" for="fecha"><h4>Fecha</h4></label>
                <input type="text" class="form-control" id="fecha" name="fecha" value="<?= $fecha ?>" readonly>
            </div> 
            <div class="form-group">
                <label class="label" for="valor"><h4>Valor</h4></label><br>
                <input type="number" class="form-control" id="valor" name="valor">
            </div>
            <div class="form-group">
                <label class="label" for="descripcion"><h4>Descripción</h4></label>
                <input type="text" class="form-control" id="descripcion" name="descripcion">
            </div>
            <?php 
            if ($_SESSION["tipo"] == 1){ ?>
            <div class="form-group">
                <label class="label" for="ruta"><h4>Seleccione una Ruta </h4></label>
                <select class="form-control" id="ruta" name="ruta">
                    <option selected>Seleccione una Ruta</option>
                    <?php foreach ($listaRutas as $ruta) { ?>
                        <option value="<?= $ruta->id ?>"> <?= $ruta->id ?></option>
                    <?php } ?>
                </select>
                    <br>
                <button type="submit" class="btn btn-secondary" id="btnCrear" ><h5>Agregar</h5></button>
                <button style="margin-left: 41%" type="reset" class="btn btn-secondary"><h5>Restablecer</h5></button>
            </div>
            <?php } ?>

            <?php 
            if ($_SESSION["tipo"] == 2){ ?>
            <div class="form-group">
                <label class="label" for="ruta"><h4>Id Ruta </h4></label>
                    <input type="number" class="form-control" id="ruta" name="ruta" value="<?= $rutaId->Ruta_N° ?>" readonly>
                    <br>
                <button type="submit" class="btn btn-secondary" id="btnCrear" ><h5>Agregar</h5></button>
                <button style="margin-left: 41%" type="reset" class="btn btn-secondary"><h5>Restablecer</h5></button>
            </div>
            <?php } ?>     
        </form>
    </div>
    <br>
</section>