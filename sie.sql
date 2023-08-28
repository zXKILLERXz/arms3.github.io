-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-07-2023 a las 18:35:05
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
-- Base de datos: `sie`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_in` time NOT NULL,
  `status` int(1) NOT NULL,
  `time_out` time NOT NULL,
  `num_hr` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `attendance`
--

INSERT INTO `attendance` (`id`, `employee_id`, `date`, `time_in`, `status`, `time_out`, `num_hr`) VALUES
(122, 27, '2021-10-31', '11:56:48', 0, '00:00:00', 0),
(123, 27, '2023-05-25', '09:00:00', 0, '09:00:00', 0),
(124, 27, '2023-05-24', '09:00:00', 0, '07:00:00', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cashadvance`
--

CREATE TABLE `cashadvance` (
  `id` int(11) NOT NULL,
  `date_advance` date NOT NULL,
  `employees_id` int(11) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `description` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cities`
--

INSERT INTO `cities` (`id`, `description`) VALUES
(1, 'BARBOSA'),
(2, 'BELLO'),
(3, 'CALDAS'),
(4, 'COPACABANA'),
(5, 'ENVIGADO'),
(6, 'GIRARDOTA'),
(7, 'ITAGÜÍ'),
(8, 'LA ESTRELLA'),
(9, 'MEDELLÍN'),
(10, 'SABANETA'),
(11, 'BOGOTA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deductions`
--

CREATE TABLE `deductions` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `deductions`
--

INSERT INTO `deductions` (`id`, `description`, `amount`) VALUES
(5, 'CAJA COMPENSACIÓN ', 2500),
(6, 'EPS', 1),
(7, 'ARL', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employees`
--

CREATE TABLE `employees` (
  `id_employee` int(11) NOT NULL,
  `document` int(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender_id` int(11) NOT NULL,
  `birthdate` date NOT NULL,
  `status_id` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city_id` int(11) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `position_id` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `state` varchar(8) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` date NOT NULL,
  `updated` date DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `employees`
--

INSERT INTO `employees` (`id_employee`, `document`, `firstname`, `lastname`, `gender_id`, `birthdate`, `status_id`, `address`, `city_id`, `contact`, `mail`, `position_id`, `photo`, `state`, `password`, `created`, `updated`, `created_by`) VALUES
(1, 1, 'ADMINISTRADOR', 'SISTEMA', 1, '2023-05-01', 1, 'carrear 90b 3 67', 11, '12356', 'jf.ospina.g@gmail.com', 1, 'user2-160x160.jpg', 'Activo', '$2y$10$UrGSvHTWm8.ZK4BzPmo8iuqsK6XF5RfHay6ooC5D50y/nShon5wqe', '2019-12-18', '2023-06-20', 1),
(2, 1121941592, 'Cristian Fabian', 'Corredor Sosa', 1, '2023-05-11', 2, 'Bogota', 5, '123456', 'soporte2@disete.com', 3, 'avatar5.png', 'Activo', '$2y$10$UrGSvHTWm8.ZK4BzPmo8iuqsK6XF5RfHay6ooC5D50y/nShon5wqe', '2023-05-07', '2023-06-25', 2),
(3, 1128278640, 'John Fernando', 'Ospina Giraldo', 1, '1989-04-28', 1, 'carrear 90b 13 67', 9, '3136303879', 'helpdesk@disete.com', 1, '1128278640.jpg', 'Activo', '$2y$10$Z1rSUIvFlP/I1I6uXkvNd.RfyCHYfU7UXvjChUcmPKAIERTj/GrwG', '2023-05-17', '2023-06-25', 1),
(4, 2, 'Arley ', 'Santamaría', 1, '2023-06-11', 3, 'popular', 9, '2321', 'correo@dominio.com', 4, 'avatar.png', 'Activo', '$2y$10$UrGSvHTWm8.ZK4BzPmo8iuqsK6XF5RfHay6ooC5D50y/nShon5wqe', '2023-05-17', '2023-06-23', 1128278640),
(5, 3, 'Arley ', 'Santamaría', 1, '2023-06-11', 3, 'popular', 10, '2321', 'correo@dominio.com', 4, 'archetypal-male-fa_3249635c.jpg', 'Activo', '$2y$10$UrGSvHTWm8.ZK4BzPmo8iuqsK6XF5RfHay6ooC5D50y/nShon5wqe', '2023-06-03', '2023-06-25', 2),
(6, 11111, 'Cristian F', 'Corredor Sosa', 1, '2023-05-01', 3, 'wfsads', 7, '2321', 'jf.ospina.g@gmail.com', 11, 'photo3.jpg', 'Activo', '$2y$10$UrGSvHTWm8.ZK4BzPmo8iuqsK6XF5RfHay6ooC5D50y/nShon5wqe', '2023-06-12', NULL, 1128278640),
(8, 1128278641, 'Cristian F', 'Ospina Giraldo', 1, '2023-05-12', 1, 'belen', 9, '3215615', 'jf.ospina.g@gmail.com', 1, 'user2-160x160.jpg', 'Activo', '$2y$10$UrGSvHTWm8.ZK4BzPmo8iuqsK6XF5RfHay6ooC5D50y/nShon5wqe', '2023-06-13', NULL, 1128278640);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gender`
--

CREATE TABLE `gender` (
  `id` int(11) NOT NULL,
  `description` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `gender`
--

INSERT INTO `gender` (`id`, `description`) VALUES
(1, 'Hombre'),
(2, 'Mujer'),
(3, 'Sin especificar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `link` varchar(20) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `controller` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `modules`
--

INSERT INTO `modules` (`id`, `description`, `link`, `icon`, `controller`) VALUES
(1, '1 Lista de Empleados', 'employee.php', 'fa fa-user-circle', 2),
(2, 'Lista de Contratos', '#', 'fa fa-handshake-o', 2),
(3, '2 Lista de Cargos', 'position.php', 'fa fa fa-cog', 2),
(4, 'Lista de Ciudades', '#', 'fa fa-map-marker ', 2),
(5, 'Lista de Hojas de vida', '#', 'fa fa-id-card-o', 2),
(6, 'Gestión de Cesantias', '#', 'fa fa-shopping-basket', 2),
(7, 'Gestión de Vacaciones', '#', 'fa fa-calendar', 2),
(8, 'gestion de permisos', '#', 'fa fa-calendar-o ', 2),
(9, 'control de dotacion', '#', 'fa fa-check-square-o ', 2),
(10, 'Control de Prestamos', '#', 'fa fa-usd', 2),
(11, 'Certificado Laboral', '#', 'fa fa-file-text-o', 3),
(12, 'Colillas de Pago', '#', 'fa fa-file-excel-o', 3),
(13, '3 Solicitar Prestamo', 'cashadvance.php', 'fa fa-usd', 3),
(14, '4 Solicitar Vacaciones', 'vacations.php', 'fa fa-plane', 3),
(15, 'Solicitar Cesantias', '#', 'fa fa-shopping-basket', 3),
(16, 'Control de Proveedores', '#', 'fa fa-handshake-o ', 2),
(17, 'Inventario Dotación', '#', 'fa fa-check-square', 2),
(18, 'Reportar accidente Laboral', '#', 'fa fa-ambulance', 3),
(19, 'Organigrama Empresarial', '#', 'fa fa-sitemap', 3),
(20, 'Gastos de Representación', '#', 'fa fa-exchange', 3),
(21, 'pausas activas', '#', 'fa fa-clock-o', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `overtime`
--

CREATE TABLE `overtime` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(15) NOT NULL,
  `hours` double NOT NULL,
  `rate` double NOT NULL,
  `date_overtime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `description` varchar(150) NOT NULL,
  `rate` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `position`
--

INSERT INTO `position` (`id`, `description`, `rate`) VALUES
(1, 'Super Admin', NULL),
(2, 'Coordinador de Recursos Humanos', NULL),
(3, 'Tecnologo en sistemas', NULL),
(4, 'Técnico electricicísta', NULL),
(5, 'Mensajero', NULL),
(6, 'Técnico en sistemas', NULL),
(7, 'Desarrollador de Software', NULL),
(8, 'Analista Comercial', NULL),
(9, 'Ingeniero/a de Proyectos', 0),
(10, 'Coordinador SST', NULL),
(11, 'Practicante', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `schedules`
--

CREATE TABLE `schedules` (
  `id` int(11) NOT NULL,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `schedules`
--

INSERT INTO `schedules` (`id`, `time_in`, `time_out`) VALUES
(1, '07:00:00', '16:00:00'),
(2, '08:00:00', '17:00:00'),
(3, '09:00:00', '18:00:00'),
(5, '09:45:00', '15:45:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `description` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`id`, `description`) VALUES
(1, 'Soltero/a'),
(2, 'Casado/a'),
(3, 'Uión libre'),
(4, 'Separado/a'),
(5, 'Divorciado/a'),
(6, 'Viudo/a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacations`
--

CREATE TABLE `vacations` (
  `id` int(11) NOT NULL,
  `employees_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `remaining` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cashadvance`
--
ALTER TABLE `cashadvance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employees_id`);

--
-- Indices de la tabla `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `deductions`
--
ALTER TABLE `deductions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id_employee`),
  ADD UNIQUE KEY `documento` (`document`),
  ADD KEY `id_cargo` (`position_id`),
  ADD KEY `id_ciudad` (`city_id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `gender_id` (`gender_id`);

--
-- Indices de la tabla `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `overtime`
--
ALTER TABLE `overtime`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vacations`
--
ALTER TABLE `vacations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employees_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT de la tabla `cashadvance`
--
ALTER TABLE `cashadvance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `deductions`
--
ALTER TABLE `deductions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `employees`
--
ALTER TABLE `employees`
  MODIFY `id_employee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `overtime`
--
ALTER TABLE `overtime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `vacations`
--
ALTER TABLE `vacations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cashadvance`
--
ALTER TABLE `cashadvance`
  ADD CONSTRAINT `cashadvance_ibfk_1` FOREIGN KEY (`employees_id`) REFERENCES `employees` (`id_employee`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`gender_id`) REFERENCES `gender` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `employees_ibfk_2` FOREIGN KEY (`position_id`) REFERENCES `position` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `employees_ibfk_3` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `employees_ibfk_4` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
