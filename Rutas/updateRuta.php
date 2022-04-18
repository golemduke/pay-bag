<?php  
	require_once "../Model/Ruta.php";

	$rutas = new Ruta();
	$rutas->id=$_POST["id"];
	$rutas->capitalInicial=$_POST["capitalInicial"];
	$rutas->fechaInicio=$_POST["fechaInicio"];
	$rutas->usuarioId=$_POST["usuario"];
	
	if ($rutas->update()>0) 
	{
 		header("location:indexRuta.php?accion=3");
	} 
	 else
	{
 		header("location:indexRuta.php?accion=4");
	}
?>