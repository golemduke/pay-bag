<?php  
	require_once "../model/Usuario.php";

	$usuario = new Usuario();
	$usuario->id=$_GET["id"];
	if ($usuario->delete()>0) {
	 		header("location:indexUsu.php?accion=5");
	 } 
	 else{
	 		header("location:indexUsu.php?accion=6");
	 }
?>