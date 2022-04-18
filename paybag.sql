-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2021 a las 04:15:58
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `paybag`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `cedula` varchar(15) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `direccion` varchar(120) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `rutasId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `cedula`, `nombre`, `apellido`, `direccion`, `telefono`, `rutasId`) VALUES
(20, '1213264', 'Dario', 'Gomez', 'Villamaria', '223336547', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuotas`
--

CREATE TABLE `cuotas` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `valor` double NOT NULL,
  `prestamoId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE `gastos` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `valor` double NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `rutaId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gastos`
--

INSERT INTO `gastos` (`id`, `fecha`, `valor`, `descripcion`, `rutaId`) VALUES
(3, '2021-11-28', 20000, 'Gasolina', 15),
(4, '2021-11-28', 20000, 'Papeleria', 15),
(5, '2021-11-28', 30000, 'Gasolina', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresocapital`
--

CREATE TABLE `ingresocapital` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `valor` double NOT NULL,
  `rutaId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ingresocapital`
--

INSERT INTO `ingresocapital` (`id`, `fecha`, `valor`, `rutaId`) VALUES
(1, '2021-11-27', 100000, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `id` int(11) NOT NULL,
  `montoPrestamo` double NOT NULL,
  `interes` int(11) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL,
  `cantCuotas` int(11) NOT NULL,
  `clientesId` int(11) NOT NULL,
  `tiposDePrestamoId` int(11) NOT NULL,
  `saldo` int(11) NOT NULL,
  `totalPrestamo` bigint(20) NOT NULL,
  `cuotasPendientes` float NOT NULL,
  `valorCuota` int(11) NOT NULL,
  `totalAbonado` bigint(20) NOT NULL,
  `cuotasPagadas` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE `rutas` (
  `id` int(11) NOT NULL,
  `capitalInicial` double NOT NULL,
  `capitalActual` int(11) NOT NULL,
  `gastos` float DEFAULT NULL,
  `fechaInicio` date NOT NULL,
  `usuariosId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`id`, `capitalInicial`, `capitalActual`, `gastos`, `fechaInicio`, `usuariosId`) VALUES
(12, 5000000, 6600000, 0, '2021-11-27', 19),
(13, 2000000, 2000000, 0, '2021-11-27', 17),
(15, 2000000, 1930000, 0, '2021-11-28', 27);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposdeprestamo`
--

CREATE TABLE `tiposdeprestamo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tiposdeprestamo`
--

INSERT INTO `tiposdeprestamo` (`id`, `nombre`) VALUES
(1, 'Diario'),
(2, 'Semanal'),
(3, 'Quincenal'),
(4, 'Mensual');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposdeusuario`
--

CREATE TABLE `tiposdeusuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tiposdeusuario`
--

INSERT INTO `tiposdeusuario` (`id`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Recaudador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `cedula` varchar(15) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `contrasena` varchar(200) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `tipoUsuarioId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `cedula`, `nombre`, `apellido`, `telefono`, `contrasena`, `usuario`, `tipoUsuarioId`) VALUES
(17, '1022376656', 'Alejandro', 'Serna', '3214563805', '12345', 'Alejo', 2),
(19, '25036971', 'Angelica', 'Escobar', '3126985214', '98765', 'Angelica', 2),
(20, '1213264', 'Jhon', 'Sánchez', '3218759632', '00000', 'Jhon', 2),
(22, '326985741', 'Kevin', 'Duque', '3008888888', '12345', 'kevincito', 1),
(23, '1022376656', 'Jimmy', 'Sánchez', '3142641403', '3769995fe765b64b47bc43064219e444', 'Jimmy', 1),
(24, '78956222', 'Pancracio', 'Cepeda', '12315353', '', 'Pancracio', 2),
(26, '', 'dhhjhjjjjt', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 1),
(27, '1213264', 'Eduardo', 'Castro', '3129875646', 'c37bf859faf392800d739a41fe5af151', 'Eduardo', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Fk_rutasId` (`rutasId`);

--
-- Indices de la tabla `cuotas`
--
ALTER TABLE `cuotas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Fk_prestamoId` (`prestamoId`);

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_GastosRutas` (`rutaId`);

--
-- Indices de la tabla `ingresocapital`
--
ALTER TABLE `ingresocapital`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_CapitalRuta` (`rutaId`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Fk_clientesId` (`clientesId`),
  ADD KEY `Fk_tiposDePrestamoId` (`tiposDePrestamoId`);

--
-- Indices de la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Fk_usuariosId` (`usuariosId`);

--
-- Indices de la tabla `tiposdeprestamo`
--
ALTER TABLE `tiposdeprestamo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tiposdeusuario`
--
ALTER TABLE `tiposdeusuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_TipoUsuario` (`tipoUsuarioId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `cuotas`
--
ALTER TABLE `cuotas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ingresocapital`
--
ALTER TABLE `ingresocapital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT de la tabla `rutas`
--
ALTER TABLE `rutas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tiposdeprestamo`
--
ALTER TABLE `tiposdeprestamo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tiposdeusuario`
--
ALTER TABLE `tiposdeusuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `Fk_rutasId` FOREIGN KEY (`rutasId`) REFERENCES `rutas` (`id`);

--
-- Filtros para la tabla `cuotas`
--
ALTER TABLE `cuotas`
  ADD CONSTRAINT `Fk_prestamoId` FOREIGN KEY (`prestamoId`) REFERENCES `prestamos` (`id`);

--
-- Filtros para la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD CONSTRAINT `FK_GastosRutas` FOREIGN KEY (`rutaId`) REFERENCES `rutas` (`id`);

--
-- Filtros para la tabla `ingresocapital`
--
ALTER TABLE `ingresocapital`
  ADD CONSTRAINT `FK_CapitalRuta` FOREIGN KEY (`rutaId`) REFERENCES `rutas` (`id`);

--
-- Filtros para la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD CONSTRAINT `Fk_clientesId` FOREIGN KEY (`clientesId`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `Fk_tiposDePrestamoId` FOREIGN KEY (`tiposDePrestamoId`) REFERENCES `tiposdeprestamo` (`id`);

--
-- Filtros para la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD CONSTRAINT `Fk_usuariosId` FOREIGN KEY (`usuariosId`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `FK_TipoUsuario` FOREIGN KEY (`tipoUsuarioId`) REFERENCES `tiposdeusuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
