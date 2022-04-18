<?php 
	session_start();
	if (isset($_SESSION["usuario"])) 
	{
		require_once "../Model/Ruta.php";
		require_once "../Model/Gastos.php";
		require_once "../Model/Usuario.php";

		$ruta = new Ruta();
		$listaRutas = $ruta->all();

		$gasto = new Gastos();
		$listaGastos = $gasto->All();

		$id = $_SESSION['id'] ;
		$usuario = new Usuario();
		$mostrarGastos = $usuario->mostrar_gastos($id);

		$gastoTotal = 0;
		$gastoUsuario = 0;

		foreach ($listaGastos As $gasto) 
		{
			$gastoTotal = $gastoTotal + $gasto->valor;
		}


		foreach ($mostrarGastos As $gasto1) 
		{
			$gastoUsuario = $gastoUsuario + $gasto1->valor;
		}




		if (isset($_GET["accion"])) 
		{
			switch ($_GET["accion"]) 
			{
				case '1':
					$mensaje = "La ruta se creó correctamente.";
					$clase = "alert alert-success";
					break;
				
				case '2':
					$mensaje = "La ruta no se creó.";
					$clase = "alert alert-danger";
					break;
				case '3':
					$mensaje = "La ruta se actualizó correctamente.";
					$clase = "alert alert-success";
					break;
				
				case '4':
					$mensaje = "La ruta no se actualizó.";
					$clase = "alert alert-danger";
					break;
				case '5':
					$mensaje = "La ruta se eliminó correctamente.";
					$clase = "alert alert-success";
					break;
				
				case '6':
					$mensaje = "La ruta no se eliminó.";
					$clase = "alert alert-danger";
					break;

				case '7':
					$mensaje = "El capital se agregó Correctamente.";
					$clase = "alert alert-success";
					break;
				
				case '8':
					$mensaje = "El capital no se agregó";
					$clase = "alert alert-danger";
					break;
			}
		}

		require_once "../Views/Partials/vHeaderAll.php";
		require_once "../Views/Rutas/vIndexRuta.php";
		require_once "../Views/Partials/vFooter.php";
	}
	else
	{
		header("location:../indexLogin.php");
	}
?>