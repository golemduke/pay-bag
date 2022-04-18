<?php
    require_once "../Model/Prestamo.php";
    require_once "../Model/Ruta.php";

    $id = $_SESSION["id"];
    $ruta = new Ruta();
    $rutaId = $ruta->buscar($id);

    //$ruta->capitalActual = $rutaId->capitalActual - $_POST["monto"];
    $ruta->id = $rutaId->id;

    if ($ruta->agregarCapital() > 0) 
    {
        $ruta->capitalActual = $rutaId->capitalActual - $_POST["monto"];
        header("location:indexPres.php?accion=1&id=".$id);
    } 
    else
    {
        header("location:indexPres.php?accion=2");
    }

    $prestamo = new Prestamo();
    $prestamo->montoPrestamo = $_POST["monto"];
    $prestamo->interes = $_POST["interes"];
    $prestamo->fechaInicio = $_POST["FechaInicio"];
    $prestamo->fechaFin = $_POST["FechaFin"];
    $prestamo->cantCuotas = $_POST["cuotas"];
    $prestamo->clienteId = $_POST["cliente"];
    $prestamo->tipoPrestamoId = $_POST["tipo"];
    $prestamo->saldo = $_POST["monto"] + ($_POST["monto"] * $_POST["interes"] / 100);
    $prestamo->totalPrestamo = $_POST["monto"] + ($_POST["monto"] * $_POST["interes"] / 100);
    $prestamo->cuotasPendientes = $_POST['cuotas']; 
    $prestamo->valorCuota = $prestamo->totalPrestamo / $prestamo->cantCuotas;
    $prestamo->totalAbonado = 0;
    $prestamo->cuotasPagadas = 0;

    switch ($prestamo->tipoPrestamoId)
    {
        case 1:
            $prestamo->fechaFin = date( "Y/m/d", strtotime( $prestamo->fechaInicio."+ $prestamo->cantCuotas days" ));
            break;
        
        case 2:
            $prestamo->fechaFin = date( "Y/m/d", strtotime( $prestamo->fechaInicio."+ $prestamo->cantCuotas week" ));
            break;

        case 3:
            $dias = $prestamo->cantCuotas * 15;
            $prestamo->fechaFin = date( "Y/m/d", strtotime( $prestamo->fechaInicio."+ $dias days" ));
            break;

        case 4:
            $prestamo->fechaFin = date( "Y/m/d", strtotime( $prestamo->fechaInicio."+ $prestamo->cantCuotas months" ));
            break;
    }

    if($prestamo->save() > 0)
    {
        header("location:indexPres.php?accion=1");
    }
    else
    {
        header("location:indexPres.php?accion=2");
    }
?>