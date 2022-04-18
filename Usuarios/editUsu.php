<?php
	session_start();
	if (isset($_SESSION["usuario"]))
	{ 
		require_once "../Model/Usuario.php";
		require_once "../Model/TipoUsuario.php";

		$id = $_GET["id"];
		$usuario = new Usuario();
		$usuarioId = $usuario->find($id);
		
		$tipoUsuario = new TipoUsuario();
		$listaTipoUsu = $tipoUsuario->all();

	    require_once "../Views/partials/vHeaderAll.php";
	    require_once "../Views/Usuarios/vEditUsu.php";
	    require_once "../Views/partials/vFooter.php";
    }
    else
	{
		header("location:../indexLogin.php");
	}
?>