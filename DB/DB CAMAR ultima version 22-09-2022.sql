-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 23-09-2022 a las 02:57:29
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `camar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'juanjo', '0d69fb7bc640c47248645166d18557ead9a1279c'),
(2, 'juanjose', '0e830d07921f69ef6a6d40638d4da3a06d6243f9');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bouquets`
--

CREATE TABLE `bouquets` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` longtext NOT NULL,
  `caracteristica1` text NOT NULL,
  `caracteristica2` text NOT NULL,
  `caracteristica3` text NOT NULL,
  `caracteristica4` text NOT NULL,
  `img` text NOT NULL,
  `precio` int(11) NOT NULL,
  `precioPantalla` varchar(50) NOT NULL,
  `inventario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `bouquets`
--

INSERT INTO `bouquets` (`id`, `titulo`, `descripcion`, `caracteristica1`, `caracteristica2`, `caracteristica3`, `caracteristica4`, `img`, `precio`, `precioPantalla`, `inventario`) VALUES
(1, 'Bouquet Nº1', 'Ramo lleno de vividas flores para regalar a esa persona que es especial en nuestra vida.', 'Rosas Rojas', 'Orquidea', 'Ranunculos', 'Tarjeta', './imgs/bouquets/bouquet_001.jpeg', 70000, '70.000', 2),
(2, 'Bouquet Nº2', 'Ramo lleno de vividas flores para regalar a esa persona que es especial en nuestra vida.', 'Rosas Multicolor', 'Peonias', 'Hortencias', 'Alcatraces', './imgs/bouquets/bouquet_002.jpeg', 55000, '55.000', 3),
(3, 'Bouquet Nº3', 'Ramo lleno de vividas flores para regalar a esa persona que es especial en nuestra vida.', 'Girasoles', 'Nubes', 'Cinta', 'Ranunculos', './imgs/bouquets/bouquet_003.jpeg', 60000, '60.000', 3),
(4, 'Bouquet Nº4', 'Ramo lleno de vividas flores para regalar a esa persona que es especial en nuestra vida.', 'Tulipanes', 'Rosas', 'Dalias', 'Lilis', './imgs/bouquets/bouquet_004.jpeg', 90000, '90.000', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idCliente` int(11) NOT NULL,
  `nombres` text NOT NULL,
  `apellidos` text NOT NULL,
  `celular` bigint(10) NOT NULL,
  `correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idCliente`, `nombres`, `apellidos`, `celular`, `correo`) VALUES
(1, 'Andres', 'Benjumea Reinoso', 3023344972, 'andresbenfu@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `celular` bigint(20) NOT NULL,
  `mensaje` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombres`, `correo`, `celular`, `mensaje`) VALUES
