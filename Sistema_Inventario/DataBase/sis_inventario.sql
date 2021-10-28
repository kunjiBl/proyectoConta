-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2021 a las 18:21:21
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sis_inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id` int(11) NOT NULL,
  `producto` varchar(150) NOT NULL,
  `precio` int(11) NOT NULL,
  `medida` varchar(50) DEFAULT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id`, `producto`, `precio`, `medida`, `cantidad`) VALUES
(4, 'Café Molido', 45, 'Lb', 2),
(5, 'Café en Grano', 50, 'Lb', 3),
(6, 'Agua', 15, 'Garrafón', 10),
(7, 'Canela en Polvo', 46, 'Lb', 1),
(8, 'Bolsa de Leche en Polvo', 113, 'Kg', 5),
(9, 'Leche Evaporada', 10, 'G', 15),
(10, 'Azúcar', 102, 'Lb', 3),
(11, 'Jarabe de Chocolate', 65, 'Oz', 3),
(12, 'Té Negro', 15, 'G', 2),
(13, 'Té Verde', 19, 'G', 2),
(14, 'Harina de Trigo', 280, 'Lb', 3),
(15, 'Huevos', 28, 'Cartón', 7),
(16, 'Vainilla', 5, 'mL', 7),
(17, 'Mantequilla', 50, 'G', 4),
(18, 'Leche Condensada', 22, 'G', 3),
(19, 'Nutella', 82, 'Kg', 2),
(20, 'Pan Sandwich', 19, 'G', 10),
(21, 'Salsa Dulce', 21, 'Oz', 4),
(22, 'Mayonesa', 20, 'Oz', 4),
(23, 'Picante', 21, 'Oz', 1),
(24, 'Jamón', 20, 'Lb', 8),
(25, 'Pollo', 16, 'Lb', 20),
(26, 'Papas', 5, 'Lb', 30),
(27, 'Aceite', 70, 'mL', 4),
(28, 'Fresa', 15, 'Lb', 20),
(29, 'Banano', 12, 'Docena', 5),
(30, 'Mango', 4, 'Unidad', 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadores`
--

CREATE TABLE `trabajadores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `puesto` varchar(150) NOT NULL,
  `sueldo` int(11) NOT NULL,
  `bonificación` int(11) NOT NULL DEFAULT 250,
  `total_devengado` int(11) NOT NULL,
  `igss` double NOT NULL,
  `prestamo` int(11) NOT NULL DEFAULT 0,
  `anticipo` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `trabajadores`
--

INSERT INTO `trabajadores` (`id`, `nombre`, `puesto`, `sueldo`, `bonificación`, `total_devengado`, `igss`, `prestamo`, `anticipo`) VALUES
(1, 'Juan Pérez', 'Barista', 2000, 250, 0, 0, 0, 0),
(2, 'Alejandra Salázar', 'Barista', 2350, 250, 0, 0, 0, 0),
(3, 'Sergio Hernández', 'Mesero', 1700, 250, 0, 0, 0, 0),
(4, 'Alexander García', 'Cocinero', 2300, 250, 0, 0, 0, 0),
(5, 'Francisco Águilar', 'Cajero', 1500, 250, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `user` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `tipo` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`user`, `password`, `tipo`) VALUES
('admin', '123', 'Admin'),
('trabajador', '456', 'Trabajador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
