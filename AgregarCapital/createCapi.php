<?php
	session_start();
	if (isset($_SESSION["usuario"])) 
	{
		require_once "../Model/Ruta.php";

		$id = $_GET["id"];
		$ruta = new Ruta();
		$rutaId = $ruta->find($id);

		date_default_timezone_set("America/Bogota");
		$fecha = date( "Y/m/d" );

		require_once "../Views/Partials/vHeaderAll.php";
		require_once "../Views/AgregarCapital/vCreateCapi.php";
		require_once "../Views/Partials/vFooter.php";
	}
	else
	{
		header("location:../indexLogin.php");
	}
?>