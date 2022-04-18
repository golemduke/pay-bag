<?php 
	require_once "Conexion.php";

	class TipoPrestamo extends Conexion
	{
		public $id;
		public $nombre;
		

		public function save()
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("INSERT INTO tipodeprestamo VALUES(null, ?)");
			$consulta->bindParam(1, $this->nombre);
			$consulta->execute();
			$filas = $consulta->rowCount();
			$this->cerrar();
			return $filas;
		}

		public function all()
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT * FROM tiposdeprestamo");
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$tiposdeprestamo = $consulta->fetchAll();
			$this->cerrar();
			return $tiposdeprestamo;
		}

		public function find($id)
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT * FROM tiposdeprestamo WHERE id=?");
			$consulta->bindParam(1, $id);
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$tiposdeprestamo = $consulta->fetchAll();
			$this->cerrar();
			return $tiposdeprestamo[0];
		}
		public function update(){
			$this->abrir();
			$consulta=$this->conexion->prepare("UPDATE tiposdeprestamo SET nombre=? WHERE id=?");
			$consulta->bindParam(1, $this->nombre);
			$consulta->bindParam(2, $this->id);
			$consulta->execute();
			$filas=$consulta->rowCount();
			$this->cerrar();
			return $filas;
		}

		public function delete(){
			$this->abrir();
			$consulta=$this->conexion->prepare("DELETE FROM tiposdeprestamo WHERE id=?");
			$consulta->bindParam(1, $this->id);
			$consulta->execute();
			$filas=$consulta->rowCount();
			$this->cerrar();
			return $filas;
		}
	}
?>