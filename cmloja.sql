-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-01-2025 a las 03:03:29
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cmloja`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuestionario`
--

CREATE TABLE `cuestionario` (
  `id` int(11) NOT NULL,
  `nombreCuestionario` varchar(250) NOT NULL,
  `idCurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `cuestionario`
--

INSERT INTO `cuestionario` (`id`, `nombreCuestionario`, `idCurso`) VALUES
(1, 'PRIMEROS PASOS DE CONTABILIDAD', 1),
(3, 'CONTABILIDAD MEDIA - PRIMEROS PASOS EN LA BOLSA', 3),
(4, 'APRENDE A USAR DE MANERA INTELIGENTE TU DINERO', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `nombreCurso` varchar(150) NOT NULL,
  `descripCurso` longtext NOT NULL,
  `creador` varchar(150) NOT NULL,
  `nivelCurso` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `nombreCurso`, `descripCurso`, `creador`, `nivelCurso`) VALUES
(1, 'Primeros Pasos en Contabilidad - Introduccion', 'Curso inicial diseñado para brindar una comprensión básica y fundamentos esenciales en el campo de la contabilidad.', 'Fernando Cabrera', 'Básico'),
(3, 'Contabilidad Media - primeros pasos en la bolsa', 'El presente curso brindará muchas competencias necesarias para dar sus primeros pasos en el mundo de la contabilidad.', 'María Herrera', 'Básico'),
(4, 'Aprende a usar de manera inteligente tu dinero', 'La importancia de este curso es de adquirir conocimientos y habilidades financieras para gestionar tus recursos económicos de manera eficiente y sabia', 'Will Smith', 'Básico'),
(5, 'Maestría en Finanzas', 'Diseñado para proporcionar a los estudiantes conocimientos avanzados y habilidades especializadas en el campo de las finanzas. Este tipo de maestría se centra en aspectos más profundos y especializados de la teoría financiera, la gestión financiera y las prácticas comerciales relacionadas.', 'Ramiro Cueva', 'Avanzado'),
(6, 'Capacitaciones Contables', 'Están dirigidas a personas que desean adquirir o mejorar sus conocimientos en contabilidad, ya sea para propósitos personales, académicos o profesionales.', 'Carlos Romero', 'Intermedio'),
(9, 'ejemplo', 'descripción ejemplo', 'Roberto', 'Básico'),
(10, 'ejemplo2', 'descripcion ejemplo2', 'Valentina', 'Básico'),
(12, 'ejemplo 4', 'descripcion ejemplo 4', 'Ramiro Cueva', 'Intermedio'),
(17, 'Ejemplo 10', 'Ejemplo10', 'Daniel Torres', 'Avanzado'),
(18, 'Ejemplo Pe', 'Ejemplo pe', 'Carlos Romero', 'Avanzado'),
(19, 'Ejemplo CC', 'ejemplo CC', 'Daniel Torres', 'Avanzado'),
(20, 'Ejemplo economia', 'Descripcion', 'Ramiro Cueva', 'Avanzado'),
(22, 'Ejemplo Contabilidad', 'Descripción', 'Carlos Romero', 'Avanzado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE `inscripcion` (
  `id` int(11) NOT NULL,
  `idUsuarios` int(11) NOT NULL,
  `idCurso` int(11) NOT NULL,
  `fechaRegistro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiallectura`
--

CREATE TABLE `materiallectura` (
  `id` int(11) NOT NULL,
  `contenido` varchar(250) NOT NULL,
  `url` varchar(250) DEFAULT NULL,
  `idCurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `materiallectura`
--

INSERT INTO `materiallectura` (`id`, `contenido`, `url`, `idCurso`) VALUES
(5, 'Análisis de Estados Financieros', 'https://www.itson.mx/publicaciones/pacioli/Documents/informacion-financierabase-para-analisis-de-estados-financieros.pdf', 3),
(6, 'Contabilidad de Costos', 'https://editorial.unam.edu.ar/images/documentos_digitales/Contabilidad_de_Costos-Alberto_Balanda.pdf', 3),
(7, 'Auditoría de Estados Financieros y su Documentación', 'https://gc.scalahed.com/recursos/files/r161r/w25145w/Principios_de_contabilidad_4ta_Edicion.pdf', 3),
(8, '\"Padre Rico, Padre Pobre\" de Robert T. Kiyosaki', 'http://142.93.18.15:8080/jspui/bitstream/123456789/457/3/CONTABILIDAD%20GENERAL.pdf', 4),
(9, '\"El Hombre Más Rico de Babilonia\" de George S. Clason', 'http://142.93.18.15:8080/jspui/bitstream/123456789/457/3/CONTABILIDAD%20GENERAL.pdf', 4),
(10, '\"Total Money Makeover\" de Dave Ramsey', 'https://fullseguridad.net/wp-content/uploads/2016/10/Contabilidad-avanzada-I-Javier-Romero-L%C3%B3pez.pdf', 4),
(12, 'libro 1', 'https://www.academia.edu/44351745/_Contabilidad_Avanzada_II', 1),
(15, 'libro 3', 'https://www.academia.edu/44351745/_Contabilidad_Avanzada_II', 1),
(17, 'libro 1 ejemplo 4', 'https://www.academia.edu/44351745/_Contabilidad_Avanzada_II', 12),
(22, 'Libro Ejemplo 10', 'https://www.academia.edu/44351745/_Contabilidad_Avanzada_II', 17),
(23, 'Libro ejemplo Pe', 'https://www.academia.edu/44351745/_Contabilidad_Avanzada_II', 18),
(24, 'Libro ejemplo  CC', 'https://www.academia.edu/44351745/_Contabilidad_Avanzada_II', 19),
(26, 'Ejemplo libro 2', 'https://www.academia.edu/44351745/_Contabilidad_Avanzada_II', 19),
(27, 'Libro de eeconomia', 'https://fullseguridad.net/wp-content/uploads/2016/10/Contabilidad-avanzada-I-Javier-Romero-L%C3%B3pez.pdf', 20),
(29, 'Libro Contabilidad', 'https://www.academia.edu/44351745/_Contabilidad_Avanzada_II', 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcionesresp`
--

CREATE TABLE `opcionesresp` (
  `id` int(11) NOT NULL,
  `textoOpcion` varchar(200) NOT NULL,
  `idPreguntas` int(11) NOT NULL,
  `preguntas_idCuestionario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `opcionesresp`
--

INSERT INTO `opcionesresp` (`id`, `textoOpcion`, `idPreguntas`, `preguntas_idCuestionario`) VALUES
(10, 'Registrar transacciones financieras', 4, 1),
(11, 'Mostrar la situación financiera en un momento específico', 4, 1),
(12, 'Calcular utilidades y pérdidas.', 4, 1),
(13, 'Dinero que ingresa a la empresa.', 5, 1),
(14, 'Costo de los bienes y servicios consumidos para generar ingresos.', 5, 1),
(15, 'Inversión a largo plazo.', 5, 1),
(16, 'Activo = Pasivo + Capital', 6, 1),
(17, 'Activo = Pasivo - Capital.', 6, 1),
(18, 'Activo = Capital - Pasivo.', 6, 1),
(28, 'Tengo un buen entendimiento y estoy activamente invirtiendo.', 10, 4),
(29, 'Tengo algún conocimiento, pero no invierto regularmente.', 10, 4),
(30, 'No estoy seguro/a de cómo empezar a invertir.', 10, 4),
(31, 'Ahorrar para emergencias.', 11, 4),
(32, 'Ahorrar para metas a corto plazo (vacaciones, compras, etc.).', 11, 4),
(33, 'Ahorrar para metas a largo plazo (jubilación, educación, etc.).', 11, 4),
(34, 'Las utilizo responsablemente y pago el saldo cada mes.', 12, 4),
(35, 'Utilizo tarjetas de crédito, pero a veces mantengo un saldo.', 12, 4),
(36, 'Tengo dificultades para gestionar mis tarjetas de crédito.', 12, 4),
(37, 'Inversiones', 13, 4),
(38, 'Planificación para la jubilación.', 13, 4),
(39, 'Principio de entidad', 7, 3),
(40, 'Principio de realización', 7, 3),
(41, 'Principio de partida doble', 7, 3),
(42, 'Ingresos totales menos gastos totales', 8, 3),
(43, 'Utilidad neta más depreciación y amortización', 8, 3),
(44, 'Ingresos de operaciones menos impuestos sobre la renta', 8, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id` int(11) NOT NULL,
  `enunciadoPregunta` varchar(250) NOT NULL,
  `idCuestionario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id`, `enunciadoPregunta`, `idCuestionario`) VALUES
(4, '¿Cuál de las siguientes opciones describe mejor el propósito del balance general en contabilidad?', 1),
(5, 'En términos contables, ¿qué representa un gasto?\r\n', 1),
(6, '¿Cuál es la fórmula correcta de la ecuación contable básica?', 1),
(7, ' ¿Qué es el principio de correspondencia en contabilidad?', 3),
(8, '¿Cómo se calcula el flujo de efectivo operativo?', 3),
(10, '¿Cuál de las siguientes afirmaciones describe mejor tu conocimiento sobre inversiones?', 4),
(11, '¿Cuál es tu enfoque principal al ahorrar dinero?', 4),
(12, '¿Cómo describirías tu relación con las tarjetas de crédito?', 4),
(13, '¿Qué temas te gustaría aprender más sobre finanzas personales? (Selecciona todos los que apliquen)', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respcorrecta`
--

CREATE TABLE `respcorrecta` (
  `id` int(11) NOT NULL,
  `idOpcion` int(11) NOT NULL,
  `idPregunta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `permisos` varchar(150) NOT NULL,
  `id_usu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `permisos`, `id_usu`) VALUES
(16, 'Crear usuarios, Editar Usuarios, Crear roles', 22),
(19, 'Crear roles, editar roles', 26),
(20, 'Crear roles', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `apellido` varchar(150) NOT NULL,
  `usuario` varchar(150) NOT NULL,
  `rol` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `clave` varchar(150) NOT NULL,
  `fechaCuenta` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `usuario`, `rol`, `telefono`, `correo`, `clave`, `fechaCuenta`) VALUES
(14, 'Pablo', 'Reyes', 'admin', 'Admin', '972409823', 'reyes@utpl.edu.ec', '$2y$10$u2XsWG1Gxl4lP6pThuCe6e2d3LRd8/3sNlizmN4p3Nzj26uqeVEm2', '2024-04-18'),
(18, 'David', 'Zúñiga', 'david24', 'Estudiante', '972409823', 'david@utpl.edu.ec', '$2y$10$noaQMLj3KHHGdF6D4.lvn.4ny4Pktbz8pgPvqfRJrzN1UXJtFbPeq', '2024-01-24'),
(19, 'Felipe', 'Jimenez', 'Jime24', 'Estudiante', '9932131', 'felipe@ejempl', '$2y$10$aS0NzUI4nXsymsrUrTlwK.oecSwHvEY.V.APUJbGlK0nJj4Q6KpZW', '2024-02-25'),
(20, 'daniel', 'Torres', 'torres911', 'Admin', '0934743261', 'torres911@utpl.edu.ec', '$2y$10$9bLyjupGa2qaAoWNLkMiueVSZf4qnXTqhS.5/EegqDkaejCmI7TDy', '2024-01-29'),
(22, 'Enrique', 'Carrion', 'Enrique', 'Estudiante', '09421231', 'enrique@ejemplo.com', '$2y$10$k1E8/FYmsvrqSpEg7I08uOxtKYryd2Ea8VNWm2IxMF6K/15OixW7G', '2024-01-30'),
(25, 'Pablo', 'Reyes', 'pr123456', 'Admin', '0992873214', 'pablo1234@ejemplo.com', '123456789', '2024-07-22'),
(26, 'Carlos2', 'Morocho', 'carlos2024', 'Admin', '0972542316', 'morocho32@utpl.edu.ec', '$2y$10$wLOjuX3uRZrTY6e0xaaD8udJXeieWVxcTDTPF8VNDPlgRQE1k9cMm', '2024-07-22'),
(27, 'Leonardo', 'Peñarreta', 'leoch2003', 'Estudiante', '0934743261', 'ch@utpl.edu.ec', '$2y$10$ZKQubcCZFsW5EqHgG6Fpl.Y9UHsOJlGc5wbbNBR2KRexroI9OLy0e', '2024-07-23'),
(30, 'Andrea', 'Gonzales', 'andrea1234', 'Estudiante', '0972409823', 'andrea@utpl.edu.ec', '$2y$10$.OsuQV8qmlV8xU.GK.B36Ob1LtF/7Yb1OUynvIPfxt9n2xFacaOKG', '2024-07-25'),
(31, 'Fabricio', 'Gonzales', 'fabri1234', 'Estudiante', '0972542316', 'fabri@utpl.edu.ec', '$2y$10$ndzeVpyUADOE7.SoYbzoLek6C940ir9YaYBnbd7qYZMSBotidXrju', '2024-07-26'),
(34, 'Marcelo', 'Gonzales', 'marce1234', 'Estudiante', '0972542316', 'marce@utpl.edu.ec', '$2y$10$BYM2.PFeX9BtRHxHXvHZwuu9S.Qm.cgCMFFXq44jYq5kgXEoky3bO', '2024-08-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `urlVideo` varchar(250) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `duracionMin` int(11) NOT NULL,
  `idCurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id`, `urlVideo`, `nombre`, `duracionMin`, `idCurso`) VALUES
(11, 'https://www.youtube.com/embed/6XripXPMplI?si=SMX69BeYH4W0ujik', 'Análisis de Estados Financieros', 24, 1),
(12, 'https://www.youtube.com/embed/yd5dY1YxbKI?si=4LpIT01UoBjNv8a-', 'Contabilidad de Costos Avanzada', 5, 1),
(13, 'https://www.youtube.com/embed/DcvNQxeOlZo?si=8Anbk4pHl8kM05dJ', 'Auditoría', 7, 1),
(14, 'https://www.youtube.com/embed/LvBRWBLmwMo?si=BtRvuvv4OtZk8lhD', 'NIIF y Contabilidad Internacional', 12, 3),
(15, 'https://www.youtube.com/embed/XjQdrXkL6N0?si=kKZWvFSS0WiNgFYw', 'Contabilidad Gubernamental y sin Fines de Lucro', 11, 3),
(16, 'https://www.youtube.com/embed/f2O4Q-T12FI?si=cFwkPX0-gl1U3KKN', 'Presupuesto Personal', 14, 4),
(17, 'https://www.youtube.com/embed/2ibqfxEAESo?si=aPagwQxaA7I-CUc9', 'Inversiones Básicas', 26, 4),
(18, 'https://www.youtube.com/embed/WSSzTEahvjg?si=rCWFMfM31RGNf78S', 'Ahorro a Largo Plazo', 4, 4),
(21, 'https://www.youtube.com/embed/8TQ3UHjqp60?si=nJhwK8sgZ6jVvdqk', 'Manejo de Deudas', 18, 4),
(26, 'https://www.youtube.com/embed/89hviyC05NQ?si=pblNqG_NhO6Nshyl', '¿Qué es la CONTABILIDAD? | Curso básico para principiantes', 4, 10),
(33, 'https://www.youtube.com/embed/nMS-ae5EtZ4?si=hn9pDrybUGk810yv', 'Video Ejemplo 10', 23, 17),
(34, 'https://www.youtube.com/embed/nMS-ae5EtZ4?si=hn9pDrybUGk810yv', 'Video Pe', 5, 18),
(35, 'https://www.youtube.com/embed/nMS-ae5EtZ4?si=hn9pDrybUGk810yv', 'Video ejemplo CC', 30, 19),
(36, 'https://www.youtube.com/embed/nMS-ae5EtZ4?si=hn9pDrybUGk810yv', 'Video de economia', 5, 20),
(38, 'https://www.youtube.com/embed/nMS-ae5EtZ4?si=hn9pDrybUGk810yv', 'Video Contabilidad', 5, 22);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuestionario`
--
ALTER TABLE `cuestionario`
  ADD PRIMARY KEY (`id`,`idCurso`),
  ADD KEY `fk_Cuestionario_Cursos1_idx` (`idCurso`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD PRIMARY KEY (`id`,`idUsuarios`,`idCurso`),
  ADD KEY `fk_Usuarios_has_Cursos_Cursos1_idx` (`idCurso`),
  ADD KEY `fk_Usuarios_has_Cursos_Usuarios_idx` (`idUsuarios`);

--
-- Indices de la tabla `materiallectura`
--
ALTER TABLE `materiallectura`
  ADD PRIMARY KEY (`id`,`idCurso`),
  ADD KEY `fk_MaterialLectura_Cursos1_idx` (`idCurso`);

--
-- Indices de la tabla `opcionesresp`
--
ALTER TABLE `opcionesresp`
  ADD PRIMARY KEY (`id`,`idPreguntas`,`preguntas_idCuestionario`),
  ADD KEY `fk_OpcionesResp_Preguntas1_idx` (`idPreguntas`,`preguntas_idCuestionario`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id`,`idCuestionario`),
  ADD KEY `fk_Preguntas_Cuestionario1_idx` (`idCuestionario`);

--
-- Indices de la tabla `respcorrecta`
--
ALTER TABLE `respcorrecta`
  ADD PRIMARY KEY (`id`,`idOpcion`,`idPregunta`),
  ADD KEY `fk_RespCorrecta_Preguntas1_idx` (`idPregunta`),
  ADD KEY `fk_RespCorrecta_OpcionesResp1` (`idOpcion`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usu` (`id_usu`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`,`idCurso`),
  ADD KEY `fk_Video_Cursos1_idx` (`idCurso`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuestionario`
--
ALTER TABLE `cuestionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materiallectura`
--
ALTER TABLE `materiallectura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `respcorrecta`
--
ALTER TABLE `respcorrecta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cuestionario`
--
ALTER TABLE `cuestionario`
  ADD CONSTRAINT `fk_Cuestionario_Cursos1` FOREIGN KEY (`idCurso`) REFERENCES `cursos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD CONSTRAINT `fk_Usuarios_has_Cursos_Cursos1` FOREIGN KEY (`idCurso`) REFERENCES `cursos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Usuarios_has_Cursos_Usuarios` FOREIGN KEY (`idUsuarios`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `materiallectura`
--
ALTER TABLE `materiallectura`
  ADD CONSTRAINT `fk_MaterialLectura_Cursos1` FOREIGN KEY (`idCurso`) REFERENCES `cursos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `opcionesresp`
--
ALTER TABLE `opcionesresp`
  ADD CONSTRAINT `fk_OpcionesResp_Preguntas1` FOREIGN KEY (`idPreguntas`,`preguntas_idCuestionario`) REFERENCES `preguntas` (`id`, `idCuestionario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD CONSTRAINT `fk_Preguntas_Cuestionario1` FOREIGN KEY (`idCuestionario`) REFERENCES `cuestionario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `respcorrecta`
--
ALTER TABLE `respcorrecta`
  ADD CONSTRAINT `fk_RespCorrecta_OpcionesResp1` FOREIGN KEY (`idOpcion`) REFERENCES `opcionesresp` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_RespCorrecta_Preguntas1` FOREIGN KEY (`idPregunta`) REFERENCES `preguntas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `roles_ibfk_1` FOREIGN KEY (`id_usu`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `fk_Video_Cursos1` FOREIGN KEY (`idCurso`) REFERENCES `cursos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
