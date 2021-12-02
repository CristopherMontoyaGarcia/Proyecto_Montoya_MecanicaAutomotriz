-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2021 a las 07:22:34
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mecanica_automotriz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(10) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `telefono` varchar(25) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `num_licencia` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nombres`, `apellidos`, `telefono`, `correo`, `direccion`, `num_licencia`) VALUES
(999, 'Cristopher', 'Montoya ', '6568180839', 'cristopher999@gmail.com', 'Parajes #1313', '1234567891'),
(1000, 'Cris', 'Garcia', '6561234567', 'Cris1000@gmail.com', 'Fortin #12', '1987654321'),
(1001, 'Filipino', 'Torres', '6569876543', 'Filipino1001@gmail.com', 'Fondo de Bikini', '8521364795');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mecanicos`
--

CREATE TABLE `mecanicos` (
  `idmecanico` int(25) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `categoria` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mecanicos`
--

INSERT INTO `mecanicos` (`idmecanico`, `nombres`, `apellidos`, `direccion`, `telefono`, `correo`, `categoria`) VALUES
(123, 'Juan', 'Mecanico', 'Bahia del salado', '6562223641', 'juanmecanico@gmail.com', 'Vestiduras'),
(124, 'Joel', 'Reyes', 'Torres Chavira', '6564789632', 'Joelelectrico@gmail.com', 'Electrico'),
(125, 'Mauro', 'Jimenez', 'Fortin de la soledad', '6562365489', 'mauromecanico@gmail.com', 'General');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_rep`
--

CREATE TABLE `tipo_rep` (
  `idrepuesto` int(10) NOT NULL,
  `repuesto` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `precio` varchar(10) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `proveedor` text NOT NULL,
  `existencias` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_rep`
--

INSERT INTO `tipo_rep` (`idrepuesto`, `repuesto`, `descripcion`, `precio`, `marca`, `proveedor`, `existencias`) VALUES
(666, 'Foco delantero', 'Foco faro luz alta y baja de foco delantero', '$178', 'Mustang', 'Ford', '25'),
(667, 'Autoestereo', 'Autoestereo dual multimedia sin CD XMD2628 de 6.2 ', '$2,799', 'Dual', 'Dual', '5'),
(668, 'Bomba de gasolina', 'Repuesto bomba gasolina chevrolet chevy Pop 1.61 2', '$583', 'Chevy', 'Chevrolet', '42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `idmatricula` varchar(10) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `fecha_entre` varchar(10) NOT NULL,
  `hora_entre` varchar(10) NOT NULL,
  `propietario` varchar(50) NOT NULL,
  `cliente` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`idmatricula`, `modelo`, `color`, `fecha_entre`, `hora_entre`, `propietario`, `cliente`) VALUES
('1154AER', 'Focus', 'Plata', '12/12/2021', '5:00 pm', 'Cris Garcia', 'Cris Garcia'),
('999 EDH', 'Mustang', 'Rojo', '3/12/2021', '3:00 pm ', 'Cristopher Montoya', 'Cristopher Montoya'),
('CAL 280', 'Chevy', 'Negro', '24/12/2021', '10:00 am', 'Mara Torres', 'Filipino Torres');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `mecanicos`
--
ALTER TABLE `mecanicos`
  ADD PRIMARY KEY (`idmecanico`);

--
-- Indices de la tabla `tipo_rep`
--
ALTER TABLE `tipo_rep`
  ADD PRIMARY KEY (`idrepuesto`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`idmatricula`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
