<?php
	session_start();
	if (isset($_SESSION["usuario"])) 
	{
		require_once "../Model/Ruta.php";
		require_once "../Model/Usuario.php";

		$ruta = new Ruta();
		$listaRutas = $ruta->all();

		if ($_SESSION["tipo"] == 2)
        {	
			$id = $_SESSION['id'];
			$usuario = new Usuario();
			$rutaId = $usuario->find($id);
		}

		date_default_timezone_set("America/Bogota");
		$fecha = date( "Y/m/d" );

		require_once "../Views/Partials/vHeaderAll.php";
		require_once "../Views/Gastos/vCreateGas.php";
		require_once "../Views/Partials/vFooter.php";
	}
	else
	{
		header("location:../indexLogin.php");
	}
?>