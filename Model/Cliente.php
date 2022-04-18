<?php 
	require_once "Conexion.php";

	class Cliente extends Conexion
	{
		public $id;
		public $cedula;
		public $nombre;
		public $apellido;
		public $direccion;
		public $telefono;
		public $rutaId;

		public function save()
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("INSERT INTO clientes VALUES(null, ?, ?, ?, ?, ?, ?)");
			$consulta->bindParam(1, $this->cedula);
			$consulta->bindParam(2, $this->nombre);
			$consulta->bindParam(3, $this->apellido);
			$consulta->bindParam(4, $this->direccion);
			$consulta->bindParam(5, $this->telefono);
			$consulta->bindParam(6, $this->rutaId);
			$consulta->execute();
			$filas = $consulta->rowCount();
			$this->cerrar();
			return $filas;
		}

		public function all()
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT clientes.*, rutas.id AS Ruta_N° FROM  clientes INNER JOIN rutas ON clientes.rutasId = rutas.id");
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$clientes = $consulta->fetchAll();
			$this->cerrar();
			return $clientes;
		}

		public function find($id)
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT * FROM clientes WHERE id=?");
			$consulta->bindParam(1, $id);
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$clientes = $consulta->fetchAll();
			$this->cerrar();
			return $clientes[0];
		}
		public function update(){
			$this->abrir();
			$consulta=$this->conexion->prepare("UPDATE clientes SET cedula=?, nombre=?, apellido=?, direccion=?, telefono=?, rutasId=? WHERE id=?");
			$consulta->bindParam(1, $this->cedula);
			$consulta->bindParam(2, $this->nombre);
			$consulta->bindParam(3, $this->apellido);
			$consulta->bindParam(4, $this->direccion);
			$consulta->bindParam(5, $this->telefono);
			$consulta->bindParam(6, $this->rutaId);
			$consulta->bindParam(7, $this->id);
			$consulta->execute();
			$filas=$consulta->rowCount();
			$this->cerrar();
			return $filas;
		}

		public function delete(){
			$this->abrir();
			$consulta=$this->conexion->prepare("DELETE FROM clientes WHERE id=?");
			$consulta->bindParam(1, $this->id);
			$consulta->execute();
			$filas=$consulta->rowCount();
			$this->cerrar();
			return $filas;
		}
	}
?>