<?php
	require_once "../Model/Ruta.php";

	$ruta = new Ruta();
	$ruta->capitalInicial = $_POST["capitalInicial"];
	$ruta->capitalActual = $_POST["capitalInicial"];
	$ruta->fechaInicio = $_POST["fechaInicio"];
	$ruta->usuarioId = $_POST["usuario"];

	if($ruta->save() > 0)
	{
		header("location:indexRuta.php?accion=1");
	}
	else
	{
		header("location:indexRuta.php?accion=2");
	}
?>