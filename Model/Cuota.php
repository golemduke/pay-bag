<?php 
	require_once "Conexion.php";

	class Cuota extends Conexion
	{
		public $id;
		public $fecha;
		public $valor;
		public $prestamoId;

		public function save()
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("INSERT INTO cuotas VALUES(null, ?, ?, ?)");
			$consulta->bindParam(1, $this->fecha);
			$consulta->bindParam(2, $this->valor);
			$consulta->bindParam(3, $this->prestamoId);
			$consulta->execute();
			$filas = $consulta->rowCount();
			$this->cerrar();
			return $filas;
		}

		public function all()
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT * FROM cuotas");
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$prestamos = $consulta->fetchAll();
			$this->cerrar();
			return $prestamos;
		}

		public function find($id)
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT * FROM cuotas WHERE id=?");
			$consulta->bindParam(1, $id);
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$cuotas = $consulta->fetchAll();
			$this->cerrar();
			return $cuotas[0];
		}

		public function update()
		{
			$this->abrir();
			$consulta=$this->conexion->prepare("UPDATE prestamos SET montoPrestamo=?, interes=?, fechaInicio=?, fechaFin=?, cantCuotas=?, clientesId=?, tiposDePrestamoId=? WHERE id=?");
			$consulta->bindParam(1, $this->montoPrestamo);
			$consulta->bindParam(2, $this->interes);
			$consulta->bindParam(3, $this->fechaInicio);
			$consulta->bindParam(4, $this->fechaFin);
			$consulta->bindParam(5, $this->cantCuotas);
			$consulta->bindParam(6, $this->clienteId);
			$consulta->bindParam(7, $this->tipoPrestamoId);
			$consulta->bindParam(7, $this->id);
			$consulta->execute();
			$filas=$consulta->rowCount();
			$this->cerrar();
			return $filas;
		}

		public function delete(){
			$this->abrir();
			$consulta=$this->conexion->prepare("DELETE FROM prestamos WHERE id=?");
			$consulta->bindParam(1, $this->id);
			$consulta->execute();
			$filas=$consulta->rowCount();
			$this->cerrar();
			return $filas;
		}

	}
?>