(1, 'andres', 'benjumea.andres.112@gmail.com', 3023344972, 'asdasdasdasdada'),
(2, 'Samuel', 'andresbenfu@gmail.com', 3023344972, 'dfgfedgdfgdfgdfg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exclusivos`
--

CREATE TABLE `exclusivos` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` longtext NOT NULL,
  `caracteristica1` text NOT NULL,
  `caracteristica2` text NOT NULL,
  `caracteristica3` text NOT NULL,
  `caracteristica4` text NOT NULL,
  `img` text NOT NULL,
  `precio` int(11) NOT NULL,
  `precioPantalla` varchar(50) NOT NULL,
  `inventario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `exclusivos`
--

INSERT INTO `exclusivos` (`id`, `titulo`, `descripcion`, `caracteristica1`, `caracteristica2`, `caracteristica3`, `caracteristica4`, `img`, `precio`, `precioPantalla`, `inventario`) VALUES
(1, 'Exclusivo Nº1', 'Ramos exclusivos y lujosos para esas ocasiones de gran importancia. Perfecto para un regalo de pareja o una propuesta amorosa.', 'Rosas', 'Claveles', 'Follaje', 'Tarjeta', './imgs/exclusivos/exclusivo_001.jpeg', 250000, '250.000', 4),
(2, 'Exclusivo Nº2', 'Ramos exclusivos y lujosos para esas ocasiones de gran importancia. Perfecto para un regalo de pareja o una propuesta amorosa.', 'Alcatraces', 'Orquídeas', 'Peonías', 'Paniculata', './imgs/exclusivos/exclusivo_002.jpeg', 130000, '130.000', 4),
(3, 'Exclusivo Nº3', 'Ramos exclusivos y lujosos para esas ocasiones de gran importancia. Perfecto para un regalo de pareja o una propuesta amorosa.', 'Orquídeas', 'Rosas', 'Claveles', 'Follaje', './imgs/exclusivos/exclusivo_003.jpeg', 165000, '165.000', 4),
(4, 'Exclusivo Nº4', 'Ramos exclusivos y lujosos para esas ocasiones de gran importancia. Perfecto para un regalo de pareja o una propuesta amorosa.', 'Claveles', 'Peonías', 'Paniculata', 'Rosas', './imgs/exclusivos/exclusivo_004.jpeg', 280000, '280.000', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funebres`
--

CREATE TABLE `funebres` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` longtext NOT NULL,
  `caracteristica1` text NOT NULL,
  `caracteristica2` text NOT NULL,
  `caracteristica3` text NOT NULL,
  `caracteristica4` text NOT NULL,
  `img` text NOT NULL,
  `precio` int(11) NOT NULL,
  `precioPantalla` varchar(50) NOT NULL,
  `inventario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `funebres`
--

INSERT INTO `funebres` (`id`, `titulo`, `descripcion`, `caracteristica1`, `caracteristica2`, `caracteristica3`, `caracteristica4`, `img`, `precio`, `precioPantalla`, `inventario`) VALUES
(1, 'Funebre Nº1', 'Preciosos y elegantes arreglos florales para dar sentidos pésame en esos momentos complicados de la vida.', 'Rosas', 'Amapolas', 'Solidago', 'Nube', './imgs/funebres/funebre_001.jpeg', 260000, '260.000', 6),
(2, 'Funebre Nº2', 'Preciosos y elegantes arreglos florales para dar sentidos pésame en esos momentos complicados de la vida.', 'Lisianthus', 'Paniculata', 'Tulipanes', 'Nube', './imgs/funebres/funebre_002.jpeg', 200000, '200.000', 2),
(3, 'Funebre Nº3', 'Preciosos y elegantes arreglos florales para dar sentidos pésame en esos momentos complicados de la vida.', 'Paniculata', 'Gerbera', 'Lisianthus', 'Lilis', './imgs/funebres/funebre_003.jpeg', 240000, '240.000', 2),
(4, 'Funebre Nº4', 'Preciosos y elegantes arreglos florales para dar sentidos pésame en esos momentos complicados de la vida.', 'Lilis', 'Dalias', 'Paniculata', 'Gerbera', './imgs/funebres/funebre_004.jpeg', 180000, '180.000', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `nombres` text NOT NULL,
  `apellidos` text NOT NULL,
  `celular` bigint(20) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `tarjeta` text NOT NULL,
  `numeroTarjeta` bigint(20) NOT NULL,
  `fechaVencimiento` date NOT NULL,
  `cProducto` text NOT NULL,
  `idProducto` int(11) NOT NULL,
  `cantidadProductos` int(11) NOT NULL,
  `total` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `nombres`, `apellidos`, `celular`, `correo`, `tarjeta`, `numeroTarjeta`, `fechaVencimiento`, `cProducto`, `idProducto`, `cantidadProductos`, `total`) VALUES
(1, 'Andres', 'Benjumea Reinoso', 3023344972, 'andresbenfu@gmail.com', 'BBVA', 123213123123, '2022-09-22', 'funebres', 1, 6, 1560000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tropicales`
--

CREATE TABLE `tropicales` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` longtext NOT NULL,
  `caracteristica1` text NOT NULL,
  `caracteristica2` text NOT NULL,
  `caracteristica3` text NOT NULL,
  `caracteristica4` text NOT NULL,
  `img` text NOT NULL,
  `precio` int(11) NOT NULL,
  `precioPantalla` varchar(50) NOT NULL,
  `inventario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tropicales`
--

INSERT INTO `tropicales` (`id`, `titulo`, `descripcion`, `caracteristica1`, `caracteristica2`, `caracteristica3`, `caracteristica4`, `img`, `precio`, `precioPantalla`, `inventario`) VALUES
(1, 'Tropical Nº1', 'Vividas flores llenas de colores llamativos y fragancias atractivas. Ideales para regalar en fiestas y celebraciones.', 'Orquídeas', 'Claveles', 'Hortensias', 'Paniculata', './imgs/tropicales/tropical_001.jpeg', 150000, '150.000', 3),
(2, 'Tropical Nº2', 'Vividas flores llenas de colores llamativos y fragancias atractivas. Ideales para regalar en fiestas y celebraciones.', 'Hortensias', 'Paniculata', 'Orquídeas', 'Begonias', './imgs/tropicales/tropical_002.jpeg', 140000, '140.000', 5),
(3, 'Tropical Nº3', 'Vividas flores llenas de colores llamativos y fragancias atractivas. Ideales para regalar en fiestas y celebraciones.', 'Begonias', 'Paniculata', 'Claveles', 'Hortensias', './imgs/tropicales/tropical_003.jpeg', 180000, '180.000', 6),
(4, 'Tropical Nº4', 'Vividas flores llenas de colores llamativos y fragancias atractivas. Ideales para regalar en fiestas y celebraciones.', 'Paniculata', 'Orquídeas', 'Hortensias', 'Claveles', './imgs/tropicales/tropical_004.jpeg', 200000, '200.000', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `bouquets`
--
ALTER TABLE `bouquets`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCliente`) USING BTREE,
  ADD UNIQUE KEY `UNIQUE` (`correo`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `exclusivos`
--
ALTER TABLE `exclusivos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `funebres`
--
ALTER TABLE `funebres`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tropicales`
--
ALTER TABLE `tropicales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `bouquets`
--
ALTER TABLE `bouquets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `exclusivos`
--
ALTER TABLE `exclusivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `funebres`
--
ALTER TABLE `funebres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tropicales`
--
ALTER TABLE `tropicales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
