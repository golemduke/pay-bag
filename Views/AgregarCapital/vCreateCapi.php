<section>
    <br>
    <h1 class="titulos2">Registro de Capital</h1>
    <div class="container">
        <form action="storeCapi.php" method="post">
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
                <label class="label" for="ruta"><h4>Id Ruta </h4></label>
                    <input type="number" class="form-control" id="ruta" name="ruta" value="<?= $rutaId->id ?>" readonly>
                    <br>
                <button type="submit" class="btn btn-secondary" id="btnCrear" ><h5>Agregar</h5></button>
                <button style="margin-left: 41%" type="reset" class="btn btn-secondary"><h5>Restablecer</h5></button>
            </div>     
        </form>
    </div>
    <br>
</section>