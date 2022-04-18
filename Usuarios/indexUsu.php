<?php 
	session_start();
	if (isset($_SESSION["usuario"])) 
	{
		require_once "../Model/Usuario.php";

		$usuario = new Usuario();
		$listaUsuarios = $usuario->all();

		if (isset($_GET["accion"])) 
		{
			switch ($_GET["accion"]) 
			{
				case '1':
					$mensaje = "El Usuario se creó correctamente.";
					$clase = "alert alert-success";
					break;
				
				case '2':
					$mensaje = "La Usuario no se creó.";
					$clase = "alert alert-danger";
					break;
				case '3':
					$mensaje = "El Usuario se actualizó correctamente.";
					$clase = "alert alert-success";
					break;
				
				case '4':
					$mensaje = "El Usuario  no se actualizó.";
					$clase = "alert alert-danger";
					break;
				case '5':
					$mensaje = "El Usuario se eliminó correctamente.";
					$clase = "alert alert-success";
					break;
				
				case '6':
					$mensaje = "El Usuario no se eliminó.";
					$clase = "alert alert-danger";
					break;

				case '7':
					$mensaje = "Datos Actualizados correctamente.";
					$clase = "alert alert-success";
					break;
				
				case '8':
					$mensaje = "Los Datos no se actualizaron";
					$clase = "alert alert-danger";
					break;
			}
		}

		require_once "../Views/Partials/vHeaderAll.php";
		require_once "../Views/Usuarios/vIndexUsu.php";
		require_once "../Views/Partials/vFooter.php";
	}
	else
	{
		header("location:../indexLogin.php");
	}
?>