<?php
	session_start();
	if (isset($_SESSION["usuario"])) 
	{
		require_once "../model/Usuario.php";
		require_once "../model/Ruta.php";

		$usuario = new Usuario();
		$listaUsuarios = $usuario->All();

		$ruta = new Ruta();
		$listaRutas = $ruta->All();

		date_default_timezone_set("America/Bogota");
		$fechaActual = date( "Y/m/d" );

		require_once "../Views/Partials/vHeaderAll.php";
		require_once "../Views/Rutas/vCreateRuta.php";
		require_once "../Views/Partials/vFooter.php";
	}
	else
	{
		header("location:../indexLogin.php");
	}
?>