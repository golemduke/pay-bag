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
    <h1 class="titulos2">Usuarios</h1>
    <br>
    <div class="container">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Cédula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Teléfono</th>
                    <th>Ruta</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listaUsuarios as $usuario1) { ?>
                <tr>
                    <th><?= $usuario1->id ?></th>
                    <td><?= $usuario1->cedula ?></td>
                    <td><?= $usuario1->nombre ?></td>
                    <td><?= $usuario1->apellido ?></td>
                    <td><?= $usuario1->telefono ?></td>
                    <td><?= $usuario1->ruta_id ?></td>
                    <td>
                        <a class="btn btn-warning" href="editUsu.php?id=<?= $usuario1->id ?>" role="button">Modificar</a>
                        <a class="btn btn-danger" href="destroyUsu.php?id=<?= $usuario1->id ?>" role="button">Eliminar</a>
                    </td>
                <?php } ?>
                </tr>
            </tbody>
        </table>    
    </div>
    <br>
</section>