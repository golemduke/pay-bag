<?php
	require_once "../Model/Gastos.php";
	require_once "../Model/Ruta.php";

	$id = $_POST["ruta"];
	$ruta = new Ruta();
	$rutaId = $ruta->find($id);

	$ruta->gastos = 0;
	$ruta->capitalActual = $rutaId->capitalActual - $_POST['valor'];
	$ruta->id = $rutaId->id;

	if ($ruta->agregarGasto() > 0) 
	{
	 	header("location:../Gastos/indexGas.php?accion=1&id=".$id);
	} 
	else
	{
	 	header("location:../Gastos/indexGas.php?accion=2");
	}

	$gastos = new Gastos();
	$gastos->fecha = $_POST["fecha"];
	$gastos->valor = $_POST["valor"];
	$gastos->descripcion = $_POST["descripcion"];
	$gastos->rutaId = $_POST["ruta"];

	if($gastos->save() > 0) 
	{
		header("location:../Gastos/indexGas.php?accion=1");
	}
	else
	{
		header("location:../Gastos/indexGas.php?accion=2");
	}

?>