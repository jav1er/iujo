-- phpMyAdmin SQL Dump
-- version 4.4.15.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 18, 2017 at 06:10 PM
-- Server version: 5.5.46
-- PHP Version: 5.4.45

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tesis0.01`
--

-- --------------------------------------------------------

--
-- Table structure for table `contratacion`
--

CREATE TABLE `contratacion` (
  `id` int(11) NOT NULL,
  `numero_contratacion` varchar(45) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date DEFAULT NULL,
  `tipo_contratacion_id` int(11) NOT NULL,
  `departamento_id` int(11) NOT NULL,
  `cargo_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contratacion`
--

INSERT INTO `contratacion` (`id`, `numero_contratacion`, `fecha_inicio`, `fecha_fin`, `tipo_contratacion_id`, `departamento_id`, `cargo_id`, `status_id`) VALUES
(1, '0.0', '2017-01-02', '2017-04-12', 150, 160, 182, 155);

-- --------------------------------------------------------

--
-- Table structure for table `direccion`
--

CREATE TABLE `direccion` (
  `id` int(11) NOT NULL,
  `direccion` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `padre_id` int(11) DEFAULT NULL,
  `referencia_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `direccion`
--

INSERT INTO `direccion` (`id`, `direccion`, `padre_id`, `referencia_id`) VALUES
(1, 'Distrito Capital', NULL, 2),
(2, 'Miranda', NULL, 2),
(3, 'Vargas', NULL, 2),
(4, 'Libertador', 1, 3),
(5, 'Acevedo', 2, 3),
(6, 'Andres Bello', 2, 3),
(7, 'Baruta', 2, 3),
(8, 'Brion', 2, 3),
(9, 'Buroz', 2, 3),
(10, 'Carrizal', 2, 3),
(11, 'Chacao', 2, 3),
(12, 'Cristobal Rojas', 2, 3),
(13, 'El Hatillo', 2, 3),
(14, 'Guaicaipuro', 2, 3),
(15, 'Independencia', 2, 3),
(16, 'Lander', 2, 3),
(17, 'Los Salias', 2, 3),
(18, 'Paez', 2, 3),
(19, 'Paz Castillo', 2, 3),
(20, 'Pedro Gual', 2, 3),
(21, 'Plaza', 2, 3),
(22, 'Simon Bolivar', 2, 3),
(23, 'Sucre', 2, 3),
(24, 'Urdaneta', 2, 3),
(25, 'Zamora', 2, 3),
(26, 'Vargas', 3, 3),
(27, 'Altagracia', 4, 4),
(28, 'Candelaria', 4, 4),
(29, 'Catedral', 4, 4),
(30, 'La Pastora', 4, 4),
(31, 'San Agustin', 4, 4),
(32, 'San Jose', 4, 4),
(33, 'San Juan', 4, 4),
(34, 'Santa Rosalia', 4, 4),
(35, 'Santa Teresa', 4, 4),
(36, 'Sucre', 4, 4),
(37, '23 de Enero', 4, 4),
(38, 'Antimano', 4, 4),
(39, 'El Recreo', 4, 4),
(40, 'El Valle', 4, 4),
(41, 'La Vega', 4, 4),
(42, 'Macarao', 4, 4),
(43, 'Caricuao', 4, 4),
(44, 'El Junquito', 4, 4),
(45, 'Coche', 4, 4),
(46, 'San Pedro', 4, 4),
(47, 'San Bernardino', 4, 4),
(48, 'El Paraiso', 4, 4),
(49, 'Araguita', 5, 4),
(50, 'Arevalo Gonzalez', 5, 4),
(51, 'Capaya', 5, 4),
(52, 'Caucagua', 5, 4),
(53, 'Panaquire', 5, 4),
(54, 'Ribas', 5, 4),
(55, 'El Cafe', 5, 4),
(56, 'Marizapa', 5, 4),
(57, 'Cumbo', 6, 4),
(58, 'San Jose de Barlovento', 6, 4),
(59, 'El Cafetal', 7, 4),
(60, 'Las Minas', 7, 4),
(61, 'Nuestra Sra del Rosario', 7, 4),
(62, 'Higuerote', 8, 4),
(63, 'Curiepe', 8, 4),
(64, 'Tacarigua de Brion', 8, 4),
(65, 'Mamporal', 9, 4),
(66, 'Carrizal', 10, 4),
(67, 'Chacao Caracas', 11, 4),
(68, 'Charallave', 12, 4),
(69, 'Las Brisas', 12, 4),
(70, 'Hatillo Caracas', 13, 4),
(71, 'Altagracia de la Montania', 14, 4),
(72, 'Cecilio Acosta', 14, 4),
(73, 'Los Teques', 14, 4),
(74, 'El Jarillo', 14, 4),
(75, 'San Pedro', 14, 4),
(76, 'Tacata', 14, 4),
(77, 'Paracotos', 14, 4),
(78, 'Cartanal', 15, 4),
(79, 'Santa Teresa', 15, 4),
(80, 'La Democracia', 16, 4),
(81, 'Ocumare del Tuy', 16, 4),
(82, 'Santa Barbara', 16, 4),
(83, 'San Antonio de los Altos', 17, 4),
(84, 'Rio Chico', 18, 4),
(85, 'El Guapo', 18, 4),
(86, 'Tacarigua de la Laguna', 18, 4),
(87, 'Paparo', 18, 4),
(88, 'San Fernando del Guapo', 18, 4),
(89, 'Santa Lucia del Tuy', 19, 4),
(90, 'Cupira', 20, 4),
(91, 'Machurucuto', 20, 4),
(92, 'Guarenas', 21, 4),
(93, 'San Antonio de Yare', 22, 4),
(94, 'San Francisco de Yare', 22, 4),
(95, 'Leoncio Martinez', 23, 4),
(96, 'Caucaguita', 23, 4),
(97, 'Filas de Mariche', 23, 4),
(98, 'La Dolorita', 23, 4),
(99, 'Petare', 23, 4),
(100, 'Cua', 24, 4),
(101, 'Nueva Cua', 24, 4),
(102, 'Guatire', 25, 4),
(103, 'Bolivar', 25, 4),
(104, 'Caraballeda', 26, 4),
(105, 'Carayaca', 26, 4),
(106, 'Carlos Soublette', 26, 4),
(107, 'Caruao', 26, 4),
(108, 'Catia La Mar', 26, 4),
(109, 'El Junko', 26, 4),
(110, 'La Guaira', 26, 4),
(111, 'Macuto', 26, 4),
(112, 'Maiquetia', 26, 4),
(113, 'Naiguata', 26, 4),
(114, 'Urimare', 26, 4);

