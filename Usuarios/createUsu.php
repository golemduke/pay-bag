<?php
	session_start();
	if (isset($_SESSION["usuario"])) 
	{
		require_once "../Model/TipoUsuario.php";

		$tipoUsuario = new TipoUsuario();
		$listaTiposUsu = $tipoUsuario->All();

		require_once "../Views/Partials/vHeaderAll.php";
		require_once "../Views/Usuarios/vCreateUsu.php";
		require_once "../Views/Partials/vFooter.php";

	}
	else
	{
		header("location:../indexLogin.php");
	}
?>