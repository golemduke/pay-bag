<?php 
	session_start();
	if (isset($_SESSION["usuario"])) 
	{
		require_once "../Model/Prestamo.php";
		require_once "../Model/Usuario.php";
		
		$prestamo = new Prestamo();
		$listaPrestamos = $prestamo->all();

		//$id = $_SESSION['id'];
		//$usuario = new Usuario();
		//$mostrarPrestamos = $usuario->mostrar_prestamos($id);

		if (isset($_GET["accion"])) 
		{
			switch ($_GET["accion"]) 
			{
				case '1':
					$mensaje = "El prestamo se creó correctamente.";
					$clase = "alert alert-success";
					break;
				
				case '2':
					$mensaje = "El prestamo no se creó.";
					$clase = "alert alert-danger";
					break;
				case '3':
					$mensaje = "El prestamo se actualizó correctamente.";
					$clase = "alert alert-success";
					break;
				
				case '4':
					$mensaje = "El prestamo no se actualizó.";
					$clase = "alert alert-danger";
					break;
				case '5':
					$mensaje = "El prestamo se eliminó correctamente.";
					$clase = "alert alert-success";
					break;
				
				case '6':
					$mensaje = "El prestamo no se eliminó.";
					$clase = "alert alert-danger";
					break;
			}
		}

		require_once "../Views/Partials/vHeaderAll.php";
		require_once "../Views/Prestamos/vIndexPres.php";
		require_once "../Views/Partials/vFooter.php";
	}
	else
	{
		header("location:../indexLogin.php");
	}
?>