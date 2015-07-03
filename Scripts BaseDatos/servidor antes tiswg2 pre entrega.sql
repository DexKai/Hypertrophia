-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-07-2015 a las 08:56:13
-- Versión del servidor: 5.5.38
-- Versión de PHP: 5.4.4-14+deb7u14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `TISWG2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `status` smallint(6) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `api_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login_ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login_time` timestamp NULL DEFAULT NULL,
  `create_ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT NULL,
  `ban_time` timestamp NULL DEFAULT NULL,
  `ban_reason` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_email` (`email`),
  UNIQUE KEY `user_username` (`username`),
  KEY `user_role_id` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `role_id`, `status`, `email`, `new_email`, `username`, `password`, `auth_key`, `api_key`, `login_ip`, `login_time`, `create_ip`, `create_time`, `update_time`, `ban_time`, `ban_reason`) VALUES
(2, 1, 1, 'pgsoto@alumnos.ubiobio.cl', NULL, 'pgsoto', '$2y$13$Z2yNroQelNaCk/oDwb0/7eGuo5O8eip.PEDHLdlRssSbB4WaEF4rK', NULL, NULL, '201.187.29.190', '2015-07-01 10:04:30', NULL, '2015-05-14 23:09:43', NULL, NULL, NULL),
(3, 1, 1, 'ycid@alumnos.ubiobio.cl', NULL, 'ycida', '$2y$13$xZP8N.T.XRegH/7MVowUMOxg9VDrIbd0.6HtKG5NSjHy2fNLPNNCu', NULL, NULL, '186.106.79.149', '2015-05-23 06:37:04', NULL, '2015-05-14 23:38:03', NULL, NULL, NULL),
(4, 1, 1, 'joesalaz@alumnos.ubiobio.cl', NULL, 'joesalaz', '$2y$13$9dLVoH2Gh3UyKJ9okB5owOwD9yIRerdtqgOzcXjUoVhCbOFqt7vH6', NULL, NULL, NULL, NULL, NULL, '2015-05-14 23:39:58', NULL, NULL, NULL),
(5, 3, 1, 'cnsoto22@gmail.com', NULL, 'cnsoto22', '$2y$13$/m9zjFdlOlgOKxoSlPSSuOigrUrRXofRhqnTxc05kUbzE4fTB90Ga', NULL, NULL, '146.83.195.38', '2015-06-12 21:23:18', NULL, '2015-05-14 23:41:05', '2015-05-15 17:06:53', NULL, NULL),
(6, 2, 0, 'dex.pgsoto@gmail.com', NULL, 'dex_pgsoto', '$2y$13$EKWf9/VTUgeHVDYdvv9GOeLP21/BrKpKlU4pjrw9coBVxGQfIfodO', NULL, NULL, NULL, NULL, NULL, '2015-05-14 23:41:53', NULL, NULL, NULL),
(7, 2, 1, 'eminostr@alumnos.ubiobio.cl', NULL, 'eminostr', '$2y$13$My1.HqGd9i89lQsabHqu.uzHUB8tMvpHixd8CL4LpjDnaDe.9rZFG', NULL, NULL, '179.60.67.85', '2015-07-03 06:04:49', NULL, '2015-05-15 12:58:13', '2015-07-03 06:04:41', NULL, NULL),
(8, 3, 0, 'miturra@ubiobio.cl', NULL, 'miturra', '$2y$13$2IzJ2FIiokT0X12CYlIxP.JK0437OtNDA7uvEG.H2mVAUooRYbVD6', NULL, NULL, NULL, NULL, NULL, '2015-05-15 18:07:34', NULL, NULL, NULL);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_role_id` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
