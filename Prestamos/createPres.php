<?php
	session_start();
	if (isset($_SESSION["usuario"])) 
	{
		require_once "../Model/Cliente.php";
		require_once "../Model/TipoPrestamo.php";
		require_once "../Model/Usuario.php";

		$tipoPrestamo = new TipoPrestamo();
		$listaTipos = $tipoPrestamo->All();

		$cliente = new Cliente();
		$listaClientes = $cliente->All();

		$id = $_SESSION['id'];
		$usuario = new Usuario();
		$mostrarClientes = $usuario->mostrar_clientes($id); 

		date_default_timezone_set("America/Bogota");
		$fechaActual = date( "Y/m/d" );

		require_once "../Views/Partials/vHeaderAll.php";
		require_once "../Views/Prestamos/vCreatePres.php";
		require_once "../Views/Partials/vFooter.php";
	}
	else
	{
		header("location:../indexLogin.php");
	}
?>