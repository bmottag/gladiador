-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 07-05-2018 a las 08:45:02
-- Versión del servidor: 5.6.39-cll-lve
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `eap_app_2018`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_foreman_project`
--

CREATE TABLE IF NOT EXISTS `log_foreman_project` (
  `id_log_foreman_project` int(10) NOT NULL AUTO_INCREMENT,
  `fk_id_project` int(10) NOT NULL,
  `fk_id_user_foreman` int(10) NOT NULL,
  `date_issue` datetime NOT NULL,
  `fk_id_user` int(10) NOT NULL,
  PRIMARY KEY (`id_log_foreman_project`),
  KEY `fk_id_project` (`fk_id_project`),
  KEY `fk_id_user_foreman` (`fk_id_user_foreman`),
  KEY `fk_id_user` (`fk_id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `log_foreman_project`
--

INSERT INTO `log_foreman_project` (`id_log_foreman_project`, `fk_id_project`, `fk_id_user_foreman`, `date_issue`, `fk_id_user`) VALUES
(1, 1, 5, '2018-04-25 15:28:39', 2),
(2, 2, 2, '2018-04-25 15:40:40', 2),
(3, 3, 5, '2018-04-27 21:30:09', 2),
(4, 1, 15, '2018-04-27 21:31:18', 2),
(5, 3, 23, '2018-04-27 21:31:36', 2),
(6, 4, 2, '2018-04-27 21:34:36', 2),
(7, 5, 2, '2018-04-27 21:37:27', 2),
(8, 6, 2, '2018-04-27 21:38:10', 2),
(9, 6, 21, '2018-04-27 21:38:42', 2),
(10, 7, 6, '2018-04-27 21:40:12', 2),
(11, 8, 2, '2018-04-27 21:52:00', 2),
(12, 9, 2, '2018-04-27 21:52:45', 2),
(13, 10, 6, '2018-04-27 21:58:24', 2),
(14, 11, 6, '2018-04-27 21:59:09', 2),
(15, 12, 6, '2018-04-27 21:59:50', 2),
(16, 13, 2, '2018-04-27 22:03:03', 2),
(17, 14, 2, '2018-04-27 22:05:01', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `param_company`
--

CREATE TABLE IF NOT EXISTS `param_company` (
  `id_company` int(10) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(120) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `movil_number` varchar(12) NOT NULL,
  `email` varchar(70) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `address` varchar(250) NOT NULL,
  `website` varchar(120) NOT NULL,
  PRIMARY KEY (`id_company`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `param_company`
--

INSERT INTO `param_company` (`id_company`, `company_name`, `contact`, `movil_number`, `email`, `fax`, `address`, `website`) VALUES
(1, 'CWP CONSTRUCTORS LTD', 'PAT CALLAGHAM', '17802204304', 'pcallaghan@cwpconstructors.com', '', '', ''),
(2, 'CONFORM WORK INC.', 'BRAD RASMUSSEN', '14038167979', 'brad@conformworks.com', '', '', ''),
(3, 'GUS CONSTRUCTION ', 'ALEJANDRO BARON', '15878895847', 'a.baron@gusconstruction.ca', '', '', ''),
(4, 'FERAFORM COMMERCIAL CONCRETE FORMING', 'JASON FERA', '15877770140', 'feraform@hotmail.ca', '', '', ''),
(5, 'BIRD CONSTRUCTION ', 'SIMON CHRISTOPHER', '14037030165', 'simon.chistopher@bird.ca', '', '', ''),
(6, 'PERMACAST CONCRETE CONTRACTING LTD', 'JOHN MCLEOD', '14038882489', 'pcconcrete@shaw.ca', '', '', ''),
(7, 'LEDCOR CONSTRUCTION LTD.', 'KIM HORITCHIE', '14032649155', 'KIM.HORITCHIE@LEDCOR.COM', '', '', ''),
(8, 'MAPLE REIDERS', 'BRENDAN O NEILL', '14048092049', 'BrendanO@maple.ca', '', '', ''),
(9, 'TREVCON ENTERPRISES', 'TREVOR HADDOW', '14038159692', 'trevor@trevcon.ca', '', '', ''),
(10, 'EAP CONSTRUCTION LTD.', 'EDUAR ACOSTA PERRONY', '4038895044', 'info@eapconstruction.com', '4037243909', '126, 10615 48 STREET SE', 'www.eapconstruction.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `param_company_contacts`
--

CREATE TABLE IF NOT EXISTS `param_company_contacts` (
  `id_contact` int(10) NOT NULL AUTO_INCREMENT,
  `fk_id_company` int(10) NOT NULL,
  `contact_name` varchar(120) NOT NULL,
  `contact_movil` varchar(12) NOT NULL,
  `contact_email` varchar(70) NOT NULL,
  `contact_position` varchar(100) NOT NULL,
  PRIMARY KEY (`id_contact`),
  KEY `fk_id_company` (`fk_id_company`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `param_menu`
--

CREATE TABLE IF NOT EXISTS `param_menu` (
  `id_menu` int(3) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(50) NOT NULL,
  `menu_icono` varchar(50) NOT NULL,
  `orden` int(1) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `param_menu`
--

INSERT INTO `param_menu` (`id_menu`, `menu_name`, `menu_icono`, `orden`) VALUES
(1, 'Report', 'fa-pie-chart', 2),
(2, 'Settings', 'fa-cog', 3),
(3, 'Payroll', 'fa-book', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `param_menu_links`
--

CREATE TABLE IF NOT EXISTS `param_menu_links` (
  `id_link` int(3) NOT NULL AUTO_INCREMENT,
  `fk_id_menu` int(3) NOT NULL,
  `link_name` varchar(100) NOT NULL,
  `link_url` varchar(100) NOT NULL,
  `link_icono` varchar(50) NOT NULL,
  `orden` int(1) NOT NULL,
  PRIMARY KEY (`id_link`),
  KEY `fk_id_menu` (`fk_id_menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

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
(8, 3, 'Add payroll', 'payroll/payroll_advanced', 'fa-book', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `param_menu_permisos`
--

CREATE TABLE IF NOT EXISTS `param_menu_permisos` (
  `id_permiso` int(3) NOT NULL AUTO_INCREMENT,
  `fk_id_menu` int(3) NOT NULL,
  `fk_id_rol` int(1) NOT NULL,
  PRIMARY KEY (`id_permiso`),
  KEY `fk_id_menu` (`fk_id_menu`),
  KEY `fk_id_rol` (`fk_id_rol`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `param_menu_permisos`
--

INSERT INTO `param_menu_permisos` (`id_permiso`, `fk_id_menu`, `fk_id_rol`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 1, 2),
(4, 3, 1),
(5, 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `param_qr_code`
--

CREATE TABLE IF NOT EXISTS `param_qr_code` (
  `id_qr_code` int(10) NOT NULL AUTO_INCREMENT,
  `value_qr_code` varchar(20) NOT NULL,
  `image_qr_code` varchar(250) NOT NULL,
  `encryption` varchar(100) NOT NULL,
  `qr_code_state` int(1) NOT NULL DEFAULT '1' COMMENT '1: Active; 2: Inactive',
  `fk_id_user` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_qr_code`),
  UNIQUE KEY `value_qr_code` (`value_qr_code`),
  UNIQUE KEY `encryption` (`encryption`),
  KEY `fk_id_user` (`fk_id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `param_qr_code`
--

INSERT INTO `param_qr_code` (`id_qr_code`, `value_qr_code`, `image_qr_code`, `encryption`, `qr_code_state`, `fk_id_user`) VALUES
(1, 'EAP1000', 'images/qrcode/EAP1000.png', 'EAP1000ICINDiiHraOWM6iIJRMMkpxUeX70YE', 1, 2),
(2, 'EAP1001', 'images/qrcode/EAP1001.png', 'EAP1001zUeySBSYQHfhsEyLH3M5aF5ySOzWr7', 1, 3),
(3, 'EAP1002', 'images/qrcode/EAP1002.png', 'EAP1002zhQUWjWo8mwcKeg0po23iS8cHQr7mZ', 1, 4),
(4, 'EAP1003', 'images/qrcode/EAP1003.png', 'EAP1003csR4BMtyE4CXVXdkQZE18cgDuMw4P0', 1, 8),
(5, 'EAP1004', 'images/qrcode/EAP1004.png', 'EAP10049rsQludViiOl6k0ZKQyPGwrn1bzmVE', 1, 5),
(6, 'EAP1005', 'images/qrcode/EAP1005.png', 'EAP1005mUvUkXFDsnl8PhhO7rfv7linPYFEAa', 1, 15),
(7, 'EAP1006', 'images/qrcode/EAP1006.png', 'EAP1006jFNmjDGqn7Yy5VcGnQYC5YcKJYQn0J', 1, 6),
(8, 'EAP1007', 'images/qrcode/EAP1007.png', 'EAP1007Imu58VSCZAqA87ieLfLqRISzvhN1lO', 1, 9),
(9, 'EAP1008', 'images/qrcode/EAP1008.png', 'EAP1008Ru2CpzX83w9ix6fVaq2mWIup8gMLXy', 1, 7),
(10, 'EAP1009', 'images/qrcode/EAP1009.png', 'EAP1009aojRrPHEM02LhoHDAht2KG05v7b9Iz', 1, 14),
(11, 'EAP1010', 'images/qrcode/EAP1010.png', 'EAP1010widW1Ll8Py7G0evGhvnQmyXlsIiKGq', 1, 1),
(12, 'EAP1011', 'images/qrcode/EAP1011.png', 'EAP101104PdPGo1D5pABoewuBhYSJMpv6yUG6', 1, 10),
(13, 'EAP1012', 'images/qrcode/EAP1012.png', 'EAP1012BFzQjFWO7aIlaJP56A7cZPmm6Yhtso', 1, 11),
(14, 'EAP1013', 'images/qrcode/EAP1013.png', 'EAP1013ptueATjWifxqHN1WIvXEOwU2YPP709', 1, 13),
(15, 'EAP1014', 'images/qrcode/EAP1014.png', 'EAP1014Qc9nzvLjf2lsQHN2da1hqIPHHhUUvE', 1, NULL),
(16, 'EAP1015', 'images/qrcode/EAP1015.png', 'EAP10156Cg5pWp17Ksi49pGzJhqqNz6V7cpRO', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `param_rol`
--

CREATE TABLE IF NOT EXISTS `param_rol` (
  `id_rol` int(1) NOT NULL AUTO_INCREMENT,
  `rol_name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `estilos` varchar(50) NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

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

CREATE TABLE IF NOT EXISTS `param_user_type` (
  `id_type` int(1) NOT NULL AUTO_INCREMENT,
  `user_type` varchar(50) NOT NULL,
  `style` varchar(50) NOT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `param_user_type`
--

INSERT INTO `param_user_type` (`id_type`, `user_type`, `style`) VALUES
(1, 'Subcontractor', 'btn-warning'),
(2, 'Casual', 'btn-success'),
(3, 'Payroll', 'btn-primary');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payroll`
--

CREATE TABLE IF NOT EXISTS `payroll` (
  `id_payroll` int(10) NOT NULL AUTO_INCREMENT,
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
  `fk_id_period` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_payroll`),
  KEY `fk_id_user` (`fk_id_user`),
  KEY `fk_id_project_start` (`fk_id_project`),
  KEY `fk_id_period` (`fk_id_period`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payroll_period`
--

CREATE TABLE IF NOT EXISTS `payroll_period` (
  `id_period` int(10) NOT NULL AUTO_INCREMENT,
  `date_start` date NOT NULL,
  `date_finish` date NOT NULL,
  `period` varchar(100) NOT NULL,
  PRIMARY KEY (`id_period`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

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

CREATE TABLE IF NOT EXISTS `payroll_project_period` (
  `id_project_period` int(10) NOT NULL AUTO_INCREMENT,
  `fk_id_user` int(10) NOT NULL,
  `fk_id_project` int(10) NOT NULL,
  `fk_id_period` int(10) NOT NULL,
  `total_hours` float NOT NULL,
  PRIMARY KEY (`id_project_period`),
  KEY `fk_id_user` (`fk_id_user`),
  KEY `fk_id_project` (`fk_id_project`),
  KEY `fk_id_period` (`fk_id_period`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payroll_total_period`
--

CREATE TABLE IF NOT EXISTS `payroll_total_period` (
  `id_total_period` int(10) NOT NULL AUTO_INCREMENT,
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
  `total_user` float(6,2) NOT NULL,
  PRIMARY KEY (`id_total_period`),
  KEY `fk_id_user` (`fk_id_user`),
  KEY `fk_id_period` (`fk_id_period`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id_project` int(10) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(200) NOT NULL,
  `project_state` tinyint(1) NOT NULL COMMENT '1:Active; 2:inactive',
  `project_number` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `fk_id_company` int(10) NOT NULL,
  `fk_id_user_foreman` int(10) NOT NULL,
  `purchase_order_general` varchar(12) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id_project`),
  KEY `fk_id_company` (`fk_id_company`),
  KEY `fk_id_user_foreman` (`fk_id_user_foreman`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `project`
--

INSERT INTO `project` (`id_project`, `project_name`, `project_state`, `project_number`, `address`, `fk_id_company`, `fk_id_user_foreman`, `purchase_order_general`, `description`) VALUES
(1, 'YWCA', 1, '1000?', '281 Township Rd 240, Chestermere, AB', 6, 15, '1000RTR', 'KJN CXVZJBDJKVB'),
(2, 'EAP SHOP', 1, '001', '126, 10615 48 STREET SE', 10, 2, '', ''),
(3, 'CANADIAN BLOOD SERVICES', 1, '1000?', '1669 17 AVENUE SE', 5, 23, '', ''),
(4, 'NOVA COLD', 1, '1000?', '1669 17 ', 8, 2, '', ''),
(5, 'SW RING ROAD BR #22 CALGARY ', 1, '1000? WET CURE.', '111111111', 1, 2, '', ''),
(6, 'CINEPLEX', 1, '1000?', '1669 17 AVENUE SE', 7, 21, '', ''),
(7, 'WESTPRO DOWN TOWN', 1, '1000?', '1669 17 AVENUE SE', 2, 6, '', ''),
(8, 'CALGARY JOHN HOWER', 1, '1000?', '111111', 6, 2, '', ''),
(9, 'EAGLE BUILDER SHOP', 1, '1000?', '1111111', 3, 2, '', ''),
(10, 'SW RING ROAD BR #22 CALGARY ', 1, '1000? CONCRETE WORK', '111111', 1, 6, '', ''),
(11, 'HANNA PROJECT', 1, '1000?', '1111111', 4, 6, '', ''),
(12, 'RED DEER RIVER BRIDGE', 1, '1000?', '1111111MAPA', 9, 6, '', ''),
(13, 'PALLISER TUNNEL/CONTRACT HOLE', 1, '1000', '11111', 7, 2, '1000', 'CONCRETE FORMING AND POURING.'),
(14, 'PALLISER TUNNEL', 1, '1003?CONTRACT REBAR', '11111', 7, 2, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `project_purchase_order`
--

CREATE TABLE IF NOT EXISTS `project_purchase_order` (
  `id_purchase_order` int(10) NOT NULL AUTO_INCREMENT,
  `fk_id_project` int(10) NOT NULL,
  `purchase_order` varchar(12) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id_purchase_order`),
  KEY `fk_id_project` (`fk_id_project`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `project_purchase_order`
--

INSERT INTO `project_purchase_order` (`id_purchase_order`, `fk_id_project`, `purchase_order`, `description`) VALUES
(1, 1, '1000', 'MATERIALS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
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
  `gst_number` varchar(100) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `log_user` (`log_user`),
  UNIQUE KEY `email` (`email`),
  KEY `fk_id_rol` (`fk_id_rol`),
  KEY `fk_id_type` (`fk_id_type`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `first_name`, `last_name`, `log_user`, `email`, `fk_id_type`, `fk_id_rol`, `birthdate`, `movil`, `password`, `state`, `photo`, `address`, `hora_real_cad`, `hora_contrato_cad`, `no_horas_max`, `company_name`, `gst_number`) VALUES
(1, 'BENJAMIN', 'MOTTA', 'bmottag', 'benmotta@gmail.com', 3, 1, '2018-03-19', '14034089921', '692ddae9648cb57da15cd58912131fed', 1, '', '', 0, 0, 0.00, '', ''),
(2, 'EDUAR', 'ACOSTA PERRONY', 'eduaracosta', 'eduar@eapconstruction.com', 1, 1, '2018-04-05', '4038895044', 'b690335fec88d84adb9e3f2f3b56cb85', 1, '', '', 100, 0, 0.00, '1', '1'),
(3, 'JESUS RICARDO', 'ACOSTA', 'jesusacosta', 'jesus@eapconstruction.com', 3, 1, '2018-04-19', '14034016107', 'a26b2c0f9c7bbb964f8866c4c097a97f', 0, '', '', 0, 0, 0.00, '', ''),
(4, 'ELKIN', 'ACOSTA PERRONY', 'elkinacosta', 'elkin@eapconstruction.com', 3, 1, '2018-04-19', '14034010216', 'ccd9c9835fb33aa2ac6f78a6f5ead024', 0, '', '', 0, 0, 88.00, '', ''),
(5, 'ARTURO', 'ESCOBAR', 'ARTUROESCOBAR', 'arturitoescobar@hotmail.com', 3, 2, '2018-04-19', '4038895046', 'e10adc3949ba59abbe56e057f20f883e', 0, '', '', 28, 0, 88.00, '', ''),
(6, 'JEFFERSON ', 'QUINTERO/ ALBERTA INC.', 'JEFFERSONQUINTERO', 'jefferson11quintero28@gmail.com', 1, 2, '2018-04-26', '4039934390', 'e10adc3949ba59abbe56e057f20f883e', 0, '', '', 30, 0, 0.00, '1', '1'),
(7, 'BRIGITH', 'SALAZAR', 'BRIGITH', 'reacfox@hotmail.com', 1, 3, '2018-04-26', '5878894822', 'e10adc3949ba59abbe56e057f20f883e', 0, '', '', 23, 0, 0.00, 'BDM SERVICES LTD.', '1'),
(8, 'ODALYS ', 'AGUIAR', 'ODALYSAGUIAR', 'accounting@eapconstruction.com', 1, 1, '2018-04-26', '4036154196', 'e10adc3949ba59abbe56e057f20f883e', 0, '', '', 25, 0, 0.00, '1', '1'),
(9, 'ISRAEL ', 'MONRROY', 'ISRAELMONROY', 'israel_426@hotmail.com', 3, 3, '2018-04-26', '5147438486', 'e10adc3949ba59abbe56e057f20f883e', 0, '', '', 28, 0, 88.00, '', ''),
(10, 'CAMILO ', 'ISAZA/UNITED CONTRACTING ', 'CAMILOISAZA', 'info@unitedcs.ca', 1, 3, '2018-04-26', '4033054363', 'e10adc3949ba59abbe56e057f20f883e', 0, '', '', 75, 0, 0.00, '1', '1'),
(11, 'WILBER', 'ANNOYAN BING-IL', 'WILBERANNOYAN', 'jimrymino@yahoo.com', 3, 3, '2018-04-26', '4033541966', 'e10adc3949ba59abbe56e057f20f883e', 0, '', '', 24, 28, 102.67, '', ''),
(12, 'RUBEN DARIO', 'RENZA', 'RUBENRENZA', 'info@eapconstruction.com', 3, 3, '2018-04-26', '5878883320', 'e10adc3949ba59abbe56e057f20f883e', 0, '', '', 23, 0, 88.00, '', ''),
(13, 'MARVIN', 'GALUSAN', 'MARVINGALUSAN', 'galusanm@gmail.com', 3, 3, '2018-04-26', '4036671757', 'e10adc3949ba59abbe56e057f20f883e', 0, '', '', 24, 28, 102.67, '', ''),
(14, 'LUIS ALFONSO', 'ALVAREZ', 'LUISALVAREZ', 'mi.lena.7@hotmail.com', 3, 3, '2018-04-27', '4036188312', 'e10adc3949ba59abbe56e057f20f883e', 0, '', '', 25, 0, 88.00, '', ''),
(15, 'JUAN ANDRES', 'ROCHA NEGRETE', 'JUANROCHA', 'juan-andres96100@hotmail.com', 3, 2, '2018-04-27', '4036670084', 'e10adc3949ba59abbe56e057f20f883e', 0, '', '', 25, 0, 88.00, '', ''),
(16, 'JOSE MIGUEL', 'RODRIGUEZ', 'JOSERODRIGUEZ', 'elizabeth15-93@hotmail.com', 3, 3, '2018-04-27', '5872849308', 'e10adc3949ba59abbe56e057f20f883e', 0, '', '', 25, 0, 88.00, '', ''),
(17, 'JOSE DANIEL', 'ROCHA NEGRETE', 'JOSEROCHA', 'dani.chivas100@gmail.com', 3, 2, '2018-04-27', '4034646023', 'e10adc3949ba59abbe56e057f20f883e', 0, '', '', 25, 0, 88.00, '', ''),
(18, 'JONATHAN', 'RENZA', 'JONATHANRENZA', 'jonathan0000000000000@gmail.com', 3, 3, '2018-04-27', '5872841927', 'e10adc3949ba59abbe56e057f20f883e', 0, '', '', 23, 0, 88.00, '', ''),
(19, 'JENNY DAYANA', 'ACOSTA ', 'JENNYACOSTA', 'jenny.acosta@ucalgary.ca', 3, 3, '2018-04-27', '4037089725', 'e10adc3949ba59abbe56e057f20f883e', 0, '', '', 23, 0, 88.00, '', ''),
(20, 'JAIME', 'CAMELO', 'JAIMECAMELO', 'jaimehcamelo111@gmail.com', 3, 3, '2018-04-27', '4038906639', 'e10adc3949ba59abbe56e057f20f883e', 0, '', '', 24, 0, 88.00, '', ''),
(21, 'FRANCISCO JAVIER', 'PICON CALDERO', 'FRANCISCOPICON', 'mexicanwarrior.00@gmail.com', 3, 2, '2018-04-27', '4032741061', 'e10adc3949ba59abbe56e057f20f883e', 0, '', '', 25, 0, 88.00, '', ''),
(22, 'FABIAN HUMBERTO', 'ALVAREZ MOTATO', 'FABIANALVAREZ', 'azmodantato@gmail.com', 3, 3, '2018-04-27', '4034027314', 'e10adc3949ba59abbe56e057f20f883e', 0, '', '', 26, 28, 94.77, '', ''),
(23, 'DIEGO LUIS', 'OSPINA TORRES', 'DIEGOOSPINA', 'dieglu71@gmail.com', 3, 2, '2018-04-27', '5879173057', 'e10adc3949ba59abbe56e057f20f883e', 0, '', '', 25, 28, 98.56, '', ''),
(24, 'BRIAN', 'CAPUYAN', 'BRIANCAPUYAN', 'briancaps00@gmail.com', 3, 3, '2018-04-27', '4039231513', 'e10adc3949ba59abbe56e057f20f883e', 0, '', '', 28, 24, 75.43, '', ''),
(25, 'TONY ', 'ESCOBAR', 'TONYESCOBAR', '11@gmail.com', 2, 3, '2018-04-27', '4038940596', 'e10adc3949ba59abbe56e057f20f883e', 0, '', '', 20, 0, 88.00, '', ''),
(26, 'JORGE LUIS ', 'PLATA GOMEZ', 'JORGEPLATA', 'plataelmago@hotmail.com', 2, 3, '2018-04-27', '4189576759', 'e10adc3949ba59abbe56e057f20f883e', 0, '', '', 19, 0, 88.00, '', ''),
(27, 'JESUS ', 'QUIÑONEZ', 'JESUSQUINONEZ', '111@GMAIL.COM', 2, 3, '2018-04-27', '4039995017', 'e10adc3949ba59abbe56e057f20f883e', 0, '', '', 20, 0, 88.00, '', ''),
(28, 'HERNAN', 'GAMBOA', 'HERNANGAMBOA', 'col.latina@hotmail.com', 2, 3, '2018-04-27', '7808853315', 'e10adc3949ba59abbe56e057f20f883e', 0, '', '', 20, 0, 88.00, '', ''),
(29, 'ANGEL', 'SILVA', 'ANGELSILVA', 'peluchoctagon@gmail.com', 2, 3, '2018-04-27', '2262464791', 'e10adc3949ba59abbe56e057f20f883e', 0, '', '', 20, 0, 88.00, '', ''),
(30, 'JOSE YAMITH', 'CALDERON', 'YAMITHCALDERON', '111111@GMAIL.COM', 2, 3, '2018-04-27', '4034010562', 'e10adc3949ba59abbe56e057f20f883e', 0, '', '', 23, 0, 88.00, '', ''),
(31, 'JAINER', 'CARRASCAL', 'JEINERCARRASCAL', 'JEJJJ@GMAIL.COM', 2, 3, '2018-04-27', '5879697610', 'e10adc3949ba59abbe56e057f20f883e', 0, '', '', 25, 0, 88.00, '', ''),
(32, 'AMIGO', 'UNO', 'AMIGOUNO', '3333@GMAIL.COM', 2, 3, '2018-04-27', '555555555', 'e10adc3949ba59abbe56e057f20f883e', 0, '', '', 1.5, 0, 88.00, '', ''),
(33, 'AMIGO', 'DOS', 'AMIGODOS', '11111@GMAIL.COM', 2, 3, '2018-04-27', '55555555', 'e10adc3949ba59abbe56e057f20f883e', 0, '', '', 2, 0, 88.00, '', '');

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