-- --------------------------------------------------------

--
-- Table structure for table `discapacidades`
--

CREATE TABLE `discapacidades` (
  `id` int(11) NOT NULL,
  `discapacidad` varchar(45) NOT NULL,
  `padre_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `discapacidades`
--

INSERT INTO `discapacidades` (`id`, `discapacidad`, `padre_id`) VALUES
(1, 'Discapacidad auditiva', NULL),
(2, ' Sordera', 1),
(3, 'Discapacidad visual', NULL),
(4, ' Ceguera', 3);

-- --------------------------------------------------------

--
-- Table structure for table `evaluacion`
--

CREATE TABLE `evaluacion` (
  `id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `periodo_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `evaluacion`
--

INSERT INTO `evaluacion` (`id`, `fecha`, `periodo_id`) VALUES
(1, '2017-02-02 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `evaluacion_has_preguntas`
--

CREATE TABLE `evaluacion_has_preguntas` (
  `evaluacion_id` int(11) NOT NULL,
  `preguntas_id` int(11) NOT NULL,
  `valoracion_id` int(11) NOT NULL,
  `persona_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `formacion`
--

CREATE TABLE `formacion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `tipo_formacion_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `formacion`
--

INSERT INTO `formacion` (`id`, `nombre`, `tipo_formacion_id`) VALUES
(1, 'LICENCIADO (LIC) en Área Administrativa', 171),
(2, 'NO BACHILLER (NB)', 167);

-- --------------------------------------------------------

--
-- Table structure for table `historial`
--

CREATE TABLE `historial` (
  `id` int(11) NOT NULL,
  `numero_contratacion` int(11) DEFAULT NULL,
  `salario` float DEFAULT NULL,
  `cargo` varchar(45) DEFAULT NULL,
  `departamento` varchar(45) DEFAULT NULL,
  `fecha_inicio` varchar(45) DEFAULT NULL,
  `fecha_fin` varchar(45) DEFAULT NULL,
  `carrera` varchar(45) DEFAULT NULL,
  `materia` varchar(45) DEFAULT NULL,
  `carga_horaria` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `horario`
--

CREATE TABLE `horario` (
  `id` int(11) NOT NULL,
  `periodo_id` int(11) NOT NULL,
  `aula_id` int(11) NOT NULL,
  `tiempoInicio_id` int(11) NOT NULL,
  `profesor_has_materia_id` int(11) NOT NULL,
  `tiempoFin_id` int(11) NOT NULL,
  `seccion_id` int(11) NOT NULL,
  `dia_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `materia`
--

CREATE TABLE `materia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `abreviatura` varchar(15) NOT NULL,
  `carrera_id` int(11) NOT NULL,
  `hora_id` int(11) NOT NULL,
  `creditos_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `materia_has_horario`
--

CREATE TABLE `materia_has_horario` (
  `materia_id` int(11) NOT NULL,
  `horario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `periodo`
--

CREATE TABLE `periodo` (
  `id` int(11) NOT NULL,
  `periodo` varchar(45) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `periodo`
--

INSERT INTO `periodo` (`id`, `periodo`, `fecha_inicio`, `fecha_fin`) VALUES
(1, '2016_02', '2017-01-02', '2017-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `cedula` varchar(45) NOT NULL,
  `nombre1` varchar(45) NOT NULL,
  `nombre2` varchar(45) DEFAULT NULL,
  `apellido1` varchar(45) NOT NULL,
  `apellido2` varchar(45) DEFAULT NULL,
  `fecha_nacimiento` date NOT NULL,
  `correo` varchar(45) NOT NULL,
  `foto` blob,
  `sexo_id` int(11) NOT NULL,
  `tipo_persona_id` int(11) NOT NULL,
  `parroquia_id` int(11) NOT NULL,
  `estado_civil_id` int(11) NOT NULL,
  `casa` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `persona`
--

INSERT INTO `persona` (`id`, `cedula`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `fecha_nacimiento`, `correo`, `foto`, `sexo_id`, `tipo_persona_id`, `parroquia_id`, `estado_civil_id`, `casa`) VALUES
(1, '24087520', 'simon', 'jose', 'bolivar', 'jimenez', '1990-06-06', 'ksdrg@gmail.com', NULL, 9, 8, 5, 150, 'casa verder puerta azul');

-- --------------------------------------------------------

--
-- Table structure for table `persona_has_discapacidades`
--

CREATE TABLE `persona_has_discapacidades` (
  `persona_id` int(11) NOT NULL,
  `discapacidades_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `persona_has_enfermedades`
--

CREATE TABLE `persona_has_enfermedades` (
  `persona_id` int(11) NOT NULL,
  `enfermedad_id` int(11) NOT NULL,
  `tratamiento` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `persona_has_formacion`
--

CREATE TABLE `persona_has_formacion` (
  `persona_id` int(11) NOT NULL,
  `formacion_id` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_culminacion` date DEFAULT NULL,
  `estado_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `persona_has_redes_sociales`
--

CREATE TABLE `persona_has_redes_sociales` (
  `persona_id` int(11) NOT NULL,
  `redes_sociales_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `persona_has_referencia`
--

CREATE TABLE `persona_has_referencia` (
  `persona_has_referencia_id` int(11) NOT NULL,
  `persona_id` int(11) NOT NULL,
  `referencia_id` int(11) NOT NULL,
  `nexo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `persona_has_seguros`
--

CREATE TABLE `persona_has_seguros` (
  `persona_id` int(11) NOT NULL,
  `seguros_id` int(11) NOT NULL,
  `monto_asegurado` float NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `numero_poliza` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `persona_has_telefono`
--

CREATE TABLE `persona_has_telefono` (
  `persona_id` int(11) NOT NULL,
  `telefono_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `preguntas`
--

CREATE TABLE `preguntas` (
  `id` int(11) NOT NULL,
  `pregunta` varchar(200) NOT NULL,
  `tipo_empleado_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `preguntas`
--

INSERT INTO `preguntas` (`id`, `pregunta`, `tipo_empleado_id`) VALUES
(1, 'Expuso claramente el programa al inicio del semestre', 15),
(2, 'Se llevó a cabo la discusión,acuerdo y firma del contrato de aprendisaje', 15),
(3, 'El contenido de los exámenes se correspode con lo explicado en clase', 15),
(4, 'Planifica suficiente tiempo para las evaluaciones ', 14),
(5, 'La cantidad de contenidos  es asimilable el semestre ', 14),
(6, 'Orienta sobre el uso de libros , guías ,materiales de apoyo y recursos técnicos ', 14),
(7, 'Dedica tiempo apropiado a cada tema ', 14),
(8, 'Desarrolla ordenadamente  las actividades en clase ', 14),
(9, 'Toma en cuenta los conocimientos previos de los estudiantes ', 14),
(10, 'Logro comunicarse efectivamente con el estudiante ', 14),
(11, 'Indica la relación entre los temas de la materia ', 14),
(12, 'Adapta sus explicaciones con ejemplos prácticos y creativos para hacerse entender mejor ', 14),
(13, 'Mantienen criterios claros de evaluación ', 14),
(14, 'Mantiene un ambiente proporcionado para el aprendizaje ', 14),
(15, 'Mantiene una actitud respetuosa y cordial hacia los estudiantes  ', 14),
(16, 'Es receptivo a las intervenciones de los estudios ', 14),
(17, 'Cumple con el horario establecido para la clase  ', 14),
(18, 'Realiza en forma oportuna la entrega  de los exámenes ', 14),
(19, 'Al solicitar revisión  de los exámenes  lo hace  de forma  individualizada ', 14),
(20, 'estimula la partición del estudiante en el proceso de aprendizaje ', 14),
(21, 'existe equilibrio entre la teoría y la practica  ofrecida en la materia  ', 14),
(22, 'Su presentación personal esta acorde con su envestidura  ', 14),
(23, 'Cumple las normas de convivencia ', 14),
(24, 'Hace cumplir las normas de convivencia ', 14);

-- --------------------------------------------------------

--
-- Table structure for table `profesor`
--

CREATE TABLE `profesor` (
  `id` int(11) NOT NULL,
  `carga_horaria` varchar(45) NOT NULL,
  `persona_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profesor`
--

INSERT INTO `profesor` (`id`, `carga_horaria`, `persona_id`) VALUES
(1, 'tiempo indeterminado', 1);

-- --------------------------------------------------------

--
-- Table structure for table `profesor_has_materia`
--

CREATE TABLE `profesor_has_materia` (
  `id` int(11) NOT NULL,
  `profesor_id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `redes_sociales`
--

CREATE TABLE `redes_sociales` (
  `id` int(11) NOT NULL,
  `cuenta` varchar(45) NOT NULL,
  `tipo_red_social_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `redes_sociales`
--

INSERT INTO `redes_sociales` (`id`, `cuenta`, `tipo_red_social_id`) VALUES
(2, 'ergaerg@gmail.com', 188);

-- --------------------------------------------------------

--
-- Table structure for table `referencia`
--

CREATE TABLE `referencia` (
  `id` int(11) NOT NULL,
  `referencia` varchar(45) DEFAULT NULL,
  `padre_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=219 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `referencia`
--

INSERT INTO `referencia` (`id`, `referencia`, `padre_id`) VALUES
(1, 'sexo', NULL),
(2, 'estado', NULL),
(3, 'municipio', NULL),
(4, 'parroquia', NULL),
(5, 'tipo_empleado', NULL),
(6, 'perfil', NULL),
(7, 'codigo_tlf', NULL),
(8, 'nacionalidad', NULL),
(9, 'permiso_reposo', NULL),
(10, 'otros', NULL),
(11, 'Femenino', 1),
(12, 'Masculin', 1),
(13, 'Administrativo', 5),
(14, 'Academico', 5),
(15, 'Obrero', 5),
(18, 'Administrador', 6),
(19, 'Usuario', 6),
(20, '0212', 7),
(21, '0412', 7),
(22, '0414', 7),
(23, '0416', 7),
(24, '0424', 7),
(25, '0426', 7),
(26, 'V', 8),
(27, 'E', 8),
(29, 'Reposo', 9),
(30, 'Permiso', 9),
(33, '1', 10),
(34, '2', 10),
(35, '3', 10),
(36, '4', 10),
(37, '5', 10),
(38, '6', 10),
(47, 'creditos', NULL),
(48, '0', 47),
(49, '1', 47),
(50, '2', 47),
(51, '3', 47),
(52, '4', 47),
(53, '5', 47),
(54, '6', 47),
(55, 'horas', NULL),
(56, '0', 55),
(57, '1', 55),
(58, '2', 55),
(59, '3', 55),
(60, '4', 55),
(61, '5', 55),
(62, '6', 55),
(63, 'seccion', NULL),
(64, 'A', 63),
(65, 'B', 63),
(66, 'C', 63),
(67, 'aula', NULL),
(68, 'A-11', 67),
(69, 'A-12', 67),
(70, 'A-13', 67),
(71, 'A-14', 67),
(72, 'A-15', 67),
(73, 'A-16', 67),
(74, 'B-11', 67),
(75, 'B-12', 67),
(76, 'B-13', 67),
(77, 'B-14', 67),
(78, 'B-15', 67),
(79, 'B-16', 67),
(80, 'Lab-1', 67),
(81, 'Lab-2', 67),
(82, 'Lab-3', 67),
(83, 'Lab-4', 67),
(84, 'Lab-5', 67),
(85, 'Lab-6', 67),
(86, 'Lab-7', 67),
(87, 'Lab-8', 67),
(90, 'tiempoInicio', NULL),
(91, '2:00', 90),
(92, '2:45', 90),
(93, '3:40', 90),
(94, '4:25', 90),
(95, '5:20', 90),
(96, '6:05', 90),
(97, '6:50', 90),
(98, '7:35', 90),
(99, 'tiempoFin', NULL),
(100, '2:45', 99),
(101, '3:30', 99),
(102, '4:25', 99),
(103, '5:10', 99),
(104, '6:05', 99),
(105, '6:50', 99),
(106, '7:35', 99),
(107, '8:20', 99),
(108, 'dia', NULL),
(109, 'lunes', 108),
(110, 'martes', 108),
(111, 'miercoles', 108),
(112, 'jueves', 108),
(113, 'viernes', 108),
(117, 'Coordinador', 6),
(119, 'Canchas', 67),
(120, 'Estado_Civil', NULL),
(121, 'Soltero/a', 120),
(122, 'Comprometido/a', 120),
(123, 'Casado/a', 120),
(124, 'Divorciado/a', 120),
(125, 'Viudo/', 120),
(127, 'tipo_persona', NULL),
(128, 'interno', 127),
(129, 'externo', 127),
(144, 'valoracion', NULL),
(145, '1', 144),
(146, '2', 144),
(147, '3', 144),
(148, '4', 144),
(149, '5', 144),
(150, 'tipo_contratacion', NULL),
(151, 'contrato por tiempo determinado', 150),
(152, 'Contrato por tiempo indeterminado', 150),
(154, 'status', NULL),
(155, 'activo ', 154),
(156, 'finalizado', 154),
(157, 'vencido', 154),
(158, 'departamento', NULL),
(159, 'administrativo', 158),
(160, 'obrero', 158),
(161, 'academico', 158),
(162, 'salarios', NULL),
(163, 'semanal', 162),
(164, 'por hora quicena', 162),
(165, 'tiempo completo por quincena', 162),
(166, 'formacion_academica', NULL),
(167, 'Primaria', 166),
(168, 'Secundaria', 166),
(169, ' Pregrado', NULL),
(170, 'T.S.U', 166),
(171, 'Licenciatura', 166),
(172, 'Ingenieria', 166),
(173, 'Posgrado', NULL),
(174, 'Maestria', 166),
(175, 'Especialidad', 166),
(176, 'Doctorado', 166),
(177, 'cargo', NULL),
(178, 'Vigilante Nocturno', 177),
(179, 'Chofer', 177),
(180, 'Recepcionista', 177),
(181, 'Jefe de Personal', 177),
(182, 'Jefe de Mantenimiento', 177),
(183, 'Bedel', 177),
(184, 'status_formacion', NULL),
(185, 'culminado', 184),
(186, 'en_proceso', 184),
(187, 'suspendido', 184),
(188, 'tipo_social', NULL),
(189, 'Facebook', 188),
(190, 'Twitter', 188),
(191, 'Instagram', 188),
(192, 'referencia_familiar', NULL),
(193, 'Esposo/a', 192),
(194, 'Hijo/a', 192),
(195, 'Padre/Madre', 192),
(196, 'Primo/Prima', 192),
(197, 'referencia_personal', NULL),
(198, 'Amigo/a', 197),
(199, 'Concubino', 197),
(200, 'carrera', NULL),
(201, 'Informatica', 200),
(202, 'Administracion', 200),
(203, NULL, 200),
(204, 'Contaduria', 200),
(205, 'Educacion', 200),
(206, 'Electronica', 200),
(207, 'semestre', NULL),
(208, 'Primer semestre', 207),
(209, 'Segun semestre', 207),
(210, 'Tercer semestre', 207),
(211, 'Cuarto semestre', 207),
(212, 'Quinto semestre', 207),
(213, 'Sexto semestre', 207),
(214, 'discapacidad ', NULL),
(215, '', NULL),
(216, 'Discapacidad auditiva', 214),
(217, ' Discapacidad visual', 214),
(218, 'Discapacidad motora', 214);

-- --------------------------------------------------------

--
-- Table structure for table `referencia_has_materia`
--

CREATE TABLE `referencia_has_materia` (
  `carrera_id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `salario`
--

CREATE TABLE `salario` (
  `id` int(11) NOT NULL,
  `salario` float NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date DEFAULT NULL,
  `horas_mensuales` varchar(15) NOT NULL,
  `contratacion_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salario`
--

INSERT INTO `salario` (`id`, `salario`, `fecha_inicio`, `fecha_fin`, `horas_mensuales`, `contratacion_id`) VALUES
(1, 300000, '2017-01-01', '2017-09-13', '70', 1);

-- --------------------------------------------------------

--
-- Table structure for table `seguros`
--

CREATE TABLE `seguros` (
  `id` int(11) NOT NULL,
  `aseguradora` varchar(45) NOT NULL,
  `pagina_web` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seguros`
--

INSERT INTO `seguros` (`id`, `aseguradora`, `pagina_web`) VALUES
(0, 'aewrgt', 'wef');

-- --------------------------------------------------------

--
-- Table structure for table `telefono`
--

CREATE TABLE `telefono` (
  `id` int(11) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `codigo_tlf_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `telefono`
--

INSERT INTO `telefono` (`id`, `telefono`, `codigo_tlf_id`) VALUES
(1, '8613232', 20),
(2, '8623985', 20);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `clave` varchar(45) NOT NULL,
  `cambio_clave` varchar(45) DEFAULT NULL,
  `pregunta` varchar(45) NOT NULL,
  `respuesta` varchar(45) NOT NULL,
  `persona_id` int(11) NOT NULL,
  `perfil_id` int(11) NOT NULL,
  `carrera_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `clave`, `cambio_clave`, `pregunta`, `respuesta`, `persona_id`, `perfil_id`, `carrera_id`) VALUES
(1, 'e', 'e', NULL, 'w', 'w', 1, 2, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contratacion`
--
ALTER TABLE `contratacion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `numero_contratacion_UNIQUE` (`numero_contratacion`),
  ADD KEY `fk_contratacion_referencia1_idx` (`tipo_contratacion_id`),
  ADD KEY `fk_contratacion_referencia2_idx` (`departamento_id`),
  ADD KEY `fk_contratacion_referencia3_idx` (`cargo_id`),
  ADD KEY `fk_contratacion_referencia4_idx` (`status_id`);

--
-- Indexes for table `direccion`
--
ALTER TABLE `direccion`
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_direccion_direccion1_idx` (`padre_id`),
  ADD KEY `fk_direccion_referencia1_idx` (`referencia_id`);

--
-- Indexes for table `discapacidades`
--
ALTER TABLE `discapacidades`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_discapacidades_discapacidades1_idx` (`padre_id`);

--
-- Indexes for table `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_evaluacion_periodo1_idx` (`periodo_id`);

--
-- Indexes for table `evaluacion_has_preguntas`
--
ALTER TABLE `evaluacion_has_preguntas`
  ADD PRIMARY KEY (`evaluacion_id`,`preguntas_id`),
  ADD UNIQUE KEY `evaluacion_id_UNIQUE` (`evaluacion_id`),
  ADD KEY `fk_evaluacion_has_preguntas_preguntas1_idx` (`preguntas_id`),
  ADD KEY `fk_evaluacion_has_preguntas_evaluacion1_idx` (`evaluacion_id`),
  ADD KEY `fk_evaluacion_has_preguntas_referencia1_idx` (`valoracion_id`),
  ADD KEY `fk_evaluacion_has_preguntas_persona1_idx` (`persona_id`);

--
-- Indexes for table `formacion`
--
ALTER TABLE `formacion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_formacion_referencia2_idx` (`tipo_formacion_id`);

--
-- Indexes for table `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_horario_referencia1_idx` (`tiempoInicio_id`),
  ADD KEY `fk_horario_profesor_has_materia1_idx` (`profesor_has_materia_id`),
  ADD KEY `fk_horario_referencia2_idx` (`tiempoFin_id`),
  ADD KEY `fk_horario_referencia4_idx` (`aula_id`),
  ADD KEY `fk_horario_referencia5_idx` (`seccion_id`),
  ADD KEY `fk_horario_periodo1_idx` (`periodo_id`),
  ADD KEY `fk_horario_referencia3_idx` (`dia_id`);

--
-- Indexes for table `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `carreracol_UNIQUE` (`nombre`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_materia_referencia2_idx` (`hora_id`),
  ADD KEY `fk_materia_referencia3_idx` (`creditos_id`),
  ADD KEY `fk_materia_referencia4_idx` (`carrera_id`);

--
-- Indexes for table `materia_has_horario`
--
ALTER TABLE `materia_has_horario`
  ADD PRIMARY KEY (`materia_id`,`horario_id`),
  ADD KEY `fk_materia_has_horario_horario1_idx` (`horario_id`),
  ADD KEY `fk_materia_has_horario_materia1_idx` (`materia_id`);

--
-- Indexes for table `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cedula_UNIQUE` (`cedula`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_persona_referencia1_idx` (`sexo_id`),
  ADD KEY `fk_persona_referencia2_idx` (`tipo_persona_id`),
  ADD KEY `fk_persona_direccion1_idx` (`parroquia_id`),
  ADD KEY `fk_persona_referencia3_idx` (`estado_civil_id`);

--
-- Indexes for table `persona_has_discapacidades`
--
ALTER TABLE `persona_has_discapacidades`
  ADD PRIMARY KEY (`persona_id`,`discapacidades_id`),
  ADD UNIQUE KEY `persona_id_UNIQUE` (`persona_id`),
  ADD KEY `fk_persona_has_discapacidades_discapacidades1_idx` (`discapacidades_id`),
  ADD KEY `fk_persona_has_discapacidades_persona1_idx` (`persona_id`);

--
-- Indexes for table `persona_has_enfermedades`
--
ALTER TABLE `persona_has_enfermedades`
  ADD PRIMARY KEY (`persona_id`,`enfermedad_id`),
  ADD UNIQUE KEY `persona_id_UNIQUE` (`persona_id`),
  ADD KEY `fk_persona_has_referencia_referencia1_idx` (`enfermedad_id`),
  ADD KEY `fk_persona_has_referencia_persona1_idx` (`persona_id`);

--
-- Indexes for table `persona_has_formacion`
--
ALTER TABLE `persona_has_formacion`
  ADD PRIMARY KEY (`persona_id`,`formacion_id`),
  ADD UNIQUE KEY `persona_id_UNIQUE` (`persona_id`),
  ADD KEY `fk_persona_has_formacion_formacion1_idx` (`formacion_id`),
  ADD KEY `fk_persona_has_formacion_persona1_idx` (`persona_id`),
  ADD KEY `fk_persona_has_formacion_referencia1_idx` (`estado_id`);

--
-- Indexes for table `persona_has_redes_sociales`
--
ALTER TABLE `persona_has_redes_sociales`
  ADD PRIMARY KEY (`persona_id`,`redes_sociales_id`),
  ADD KEY `fk_persona_has_redes_sociales_redes_sociales1_idx` (`redes_sociales_id`),
  ADD KEY `fk_persona_has_redes_sociales_persona1_idx` (`persona_id`);

--
-- Indexes for table `persona_has_referencia`
--
ALTER TABLE `persona_has_referencia`
  ADD PRIMARY KEY (`persona_has_referencia_id`),
  ADD UNIQUE KEY `persona_has_referencia_id_UNIQUE` (`persona_has_referencia_id`),
  ADD KEY `fk_persona_has_persona_persona2_idx` (`referencia_id`),
  ADD KEY `fk_persona_has_persona_persona1_idx` (`persona_id`),
  ADD KEY `fk_persona_has_referencia_referencia2_idx` (`nexo_id`);

--
-- Indexes for table `persona_has_seguros`
--
ALTER TABLE `persona_has_seguros`
  ADD PRIMARY KEY (`persona_id`,`seguros_id`),
  ADD UNIQUE KEY `persona_id_UNIQUE` (`persona_id`),
  ADD UNIQUE KEY `monto_asegurado_UNIQUE` (`monto_asegurado`),
  ADD KEY `fk_persona_has_seguros_seguros1_idx` (`seguros_id`),
  ADD KEY `fk_persona_has_seguros_persona1_idx` (`persona_id`);

--
-- Indexes for table `persona_has_telefono`
--
ALTER TABLE `persona_has_telefono`
  ADD PRIMARY KEY (`persona_id`,`telefono_id`),
  ADD UNIQUE KEY `persona_id_UNIQUE` (`persona_id`),
  ADD KEY `fk_persona_has_telefono_telefono1_idx` (`telefono_id`),
  ADD KEY `fk_persona_has_telefono_persona1_idx` (`persona_id`);

--
-- Indexes for table `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `pregunta` (`pregunta`),
  ADD KEY `fk_preguntas_referencia2_idx` (`tipo_empleado_id`);

--
-- Indexes for table `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_profesor_persona1_idx` (`persona_id`);

--
-- Indexes for table `profesor_has_materia`
--
ALTER TABLE `profesor_has_materia`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_profesor_has_materia_materia1_idx` (`materia_id`),
  ADD KEY `fk_profesor_has_materia_profesor1_idx` (`profesor_id`);

--
-- Indexes for table `redes_sociales`
--
ALTER TABLE `redes_sociales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_redes_sociales_referencia1_idx` (`tipo_red_social_id`);

--
-- Indexes for table `referencia`
--
ALTER TABLE `referencia`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_referencia_referencia_idx` (`padre_id`);

--
-- Indexes for table `referencia_has_materia`
--
ALTER TABLE `referencia_has_materia`
  ADD PRIMARY KEY (`carrera_id`,`materia_id`),
  ADD KEY `fk_referencia_has_materia_materia1_idx` (`materia_id`),
  ADD KEY `fk_referencia_has_materia_referencia1_idx` (`carrera_id`);

--
-- Indexes for table `salario`
--
ALTER TABLE `salario`
  ADD PRIMARY KEY (`id`,`contratacion_id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_salario_contratacion1_idx` (`contratacion_id`);

--
-- Indexes for table `seguros`
--
ALTER TABLE `seguros`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `telefono`
--
ALTER TABLE `telefono`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `telefono_UNIQUE` (`telefono`),
  ADD KEY `fk_telefono_referencia1_idx` (`codigo_tlf_id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario_UNIQUE` (`usuario`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `clave_UNIQUE` (`clave`),
  ADD UNIQUE KEY `respuesta_UNIQUE` (`respuesta`),
  ADD KEY `fk_usuario_persona1_idx` (`persona_id`),
  ADD KEY `fk_usuario_referencia1_idx` (`perfil_id`),
  ADD KEY `carrera_id` (`carrera_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contratacion`
--
ALTER TABLE `contratacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `direccion`
--
ALTER TABLE `direccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT for table `discapacidades`
--
ALTER TABLE `discapacidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `evaluacion`
--
ALTER TABLE `evaluacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `evaluacion_has_preguntas`
--
ALTER TABLE `evaluacion_has_preguntas`
  MODIFY `evaluacion_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `formacion`
--
ALTER TABLE `formacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `historial`
--
ALTER TABLE `historial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `materia`
--
ALTER TABLE `materia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `periodo`
--
ALTER TABLE `periodo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `persona_has_discapacidades`
--
ALTER TABLE `persona_has_discapacidades`
  MODIFY `persona_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `persona_has_enfermedades`
--
ALTER TABLE `persona_has_enfermedades`
  MODIFY `persona_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `persona_has_formacion`
--
ALTER TABLE `persona_has_formacion`
  MODIFY `persona_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `persona_has_referencia`
--
ALTER TABLE `persona_has_referencia`
  MODIFY `persona_has_referencia_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `persona_has_seguros`
--
ALTER TABLE `persona_has_seguros`
  MODIFY `persona_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `persona_has_telefono`
--
ALTER TABLE `persona_has_telefono`
  MODIFY `persona_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `profesor_has_materia`
--
ALTER TABLE `profesor_has_materia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `redes_sociales`
--
ALTER TABLE `redes_sociales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `referencia`
--
ALTER TABLE `referencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=219;
--
-- AUTO_INCREMENT for table `salario`
--
ALTER TABLE `salario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `telefono`
--
ALTER TABLE `telefono`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `contratacion`
--
ALTER TABLE `contratacion`
  ADD CONSTRAINT `fk_contratacion_referencia1` FOREIGN KEY (`tipo_contratacion_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_contratacion_referencia2` FOREIGN KEY (`departamento_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_contratacion_referencia3` FOREIGN KEY (`cargo_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_contratacion_referencia4` FOREIGN KEY (`status_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `direccion`
--
ALTER TABLE `direccion`
  ADD CONSTRAINT `fk_direccion_direccion1` FOREIGN KEY (`padre_id`) REFERENCES `direccion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_direccion_referencia1` FOREIGN KEY (`referencia_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `discapacidades`
--
ALTER TABLE `discapacidades`
  ADD CONSTRAINT `fk_discapacidades_discapacidades1` FOREIGN KEY (`padre_id`) REFERENCES `discapacidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD CONSTRAINT `fk_evaluacion_periodo1` FOREIGN KEY (`periodo_id`) REFERENCES `periodo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `evaluacion_has_preguntas`
--
ALTER TABLE `evaluacion_has_preguntas`
  ADD CONSTRAINT `fk_evaluacion_has_preguntas_evaluacion1` FOREIGN KEY (`evaluacion_id`) REFERENCES `evaluacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_evaluacion_has_preguntas_persona1` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_evaluacion_has_preguntas_preguntas1` FOREIGN KEY (`preguntas_id`) REFERENCES `preguntas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_evaluacion_has_preguntas_referencia1` FOREIGN KEY (`valoracion_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `formacion`
--
ALTER TABLE `formacion`
  ADD CONSTRAINT `fk_formacion_referencia2` FOREIGN KEY (`tipo_formacion_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `fk_horario_periodo1` FOREIGN KEY (`periodo_id`) REFERENCES `periodo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_horario_profesor_has_materia1` FOREIGN KEY (`profesor_has_materia_id`) REFERENCES `profesor_has_materia` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_horario_referencia1` FOREIGN KEY (`tiempoInicio_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_horario_referencia2` FOREIGN KEY (`tiempoFin_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_horario_referencia3` FOREIGN KEY (`dia_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_horario_referencia4` FOREIGN KEY (`aula_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_horario_referencia5` FOREIGN KEY (`seccion_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `materia`
--
ALTER TABLE `materia`
  ADD CONSTRAINT `fk_materia_referencia2` FOREIGN KEY (`hora_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_materia_referencia3` FOREIGN KEY (`creditos_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_materia_referencia4` FOREIGN KEY (`carrera_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `materia_has_horario`
--
ALTER TABLE `materia_has_horario`
  ADD CONSTRAINT `fk_materia_has_horario_horario1` FOREIGN KEY (`horario_id`) REFERENCES `horario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_materia_has_horario_materia1` FOREIGN KEY (`materia_id`) REFERENCES `materia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `fk_persona_direccion1` FOREIGN KEY (`parroquia_id`) REFERENCES `direccion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_persona_referencia1` FOREIGN KEY (`sexo_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_persona_referencia2` FOREIGN KEY (`tipo_persona_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_persona_referencia3` FOREIGN KEY (`estado_civil_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `persona_has_discapacidades`
--
ALTER TABLE `persona_has_discapacidades`
  ADD CONSTRAINT `fk_persona_has_discapacidades_discapacidades1` FOREIGN KEY (`discapacidades_id`) REFERENCES `discapacidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_persona_has_discapacidades_persona1` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `persona_has_enfermedades`
--
ALTER TABLE `persona_has_enfermedades`
  ADD CONSTRAINT `fk_persona_has_referencia_persona1` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_persona_has_referencia_referencia1` FOREIGN KEY (`enfermedad_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `persona_has_formacion`
--
ALTER TABLE `persona_has_formacion`
  ADD CONSTRAINT `fk_persona_has_formacion_formacion1` FOREIGN KEY (`formacion_id`) REFERENCES `formacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_persona_has_formacion_persona1` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_persona_has_formacion_referencia1` FOREIGN KEY (`estado_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `persona_has_redes_sociales`
--
ALTER TABLE `persona_has_redes_sociales`
  ADD CONSTRAINT `fk_persona_has_redes_sociales_persona1` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_persona_has_redes_sociales_redes_sociales1` FOREIGN KEY (`redes_sociales_id`) REFERENCES `redes_sociales` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `persona_has_referencia`
--
ALTER TABLE `persona_has_referencia`
  ADD CONSTRAINT `fk_persona_has_persona_persona1` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_persona_has_persona_persona2` FOREIGN KEY (`referencia_id`) REFERENCES `persona` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_persona_has_referencia_referencia2` FOREIGN KEY (`nexo_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `persona_has_seguros`
--
ALTER TABLE `persona_has_seguros`
  ADD CONSTRAINT `fk_persona_has_seguros_persona1` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_persona_has_seguros_seguros1` FOREIGN KEY (`seguros_id`) REFERENCES `seguros` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `persona_has_telefono`
--
ALTER TABLE `persona_has_telefono`
  ADD CONSTRAINT `fk_persona_has_telefono_persona1` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_persona_has_telefono_telefono1` FOREIGN KEY (`telefono_id`) REFERENCES `telefono` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `preguntas`
--
ALTER TABLE `preguntas`
  ADD CONSTRAINT `fk_preguntas_referencia2` FOREIGN KEY (`tipo_empleado_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `profesor`
--
ALTER TABLE `profesor`
  ADD CONSTRAINT `fk_profesor_persona1` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profesor_has_materia`
--
ALTER TABLE `profesor_has_materia`
  ADD CONSTRAINT `fk_profesor_has_materia_materia1` FOREIGN KEY (`materia_id`) REFERENCES `materia` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_profesor_has_materia_profesor1` FOREIGN KEY (`profesor_id`) REFERENCES `profesor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `redes_sociales`
--
ALTER TABLE `redes_sociales`
  ADD CONSTRAINT `fk_redes_sociales_referencia1` FOREIGN KEY (`tipo_red_social_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `referencia`
--
ALTER TABLE `referencia`
  ADD CONSTRAINT `fk_referencia_referencia` FOREIGN KEY (`padre_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `referencia_has_materia`
--
ALTER TABLE `referencia_has_materia`
  ADD CONSTRAINT `fk_referencia_has_materia_materia1` FOREIGN KEY (`materia_id`) REFERENCES `materia` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_referencia_has_materia_referencia1` FOREIGN KEY (`carrera_id`) REFERENCES `referencia` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `salario`
--
ALTER TABLE `salario`
  ADD CONSTRAINT `fk_salario_contratacion1` FOREIGN KEY (`contratacion_id`) REFERENCES `contratacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `telefono`
--
ALTER TABLE `telefono`
  ADD CONSTRAINT `fk_telefono_referencia1` FOREIGN KEY (`codigo_tlf_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_persona1` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_usuario_referencia1` FOREIGN KEY (`perfil_id`) REFERENCES `referencia` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ref_carrera` FOREIGN KEY (`carrera_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
