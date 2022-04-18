<?php  
	require_once "../Model/Usuario.php";

	$usuarios = new Usuario(); 
	$usuarios->id=$_POST["id"];
	$usuarios->cedula=$_POST["cedula"];
	$usuarios->nombre=$_POST["nombre"];
	$usuarios->apellido=$_POST["apellido"];
	$usuarios->telefono=$_POST["telefono"];
	$usuarios->contrasena=$_POST["contrasena"];
	$usuarios->tipo=$_POST["tipo"];
	$usuarios->usuario=$_POST["usuario"];	

	if ($usuarios->update()>0) {
	 		header("location:indexUsu.php?accion=3");
	 } 
	 else{
	 		header("location:indexUsu.php?accion=4");
	 }
?>