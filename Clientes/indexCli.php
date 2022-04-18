<?php
	session_start();
	if (isset($_SESSION["usuario"]))
	{ 
		require_once "../Model/Cliente.php";
		require_once "../Model/Ruta.php";
		require_once "../Model/Usuario.php";

		$cliente = new Cliente();
		$listaClientes = $cliente->all();

		$id = $_SESSION['id'];
		$usuario = new Usuario();
		$mostrarClientes = $usuario->mostrar_clientes($id);

		if (isset($_GET["accion"])) 
		{
			switch ($_GET["accion"]) 
			{
				case '1':
					$mensaje = "El cliente se creó correctamente.";
					$clase = "alert alert-success";
					break;
				
				case '2':
					$mensaje = "El cliente no se creó.";
					$clase = "alert alert-danger";
					break;
				case '3':
					$mensaje = "El cliente se actualizó correctamente.";
					$clase = "alert alert-success";
					break; 
				
				case '4':
					$mensaje = "El cliente no se actualizó.";
					$clase = "alert alert-danger";
					break;
				case '5':
					$mensaje = "El cliente se eliminó correctamente.";
					$clase = "alert alert-success";
					break;
				
				case '6':
					$mensaje = "El cliente no se eliminó.";
					$clase = "alert alert-danger";
					break;
			}
		}

		require_once "../Views/Partials/vHeaderAll.php";
		require_once "../Views/Clientes/vIndexCli.php";
		require_once "../Views/Partials/vFooter.php";
	}
	else
	{
		header("location:../indexLogin.php");
	}
?>