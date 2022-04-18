<?php 
	require_once "Conexion.php";

	class Gastos extends Conexion
	{
		public $id;
		public $fecha;
		public $valor;
		public $descripcion;
		public $rutaId;

		public function save()
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("INSERT INTO gastos VALUES(null, ?, ?, ?, ?)");
			$consulta->bindParam(1, $this->fecha);
			$consulta->bindParam(2, $this->valor);
			$consulta->bindParam(3, $this->descripcion);
			$consulta->bindParam(4, $this->rutaId);
			$consulta->execute();
			$filas = $consulta->rowCount();
			$this->cerrar();
			return $filas;
		}

		public function all()
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT * FROM gastos");
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$gastos = $consulta->fetchAll();
			$this->cerrar();
			return $gastos;
		}

		public function find($id){}

		public function update(){}

		public function delete(){}

	}
?>