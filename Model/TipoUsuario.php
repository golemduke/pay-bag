<?php 
	require_once "Conexion.php";

	class TipoUsuario extends Conexion
	{
		public $id;
		public $nombre;
		

		public function save()
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("INSERT INTO tiposdeusuario VALUES(null, ?)");
			$consulta->bindParam(1, $this->nombre);
			$consulta->execute();
			$filas = $consulta->rowCount();
			$this->cerrar();
			return $filas;
		}

		public function all()
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT * FROM tiposdeusuario");
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$tiposdeusuario = $consulta->fetchAll();
			$this->cerrar();
			return $tiposdeusuario;
		}

		public function find($id)
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT * FROM tiposdeusuario WHERE id=?");
			$consulta->bindParam(1, $id);
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$tiposdeusuario = $consulta->fetchAll();
			$this->cerrar();
			return $tiposdeusuario[0];
		}
		public function update(){
			$this->abrir();
			$consulta=$this->conexion->prepare("UPDATE tiposdeusuario SET nombre=? WHERE id=?");
			$consulta->bindParam(1, $this->nombre);
			$consulta->bindParam(2, $this->id);
			$consulta->execute();
			$filas=$consulta->rowCount();
			$this->cerrar();
			return $filas;
		}

		public function delete(){
			$this->abrir();
			$consulta=$this->conexion->prepare("DELETE FROM tiposdeusuario WHERE id=?");
			$consulta->bindParam(1, $this->id);
			$consulta->execute();
			$filas=$consulta->rowCount();
			$this->cerrar();
			return $filas;
		}
	}
?>