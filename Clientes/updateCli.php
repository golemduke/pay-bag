<?php  
	require_once "../Model/Cliente.php";

	$clientes = new Cliente(); 
	$clientes->id=$_POST["id"];
	$clientes->cedula=$_POST["cedula"];
	$clientes->nombre=$_POST["nombre"];
	$clientes->apellido=$_POST["apellido"];
	$clientes->direccion=$_POST["direccion"];
	$clientes->telefono=$_POST["telefono"];
	$clientes->rutaId=$_POST["ruta"];
	if ($clientes->update()>0) {
	 		header("location:indexCli.php?accion=3");
	 } 
	 else{
	 		header("location:indexCli.php?accion=4");
	 }
?>