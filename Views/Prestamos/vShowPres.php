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
    <h1 class="titulos2" >Detalle Prestamo Nº: <?= $prestamosId->id?></h1>
    <br>
    <div class="container">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Interés</th>
                    <th>Total a Pagar</th>
                    <th>Valor Cuota</th>
                    <th>Cant. Cuota</th>
                    <th>Saldo</th>
                    <th>Total Abonado</th>
                    <th>Tipo Préstamo</th>
                    <th>Cuotas Pendientes</th>
                    <th>Cuotas Pagas</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                </tr>
            </thead>
            <tbody> 
                <tr> 
                    <td><?= $prestamosId->Nombre_Cliente ?> <?= $prestamosId->Apellido_Cliente ?></td>
                    <td>$<?= $prestamosId->montoPrestamo ?></td>
                    <td><?= $prestamosId->interes ?> %</td>
                    <td>$<?= $prestamosId->totalPrestamo ?></td>
                    <td>$<?= $prestamosId->valorCuota ?> </td>
                    <td><?= $prestamosId->cantCuotas ?> </td>
                    <td>$<?= $prestamosId->saldo ?></td>
                    <td>$<?= $prestamosId->totalAbonado ?></td>
                    <td><?= $prestamosId->Tipo_Prestamo ?></td>
                    <td><?= $prestamosId->cuotasPendientes ?></td>
                    <td><?= $prestamosId->cuotasPagadas ?></td>
                    <td><?= $prestamosId->fechaInicio ?></td>
                    <td><?= $prestamosId->fechaFin ?></td> 
                </tr>
            </tbody>
        </table>
        <a href="indexPres.php" class="btn btn-secondary">Volver a Prestamos</a>    
    </div>
    <br>
</section>