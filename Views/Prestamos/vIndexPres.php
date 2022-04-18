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
    <h1 class="titulos2">Prestamos</h1>
    <br>
    <div class="container">
        <?php 
        if ($_SESSION["tipo"] == 2){ ?>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Ruta</th>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Interes</th>
                    <th>Total Deuda</th>
                    <th>Cuota</th>
                    <th>Cant Cuotas</th>
                    <th>Tipo </th>
                    <th>Pagado</th>
                    <th>Saldo</th> 
                    <th>Cuotas Pagas</th>
                    <th>Cuotas Ptes</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mostrarPrestamos as $prestamo1) { ?>
                    <?php 
                    if ($prestamo1->saldo != 0){ ?>   
                <tr>
                    <th><?= $prestamo1->id ?></th>
                    <td><?= $prestamo1->Ruta_N° ?></td>
                    <th><?= $prestamo1->Nom_Cliente ?> <?= $prestamo1->Apellido_Cliente ?></th>
                    <td> $<?= $prestamo1->montoPrestamo ?></td>
                    <td><?= $prestamo1->interes ?> %</td>
                    <td> $<?= $prestamo1->totalPrestamo ?> </td>
                    <td> $<?= $prestamo1->valorCuota ?> </td>
                    <td><?= $prestamo1->cantCuotas ?></td>
                    <td><?= $prestamo1->Tipo_Prestamo ?></td>
                    <td> $<?= $prestamo1->totalAbonado ?> </td>
                    <td> $<?= $prestamo1->saldo ?></td>
                    <td><?= $prestamo1->cuotasPagadas ?></td>
                    <td><?= $prestamo1->cuotasPendientes ?></td>
                    <td><?= $prestamo1->fechaInicio ?></td>
                    <td><?= $prestamo1->fechaFin ?></td>
                    <td><a class="btn btn-primary" href="../Cuotas/createCuo.php?id=<?= $prestamo1->id ?>" role="button">Cuota</a></td>
                    <td><a class="btn btn-success" href="showPres.php?id=<?= $prestamo1->id ?>" role="button">Ver</a></td> 
                    <?php } ?>
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
                    <th>Ruta</th>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Interes</th>
                    <th>Total Deuda</th>
                    <th>Cuota</th>
                    <th>Cant Cuotas</th>
                    <th>Tipo </th>
                    <th>Pagado</th>
                    <th>Saldo</th> 
                    <th>Cuotas Pagas</th>
                    <th>Cuotas Ptes</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                </tr>
            </thead>
            <tbody>
            <tbody>
                <?php foreach ($listaPrestamos as $prestamo) { ?>
                    <?php 
                    if ($prestamo->saldo != 0){ ?>
                <tr>
                    <th><?= $prestamo->id ?></th>
                    <td><?= $prestamo->Ruta_N° ?></td>
                    <th><?= $prestamo->Nombre_Cliente ?> <?= $prestamo->Apellido_Cliente ?></th>
                    <td> $<?= $prestamo->montoPrestamo ?></td>
                    <td><?= $prestamo->interes ?> %</td>
                    <td> $<?= $prestamo->totalPrestamo ?> </td>
                    <td> $<?= $prestamo->valorCuota ?> </td>
                    <td><?= $prestamo->cantCuotas ?></td>
                    <td><?= $prestamo->Tipo_Prestamo ?></td>
                    <td> $<?= $prestamo->totalAbonado ?> </td>
                    <td> $<?= $prestamo->saldo ?></td>
                    <td><?= $prestamo->cuotasPagadas ?></td>
                    <td><?= $prestamo->cuotasPendientes ?></td>
                    <td><?= $prestamo->fechaInicio ?></td>
                    <td><?= $prestamo->fechaFin ?></td>
                    <td><?= $prestamo->Recaudador ?> <?= $prestamo->Apellido_Recaudador ?></td>
                    <td><a class="btn btn-success" href="showPres.php?id=<?= $prestamo->id ?>" role="button">Ver</a></td> 
                    <?php } ?>
                 <?php } ?>
                </tr>
            </tbody>
        </table>
        <?php } ?>
    </div>
    <br>
</section>


               