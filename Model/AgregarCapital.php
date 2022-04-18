<?php 
	require_once "Conexion.php";

	class AgregarCapital extends Conexion
	{
		public $id;
		public $fecha;
		public $valor;
		public $rutaId;

		public function save()
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("INSERT INTO ingresoCapital VALUES(null, ?, ?, ?)");
			$consulta->bindParam(1, $this->fecha);
			$consulta->bindParam(2, $this->valor);
			$consulta->bindParam(3, $this->rutaId);
			$consulta->execute();
			$filas = $consulta->rowCount();
			$this->cerrar();
			return $filas;
		}

		public function all(){}

		public function find($id){}

		public function update(){}

		public function delete(){}

	}
?>