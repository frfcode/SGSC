-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-05-2021 a las 06:38:13
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `job`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion`
--

CREATE TABLE `asignacion` (
  `id_asignacion` int(10) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `id_grupo` int(10) NOT NULL,
  `fecha_asignacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `asignacion`
--

INSERT INTO `asignacion` (`id_asignacion`, `id_usuario`, `id_grupo`, `fecha_asignacion`) VALUES
(21, 0, 0, '2020-09-04'),
(39, 86, 837, '2020-09-13'),
(40, 78, 269, '2020-10-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE `configuracion` (
  `id_configuracion` int(11) NOT NULL,
  `plantilla_solicitud1` int(11) NOT NULL,
  `plantilla_solicitud2` int(11) NOT NULL,
  `plantilla_solicitud3` int(11) NOT NULL,
  `plantilla_solicitud4` int(11) NOT NULL,
  `plantilla_solicitud5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `configuracion`
--

INSERT INTO `configuracion` (`id_configuracion`, `plantilla_solicitud1`, `plantilla_solicitud2`, `plantilla_solicitud3`, `plantilla_solicitud4`, `plantilla_solicitud5`) VALUES
(1, 4, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dirigido`
--

CREATE TABLE `dirigido` (
  `id_dirigido` int(20) NOT NULL,
  `texto_dirigido` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_usuario` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `dirigido`
--

INSERT INTO `dirigido` (`id_dirigido`, `texto_dirigido`, `id_usuario`) VALUES
(3, 'Julian Sanchez', 86),
(4, 'Juana Perez', 86),
(5, 'ninguno', 86),
(6, 'Marquez  angie', 86);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus`
--

CREATE TABLE `estatus` (
  `id_estatus` int(10) NOT NULL,
  `estatus` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id_grupo` int(10) NOT NULL,
  `grupo` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id_grupo`, `grupo`) VALUES
(837, 'prueba'),
(0, 'null'),
(269, 'testla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `id_nota` int(10) NOT NULL,
  `notas` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_registro` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantilla`
--

CREATE TABLE `plantilla` (
  `id_plantilla` int(10) NOT NULL,
  `nombre_plantilla` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `url_planitlla` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `plantilla`
--

INSERT INTO `plantilla` (`id_plantilla`, `nombre_plantilla`, `url_planitlla`) VALUES
(1, 'ServiciosVenta.docx', 'plantillas/ServiciosVenta.docx'),
(2, 'plantilla (1).docx', 'plantillas/plantilla (1).docx'),
(3, 'plantilla_demo.docx', 'plantillas/plantilla_demo.docx'),
(4, 'modelo.docx', 'plantillas/modelo.docx'),
(5, 'modelo2.docx', 'plantillas/modelo2.docx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id_contador` int(10) NOT NULL,
  `tipo_solicitud` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tipo_opcion` int(2) NOT NULL,
  `prioridad` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `pais` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `meses` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `empresa` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_usuario` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `estado_general` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `estatus_solicitud` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `estatus_generado` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_solicitud` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_contador`, `tipo_solicitud`, `tipo_opcion`, `prioridad`, `nombre`, `telefono`, `pais`, `meses`, `empresa`, `id_usuario`, `estado_general`, `estatus_solicitud`, `estatus_generado`, `id_solicitud`) VALUES
(1, 'SA', 0, 'A1', 'ffffffffff', '3333333333', 'Republica Dominicana', '', 'Claro', '86', 'ACTIVO', 'NUEVO', 'SI', 50651),
(2, 'SA', 0, 'A1', 'ffffffffff', '3333333333', 'Pitcairn', '', 'Claro', '86', 'ACTIVO', 'NUEVO', 'SI', 23192),
(3, 'SA', 0, 'A1', 'ffffffffff', '3333333333', 'Pitcairn', '', 'Claro', '86', 'ACTIVO', 'NUEVO', 'SI', 39403),
(4, 'SA', 0, 'A1', 'ffffffffff', '3333333333', 'Pitcairn', '', 'Claro', '86', 'ACTIVO', 'NUEVO', 'SI', 98813),
(5, 'SA', 0, 'A1', 'dawdawd', '3333333333', 'Republica Dominicana', '', 'Claro', '86', 'ACTIVO', 'NUEVO', 'SI', 62610),
(6, 'SA', 0, 'A1', 'dawdaw adwd', '3333333333', 'Republica Dominicana', '', 'Claro', '86', 'ACTIVO', 'NUEVO', 'SI', 62610),
(7, 'SA', 0, 'A1', 'ffffffffff', '3333333333', 'Republica Dominicana', '', 'Claro', '86', 'ACTIVO', 'NUEVO', 'SI', 91208),
(8, 'SA', 0, 'A1', 'ffffffffff', '3333333333', 'Republica Dominicana', '', 'Claro', '86', 'ACTIVO', 'NUEVO', 'SI', 91208),
(9, 'SA', 0, 'A1', 'ffffffffff', '3333333333', 'Republica Dominicana', '', 'Claro', '86', 'ACTIVO', 'NUEVO', 'SI', 45964),
(10, 'SA', 0, 'A1', 'dadawd ', '2222222222', 'Republica Dominicana', '', 'Claro', '86', 'ACTIVO', 'NUEVO', 'SI', 45964),
(11, 'SA', 0, 'A1', 'ffffffffff', '3333333333', 'Republica Dominicana', '', 'Claro', '86', 'ACTIVO', 'NUEVO', 'SI', 76834),
(12, 'SA', 0, 'A1', 'ffffffffff dawdaw', '2222222222', 'Republica Dominicana', '', 'Claro', '86', 'ACTIVO', 'NUEVO', 'SI', 76834),
(13, 'SA', 0, 'A1', 'ffffffffff', '3333333333', 'Republica Dominicana', '', 'Claro', '86', 'ACTIVO', 'NUEVO', 'SI', 20103),
(14, 'SA', 0, 'A1', 'holaa', '3333333333', 'Republica Dominicana', '', 'Claro', '86', 'ACTIVO', 'NUEVO', 'SI', 20103),
(15, 'SA', 0, 'A1', 'ffffffffff', '3333333333', 'Republica Dominicana', '', 'Claro', '86', 'ACTIVO', 'NUEVO', 'SI', 93388),
(16, 'SA', 0, 'A1', 'awdawd dw', '1111111111', 'Republica Dominicana', '', 'Claro', '86', 'ACTIVO', 'NUEVO', 'SI', 93388),
(17, 'SA', 0, 'A2', 'fadawdaw', '2312323333', 'Republica Dominicana', '', 'Altice', '86', 'ACTIVO', 'NUEVO', 'SI', 20941);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `id_solicitud` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `hora_creacion` time NOT NULL,
  `formato_tiempo` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_usuario` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_grupo` int(10) NOT NULL,
  `id_registro` int(10) NOT NULL,
  `id_dirigido` int(10) NOT NULL,
  `id_tiempo` int(10) NOT NULL,
  `detalle` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `vigencia` date NOT NULL,
  `aprobacion_1` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `num_solicitud_1` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_num_solicitud_1` date NOT NULL,
  `aprobacion_2` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `num_solicitud_2` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_num_solicitud_2` date NOT NULL,
  `aprobacion_3` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `num_solicitud_3` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_num_solicitud_3` date NOT NULL,
  `aprobacion_4` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `num_solicitud_4` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `codigo_num_solicitud_4` int(5) NOT NULL,
  `fecha_num_solicitud_4` date NOT NULL,
  `aprobacion_5` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `num_solicitud_5` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_num_solicitud_5` date NOT NULL,
  `nota` text COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`id_solicitud`, `fecha`, `hora_creacion`, `formato_tiempo`, `id_usuario`, `id_grupo`, `id_registro`, `id_dirigido`, `id_tiempo`, `detalle`, `vigencia`, `aprobacion_1`, `num_solicitud_1`, `fecha_num_solicitud_1`, `aprobacion_2`, `num_solicitud_2`, `fecha_num_solicitud_2`, `aprobacion_3`, `num_solicitud_3`, `fecha_num_solicitud_3`, `aprobacion_4`, `num_solicitud_4`, `codigo_num_solicitud_4`, `fecha_num_solicitud_4`, `aprobacion_5`, `num_solicitud_5`, `fecha_num_solicitud_5`, `nota`) VALUES
(20103, '2021-01-05', '01:36:13', 'PM', '86', 837, 0, 3, 12, 'ddd', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', 0, '0000-00-00', '', '', '0000-00-00', 'ddd'),
(20941, '2021-03-30', '12:03:06', 'PM', '86', 837, 0, 3, 12, 'awdawdaw', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', 0, '0000-00-00', '', '', '0000-00-00', 'dwadaw'),
(23192, '2020-12-31', '02:10:29', 'AM', '86', 837, 0, 3, 12, 'ddd', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', 0, '0000-00-00', '', '', '0000-00-00', 'ddd'),
(39403, '2020-12-31', '03:02:14', 'AM', '86', 837, 0, 3, 12, 'ddd', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', 0, '0000-00-00', '', '', '0000-00-00', 'ddd'),
(45964, '2021-01-05', '01:11:33', 'PM', '86', 837, 0, 3, 12, 'ddd', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', 0, '0000-00-00', '', '', '0000-00-00', 'ddd'),
(50651, '2020-12-31', '09:34:18', 'PM', '86', 837, 0, 3, 12, 'dawd', '0000-00-00', 'APROBADO', '802', '2021-01-05', '', '', '0000-00-00', '', '', '0000-00-00', '', '', 0, '0000-00-00', '', '', '0000-00-00', 'dawd'),
(62610, '2021-01-05', '01:03:36', 'PM', '86', 837, 0, 3, 12, 'dawd', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', 0, '0000-00-00', '', '', '0000-00-00', 'dawd'),
(76834, '2021-01-05', '01:29:39', 'PM', '86', 837, 0, 3, 12, 'dadw', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', 0, '0000-00-00', '', '', '0000-00-00', 'dadw'),
(91208, '2021-01-05', '01:07:32', 'PM', '86', 837, 0, 3, 12, 'dawdwa', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', 0, '0000-00-00', '', '', '0000-00-00', 'dawdwa'),
(93388, '2021-01-05', '01:39:47', 'PM', '86', 837, 0, 3, 12, 'daw', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', 0, '0000-00-00', '', '', '0000-00-00', 'daw'),
(98813, '2020-12-31', '03:04:16', 'AM', '86', 837, 0, 3, 12, 'ddd', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', 0, '0000-00-00', '', '', '0000-00-00', 'ddd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiempo`
--

CREATE TABLE `tiempo` (
  `id_tiempo` int(11) NOT NULL,
  `texto_tiempo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_usuario` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tiempo`
--

INSERT INTO `tiempo` (`id_tiempo`, `texto_tiempo`, `id_usuario`) VALUES
(12, '100 dias', '86'),
(13, 'ninguna', '86'),
(14, '200', '86'),
(15, '1455', '86');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(10) NOT NULL,
  `usuario` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `clave` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `rol` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_creacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `clave`, `rol`, `fecha_creacion`) VALUES
(78, 'default', 'c21f969b5f03d33d43e04f8f136e7682', 'default', '2020-09-04'),
(86, 'test', '098f6bcd4621d373cade4e832627b4f6', 'admin', '2020-09-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vigencia`
--

CREATE TABLE `vigencia` (
  `id_vigencia` int(20) NOT NULL,
  `texto_vigencia` date NOT NULL,
  `id_usuario` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `vigencia`
--

INSERT INTO `vigencia` (`id_vigencia`, `texto_vigencia`, `id_usuario`) VALUES
(0, '0000-00-00', 0),
(6, '2020-09-10', 86),
(7, '2020-09-23', 86),
(10, '2020-09-25', 86),
(11, '3333-05-31', 86);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  ADD PRIMARY KEY (`id_asignacion`);

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`id_configuracion`);

--
-- Indices de la tabla `dirigido`
--
ALTER TABLE `dirigido`
  ADD PRIMARY KEY (`id_dirigido`);

--
-- Indices de la tabla `estatus`
--
ALTER TABLE `estatus`
  ADD PRIMARY KEY (`id_estatus`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id_nota`);

--
-- Indices de la tabla `plantilla`
--
ALTER TABLE `plantilla`
  ADD PRIMARY KEY (`id_plantilla`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_contador`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`id_solicitud`);

--
-- Indices de la tabla `tiempo`
--
ALTER TABLE `tiempo`
  ADD PRIMARY KEY (`id_tiempo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `vigencia`
--
ALTER TABLE `vigencia`
  ADD PRIMARY KEY (`id_vigencia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  MODIFY `id_asignacion` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  MODIFY `id_configuracion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `dirigido`
--
ALTER TABLE `dirigido`
  MODIFY `id_dirigido` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `plantilla`
--
ALTER TABLE `plantilla`
  MODIFY `id_plantilla` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id_contador` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `tiempo`
--
ALTER TABLE `tiempo`
  MODIFY `id_tiempo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT de la tabla `vigencia`
--
ALTER TABLE `vigencia`
  MODIFY `id_vigencia` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
