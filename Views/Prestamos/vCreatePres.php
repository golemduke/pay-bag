<section>
    <br>
    <h1 class="titulos2">Registro de Préstamo</h1>
    <div class="container">
        <form action="storePres.php" method="post">
        <div class="container">         
            <div class="form-group">
                <label class="label" for="monto"><h4>Monto Préstamo</h4></label>
                <input type="number" class="form-control" id="monto" name="monto">
            </div> 
            <div class="form-group">
                <label class="label" for="interes"><h4>Interes %</h4></label><br>
                <input type="number" class="form-control" id="interes" name="interes">
            </div>
            <div class="form-group">
                <label class="label" for="FechaInicio"><h4>Fecha de Inicio </h4></label>
                <input type="text" class="form-control" id="FechaInicio" name="FechaInicio" value="<?= $fechaActual ?>" readonly>
            </div>
             <div class="form-group">
                <label class="label" for="cuotas"><h4>Cantidad de Cuotas</h4></label>
                <input type="number" class="form-control" id="cuotas" name="cuotas">
            </div>

            <?php 
            if ($_SESSION["tipo"] == 1){ ?>
             <div class="form-group">
                <label class="label" for="cliente"><h4>Seleccione el Cliente</h4></label>
                <select class="form-control" id="cliente" name="cliente">
                    <?php foreach ($listaClientes as $cliente) { ?>
                        <option value="<?= $cliente->id ?>"><?= $cliente->nombre ?> <?= $cliente->apellido ?></option>
                    <?php } ?>
                </select>
            </div>
            <?php } ?>

            <?php 
            if ($_SESSION["tipo"] == 2){ ?>
            <div class="form-group">
                <label class="label" for="cliente"><h4>Seleccione el Cliente</h4></label>
                <select class="form-control" id="cliente" name="cliente">
                    <?php foreach ($mostrarClientes as $cliente1) { ?>
                        <option value="<?= $cliente1->id ?>"><?= $cliente1->nombre ?> <?= $cliente1->apellido ?></option>
                    <?php } ?>
                </select>
            </div>
            <?php } ?>

            <div class="form-group">
                <label class="label" for="tipo"><h4>Tipo de Préstamo</h4></label>
                <select class="form-control" id="tipo" name="tipo">
                    <?php foreach ($listaTipos as $tipo) { ?>
                        <option value="<?= $tipo->id ?>"><?= $tipo->nombre ?></option>
                    <?php } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-secondary" id="btnCrear"><h5>Registrar</h5></button>
            <button style="margin-left: 41%" type="reset" class="btn btn-secondary"><h5>Restablecer</h5></button>
            </div>     
        </form>
    </div>
    <br>
</section>