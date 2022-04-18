<section>
     <br>
    <br>
    <div class="container">
     <?php if (isset($_GET["accion"])) { ?>
            <div class="<?= $clase ?>" role="alert">
                <?= $mensaje ?>
            </div>
        <?php } ?>
    </div>
    <h1 class="titulos2">Gastos</h1> 
    <br>
    <div class="container">
        <?php 
        if ($_SESSION["tipo"] == 2){ ?>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Fecha</th>
                    <th>Valor</th>
                    <th>Descripción</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listaGastos as $gastos) { ?>
                <tr>
                    <th><?= $gastos->id ?></th>
                    <td><?= $gastos->fecha ?></td>
                    <td>$<?= $gastos->valor ?></td>
                    <td><?= $gastos->descripcion ?></td>
                <?php } ?>
                </tr>
            </tbody>
        </table> 
        <?php } ?>

        <?php 
        if ($_SESSION["tipo"] == 1){ ?>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Fecha</th>
                    <th>Valor</th>
                    <th>Descripción</th>
                    <th>Ruta N°</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listaGastos as $gastos) { ?>
                <tr>
                    <th><?= $gastos->id ?></th>
                    <td><?= $gastos->fecha ?></td>
                    <td>$<?= $gastos->valor ?></td>
                    <td><?= $gastos->descripcion ?></td>
                    <td><?= $gastos->rutaId ?></td>
                <?php } ?>
                </tr>
            </tbody>
        </table>    
        <?php } ?>
    </div>
    <br>
</section>