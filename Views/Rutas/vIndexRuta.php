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
    <h1 class="titulos2">Rutas</h1>
    <br>
    <div class="container">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Capital Inicial</th>
                    <th>Capital Actual</th>
                    <th>Gastos</th>
                    <th>Fecha inicio</th>
                    <th>Usuario</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listaRutas as $ruta) { ?>
                <tr>
                    <th><?= $ruta->id ?></th>
                    <td>$<?= $ruta->capitalInicial ?></td>
                    <td>$<?= $ruta->capitalActual ?></td>
                    <td>$<?= $gastoTotal ?></td>
                    <td><?= $ruta->fechaInicio ?></td>
                    <td><?= $ruta->nom_usuario ?></td>
                    <td>
                        <a class="btn btn-primary" href="../AgregarCapital/createCapi.php?id=<?= $ruta->id ?>" role="button">Agregar Capital</a>
                        <a class="btn btn-warning" href="editRuta.php?id=<?= $ruta->id ?>" role="button">Modificar</a>
                        <a class="btn btn-danger" href="destroyRuta.php?id=<?= $ruta->id ?>" role="button">Eliminar</a>
                    </td>
                <?php } ?>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
</section>