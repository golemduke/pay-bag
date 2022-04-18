<?php 
	require_once "Conexion.php";

	class Prestamo extends Conexion
	{
		public $id;
		public $montoPrestamo;
		public $saldo;
		public $interes;
		public $totalPrestamo;
		public $valorCuota;
		public $totalAbonado;
		public $fechaInicio;
		public $fechaFin;
		public $cantCuotas;
		public $cuotasPendientes;
		public $cuotasPagadas;
		public $clienteId;
		public $tipoPrestamoId;

	
		public function save()
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("INSERT INTO prestamos VALUES(null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
			$consulta->bindParam(1, $this->montoPrestamo);
			$consulta->bindParam(2, $this->interes);
			$consulta->bindParam(3, $this->fechaInicio);
			$consulta->bindParam(4, $this->fechaFin);
			$consulta->bindParam(5, $this->cantCuotas);
			$consulta->bindParam(6, $this->clienteId);
			$consulta->bindParam(7, $this->tipoPrestamoId);
			$consulta->bindParam(8, $this->saldo);
			$consulta->bindParam(9, $this->totalPrestamo);
			$consulta->bindParam(10, $this->cuotasPendientes);
			$consulta->bindParam(11, $this->valorCuota);
			$consulta->bindParam(12, $this->totalAbonado);
			$consulta->bindParam(13, $this->cuotasPagadas);
			$consulta->execute();
			$filas = $consulta->rowCount();
			$this->cerrar();
			return $filas;
		}

		public function all()
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT prestamos.*, clientes.nombre AS Nombre_Cliente, clientes.apellido AS Apellido_Cliente,rutas.id AS Ruta_N°, tiposdeprestamo.nombre AS Tipo_Prestamo, usuarios.nombre AS Recaudador, usuarios.apellido AS Apellido_Recaudador FROM  prestamos INNER JOIN clientes ON prestamos.clientesId = clientes.id INNER JOIN rutas ON clientes.rutasId = rutas.id INNER JOIN tiposdeprestamo ON prestamos.tiposDePrestamoId = tiposdeprestamo.id INNER JOIN usuarios ON rutas.usuariosId = usuarios.id ");
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$prestamos = $consulta->fetchAll();
			$this->cerrar();
			return $prestamos;
		}

		public function find($id)
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT prestamos.*, clientes.nombre AS Nombre_Cliente, clientes.apellido AS Apellido_Cliente, tiposdeprestamo.nombre AS Tipo_Prestamo FROM prestamos INNER JOIN clientes ON prestamos.clientesId = clientes.id INNER JOIN tiposdeprestamo ON prestamos.tiposDePrestamoId = tiposdeprestamo.id WHERE prestamos.id=?");
			$consulta->bindParam(1, $id);
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$prestamos = $consulta->fetchAll();
			$this->cerrar();
			return $prestamos[0];
		}
		
		public function update(){
			$this->abrir();
			$consulta=$this->conexion->prepare("UPDATE prestamos SET montoPrestamo=?, saldo=?, interes=?, fechaInicio=?, fechaFin=?, cantCuotas=?, clientesId=?, tiposDePrestamoId=? WHERE id=?");
			$consulta->bindParam(1, $this->montoPrestamo);
			$consulta->bindParam(2, $this->interes);
			$consulta->bindParam(3, $this->fechaInicio);
			$consulta->bindParam(4, $this->fechaFin);
			$consulta->bindParam(5, $this->cantCuotas);
			$consulta->bindParam(6, $this->clienteId);
			$consulta->bindParam(7, $this->tipoPrestamoId);
			$consulta->bindParam(8, $this->saldo);
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

		public function agregarCuota()
		{
			$this->abrir();
			$consulta=$this->conexion->prepare("UPDATE prestamos SET saldo=?, cuotasPendientes=?, totalAbonado=?, cuotasPagadas=? WHERE id=?");
			$consulta->bindParam(1, $this->saldo);
			$consulta->bindParam(2, $this->cuotasPendientes);
			$consulta->bindParam(3, $this->totalAbonado);
			$consulta->bindParam(4, $this->cuotasPagadas);
			$consulta->bindParam(5, $this->id);
			$consulta->execute();
			$filas=$consulta->rowCount();
			$this->cerrar();
			return $filas;			
		}
	}
?>