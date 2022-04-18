<?php
	session_start();
	if (isset($_SESSION["usuario"])) 
	{
		require_once "../Model/Prestamo.php";

		$id = $_GET["id"];
		$prestamo = new Prestamo();
		$prestamosId = $prestamo->find($id);

		date_default_timezone_set("America/Bogota");
		$fecha = date( "Y/m/d" );

		require_once "../Views/Partials/vHeaderAll.php";
		require_once "../Views/Cuotas/vCreateCuo.php";
		require_once "../Views/Partials/vFooter.php";
	}
	else
	{
		header("location:../indexLogin.php");
	}
?>