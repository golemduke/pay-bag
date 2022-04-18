<?php  
	require_once "../model/Cliente.php";

	$cliente = new Cliente();
	$cliente->id=$_GET["id"];
	if ($cliente->delete()>0) {
	 		header("location:indexCli.php?accion=5");
	 } 
	 else{
	 		header("location:indexCli.php?accion=6");
	 }
?>