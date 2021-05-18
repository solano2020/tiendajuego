-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 18-05-2021 a las 04:43:32
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendajuegos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquiler_cliente`
--

CREATE TABLE `alquiler_cliente` (
  `ID_Alquiler_Cliente` int(11) NOT NULL,
  `ID_Cliente` int(11) NOT NULL,
  `ID_Juego` int(11) NOT NULL,
  `ID_Venta` int(11) NOT NULL,
  `Fecha_Ini` date NOT NULL,
  `Fecha_Fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `alquiler_cliente`
--

INSERT INTO `alquiler_cliente` (`ID_Alquiler_Cliente`, `ID_Cliente`, `ID_Juego`, `ID_Venta`, `Fecha_Ini`, `Fecha_Fin`) VALUES
(2, 4, 15, 3, '2021-05-17', '2021-05-20'),
(3, 6, 16, 4, '2021-05-18', '2021-05-21'),
(4, 7, 16, 5, '2021-05-18', '2021-05-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `ID_Cliente` int(11) NOT NULL,
  `Nombres` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Apellidos` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cedula` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Edad` int(3) NOT NULL,
  `Correo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telefono` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Direccion` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`ID_Cliente`, `Nombres`, `Apellidos`, `Cedula`, `Edad`, `Correo`, `Telefono`, `Direccion`) VALUES
(4, 'juan', 'Gonzales', '4552223', 45, 'juen@gmail.com', '5625663', 'cll 45-74'),
(5, 'alberto ', 'martinez', '56414522', 50, 'alberto@gmail.com', '555-3333', 'cra 4 26-45'),
(6, 'mauricio ', 'dominguez', '845621', 20, 'dominguez@gmail.com', '99936545', 'cll #2 45-76'),
(7, 'maria', 'alvarez', '8563256', 32, 'maria@hotmail.com', '584556', 'cll 24a 75');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `ID_Juego` int(11) NOT NULL,
  `Titulo` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nombre` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Anio` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Protagonistas` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Director` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Productor` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tecnologia` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PrecioAlquiler` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`ID_Juego`, `Titulo`, `Nombre`, `Anio`, `Protagonistas`, `Director`, `Productor`, `Tecnologia`, `PrecioAlquiler`) VALUES
(15, 'mortal kombat', 'mortal kombat', '2016', 'juan', 'pedro', 'gutierrez', 'Nintendo', 600000),
(16, 'call of duty', 'black ops', '2016', 'luis', 'predo', 'martinez', 'PlayStation', 90000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `ID_Venta` int(11) NOT NULL,
  `ID_Cliente` int(11) NOT NULL,
  `ValorVenta` int(250) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`ID_Venta`, `ID_Cliente`, `ValorVenta`, `Fecha`) VALUES
(3, 4, 562222, '2021-05-17'),
(4, 6, 90000, '2021-05-18'),
(5, 7, 90000, '2021-05-18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alquiler_cliente`
--
ALTER TABLE `alquiler_cliente`
  ADD PRIMARY KEY (`ID_Alquiler_Cliente`),
  ADD KEY `FK_Clientes_AlquilerJuegos` (`ID_Cliente`),
  ADD KEY `FK_Ventas_alquiler_cliente` (`ID_Venta`),
  ADD KEY `FK_Juegos_Alquiler_cliente` (`ID_Juego`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID_Cliente`);

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`ID_Juego`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`ID_Venta`),
  ADD KEY `FK_Clientes_Compras` (`ID_Cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alquiler_cliente`
--
ALTER TABLE `alquiler_cliente`
  MODIFY `ID_Alquiler_Cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ID_Cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `ID_Juego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `ID_Venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alquiler_cliente`
--
ALTER TABLE `alquiler_cliente`
  ADD CONSTRAINT `FK_Clientes_AlquilerJuegos` FOREIGN KEY (`ID_Cliente`) REFERENCES `clientes` (`ID_Cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Juegos_Alquiler_cliente` FOREIGN KEY (`ID_Juego`) REFERENCES `juegos` (`ID_Juego`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Ventas_alquiler_cliente` FOREIGN KEY (`ID_Venta`) REFERENCES `ventas` (`ID_Venta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `FK_Clientes_Compras` FOREIGN KEY (`ID_Cliente`) REFERENCES `clientes` (`ID_Cliente`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
