<?php 
	session_start();
	if (isset($_SESSION["usuario"])) 
	{
		require_once "../Model/Prestamo.php";
		require_once "../Model/Cuota.php";

		$id = $_GET["id"];
		
		$prestamo = new Prestamo();
		$prestamosId = $prestamo->find($id);
		
		if (isset($_GET["accion"])) 
		{
			switch ($_GET["accion"]) 
			{
				case '1':
					$mensaje = "La Cuota se agregó Correctamente.";
					$clase = "alert alert-success";
					break;
				
				case '2':
					$mensaje = "La Cuota no se agregó.";
					$clase = "alert alert-danger";
					break;
			}
		}

		require_once "../Views/Partials/vHeaderAll.php";
		require_once "../Views/Prestamos/vShowPres.php";
		require_once "../Views/Partials/vFooter.php";
	}
	else
	{
		header("location:../indexLogin.php");
	}
?>