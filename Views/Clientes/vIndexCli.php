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
    <h1 class="titulos2">Clientes</h1> 
    <br>
    <div class="container">
        <?php 
        if ($_SESSION["tipo"] == 2){ ?>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Cédula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Ruta</th>
                    <th>Usuario</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mostrarClientes as $cliente1) { ?>
                <tr>
                    <th><?= $cliente1->id ?></th>
                    <td><?= $cliente1->cedula ?></td>
                    <td><?= $cliente1->nombre ?></td>
                    <td><?= $cliente1->apellido ?></td>
                    <td><?= $cliente1->direccion ?></td>
                    <td><?= $cliente1->telefono ?></td>
                    <td><?= $cliente1->Ruta_N° ?></td>
                    <td><?= $cliente1->Usuario ?></td>
                    <td>
                        <a class="btn btn-warning" href="editCli.php?id=<?= $cliente1->id ?>" role="button">Modificar</a>
                        <a class="btn btn-danger" href="destroycli.php?id=<?= $cliente1->id ?>" role="button">Eliminar</a>
                    </td>
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
                    <th>Cédula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Ruta</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listaClientes as $cliente) { ?>
                <tr>
                    <th><?= $cliente->id ?></th>
                    <td><?= $cliente->cedula ?></td>
                    <td><?= $cliente->nombre ?></td>
                    <td><?= $cliente->apellido ?></td>
                    <td><?= $cliente->direccion ?></td>
                    <td><?= $cliente->telefono ?></td>
                    <td><?= $cliente->Ruta_N° ?></td>
                    <td>
                        <a class="btn btn-warning" href="editCli.php?id=<?= $cliente->id ?>" role="button">Modificar</a>
                        <a class="btn btn-danger" href="destroycli.php?id=<?= $cliente->id ?>" role="button">Eliminar</a>
                    </td>
                <?php } ?>
                </tr>
            </tbody>
        </table>    
        <?php } ?>
    </div>
    <br>
</section>