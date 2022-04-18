<?php
	abstract class Conexion
	{
		protected $conexion;

		public function abrir()
		{
			try 
			{
				$this->conexion = new PDO("mysql:host=localhost;dbname=paybag", "root", "");
				$this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return "1";
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}

		public function cerrar()
		{
			$this->conexion = null;
		}

		abstract public function save();
		abstract public function all();
		abstract public function find($id);
		abstract public function update();
		abstract public function delete();
	}	
 ?>