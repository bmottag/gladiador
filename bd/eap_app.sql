-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-07-2018 a las 06:58:52
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eap_app`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_foreman_project`
--

CREATE TABLE `log_foreman_project` (
  `id_log_foreman_project` int(10) NOT NULL,
  `fk_id_project` int(10) NOT NULL,
  `fk_id_user_foreman` int(10) NOT NULL,
  `date_issue` datetime NOT NULL,
  `fk_id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `log_foreman_project`
--

INSERT INTO `log_foreman_project` (`id_log_foreman_project`, `fk_id_project`, `fk_id_user_foreman`, `date_issue`, `fk_id_user`) VALUES
(1, 2, 3, '2018-04-10 12:39:58', 1),
(2, 2, 4, '2018-04-10 12:47:32', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `param_company`
--

CREATE TABLE `param_company` (
  `id_company` int(10) NOT NULL,
  `company_name` varchar(120) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `movil_number` varchar(12) NOT NULL,
  `email` varchar(70) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `address` varchar(250) NOT NULL,
  `website` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `param_company`
--

INSERT INTO `param_company` (`id_company`, `company_name`, `contact`, `movil_number`, `email`, `fax`, `address`, `website`) VALUES
(1, 'ABS INC', 'MICHAEL', '14034089921', 'benmotta@gmail', '123456789', '3376 Spruce drive', 'eapconstruction.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `param_company_contacts`
--

CREATE TABLE `param_company_contacts` (
  `id_contact` int(10) NOT NULL,
  `fk_id_company` int(10) NOT NULL,
  `contact_name` varchar(120) NOT NULL,
  `contact_movil` varchar(12) NOT NULL,
  `contact_email` varchar(70) NOT NULL,
  `contact_position` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `param_company_contacts`
--

INSERT INTO `param_company_contacts` (`id_contact`, `fk_id_company`, `contact_name`, `contact_movil`, `contact_email`, `contact_position`) VALUES
(1, 1, 'FEDERICO CAMARGO', '123456789', 'fede@gmail.com', 'OPERADOR'),
(2, 1, 'CAMILO PEÑARADA', '45678923443', 'sinemail@gmail.com', 'PRESIDENTE'),
(3, 1, 'OTRO', '2345234', 'benmotta@gmail.com', 'OTRO'),
(4, 1, 'PEDRO PABLO', '3234234', 'aja@gmail.com', 'NOSE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `param_menu`
--

CREATE TABLE `param_menu` (
  `id_menu` int(3) NOT NULL,
  `menu_name` varchar(50) NOT NULL,
  `menu_icono` varchar(50) NOT NULL,
  `orden` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `param_menu`
--

INSERT INTO `param_menu` (`id_menu`, `menu_name`, `menu_icono`, `orden`) VALUES
(1, 'Report', 'fa-pie-chart', 2),
(2, 'Settings', 'fa-cog', 3),
(3, 'Payroll', 'fa-book', 1),
(4, 'Programming', 'fa-calendar', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `param_menu_links`
--

CREATE TABLE `param_menu_links` (
  `id_link` int(3) NOT NULL,
  `fk_id_menu` int(3) NOT NULL,
  `link_name` varchar(100) NOT NULL,
  `link_url` varchar(100) NOT NULL,
  `link_icono` varchar(50) NOT NULL,
  `orden` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `param_menu_links`
--

INSERT INTO `param_menu_links` (`id_link`, `fk_id_menu`, `link_name`, `link_url`, `link_icono`, `orden`) VALUES
(1, 3, 'Search payroll', 'payroll/search/payrollByAdmin', 'fa-book', 1),
(3, 2, 'Users', 'admin/usuarios', 'fa-users', 1),
(4, 2, 'Company', 'admin/company', 'fa-building', 2),
(5, 2, 'Projects', 'admin/project', 'fa-road', 3),
(6, 2, 'QR Code', 'codeqr', 'fa-qrcode', 4),
(7, 1, 'Reports', 'public/reportico/run.php?execute_mode=MENU&project=Payroll', 'fa-area-chart', 2),
(8, 3, 'Add payroll', 'payroll/payroll_advanced', 'fa-book', 2),
(9, 4, 'Available users', 'programming/workers', 'fa-male', 4),
(10, 4, 'Skills list', 'programming/skills', 'fa-star', 5),
(11, 4, 'Programming list', 'programming', 'fa-list', 2),
(12, 4, 'DIVIDER', '', '', 3),
(13, 4, 'Calendar', 'programming/calendar', 'fa-calendar', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `param_menu_permisos`
--

CREATE TABLE `param_menu_permisos` (
  `id_permiso` int(3) NOT NULL,
  `fk_id_menu` int(3) NOT NULL,
  `fk_id_rol` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `param_menu_permisos`
--

INSERT INTO `param_menu_permisos` (`id_permiso`, `fk_id_menu`, `fk_id_rol`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 1, 2),
(4, 3, 1),
(5, 3, 2),
(6, 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `param_qr_code`
--

CREATE TABLE `param_qr_code` (
  `id_qr_code` int(10) NOT NULL,
  `value_qr_code` varchar(20) NOT NULL,
  `image_qr_code` varchar(250) NOT NULL,
  `encryption` varchar(100) NOT NULL,
  `qr_code_state` int(1) NOT NULL DEFAULT '1' COMMENT '1: Active; 2: Inactive',
  `fk_id_user` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `param_qr_code`
--

INSERT INTO `param_qr_code` (`id_qr_code`, `value_qr_code`, `image_qr_code`, `encryption`, `qr_code_state`, `fk_id_user`) VALUES
(1, 'EAP20180001', 'images/qrcode/EAP20180001.png', 'EAP20180001h5p3oSK8VwhfEc9Vw6Mz8RcyjGanGe', 1, 0),
(2, 'EAP20180052', 'images/qrcode/EAP20180052.png', 'EAP20180052RzGiYec2Y37bJ7JA9KLvtgnbvckP58', 1, 2),
(3, 'EAP20180003', 'images/qrcode/EAP20180003.png', 'EAP20180003n6fe3qZB5O8AywAbME3wJTb9QOAgnC', 2, 1),
(4, 'EAP20180004', 'images/qrcode/EAP20180004.png', 'EAP20180004lwopKM96Q2UPRPyyBUCX1iEIl4fynz', 2, 0),
(5, 'EAP20180005', 'images/qrcode/EAP20180005.png', 'EAP20180005vBQSV12N0aAqBNw6SMvnKzFDcET3fa', 2, 0),
(6, 'EAP20180006', 'images/qrcode/EAP20180006.png', 'EAP201800064sU7n7sFUqxxz7KydJ6VGSoGE1cTOw', 1, 0),
(7, 'EAP20180007', 'images/qrcode/EAP20180007.png', 'EAP20180007cY2bGBBqyZtc5BDAPymBKPevgTR5nd', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `param_rol`
--

CREATE TABLE `param_rol` (
  `id_rol` int(1) NOT NULL,
  `rol_name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `estilos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `param_rol`
--

INSERT INTO `param_rol` (`id_rol`, `rol_name`, `description`, `estilos`) VALUES
(1, 'SUPER ADMIN', 'Con acceso a todo el sistema', 'text-success'),
(2, 'FOREMAN', 'Encargado de revisar el payroll de los empleados', 'text-danger'),
(3, 'NORMAL USER', 'Empleados sin ningún privilegio', 'text-primary');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `param_user_type`
--

CREATE TABLE `param_user_type` (
  `id_type` int(1) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `style` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `param_user_type`
--

INSERT INTO `param_user_type` (`id_type`, `user_type`, `style`) VALUES
(1, 'Subcontractor', 'label-warning'),
(2, 'Casual', 'label-success'),
(3, 'Payroll', 'label-primary');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payroll`
--

CREATE TABLE `payroll` (
  `id_payroll` int(10) NOT NULL,
  `fk_id_user` int(10) NOT NULL,
  `fk_id_project` int(10) NOT NULL,
  `start` datetime NOT NULL,
  `finish` datetime NOT NULL,
  `adjusted_start` datetime NOT NULL,
  `adjusted_finish` datetime NOT NULL,
  `lunch` tinyint(1) NOT NULL,
  `working_time` varchar(30) NOT NULL,
  `working_hours` float NOT NULL,
  `observation` text NOT NULL,
  `activities` text NOT NULL,
  `fk_id_period` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `payroll`
--

INSERT INTO `payroll` (`id_payroll`, `fk_id_user`, `fk_id_project`, `start`, `finish`, `adjusted_start`, `adjusted_finish`, `lunch`, `working_time`, `working_hours`, `observation`, `activities`, `fk_id_period`) VALUES
(1, 5, 2, '2018-04-30 06:56:00', '2018-04-30 11:56:00', '2018-04-30 07:00:00', '2018-04-30 11:45:00', 0, '+0 days 04:45:00', 4.75, '********************<br><strong>Payrrol inserted by BENJAMIN MOTTA.</strong><br>Date: 2018-04-30 11:57:04<br>********************', 'REVISAR CONTRO DE HORAS TOTALES', 9),
(2, 1, 2, '2018-04-30 14:20:00', '2018-04-30 19:36:00', '2018-04-30 14:30:00', '2018-04-30 19:30:00', 0, '+0 days 05:00:00', 5, '********************<br><strong>Changue hour by BENJAMIN MOTTA.</strong><br>Before -> Start: 2018-04-30 14:20:48 <br>Before -> Finish: 0000-00-00 00:00:00<br>AJUSTE<br>Date: 2018-04-30 14:36:33<br>********************', '', 9),
(3, 5, 2, '2018-04-30 13:26:00', '2018-04-30 16:26:00', '2018-04-30 13:30:00', '2018-04-30 16:15:00', 0, '+0 days 02:45:00', 2.75, '********************<br><strong>Payrrol inserted by BENJAMIN MOTTA.</strong><br>Date: 2018-04-30 14:26:35<br>********************<br>********************<br><strong>Changue hour by BENJAMIN MOTTA.</strong><br>Before -> Start: 2018-04-30 13:26:00 <br>Before -> Finish: 2018-04-30 14:26:00<br>CAMPO DE LA OBERVACION<br>Date: 2018-04-30 14:32:17<br>********************', '', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payroll_period`
--

CREATE TABLE `payroll_period` (
  `id_period` int(10) NOT NULL,
  `date_start` date NOT NULL,
  `date_finish` date NOT NULL,
  `period` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `payroll_period`
--

INSERT INTO `payroll_period` (`id_period`, `date_start`, `date_finish`, `period`) VALUES
(1, '2018-01-07', '2018-01-20', '2018-01-07 --> 2018-01-20'),
(2, '2018-01-21', '2018-02-03', '2018-01-21 --> 2018-02-03'),
(3, '2018-02-04', '2018-02-17', '2018-02-04 --> 2018-02-17'),
(4, '2018-02-18', '2018-03-03', '2018-02-18 --> 2018-03-03'),
(5, '2018-03-04', '2018-03-17', '2018-03-04 --> 2018-03-17'),
(6, '2018-03-18', '2018-03-31', '2018-03-18 --> 2018-03-31'),
(7, '2018-04-01', '2018-04-14', '2018-04-01 --> 2018-04-14'),
(8, '2018-04-15', '2018-04-28', '2018-04-15 --> 2018-04-28'),
(9, '2018-04-29', '2018-05-12', '2018-04-29 --> 2018-05-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payroll_project_period`
--

CREATE TABLE `payroll_project_period` (
  `id_project_period` int(10) NOT NULL,
  `fk_id_user` int(10) NOT NULL,
  `fk_id_project` int(10) NOT NULL,
  `fk_id_period` int(10) NOT NULL,
  `total_hours` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `payroll_project_period`
--

INSERT INTO `payroll_project_period` (`id_project_period`, `fk_id_user`, `fk_id_project`, `fk_id_period`, `total_hours`) VALUES
(1, 5, 2, 9, 7.5),
(2, 1, 2, 9, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payroll_total_period`
--

CREATE TABLE `payroll_total_period` (
  `id_total_period` int(10) NOT NULL,
  `fk_id_user` int(10) NOT NULL,
  `fk_id_period` int(10) NOT NULL,
  `total_hours_user` float NOT NULL,
  `hour_price` float NOT NULL,
  `hour_price_lmia` float NOT NULL,
  `max_hours` float(5,2) NOT NULL,
  `less_max_hours` float(5,2) NOT NULL,
  `over_max_hours` float(5,2) NOT NULL,
  `gross_amount` float(6,2) NOT NULL,
  `casual_amount` float(6,2) NOT NULL,
  `gst_amount` float(6,2) NOT NULL,
  `total_user` float(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programming`
--

CREATE TABLE `programming` (
  `id_programming` int(10) NOT NULL,
  `fk_id_user` int(10) NOT NULL,
  `fk_id_project` int(10) NOT NULL,
  `date_programming` date NOT NULL,
  `date_issue` datetime NOT NULL,
  `quantity` tinyint(1) NOT NULL COMMENT 'Cantidad de personas para el trabajo',
  `observation` text NOT NULL,
  `state` tinyint(1) NOT NULL COMMENT '1: Falta programar; 2: Programada; 3: Eliminada'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programming_skills`
--

CREATE TABLE `programming_skills` (
  `id_programming_skill` int(10) NOT NULL,
  `skill` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programming_users`
--

CREATE TABLE `programming_users` (
  `id_programming_users` int(10) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `movil_number` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programming_users_skills`
--

CREATE TABLE `programming_users_skills` (
  `id_programming_users_skills` int(10) NOT NULL,
  `fk_id_programming_skill` int(10) NOT NULL,
  `fk_id_programming_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programming_worker`
--

CREATE TABLE `programming_worker` (
  `id_programming_worker` int(10) NOT NULL,
  `fk_id_programming_user` int(10) NOT NULL,
  `fk_id_programming` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `project`
--

CREATE TABLE `project` (
  `id_project` int(10) NOT NULL,
  `project_name` varchar(200) NOT NULL,
  `project_state` tinyint(1) NOT NULL COMMENT '1:Active; 2:inactive',
  `project_number` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `fk_id_company` int(10) NOT NULL,
  `fk_id_user_foreman` int(10) NOT NULL,
  `purchase_order_general` varchar(12) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `project`
--

INSERT INTO `project` (`id_project`, `project_name`, `project_state`, `project_number`, `address`, `fk_id_company`, `fk_id_user_foreman`, `purchase_order_general`, `description`) VALUES
(0, 'No project', 2, '', '', 1, 3, '', ''),
(1, 'CONTRUCCION DE PUENTE', 1, '1124-2', '3376 Spruce drive', 1, 3, 'asdfasdf', ''),
(2, ' EDIFICIO CENTRAL', 1, '1125-1', '3376 Spruce drive', 1, 4, '', ''),
(3, 'PASO PEATONAL DOWNTOWN', 1, '1230-1', '', 1, 3, '', ''),
(6, 'HOME TOWN', 1, '1024-2', '', 1, 3, '', ''),
(7, 'WINDOW INSTALATION', 1, '1090-1', '', 1, 3, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `project_purchase_order`
--

CREATE TABLE `project_purchase_order` (
  `id_purchase_order` int(10) NOT NULL,
  `fk_id_project` int(10) NOT NULL,
  `purchase_order` varchar(12) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `log_user` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `fk_id_type` int(1) NOT NULL,
  `fk_id_rol` int(1) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `movil` varchar(12) NOT NULL,
  `password` varchar(50) NOT NULL,
  `state` int(1) NOT NULL DEFAULT '0' COMMENT '0: newUser; 1:active; 2:inactive',
  `photo` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `hora_real_cad` float NOT NULL,
  `hora_contrato_cad` float NOT NULL,
  `no_horas_max` float(5,2) NOT NULL,
  `company_name` varchar(150) NOT NULL,
  `gst_number` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `first_name`, `last_name`, `log_user`, `email`, `fk_id_type`, `fk_id_rol`, `birthdate`, `movil`, `password`, `state`, `photo`, `address`, `hora_real_cad`, `hora_contrato_cad`, `no_horas_max`, `company_name`, `gst_number`) VALUES
(1, 'BENJAMIN', 'MOTTA', 'bmottag', 'benmotta@gmail.com', 3, 1, '2018-03-19', '14034089921', 'e10adc3949ba59abbe56e057f20f883e', 1, 'images/employee/thumbs/1.png', '', 26, 28, 94.77, '', ''),
(2, 'EDUAR', 'ACOSTA', 'eacosta', 'eacosta@eapcontruction.com', 1, 1, '2018-04-05', '4038895044', 'e10adc3949ba59abbe56e057f20f883e', 1, '', '', 24, 0, 500.00, '', ''),
(3, 'JAVIER', 'MOLINA', 'jmolina', 'jmolina@gmail.com', 2, 2, '2018-04-10', '3347766', 'e10adc3949ba59abbe56e057f20f883e', 1, '', '', 26, 0, 88.00, '', ''),
(4, 'ANDRES', 'PALOMARES', 'apalomares', 'apalomares@gmail.com', 2, 2, '2018-04-10', '3347766', 'e10adc3949ba59abbe56e057f20f883e', 1, '', '', 25, 0, 88.00, '', ''),
(5, 'ALEX', 'HERRERA', 'aherrera', 'aherrera@gmail.com', 2, 3, '2018-04-10', '3347766', 'e10adc3949ba59abbe56e057f20f883e', 1, '', '', 26, 0, 88.00, '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `log_foreman_project`
--
ALTER TABLE `log_foreman_project`
  ADD PRIMARY KEY (`id_log_foreman_project`),
  ADD KEY `fk_id_project` (`fk_id_project`),
  ADD KEY `fk_id_user_foreman` (`fk_id_user_foreman`),
  ADD KEY `fk_id_user` (`fk_id_user`);

--
-- Indices de la tabla `param_company`
--
ALTER TABLE `param_company`
  ADD PRIMARY KEY (`id_company`);

--
-- Indices de la tabla `param_company_contacts`
--
ALTER TABLE `param_company_contacts`
  ADD PRIMARY KEY (`id_contact`),
  ADD KEY `fk_id_company` (`fk_id_company`);

--
-- Indices de la tabla `param_menu`
--
ALTER TABLE `param_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indices de la tabla `param_menu_links`
--
ALTER TABLE `param_menu_links`
  ADD PRIMARY KEY (`id_link`),
  ADD KEY `fk_id_menu` (`fk_id_menu`);

--
-- Indices de la tabla `param_menu_permisos`
--
ALTER TABLE `param_menu_permisos`
  ADD PRIMARY KEY (`id_permiso`),
  ADD KEY `fk_id_menu` (`fk_id_menu`),
  ADD KEY `fk_id_rol` (`fk_id_rol`);

--
-- Indices de la tabla `param_qr_code`
--
ALTER TABLE `param_qr_code`
  ADD PRIMARY KEY (`id_qr_code`),
  ADD UNIQUE KEY `value_qr_code` (`value_qr_code`),
  ADD UNIQUE KEY `encryption` (`encryption`),
  ADD KEY `fk_id_user` (`fk_id_user`);

--
-- Indices de la tabla `param_rol`
--
ALTER TABLE `param_rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `param_user_type`
--
ALTER TABLE `param_user_type`
  ADD PRIMARY KEY (`id_type`);

--
-- Indices de la tabla `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`id_payroll`),
  ADD KEY `fk_id_user` (`fk_id_user`),
  ADD KEY `fk_id_project_start` (`fk_id_project`),
  ADD KEY `fk_id_period` (`fk_id_period`);

--
-- Indices de la tabla `payroll_period`
--
ALTER TABLE `payroll_period`
  ADD PRIMARY KEY (`id_period`);

--
-- Indices de la tabla `payroll_project_period`
--
ALTER TABLE `payroll_project_period`
  ADD PRIMARY KEY (`id_project_period`),
  ADD KEY `fk_id_user` (`fk_id_user`),
  ADD KEY `fk_id_project` (`fk_id_project`),
  ADD KEY `fk_id_period` (`fk_id_period`);

--
-- Indices de la tabla `payroll_total_period`
--
ALTER TABLE `payroll_total_period`
  ADD PRIMARY KEY (`id_total_period`),
  ADD KEY `fk_id_user` (`fk_id_user`),
  ADD KEY `fk_id_period` (`fk_id_period`);

--
-- Indices de la tabla `programming`
--
ALTER TABLE `programming`
  ADD PRIMARY KEY (`id_programming`),
  ADD KEY `fk_id_user` (`fk_id_user`),
  ADD KEY `fk_id_project` (`fk_id_project`);

--
-- Indices de la tabla `programming_skills`
--
ALTER TABLE `programming_skills`
  ADD PRIMARY KEY (`id_programming_skill`);

--
-- Indices de la tabla `programming_users`
--
ALTER TABLE `programming_users`
  ADD PRIMARY KEY (`id_programming_users`);

--
-- Indices de la tabla `programming_users_skills`
--
ALTER TABLE `programming_users_skills`
  ADD PRIMARY KEY (`id_programming_users_skills`),
  ADD KEY `fk_id_programming_skill` (`fk_id_programming_skill`),
  ADD KEY `fk_id_programming_user` (`fk_id_programming_user`);

--
-- Indices de la tabla `programming_worker`
--
ALTER TABLE `programming_worker`
  ADD PRIMARY KEY (`id_programming_worker`),
  ADD KEY `fk_id_programming_user` (`fk_id_programming_user`),
  ADD KEY `fk_id_programming` (`fk_id_programming`);

--
-- Indices de la tabla `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`),
  ADD KEY `fk_id_company` (`fk_id_company`),
  ADD KEY `fk_id_user_foreman` (`fk_id_user_foreman`);

--
-- Indices de la tabla `project_purchase_order`
--
ALTER TABLE `project_purchase_order`
  ADD PRIMARY KEY (`id_purchase_order`),
  ADD KEY `fk_id_project` (`fk_id_project`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `log_user` (`log_user`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_id_rol` (`fk_id_rol`),
  ADD KEY `fk_id_type` (`fk_id_type`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `log_foreman_project`
--
ALTER TABLE `log_foreman_project`
  MODIFY `id_log_foreman_project` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `param_company`
--
ALTER TABLE `param_company`
  MODIFY `id_company` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `param_company_contacts`
--
ALTER TABLE `param_company_contacts`
  MODIFY `id_contact` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `param_menu`
--
ALTER TABLE `param_menu`
  MODIFY `id_menu` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `param_menu_links`
--
ALTER TABLE `param_menu_links`
  MODIFY `id_link` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `param_menu_permisos`
--
ALTER TABLE `param_menu_permisos`
  MODIFY `id_permiso` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `param_qr_code`
--
ALTER TABLE `param_qr_code`
  MODIFY `id_qr_code` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `param_rol`
--
ALTER TABLE `param_rol`
  MODIFY `id_rol` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `param_user_type`
--
ALTER TABLE `param_user_type`
  MODIFY `id_type` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `payroll`
--
ALTER TABLE `payroll`
  MODIFY `id_payroll` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `payroll_period`
--
ALTER TABLE `payroll_period`
  MODIFY `id_period` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `payroll_project_period`
--
ALTER TABLE `payroll_project_period`
  MODIFY `id_project_period` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `payroll_total_period`
--
ALTER TABLE `payroll_total_period`
  MODIFY `id_total_period` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `programming`
--
ALTER TABLE `programming`
  MODIFY `id_programming` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `programming_skills`
--
ALTER TABLE `programming_skills`
  MODIFY `id_programming_skill` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `programming_users`
--
ALTER TABLE `programming_users`
  MODIFY `id_programming_users` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `programming_users_skills`
--
ALTER TABLE `programming_users_skills`
  MODIFY `id_programming_users_skills` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `programming_worker`
--
ALTER TABLE `programming_worker`
  MODIFY `id_programming_worker` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `project_purchase_order`
--
ALTER TABLE `project_purchase_order`
  MODIFY `id_purchase_order` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `log_foreman_project`
--
ALTER TABLE `log_foreman_project`
  ADD CONSTRAINT `log_foreman_project_ibfk_1` FOREIGN KEY (`fk_id_project`) REFERENCES `project` (`id_project`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `param_company_contacts`
--
ALTER TABLE `param_company_contacts`
  ADD CONSTRAINT `param_company_contacts_ibfk_1` FOREIGN KEY (`fk_id_company`) REFERENCES `param_company` (`id_company`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `param_menu_links`
--
ALTER TABLE `param_menu_links`
  ADD CONSTRAINT `param_menu_links_ibfk_1` FOREIGN KEY (`fk_id_menu`) REFERENCES `param_menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `param_menu_permisos`
--
ALTER TABLE `param_menu_permisos`
  ADD CONSTRAINT `param_menu_permisos_ibfk_1` FOREIGN KEY (`fk_id_menu`) REFERENCES `param_menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `param_menu_permisos_ibfk_2` FOREIGN KEY (`fk_id_rol`) REFERENCES `param_rol` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `payroll`
--
ALTER TABLE `payroll`
  ADD CONSTRAINT `payroll_ibfk_3` FOREIGN KEY (`fk_id_project`) REFERENCES `project` (`id_project`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `payroll_ibfk_4` FOREIGN KEY (`fk_id_period`) REFERENCES `payroll_period` (`id_period`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `payroll_project_period`
--
ALTER TABLE `payroll_project_period`
  ADD CONSTRAINT `payroll_project_period_ibfk_1` FOREIGN KEY (`fk_id_project`) REFERENCES `project` (`id_project`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payroll_project_period_ibfk_2` FOREIGN KEY (`fk_id_period`) REFERENCES `payroll_period` (`id_period`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `payroll_total_period`
--
ALTER TABLE `payroll_total_period`
  ADD CONSTRAINT `payroll_total_period_ibfk_1` FOREIGN KEY (`fk_id_period`) REFERENCES `payroll_period` (`id_period`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `programming`
--
ALTER TABLE `programming`
  ADD CONSTRAINT `programming_ibfk_1` FOREIGN KEY (`fk_id_project`) REFERENCES `project` (`id_project`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `programming_users_skills`
--
ALTER TABLE `programming_users_skills`
  ADD CONSTRAINT `programming_users_skills_ibfk_1` FOREIGN KEY (`fk_id_programming_skill`) REFERENCES `programming_skills` (`id_programming_skill`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `programming_users_skills_ibfk_2` FOREIGN KEY (`fk_id_programming_user`) REFERENCES `programming_users` (`id_programming_users`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `programming_worker`
--
ALTER TABLE `programming_worker`
  ADD CONSTRAINT `programming_worker_ibfk_1` FOREIGN KEY (`fk_id_programming_user`) REFERENCES `programming_users` (`id_programming_users`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `programming_worker_ibfk_2` FOREIGN KEY (`fk_id_programming`) REFERENCES `programming` (`id_programming`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`fk_id_company`) REFERENCES `param_company` (`id_company`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `project_purchase_order`
--
ALTER TABLE `project_purchase_order`
  ADD CONSTRAINT `project_purchase_order_ibfk_1` FOREIGN KEY (`fk_id_project`) REFERENCES `project` (`id_project`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
