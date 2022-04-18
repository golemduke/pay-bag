<?php 
	require_once "Conexion.php";
  
	class Usuario extends Conexion
	{
		public $id;
		public $cedula;
		public $nombre;
		public $apellido;
		public $telefono;
		public $contrasena;
		public $usuario;
		public $tipo;

		public function save()
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("INSERT INTO usuarios VALUES(null, ?, ?, ?, ?, md5(?), ?, ?)");
			$consulta->bindParam(1, $this->cedula);
			$consulta->bindParam(2, $this->nombre);
			$consulta->bindParam(3, $this->apellido);
			$consulta->bindParam(4, $this->telefono);
			$consulta->bindParam(5, $this->contrasena);
			$consulta->bindParam(6, $this->usuario);
			$consulta->bindParam(7, $this->tipo);
			$consulta->execute();
			$filas = $consulta->rowCount();
			$this->cerrar();
			return $filas;
		}

		public function all()
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT usuarios.*, rutas.id AS ruta_id FROM usuarios LEFT JOIN rutas ON rutas.usuariosId=usuarios.id");
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$usuarios = $consulta->fetchAll();
			$this->cerrar();
			return $usuarios;
		}

		public function find($id)
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT usuarios.*, tiposdeusuario.nombre AS tipo, rutas.id AS Ruta_N°, rutas.capitalActual AS Caja FROM usuarios INNER JOIN tiposdeusuario ON usuarios.tipoUsuarioId = tiposdeusuario.id INNER JOIN rutas ON rutas.usuariosId = usuarios.id WHERE usuarios.id=?");
			$consulta->bindParam(1, $id);
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$usuarios = $consulta->fetchAll();

			$this->cerrar();
			return $usuarios[0];		
		}

		public function buscar($id)
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT * FROM usuarios WHERE usuarios.id=?");
			$consulta->bindParam(1, $id);
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$usuarios = $consulta->fetchAll();

			$this->cerrar();
			return $usuarios[0];		
		}

		public function update()
		{
			$this->abrir();
			$consulta=$this->conexion->prepare("UPDATE usuarios SET cedula=?, nombre=?, apellido=?, telefono=?, contrasena=?, tipoUsuarioId=?, usuario=? WHERE id=?");
			$consulta->bindParam(1, $this->cedula);
			$consulta->bindParam(2, $this->nombre);
			$consulta->bindParam(3, $this->apellido);
			$consulta->bindParam(4, $this->telefono);
			$consulta->bindParam(5, $this->contrasena);
			$consulta->bindParam(6, $this->tipo);
			$consulta->bindParam(7, $this->usuario);
			$consulta->bindParam(8, $this->id);
			$consulta->execute();
			$filas=$consulta->rowCount();
			$this->cerrar();
			return $filas;
		}

		public function delete(){
			$this->abrir();
			$consulta=$this->conexion->prepare("DELETE FROM usuarios WHERE id=?");
			$consulta->bindParam(1, $this->id);
			$consulta->execute();
			$filas=$consulta->rowCount();
			$this->cerrar();
			return $filas;
		}

		public function update_login()
		{
			$this->abrir();
			$consulta=$this->conexion->prepare("UPDATE usuarios SET contrasena=md5(?), usuario=? WHERE id=?");
			$consulta->bindParam(1, $this->contrasena);
			$consulta->bindParam(2, $this->usuario);
			$consulta->bindParam(3, $this->id);
			$consulta->execute();
			$filas=$consulta->rowCount();
			$this->cerrar();
			return $filas;
		}

		public function validar_usuario()
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT * FROM usuarios WHERE usuario=? AND contrasena=md5(?)");
			$consulta->bindParam(1, $this->usuario);
			$consulta->bindParam(2, $this->contrasena);
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$usuarios = $consulta->fetchAll();
			$this->cerrar();
			if ($usuarios > 0) 
			{
			return $usuarios[0];
			}
			else
			{
				return null;
			}
		}

		public function mostrar_clientes($id)
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT clientes.*, rutas.id AS Ruta_N°, usuarios.nombre AS Usuario, tiposdeusuario.nombre AS tipo FROM usuarios INNER JOIN tiposdeusuario ON usuarios.tipoUsuarioId = tiposdeusuario.id INNER JOIN rutas ON rutas.usuariosId = usuarios.id INNER JOIN clientes ON clientes.rutasId = rutas.id WHERE usuarios.id=?");
			$consulta->bindParam(1, $id);
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$usuarios = $consulta->fetchAll();
			$this->cerrar();
			return $usuarios;
		}

		public function mostrar_prestamos($id)
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT prestamos.*, clientes.nombre AS Nom_Cliente, clientes.apellido AS Apellido_Cliente, rutas.id AS Ruta_N°, rutas.capitalActual AS Caja, tiposdeprestamo.nombre AS Tipo_Prestamo, usuarios.nombre AS Recaudador, usuarios.apellido AS Apellido_Recaudador FROM usuarios INNER JOIN  rutas ON rutas.usuariosId = usuarios.id  INNER JOIN clientes ON clientes.rutasId = rutas.id INNER JOIN prestamos ON prestamos.clientesId = clientes.id INNER JOIN tiposdeprestamo ON prestamos.tiposDePrestamoId = tiposdeprestamo.id WHERE usuarios.id=?");
			$consulta->bindParam(1, $id);
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$usuarios = $consulta->fetchAll();
			$this->cerrar();
			return $usuarios;
		}

		public function mostrar_gastos($id)
		{
			$this->abrir();
			$consulta = $this->conexion->prepare("SELECT gastos.valor FROM usuarios INNER JOIN  rutas ON rutas.usuariosId = usuarios.id  INNER JOIN gastos ON gastos.rutaId = rutas.id  WHERE usuarios.id=?");
			$consulta->bindParam(1, $id);
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$usuarios = $consulta->fetchAll();
			$this->cerrar();
			return $usuarios;
		}

	}
?>