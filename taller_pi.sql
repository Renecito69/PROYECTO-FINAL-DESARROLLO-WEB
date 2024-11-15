-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 20-03-2024 a las 01:02:23
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `taller_pi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talleres`
--

CREATE TABLE `talleres` (
  `id` int(11) NOT NULL,
  `nombre_taller` varchar(255) NOT NULL,
  `runt` int(11) NOT NULL,
  `camara_comercio` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `tipo_taller` enum('Mecanico','Frenos','Laminas y Pintura','Alineacion y Balanceo','Transmisión','Exostos','Tren Delantero','Electrico','Multiservicio') NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `talleres`
--

INSERT INTO `talleres` (`id`, `nombre_taller`, `runt`, `camara_comercio`, `direccion`, `tipo_taller`, `updated_at`, `created_at`) VALUES
(1, 'MOTOTT', 123456789, 'NO SE', 'CALLE 1', 'Mecanico', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `cod_usuario` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `correo_electronico` text NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `tipo_documento` varchar(30) DEFAULT NULL,
  `num_documento` bigint(20) DEFAULT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `celular` bigint(20) DEFAULT NULL,
  `departamento` text DEFAULT NULL,
  `ciudad` text DEFAULT NULL,
  `barrio` text DEFAULT NULL,
  `direccion` text DEFAULT NULL,
  `usuario` varchar(30) NOT NULL,
  `contraseña` varchar(30) NOT NULL,
  `tipo_usuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id` int(11) NOT NULL,
  `placa` varchar(30) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `color` varchar(30) NOT NULL,
  `modelo` int(11) NOT NULL,
  `cc` int(11) NOT NULL,
  `año` int(11) NOT NULL,
  `kilometraje` int(11) NOT NULL,
  `tipo_combustible` varchar(30) NOT NULL,
  `ultimo_mantenimiento` date NOT NULL,
  `tipo_vehiculo` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id`, `placa`, `marca`, `color`, `modelo`, `cc`, `año`, `kilometraje`, `tipo_combustible`, `ultimo_mantenimiento`, `tipo_vehiculo`, `created_at`, `updated_at`) VALUES
(1, 'HJK-456', 'Mrx', 'Negro', 2022, 125, 2023, 1555555, 'Gasolina', '2024-03-15', 'Moto', NULL, '2024-03-20 02:05:30'),
(4, 'XYZ-789', 'NKD', 'AMARILLO', 2023, 125, 2023, 150000, 'GASOLINA', '2024-03-19', 'MOTO', NULL, NULL),
(6, 'ABC-123', 'Toyota', 'Rojo', 2022, 1500, 2020, 10000, 'Gasolina', '2020-03-31', 'Carro', '2024-03-20 02:05:53', '2024-03-20 02:05:53');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
