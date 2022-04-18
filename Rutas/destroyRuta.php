<?php  
	require_once "../model/Ruta.php";

	$ruta = new Ruta();
	$ruta->id=$_GET["id"];
	if ($ruta->delete()>0) 
	{
 		header("location:indexRuta.php?accion=5");
 	} 
 	else
	{
 		header("location:indexRuta.php?accion=6");
 	}
?>