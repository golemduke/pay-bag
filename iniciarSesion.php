<?php
	session_start();
	require_once "Model/Usuario.php";
	require_once "Model/Ruta.php";


	$usuario = new Usuario();
	$usuario->contrasena = $_POST["contrasena"];
	$usuario->usuario = $_POST["usuario"];
	$usuario2 = $usuario->validar_usuario(); //Metodo para traer los datos del usuario logueado

	// $ruta = new Ruta();
	// $rutaId = $ruta->recuperar_ruta($usuarioId); //Traer el objeto de la ruta de la base de datos

	if($usuario2 == null)
	{
		header("location:indexLogin.php?accion=3");
	}
	else
	{
		$_SESSION["tipo"] = $usuario2->tipoUsuarioId;
		$_SESSION['id'] = $usuario2->id;
		$_SESSION['cedula'] = $usuario2->cedula;
		$_SESSION['nombre'] = $usuario2->nombre;
		$_SESSION['apellido'] = $usuario2->apellido;
		$_SESSION['telefono'] = $usuario2->telefono;

		switch ($_SESSION["tipo"]) {
			case 1:
				$_SESSION["usuario"] = $_POST["usuario"];
				header("location:Home/indexHome.php");
				break;
			
			case 2:
				$_SESSION["usuario"] = $_POST["usuario"];
				header("location:Home/indexHome.php"); //Crear vista de clientes y vista de prestamos para recaudadores mediante usuario.Id == rutas.usuariosId, usuariosId.id == rutas.id
				break;
		}
	}
?>
 