<?php
	require_once "../Model/AgregarCapital.php";
	require_once "../Model/Ruta.php";

	$id = $_POST["ruta"];
	$ruta = new Ruta();
	$rutaId = $ruta->find($id);

	$ruta->capitalActual = $rutaId->capitalActual + $_POST["valor"];
	$ruta->id = $rutaId->id;

	


	if ($ruta->agregarCapital() > 0) 
	{

	 	header("location:../Rutas/indexRuta.php?accion=7&id=".$id);
	} 
	else
	{
	 	header("location:../Rutas/indexRuta.php?accion=8");
	}

	$agregarCapital = new AgregarCapital();
	$agregarCapital->fecha = $_POST["fecha"];
	$agregarCapital->valor = $_POST["valor"];
	$agregarCapital->rutaId = $_POST["ruta"];

	if($agregarCapital->save() > 0) 
	{
		header("location:../Rutas/indexRuta.php?accion=7");
	}
	else
	{
		header("location:../Rutas/indexRuta.php?accion=8");
	}

?>