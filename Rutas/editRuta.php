<?php
	session_start();
	if (isset($_SESSION["usuario"])) 
	{ 
		require_once "../Model/Ruta.php";
		require_once "../Model/Usuario.php";

		$id = $_GET["id"];
		$ruta = new Ruta();
		$rutaId = $ruta->find($id);
		 
		$usuario = new Usuario();
		$listaUsuario = $usuario->all(); 
		 
	    require_once "../Views/partials/vHeaderAll.php";
	    require_once "../Views/Rutas/vEditRuta.php";
	    require_once "../Views/partials/vFooter.php";
    }
	else
	{
		header("location:../indexLogin.php");
	}
?>