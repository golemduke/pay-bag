<?php 
	session_start();
	if (isset($_SESSION["usuario"])) {
		header("location:home/indexHome.php");
	}
	else
	{
		require_once "Model/Usuario.php";

		$usuarios = new Usuario();
		//$listaUsuarios = $usuario->all();

		if (isset($_GET["accion"])) 
		{
			switch ($_GET["accion"]) 
			{
				case '1':
					$mensaje = "El Usuario ha sido creado correctamente";
					$clase = "alert alert-success";
					break;
				
				case '2':
					$mensaje = "El Usuario no se creó";
					$clase = "alert alert-danger";
					break;
				case '3':
					$mensaje = "Usuario o Contraseña Incorrectos";
					$clase = "alert alert-danger";
					break;
			}
		}
	}
	require_once "Views/Partials/vHeaderLogin.php";
	require_once "Views/vIndexLogin.php";
	require_once "Views/Partials/vFooter.php";
?>