<?php 
	session_start();
	if (isset($_SESSION["usuario"])) 
	{
		require_once "../Model/Gastos.php";
		require_once "../Model/Ruta.php";
		
		$gasto = new Gastos();
		$listaGastos = $gasto->all();

		if (isset($_GET["accion"])) 
		{
			switch ($_GET["accion"]) 
			{
				case '1':
					$mensaje = "El gasto se agregó Correctamente.";
					$clase = "alert alert-success";
					break;
				
				case '2':
					$mensaje = "El gasto no se Agregó";
					$clase = "alert alert-danger";
					break;	
			}
		}

		require_once "../Views/Partials/vHeaderAll.php";
		require_once "../Views/Gastos/vIndexGas.php";
		require_once "../Views/Partials/vFooter.php";
	}
	else
	{
		header("location:../indexLogin.php");
	}
?>