-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2018 a las 06:02:43
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estudiantecodigo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `id_course` int(11) NOT NULL,
  `topic` varchar(45) NOT NULL,
  `date_start` varchar(45) NOT NULL,
  `date_end` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `class`
--

INSERT INTO `class` (`id`, `id_course`, `topic`, `date_start`, `date_end`) VALUES
(1, 1, '', '2018-10-28T14:56', '2018-10-28T13:02'),
(2, 1, '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `course`
--

CREATE TABLE `course` (
  `id_course` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `course`
--

INSERT INTO `course` (`id_course`, `name`) VALUES
(1, 'Programacion Web');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `courses_students`
--

CREATE TABLE `courses_students` (
  `id_course` int(11) NOT NULL,
  `id_student` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `courses_students`
--

INSERT INTO `courses_students` (`id_course`, `id_student`) VALUES
(1, 2017114002),
(1, 2016114013),
(1, 2017114030),
(1, 2016214015),
(1, 2016114035),
(1, 2015114015),
(1, 2013214044),
(1, 2015214044),
(1, 2013214056),
(1, 2014214071),
(1, 2015214059),
(1, 2013214064),
(1, 2014114130),
(1, 2016214108),
(1, 2012214069),
(1, 2013214089),
(1, 2016214046),
(1, 2016114099),
(1, 2013214101),
(1, 2017114091),
(1, 2011114131),
(1, 2014214134),
(1, 2008114147),
(1, 2010214127);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `courses_teachers`
--

CREATE TABLE `courses_teachers` (
  `id_course` int(11) NOT NULL,
  `id_teacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `courses_teachers`
--

INSERT INTO `courses_teachers` (`id_course`, `id_teacher`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `student`
--

CREATE TABLE `student` (
  `code` int(11) NOT NULL,
  `name` text,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `state` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `student`
--

INSERT INTO `student` (`code`, `name`, `usuario`, `password`, `age`, `gender`, `state`) VALUES
(2008114147, 'VALDEZ LOZANO MANUEL RODRIGO', '', '', 0, '', 0),
(2010214127, 'VILLA POLO LUIS ALBERTO', '', '', 0, '', 0),
(2011114131, 'RODRIGUEZ DIAZ MAURICIO RAFAEL', '', '', 0, '', 0),
(2012214069, 'MOLINA DE LA CRUZ FREDYS EDUARDO', '', '', 0, '', 0),
(2013214044, 'DUARTE PORRAS MIGUEL', '', '', 0, '', 0),
(2013214056, 'GARCIA SANCHEZ DEYVER DAVID', '', '', 0, '', 0),
(2013214064, 'JAIMES PEREZ ALEJANDRA PATRICIA', '', '', 0, '', 0),
(2013214089, 'OLARTE DEMARTINO ANDRES DAVID', '', '', 0, '', 0),
(2013214101, 'PERTUZ VIDES NAREN DAVID', 'pertuz.20', '1234567', 20, 'M', 0),
(2014114130, 'MANJARRES ROMERO IVAN ANDRES', 'manjarrez.50', '1234567', 25, 'M', 0),
(2014214071, 'HIDALGO JIMENEZ MICHAEL ANDRES', '', '', 0, '', 0),
(2014214134, 'URIELES NAVAS MAYRON ALFONSO', '', '', 0, '', 0),
(2015114015, 'DE LA HOZ GUERRA JASSETH YAMITH', '', '', 0, '', 0),
(2015214044, 'ESCORCIA PERTUZ DEIBER ANDRES', '', '', 0, '', 0),
(2015214059, 'HURTADO BUENDIA HANSSEL ALFONSO', '', '', 0, '', 0),
(2016114013, 'BERMUDEZ QUINTO JESUS DAVID', '', '', 0, '', 0),
(2016114035, 'DE LA CRUZ BOCANEGRA JHAN CARLOS', '', '', 0, '', 0),
(2016114099, 'PATRON RAMIREZ BREYNER DAVID', '', '', 0, '', 0),
(2016214015, 'DE ARMAS LARA ELKIN ENRIQUE', '', '', 0, '', 0),
(2016214046, 'OSPINO AYALA LUIS FERNANDO', '', '', 0, '', 0),
(2016214108, 'MIRANDA PATERNINA YEISY ESTHER', '', '', 0, '', 0),
(2017114002, 'ACUÑA FRANCO MARLON YESID', '', '', 0, '', 0),
(2017114030, 'DANGOND FERNANDEZ SANTIAGO', '', '', 0, '', 0),
(2017114091, 'QUINTERO CASTAÑO ROBINSON', '', '', 0, '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teacher`
--

CREATE TABLE `teacher` (
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `teacher`
--

INSERT INTO `teacher` (`username`, `password`, `name`, `age`, `gender`, `id`) VALUES
('johan2018', 'johan12345', 'Johan Robles', 35, 'M', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_course` (`id_course`);

--
-- Indices de la tabla `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id_course`);

--
-- Indices de la tabla `courses_students`
--
ALTER TABLE `courses_students`
  ADD KEY `id_course` (`id_course`),
  ADD KEY `id_student` (`id_student`);

--
-- Indices de la tabla `courses_teachers`
--
ALTER TABLE `courses_teachers`
  ADD KEY `id_course` (`id_course`),
  ADD KEY `id_teacher` (`id_teacher`);

--
-- Indices de la tabla `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`code`);

--
-- Indices de la tabla `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`username`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`id_course`) REFERENCES `course` (`id_course`);

--
-- Filtros para la tabla `courses_students`
--
ALTER TABLE `courses_students`
  ADD CONSTRAINT `courses_students_ibfk_1` FOREIGN KEY (`id_course`) REFERENCES `course` (`id_course`),
  ADD CONSTRAINT `courses_students_ibfk_2` FOREIGN KEY (`id_student`) REFERENCES `student` (`code`);

--
-- Filtros para la tabla `courses_teachers`
--
ALTER TABLE `courses_teachers`
  ADD CONSTRAINT `courses_teachers_ibfk_1` FOREIGN KEY (`id_course`) REFERENCES `course` (`id_course`),
  ADD CONSTRAINT `courses_teachers_ibfk_2` FOREIGN KEY (`id_teacher`) REFERENCES `teacher` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
