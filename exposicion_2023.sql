-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2023 a las 22:25:38
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `exposicion_2023`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instituciones`
--

CREATE TABLE `instituciones` (
  `escuela` varchar(75) NOT NULL,
  `curso` varchar(75) NOT NULL,
  `cant_alumnos` int(200) NOT NULL,
  `cant_docentes` int(200) NOT NULL,
  `id_instituciones` int(11) NOT NULL,
  `tiempo` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `instituciones`
--

INSERT INTO `instituciones` (`escuela`, `curso`, `cant_alumnos`, `cant_docentes`, `id_instituciones`, `tiempo`) VALUES
('escuela 2', '6to a', 22, 2, 1, '2023-11-28 13:28:56'),
('esccuela 2', '6to b', 22, 2, 2, '2023-11-28 13:29:28'),
('escuela 1', '6to a y b', 25, 4, 3, '2023-11-28 13:40:22'),
('seccunadaria 1', ' 3ro b', 13, 2, 4, '2023-11-28 14:15:32'),
('Escuela Media', '1ro', 10, 2, 5, '2023-11-28 17:56:17'),
('Escuela 2', '6D', 20, 2, 6, '2023-11-28 18:01:45'),
('Escuela 2', '6C', 15, 2, 7, '2023-11-28 18:02:05'),
('Escuela 5', '6B', 24, 3, 8, '2023-11-28 18:16:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `nombre_completo` varchar(75) NOT NULL,
  `edad` int(11) NOT NULL,
  `tipo` varchar(75) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `tiempo` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`nombre_completo`, `edad`, `tipo`, `id_persona`, `tiempo`) VALUES
('apestegia sintisa', 38, 'otro', 11, '2023-11-28 13:16:58'),
('astegia stefania', 30, 'otro', 12, '2023-11-28 13:17:26'),
('ana ', 36, 'otro', 13, '2023-11-28 13:17:47'),
('daniela bonifasin', 45, 'otro', 14, '2023-11-28 13:18:25'),
('rodolfo rampodi', 46, 'otro', 15, '2023-11-28 13:18:54'),
('natalia arboto', 41, 'otro', 16, '2023-11-28 13:19:25'),
('paula lico', 44, 'otro', 17, '2023-11-28 13:19:44'),
('victor hugo fos', 65, 'ex_alumno', 18, '2023-11-28 13:21:32'),
('daina amarani', 36, 'otro', 19, '2023-11-28 13:22:18'),
('federico traverzo', 29, 'profesor', 20, '2023-11-28 13:31:01'),
('analia rafaelle', 48, 'otro', 21, '2023-11-28 13:33:10'),
('irmma camara', 79, 'otro', 22, '2023-11-28 13:33:42'),
('agustina cilley', 24, 'otro', 23, '2023-11-28 13:34:04'),
('lorena toranza', 47, 'otro', 24, '2023-11-28 13:34:25'),
('milAGRO Escaray', 23, 'otro', 25, '2023-11-28 13:34:55'),
('alfonzo herrera', 43, 'otro', 26, '2023-11-28 13:35:57'),
('abril herrera', 19, 'ex_alumno', 27, '2023-11-28 13:36:21'),
('folfe iguaraegui', 19, 'alumno', 28, '2023-11-28 13:37:16'),
('agguirre estefania', 30, 'otro', 29, '2023-11-28 13:37:58'),
('raul schrolll', 51, 'otro', 30, '2023-11-28 13:38:29'),
('debora cafarellli', 41, 'otro', 31, '2023-11-28 13:39:26'),
('vernareli vanina', 35, 'profesor', 32, '2023-11-28 13:41:44'),
('matias diaz', 39, 'profesor', 33, '2023-11-28 13:42:23'),
('vaquez mirta', 35, 'otro', 34, '2023-11-28 13:42:48'),
('roxana ballone', 28, 'profesor', 35, '2023-11-28 13:44:41'),
('jose morele', 41, 'profesor', 36, '2023-11-28 13:46:14'),
('gisela gomez', 26, 'profesor', 37, '2023-11-28 13:47:39'),
('norma diaz', 71, 'otro', 38, '2023-11-28 13:48:14'),
('micaela gava', 33, 'otro', 39, '2023-11-28 13:50:02'),
('fernando ', 47, 'otro', 40, '2023-11-28 13:50:44'),
('soledad barzaball', 41, 'profesor', 41, '2023-11-28 13:51:14'),
('florencia abel', 47, 'otro', 42, '2023-11-28 13:52:51'),
('eduardo amarrac', 53, 'otro', 43, '2023-11-28 13:53:20'),
('rebeca parizo', 43, 'otro', 44, '2023-11-28 13:53:46'),
('nazaret aparizo', 34, 'otro', 45, '2023-11-28 13:54:07'),
('jose betance', 47, 'otro', 46, '2023-11-28 13:56:46'),
('mariana gonzalia', 41, 'otro', 47, '2023-11-28 13:59:36'),
('jeremias cordoba', 16, 'otro', 48, '2023-11-28 14:00:03'),
('santiago balenzuela', 34, 'otro', 49, '2023-11-28 14:00:31'),
('elda ruiz', 60, 'otro', 50, '2023-11-28 14:02:10'),
('macahdo gabriela', 40, 'otro', 51, '2023-11-28 14:07:27'),
('susana correa', 70, 'otro', 52, '2023-11-28 14:08:31'),
('ocampo sabrina', 36, 'otro', 53, '2023-11-28 14:08:54'),
('rivaz clara', 35, 'otro', 54, '2023-11-28 14:10:14'),
('sebastian mateica', 42, 'ex_alumno', 55, '2023-11-28 14:11:09'),
('bilbao juan carlos', 71, 'ex_alumno', 56, '2023-11-28 14:11:37'),
('lamarque maria', 49, 'otro', 57, '2023-11-28 14:14:32'),
('jose gonzalez', 49, 'otro', 58, '2023-11-28 14:14:54'),
('sol gianez', 52, 'otro', 59, '2023-11-28 14:17:46'),
('agustin granara', 43, 'otro', 60, '2023-11-28 14:18:10'),
('secilia bedez', 40, 'otro', 61, '2023-11-28 14:18:36'),
('de leon veronica', 35, 'otro', 62, '2023-11-28 14:19:32'),
('carrera judid', 35, 'otro', 63, '2023-11-28 14:21:06'),
('jaeznink patricia', 62, 'otro', 64, '2023-11-28 14:21:42'),
('otero manuel', 45, 'ex_alumno', 65, '2023-11-28 14:25:37'),
('walter rivaz', 49, 'otro', 66, '2023-11-28 14:34:30'),
('julia lizarraga', 47, 'otro', 67, '2023-11-28 14:35:50'),
('felipe jessica', 38, 'otro', 68, '2023-11-28 14:36:37'),
('marcelo rodriguez', 31, 'otro', 69, '2023-11-28 14:37:05'),
('carina borda', 45, 'otro', 70, '2023-11-28 14:39:36'),
('marcelino ', 40, 'ex_alumno', 71, '2023-11-28 14:39:58'),
('sebastian costa', 49, 'otro', 72, '2023-11-28 14:40:20'),
('paula carrizon', 43, 'otro', 73, '2023-11-28 14:40:44'),
('viviana vianco', 39, 'otro', 74, '2023-11-28 14:41:09'),
('natalia molina', 45, 'otro', 75, '2023-11-28 14:41:32'),
('paulo faguara', 41, 'otro', 76, '2023-11-28 14:41:58'),
('natalia martinez', 40, 'otro', 77, '2023-11-28 14:44:43'),
('victoria mierza', 14, 'alumno', 78, '2023-11-28 14:45:10'),
('juana morsia', 13, 'alumno', 79, '2023-11-28 14:45:29'),
('laura migone', 53, 'profesor', 80, '2023-11-28 14:46:35'),
('andrea belbenuto', 39, 'otro', 81, '2023-11-28 14:49:21'),
('girado martin', 53, 'otro', 82, '2023-11-28 14:49:46'),
('sofia jaez', 31, 'otro', 83, '2023-11-28 14:51:32'),
('mirta maciel', 61, 'otro', 84, '2023-11-28 14:51:58'),
('paula gomez', 45, 'otro', 85, '2023-11-28 14:54:29'),
('maria dagorret', 40, 'profesor', 86, '2023-11-28 14:57:21'),
('ivana gonzalez', 43, 'otro', 87, '2023-11-28 15:00:39'),
('liz zeballos', 38, 'otro', 88, '2023-11-28 15:01:06'),
('gullermo ramirez', 47, 'otro', 89, '2023-11-28 15:03:52'),
('luria garcia', 46, 'otro', 90, '2023-11-28 15:04:12'),
('julieta larluz', 36, 'otro', 91, '2023-11-28 15:05:19'),
('maitena castro', 22, 'ex_alumno', 92, '2023-11-28 15:05:53'),
('laura larralde ', 31, 'otro', 93, '2023-11-28 15:07:11'),
('ines bilbao', 38, 'profesor', 94, '2023-11-28 15:08:34'),
('danielo orbe', 38, 'otro', 95, '2023-11-28 15:09:00'),
('manuel frezco', 70, 'otro', 96, '2023-11-28 15:10:17'),
('camargo carolina', 32, 'otro', 97, '2023-11-28 15:10:47'),
('guzman romina', 45, 'profesor', 98, '2023-11-28 15:11:14'),
('tamara castro', 31, 'otro', 99, '2023-11-28 15:13:25'),
('santiago moreno', 37, 'otro', 100, '2023-11-28 15:13:51'),
('veronica clivio', 52, 'otro', 101, '2023-11-28 15:14:14'),
('figueroa eva', 49, 'otro', 102, '2023-11-28 15:14:55'),
('solangel ', 40, 'otro', 103, '2023-11-28 15:15:27'),
('natalia martinez', 39, 'otro', 104, '2023-11-28 15:17:08'),
('angeles braceras', 42, 'otro', 105, '2023-11-28 15:19:31'),
('maria manghi', 75, 'otro', 106, '2023-11-28 15:21:29'),
('calvo debora', 37, 'otro', 107, '2023-11-28 15:22:56'),
('prado thomas', 15, 'ex_alumno', 108, '2023-11-28 15:23:17'),
('gabriela martinez', 48, 'otro', 109, '2023-11-28 15:24:53'),
('cristian auad', 50, 'otro', 110, '2023-11-28 15:25:18'),
('romina ortueta', 36, 'otro', 111, '2023-11-28 15:25:48'),
('dolores saulo', 41, 'otro', 112, '2023-11-28 15:26:11'),
('emmanuel', 35, 'otro', 113, '2023-11-28 15:26:33'),
('alfredo gonzalez', 36, 'otro', 114, '2023-11-28 15:26:55'),
('larraula daniela', 41, 'otro', 115, '2023-11-28 15:28:21'),
('estefania torrado', 29, 'otro', 116, '2023-11-28 15:28:58'),
('thomas quintana', 15, 'alumno', 117, '2023-11-28 15:29:31'),
('cristina busqued', 55, 'otro', 118, '2023-11-28 15:30:13'),
('alexis carballo', 15, 'alumno', 119, '2023-11-28 15:30:52'),
('martino gimenez', 14, 'alumno', 120, '2023-11-28 15:32:48'),
('marina sayado', 47, 'otro', 121, '2023-11-28 15:34:31'),
('gabriel gamarra', 47, 'otro', 122, '2023-11-28 15:34:59'),
('alejandro calabro', 48, 'otro', 123, '2023-11-28 15:36:49'),
('ferreira gabriela ', 53, 'otro', 124, '2023-11-28 15:37:16'),
('liliana martinez', 58, 'otro', 125, '2023-11-28 15:37:45'),
('maria paredes', 42, 'otro', 126, '2023-11-28 15:39:51'),
('rodriguez carolina', 40, 'otro', 127, '2023-11-28 15:43:17'),
('mariela gonzalia', 35, 'otro', 128, '2023-11-28 15:43:55'),
('cierra patricia', 37, 'otro', 129, '2023-11-28 15:47:25'),
('Salva tierra ', 47, 'otro', 130, '2023-11-28 17:32:11'),
('Daniel Peña', 48, 'otro', 131, '2023-11-28 17:32:52'),
('Rodriges Castro', 31, 'otro', 132, '2023-11-28 17:33:29'),
('Bona Vainca', 22, 'ex_alumno', 133, '2023-11-28 17:36:23'),
('', 0, '', 134, '2023-11-28 17:36:32'),
('Bona Samira', 24, 'otro', 135, '2023-11-28 17:36:55'),
('Castaños Natalian', 42, 'otro', 136, '2023-11-28 17:38:11'),
('Dadona Daniela', 42, 'otro', 137, '2023-11-28 17:41:14'),
('Maria Catalano', 40, 'otro', 138, '2023-11-28 17:42:07'),
('Monica Graña', 31, 'otro', 139, '2023-11-28 17:42:33'),
('Lamanna Lina', 53, 'otro', 140, '2023-11-28 17:46:24'),
('Maxi Diaz', 41, 'otro', 141, '2023-11-28 17:50:15'),
('Cristian Carlin', 50, 'otro', 142, '2023-11-28 17:50:58'),
('Mariel Pedernera', 52, 'otro', 143, '2023-11-28 17:51:22'),
('Marcelo Lezcano', 42, 'otro', 144, '2023-11-28 17:54:52'),
('Romero Jose Carlos', 48, 'ex_alumno', 145, '2023-11-28 17:57:01'),
('Barri Pablo ariel', 41, 'otro', 146, '2023-11-28 17:57:45'),
('Molina Cintia', 42, 'otro', 147, '2023-11-28 17:58:13'),
('Gonzales Santa Cruz Neli', 70, 'otro', 148, '2023-11-28 17:58:40'),
('Lachaise Juan Manuel', 40, 'otro', 149, '2023-11-28 17:59:10'),
('Bacia Lupe Romina', 37, 'otro', 150, '2023-11-28 17:59:29'),
('Viviana Luciana Ulcero', 45, 'otro', 151, '2023-11-28 18:00:05'),
('Zeballos Liz', 38, 'otro', 152, '2023-11-28 18:00:32'),
('Costanza Nespoli', 43, 'otro', 153, '2023-11-28 18:01:22'),
('Mariana Guebara', 42, 'otro', 154, '2023-11-28 18:08:11'),
('Barrera Sandra', 46, 'profesor', 155, '2023-11-28 18:08:35'),
('Julian Rocca', 54, 'otro', 156, '2023-11-28 18:10:14'),
('Seregio Domingo', 56, 'otro', 157, '2023-11-28 18:10:43'),
('Sanavia Joana', 38, 'otro', 158, '2023-11-28 18:11:20'),
('Gonzales Susana', 47, 'otro', 159, '2023-11-28 18:13:30'),
('De la canal Roberto', 49, 'otro', 160, '2023-11-28 18:13:47'),
('de la canal lucia', 19, 'otro', 161, '2023-11-28 18:14:05'),
('Silvia Sas', 0, '', 162, '2023-11-28 18:15:41'),
('Silvia Saya', 42, 'profesor', 163, '2023-11-28 18:16:00'),
('Lusino Josefina', 32, 'otro', 164, '2023-11-28 18:17:30'),
('inchausti silvina', 55, 'otro', 165, '2023-11-28 18:18:05'),
('Passerini Carla', 45, 'otro', 166, '2023-11-28 18:18:43'),
('Barzabal Diego', 41, 'otro', 167, '2023-11-28 18:21:39'),
('Aguirre lucia', 31, 'otro', 168, '2023-11-28 18:27:09'),
('Perez Adrea Veatriz', 43, 'otro', 169, '2023-11-28 18:33:32'),
('Tieri Laura', 31, 'otro', 170, '2023-11-28 18:34:21'),
('Vega Florencia', 30, 'otro', 171, '2023-11-28 18:35:55'),
('Flores Gomez Laura', 48, 'otro', 172, '2023-11-28 18:36:14'),
('Lopez Adriana', 38, 'otro', 173, '2023-11-28 18:38:27'),
('Ag', 0, '', 174, '2023-11-28 18:38:34'),
('Agostina Larraula', 18, 'otro', 175, '2023-11-28 18:38:47'),
('Miguel Zamarbiede', 53, 'otro', 176, '2023-11-28 18:39:19'),
('sambrino Mariana', 37, 'otro', 177, '2023-11-28 18:40:12'),
('Marcelo Amadeo', 50, 'otro', 178, '2023-11-28 18:44:20'),
('Carina Dinunzio', 48, 'otro', 179, '2023-11-28 18:44:48'),
('Esculapio Segio', 50, 'otro', 180, '2023-11-28 18:45:13'),
('Milagros Machi', 32, 'otro', 181, '2023-11-28 18:45:41'),
('', 0, '', 182, '2023-11-28 18:46:10'),
('Carolina barboza', 38, 'otro', 183, '2023-11-28 18:47:04'),
('Fos Cesar', 38, 'otro', 184, '2023-11-28 18:48:59'),
('Marisela Ravalli', 51, 'otro', 185, '2023-11-28 18:51:45'),
('Adrian Arano', 45, 'otro', 186, '2023-11-28 18:53:01'),
('Gonsalez Ailen', 19, 'ex_alumno', 187, '2023-11-28 18:57:17'),
('Gonsalez Yanina', 41, 'otro', 188, '2023-11-28 18:57:36'),
('Daniel Moyano ', 52, 'otro', 189, '2023-11-28 19:03:44'),
('Tocci Graciela', 39, 'otro', 190, '2023-11-28 19:04:06'),
('Refojo Noelia', 36, 'otro', 191, '2023-11-28 19:04:50'),
('rago Jorge', 41, 'otro', 192, '2023-11-28 19:05:12'),
('arboto Laura', 48, 'otro', 193, '2023-11-28 19:05:30'),
('maria julia ugarte', 51, 'directivo', 194, '2023-11-28 19:06:42'),
('Marcela Lujan Funes', 52, 'directivo', 195, '2023-11-28 19:07:14'),
('Maggi eliana', 40, 'otro', 196, '2023-11-28 19:07:46'),
('Luis haim', 44, 'otro', 197, '2023-11-28 19:08:41'),
('Natalia alvarez', 47, 'otro', 198, '2023-11-28 19:11:03'),
('Depre Gabriela', 46, 'profesor', 199, '2023-11-28 19:12:22'),
('VIctor cardace', 45, 'otro', 200, '2023-11-28 19:20:14'),
('DI Palma NIcolas', 22, 'ex_alumno', 201, '2023-11-28 19:21:54'),
('Micaela Vanzato', 30, 'profesor', 202, '2023-11-28 19:25:11'),
('dipache diego', 40, 'profesor', 203, '2023-11-28 19:27:26'),
('casei Maria elena', 38, 'otro', 204, '2023-11-28 19:28:22'),
('Barberan Cecilia', 51, 'otro', 205, '2023-11-28 19:29:04'),
('anai Arias', 20, 'otro', 206, '2023-11-28 19:29:28'),
('Castillo Analia', 36, 'otro', 207, '2023-11-28 19:30:09'),
('Tomas Garbizo', 26, 'otro', 208, '2023-11-28 19:31:43'),
('Alvertina Gimenez', 23, 'otro', 209, '2023-11-28 19:32:00'),
('bove Ines', 43, 'profesor', 210, '2023-11-28 19:33:47'),
('tierri<felix', 73, 'otro', 211, '2023-11-28 19:40:52'),
('dAna Maria Bardosa', 70, 'otro', 212, '2023-11-28 19:41:21'),
('Veronica Tierri', 39, 'otro', 213, '2023-11-28 19:41:41'),
('Sebastian Torres', 40, 'otro', 214, '2023-11-28 19:42:15'),
('Godoy Rosa', 34, 'otro', 215, '2023-11-28 19:43:58'),
('Gomez Gaston', 42, 'otro', 216, '2023-11-28 19:52:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `clave` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `clave`) VALUES
(1, 'agustin lezcano', 'zomboy', '46690052');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `instituciones`
--
ALTER TABLE `instituciones`
  ADD PRIMARY KEY (`id_instituciones`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `instituciones`
--
ALTER TABLE `instituciones`
  MODIFY `id_instituciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
