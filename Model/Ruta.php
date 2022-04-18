<?php 
	require_once "Conexion.php";

	class Ruta extends Conexion  
	{
		public $id;
		public $capitalInicial;
		public $capitalActual;
		public $gastos;
		public $fechaInicio;
		public $usuarioId;

		public function save()
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("INSERT INTO rutas VALUES(null, ?, ?, ?, ?, ?)");
			$consulta->bindParam(1, $this->capitalInicial);
			$consulta->bindParam(2, $this->capitalActual);
			$consulta->bindParam(3, $this->gastos);
			$consulta->bindParam(4, $this->fechaInicio);
			$consulta->bindParam(5, $this->usuarioId);
			$consulta->execute();
			$filas = $consulta->rowCount();
			$this->cerrar();
			return $filas;
		}

		public function all()
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT rutas.*, usuarios.nombre AS nom_usuario FROM rutas INNER JOIN usuarios ON rutas.usuariosId=usuarios.id");
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$rutas = $consulta->fetchAll();
			$this->cerrar();
			return $rutas;
		}

		public function find($id)
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT * FROM rutas WHERE id=?");
			$consulta->bindParam(1, $id);
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$rutas = $consulta->fetchAll();
			$this->cerrar();
			return $rutas[0];
		}

		public function buscar($id)
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT rutas.*, usuarios.nombre AS nombre FROM rutas INNER JOIN usuarios ON rutas.usuariosId = usuarios.id WHERE usuarios.id=?");
			$consulta->bindParam(1, $id);
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$rutas = $consulta->fetchAll();
			$this->cerrar();
			return $rutas[0];
		}
		
		public function update()
		{
			$this->abrir();
			$consulta=$this->conexion->prepare("UPDATE rutas SET capitalInicial=?, fechaInicio=?, usuariosId=? WHERE id=?");
			$consulta->bindParam(1, $this->capitalInicial);
			$consulta->bindParam(2, $this->fechaInicio);
			$consulta->bindParam(3, $this->usuarioId);
			$consulta->bindParam(4, $this->id);
			$consulta->execute();
			$filas=$consulta->rowCount();
			$this->cerrar();
			return $filas;
		}

		public function delete()
		{
			$this->abrir();
			$consulta=$this->conexion->prepare("DELETE FROM rutas WHERE id=?");
			$consulta->bindParam(1, $this->id);
			$consulta->execute();
			$filas=$consulta->rowCount();
			$this->cerrar();
			return $filas;
		}

		public function updateCapital()
		{
			$this->abrir();
			$consulta=$this->conexion->prepare("UPDATE rutas INNER JOIN usuarios ON rutas.usuariosId = usuarios.id SET capitalActual=? WHERE usuarios.id=?");
			$consulta->bindParam(1, $this->capitalActual);
			$consulta->bindParam(2, $this->id);
			$consulta->execute();
			$filas=$consulta->rowCount();
			$this->cerrar();
			return $filas;			
		}

		public function agregarCapital()
		{
			$this->abrir();
			$consulta=$this->conexion->prepare("UPDATE rutas SET capitalActual=? WHERE id=?");
			$consulta->bindParam(1, $this->capitalActual);
			$consulta->bindParam(2, $this->id);
			$consulta->execute();
			$filas=$consulta->rowCount();
			$this->cerrar();
			return $filas;			
		}

		public function agregarGasto()
		{
			$this->abrir();
			$consulta=$this->conexion->prepare("UPDATE rutas SET capitalActual=?, gastos=? WHERE id=?");
			$consulta->bindParam(1, $this->capitalActual);
			$consulta->bindParam(2, $this->gastos);
			$consulta->bindParam(3, $this->id);
			$consulta->execute();
			$filas=$consulta->rowCount();
			$this->cerrar();
			return $filas;			
		}
	}
?>