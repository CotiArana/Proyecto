-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2018 a las 15:21:39
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `asistenciaescuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(50) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `id_curso` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `descripcion`, `id_curso`) VALUES
(1, 'Quintero Julieta', 21),
(2, 'Martina Masabeu', 21),
(3, 'Juan Acosta', 21),
(4, 'Dorotea Bevan', 20),
(5, 'Milagros Barrionuevo', 20),
(6, 'Lucas Saez', 20),
(7, 'Luciano Gomez', 19),
(8, 'Valentina Millan', 19),
(9, 'Joaquin Vallejo', 19),
(10, 'Rocio Correa', 18),
(11, 'Catalina Fernandez', 18),
(12, 'Joaquin Miranda', 18),
(13, 'Camila Gomez', 17),
(14, 'Trinidad Romera', 17),
(15, 'Laureano Bruno', 17),
(16, 'Candela Golato', 17),
(17, 'Felipe Cabral', 16),
(18, 'Martin Bassola', 16),
(19, 'Abril Corredera', 16),
(20, 'Jazmin Villagra', 15),
(21, 'Martin Flores', 15),
(22, 'Francisco Arana', 15),
(23, 'Aylén Jaime Prats', 14),
(24, 'Candela Esteller', 14),
(25, 'Nahuel Rovera', 14),
(26, 'Agustina Del Boca', 13),
(27, 'Macarena Murua', 13),
(28, 'Lautaro Olmedo', 13),
(29, 'Manuel Faoro', 12),
(30, 'Martin Delbazi', 12),
(31, 'Agustina Chipolletta', 12),
(32, 'Pilar Pompolo', 11),
(33, 'Santiago Chipoletta', 11),
(34, 'Ignacio Barroso', 11),
(35, 'Valentina Llamas', 10),
(36, 'Trinidad Benavidez', 10),
(37, 'Aylén Peralta', 10),
(38, 'Riziero Preti', 9),
(39, 'Manuel Centeno', 9),
(40, 'Juan Baz', 9),
(41, 'Nazarena Quintero', 8),
(42, 'Belén Bresca', 8),
(43, 'Valentina Olmedo', 7),
(44, 'Mateo Barrera', 7),
(45, 'Lucas Perez', 6),
(46, 'Matias Berenguer', 6),
(47, 'Lautaro Del Boca', 5),
(48, 'Maximiliano Diaz', 5),
(49, 'Candela Ruarte', 4),
(50, 'Maria Lopez', 4),
(51, 'Jonas Benzo', 3),
(52, 'Sebastian Bustos', 3),
(53, 'Agustin Heredia', 2),
(54, 'Benjamin Gomez', 2),
(55, 'Martin Velez', 1),
(56, 'Marcos Lugano', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `dia` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id`, `id_alumno`, `tipo`, `dia`, `hora`) VALUES
(1, 17, 'Falta', '2018-06-19', '08:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` int(50) NOT NULL,
  `descripcion` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `descripcion`) VALUES
(1, 'primer año A'),
(2, 'primer año B'),
(3, 'primer año C'),
(4, 'segundo año A'),
(5, 'segundo año B'),
(6, 'segundo año C'),
(7, 'tercer año A'),
(8, 'tercer año B'),
(9, 'tercer año C'),
(10, 'cuarto año A'),
(11, 'cuarto año B'),
(12, 'cuarto año C'),
(13, 'quinto año A'),
(14, 'quinto año B'),
(15, 'quinto año C'),
(16, 'sexto año A'),
(17, 'sexto año B'),
(18, 'sexto año C'),
(19, 'séptimo año A'),
(20, 'séptimo año B'),
(21, 'séptimo año C');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
