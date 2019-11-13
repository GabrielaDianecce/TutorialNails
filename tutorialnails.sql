-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2019 a las 01:49:13
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tutorialnails`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `idAdministrador` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contraseña` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `idImagen` int(11) NOT NULL,
  `Src` varchar(100) NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `titulo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`idImagen`, `Src`, `Descripcion`, `titulo`) VALUES
(1, 'img2.jpg', 'asasas', 'asasasa'),
(3, 'img2.jpg', 'aosidoasid', 'asidaoid'),
(4, 'img1.jpg', 'Julis', 'Julis'),
(5, '', 'eeeeeeeee', 'kkkkkkkkkkkk'),
(6, 'img2.jpg', 'lksmf', 'kjsdnfls'),
(7, 'img2.jpg', 'lksmf', 'kjsdnfls'),
(8, 'img2.jpg', 'lksmf', 'kjsdnfls'),
(10, 'img4.jpg', 'lkdnflws', 'abc'),
(11, 'img3.jpg', 'kenkfl', 'sss');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contrasena` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `Nombre`, `Email`, `Contrasena`) VALUES
(1, 'Gabiiiiiii', 'gabrieladianecce@gmail.com', '123456'),
(2, 'Ana Gabriela', 'gabrieladianecce@gmail.com', '23456'),
(3, 'Julia', 'juliaclipes@gmail.com', 'innaaaaaaa'),
(4, 'Lucelia', 'lucelialucelia@gmail.com', '221212'),
(5, 'jjjuauj', 'poooppp@gmail.com', '363653'),
(6, 'santiago', 'santiago@gmail.com', '445456565525');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `idVideo` int(11) NOT NULL,
  `Titulo` varchar(50) NOT NULL,
  `Src` varchar(100) NOT NULL,
  `Descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`idVideo`, `Titulo`, `Src`, `Descripcion`) VALUES
(1, 'SAISAOSI', 'video6.mp4', 'OSIAOSIAOSI'),
(2, 'SAISAOSI', 'video6.mp4', 'OSIAOSIAOSI'),
(3, 'SAISAOSI', 'video6.mp4', 'OSIAOSIAOSI'),
(4, 'SAISAOSI', 'video6.mp4', 'OSIAOSIAOSI'),
(5, 'aqui', '', 'aaqui'),
(6, 'aqui', 'video9.mp4', 'aaqui'),
(7, 'aqui', 'video9.mp4', 'aaqui'),
(8, 'UAYUAY', 'video9.mp4', 'rrrrrr'),
(9, 'uuuuuhh', '', 'oooooooooo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idAdministrador`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`idImagen`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`idVideo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idAdministrador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `idImagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `idVideo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
