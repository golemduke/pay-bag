 <section>
    <br>
    <br>
    <br>

    <?php
    if ($_SESSION["tipo"] == 1){ ?>
    <div class="row" style="text-center;">
        <div class="col">
            <h1 style="text-align: center; color: white; font-size: 3.5em;">Administrador <?= $_SESSION['nombre']?> <?= $_SESSION['apellido'] ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col" style="margin-left: 10%;">
            <h1 style="color: #ffb001; text-align: right;">Prestamos Vigentes</h1><br>
        </div>
        <div class="col" style="margin-left: 20%;">
    
            <!-- <h1 style="color: #ffb001; text-align: right;">Capital General:</h1> -->
        </div>
        <div class="col">
           <!--  <h1 style="color: black;">  $<?= $capitalGeneral ?> </h1> -->
        </div>
    </div>    
    <?php } ?>

    <?php 
    if ($_SESSION["tipo"] == 2){ ?>
    <div class="row" style="text-center;">
        <div class="col">        
            <h1 class="titulos2">Recaudador <?= $_SESSION['nombre']?> <?= $_SESSION['apellido'] ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col" style="margin-left: 10%;">
            <h1 style="color: #ffb001; text-align: right;">Prestamos Vigentes</h1><br>
        </div>
        <div class="col" style="margin-left: 20%;">
            <!-- <h1 style="color: #ffb001; text-align: right;">Capital Ruta:</h1> -->
        </div>
        <div class="col">
            <!-- <h1 style="color: black;">  $<?= $capitalRuta ?> </h1> -->
        </div>
    </div>
    <?php } ?>
    <br>


    <div class="container">
        <?php 
        if ($_SESSION["tipo"] == 2){ ?>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Cliente</th>
                    <th>Total Deuda</th>
                    <th>Valor Cuota</th>
                    <th>Tipo </th>
                    <th>Pagado</th>
                    <th>Saldo Pendiente</th> 
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
                    <th><?= $prestamo1->Nom_Cliente ?> <?= $prestamo1->Apellido_Cliente ?></th>
                    <td> $<?= $prestamo1->totalPrestamo ?> </td>
                    <td> $<?= $prestamo1->valorCuota ?> </td>
                    <td><?= $prestamo1->Tipo_Prestamo ?></td>
                    <td> $<?= $prestamo1->totalAbonado ?> </td>
                    <td> $<?= $prestamo1->saldo ?></td>
                    <td><?= $prestamo1->cuotasPagadas ?></td>
                    <td><?= $prestamo1->cuotasPendientes ?></td>
                    <td><?= $prestamo1->fechaInicio ?></td>
                    <td><?= $prestamo1->fechaFin ?></td>
                    <td><a class="btn btn-primary" href="../Cuotas/createCuo.php?id=<?= $prestamo1->id ?>" role="button">Cuota</a></td>
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
                    <th>Cliente</th>
                    <th>Total Deuda</th>
                    <th>Valor Cuota</th>
                    <th>Tipo </th>
                    <th>Pagado</th>
                    <th>Saldo Pendiente</th> 
                    <th>Cuotas Pagas</th>
                    <th>Cuotas Ptes</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Recaudador</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listaPrestamos as $prestamo) { ?>
                    <?php 
                    if ($prestamo->saldo != 0){ ?>   
                <tr>
                    <th><?= $prestamo->id ?></th>
                    <th><?= $prestamo->Nombre_Cliente ?> <?= $prestamo->Apellido_Cliente ?></th>
                    <td> $<?= $prestamo->totalPrestamo ?> </td>
                    <td> $<?= $prestamo->valorCuota ?> </td>
                    <td><?= $prestamo->Tipo_Prestamo ?></td>
                    <td> $<?= $prestamo->totalAbonado ?> </td>
                    <td> $<?= $prestamo->saldo ?></td>
                    <td><?= $prestamo->cuotasPagadas ?></td>
                    <td><?= $prestamo->cuotasPendientes ?></td>
                    <td><?= $prestamo->fechaInicio ?></td>
                    <td><?= $prestamo->fechaFin ?></td>
                     <td><?= $prestamo->Recaudador ?> <?= $prestamo->Apellido_Recaudador ?></td>                   
                    <?php } ?>
                <?php } ?>
                </tr>
            </tbody>
        </table>
        <?php } ?>
</section>