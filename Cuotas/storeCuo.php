<?php
	require_once "../Model/Cuota.php";
	require_once "../Model/Prestamo.php";

	$id = $_POST["prestamo"];
	$prestamo = new Prestamo();
	$prestamoId = $prestamo->find($id);
	$prestamo->saldo = $prestamoId->saldo - $_POST['valor'];

	$valorCuota =  $prestamoId->totalPrestamo / $prestamoId->cantCuotas;
	$prestamo->cuotasPendientes = $prestamo->saldo / $valorCuota;
	$prestamo->valorCuota = $valorCuota;

	$prestamo->totalAbonado = $prestamoId->totalAbonado + $_POST['valor'];
	$prestamo->cuotasPagadas = $prestamoId->cantCuotas - $prestamo->cuotasPendientes;
	$prestamo->id = $prestamoId->id;


	if ($prestamo->agregarCuota() > 0) 
	{

	 	header("location:showPres.php?accion=1&id=".$id);
	} 
	else
	{
	 	header("location:showPres.php?accion=2");
	}

	$cuota = new Cuota();
	$cuota->fecha = $_POST["fecha"];
	$cuota->valor = $_POST["valor"];
	$cuota->prestamoId = $_POST["prestamo"];

	if($cuota->save() > 0) 
	{
		header("location:../Prestamos/showPres.php?accion=1&id=".$id);
	}
	else
	{
		header("location:../Prestamos/showPres.php?accion=2");
	}

?>
