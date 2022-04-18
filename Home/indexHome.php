<?php
	session_start();

	if (isset($_SESSION["usuario"]))
	{ 
		require_once "../Model/Usuario.php";
		require_once "../Model/Prestamo.php";
		require_once "../Model/Ruta.php";

		$id = $_SESSION['id'];
		$usuario = new Usuario();
		$mostrarPrestamos = $usuario->mostrar_prestamos($id);
		//$rutaId = $usuario->find($id);

		$prestamo = new Prestamo();
		$listaPrestamos = $prestamo->all();

		// $ruta = new Ruta();
		// $listaRutas = $ruta->all();

		// $cajaGeneral = 0;
		// $prestamosGeneral = 0;
		// $capitalGeneral = 0;
		// $prestamosRuta = 0;
		// //$capitalRuta = $rutaId->Caja;

		// foreach ($listaRutas as $ruta)
		// {
		// 	$cajaGeneral = $cajaGeneral + $ruta->capitalActual; 
		// }

		// foreach ($listaPrestamos as $prestamos)
		// {
		// 	$prestamosGeneral = $prestamosGeneral + $ruta->capitalActual; 
		// }

		// foreach ($mostrarPrestamos as $prestamo)
		// {	
		// 	$prestamosRuta = $prestamosRuta + $prestamo->saldo;
		// 	$capitalRuta = $prestamosRuta + $prestamo->Caja;
		// }

		// $capitalGeneral = $prestamosGeneral + $cajaGeneral;


		require_once "../Views/Partials/vHeaderAll.php";
		require_once "../Views/Home/vIndexHome.php";
		require_once "../Views/Partials/vFooter.php";

	}
	else
	{
		header("location:../indexLogin.php");
	}	
?>