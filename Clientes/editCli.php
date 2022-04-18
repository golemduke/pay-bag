<?php
	session_start();
	if (isset($_SESSION["usuario"]))
	{ 
		require_once "../Model/Cliente.php";
		require_once "../Model/Ruta.php";
		
		$id = $_GET["id"];
		$cliente = new Cliente();
		$clienteId = $cliente->find($id); 
		
		$ruta = new Ruta();
		$listaRutas = $ruta->all(); 
		   
	    require_once "../Views/partials/vHeaderAll.php";
	    require_once "../Views/Clientes/vEditCli.php";
	    require_once "../Views/partials/vFooter.php";
    }
    else
	{
		header("location:../indexLogin.php");
	}
?>