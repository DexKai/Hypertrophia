-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-07-2015 a las 14:55:10
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tiswg2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clase`
--

CREATE TABLE IF NOT EXISTS `clase` (
`CLA_id` int(11) NOT NULL,
  `DIS_id` int(11) DEFAULT NULL,
  `CLA_nombre` varchar(20) DEFAULT NULL,
  `CLA_descripcion` text,
  `CLA_imagen` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clase`
--

INSERT INTO `clase` (`CLA_id`, `DIS_id`, `CLA_nombre`, `CLA_descripcion`, `CLA_imagen`) VALUES
(1, 1, 'Pilates', '.....', ''),
(2, 1, 'Yoga', '....', ''),
(3, 1, 'Oxigeno', '....', ''),
(4, 1, 'Shaki fit', '....', ''),
(5, 2, 'Abdominales', 'Actividad donde el abdomen es estimulado desde sus diferentes inserciones. Mantener buenos niveles de tonicidad en este grupo muscular evitará problemas a la espalda y ayudará a mejorar su postura', ''),
(6, 2, 'Body pump', 'Es un entrenamiento con pesas sincronizado con las mejores músicas del momento, que desarrolla la fuerza y la resistencia muscular. Gasta muchas calorías. Define y tonifica la musculatura, además de mejorar la postura corporal y prevenir la osteoporosis.', ''),
(7, 2, 'Endurance', 'Sesiones de entrenamiento de máxima intensidad en las que se combinan diferentes tipos de ejercicios aeróbicos con otros anaeróbicos, se trabaja solo con el peso corporal y como su nombre lo dice ENDURANCE ¡¡Dar todo hasta donde puedas!!', ''),
(8, 2, 'Grit series', 'Trabajo intervalado de alta intensidad que dura 30’. Consiste en la utilización de sobrecarga externa (Discos, Ketlebells, barras) en combinación con ejercicios a manos libres (push-up, Burpees, skeeping) buscando mejorar y potenciar la condición física de los participantes de esta clase.', ''),
(9, 2, 'Insanity', 'Programa de entrenamiento de alta intensidad donde el trabajo se enfoca básicamente en saltos, complementando con ejercicios de abdomen y brazos a través de intervalos de alta intensidad.', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disciplina`
--

CREATE TABLE IF NOT EXISTS `disciplina` (
`DIS_id` int(11) NOT NULL,
  `DIS_nombre` varchar(256) DEFAULT NULL,
  `DIS_descripcion` text
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `disciplina`
--

INSERT INTO `disciplina` (`DIS_id`, `DIS_nombre`, `DIS_descripcion`) VALUES
(1, 'Meditación', 'Meditar'),
(2, 'Musculación', 'Sacar musculito'),
(3, 'Fitness Grupal', 'Fitness con compañeros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fk_disciplina_tipo_profesor`
--

CREATE TABLE IF NOT EXISTS `fk_disciplina_tipo_profesor` (
  `DIS_id` int(11) NOT NULL,
  `TIP_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fk_socio_profesor`
--

CREATE TABLE IF NOT EXISTS `fk_socio_profesor` (
  `PRO_id` int(11) NOT NULL,
  `SO_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE IF NOT EXISTS `horario` (
`HOR_id` int(11) NOT NULL,
  `PRO_id` int(11) DEFAULT NULL,
  `HOR_entrada` time DEFAULT NULL,
  `HOR_salida` time DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`HOR_id`, `PRO_id`, `HOR_entrada`, `HOR_salida`) VALUES
(5, 3, '12:00:00', '19:00:00'),
(6, 4, '10:00:00', '18:00:00'),
(7, 5, '09:30:00', '10:40:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informe_medico`
--

CREATE TABLE IF NOT EXISTS `informe_medico` (
`IM_id` int(11) NOT NULL,
  `SO_id` int(11) DEFAULT NULL,
  `PRO_id` int(11) DEFAULT NULL,
  `IM_cardiacas` varchar(10) DEFAULT NULL,
  `IM_cardicas_detalle` text,
  `IM_alergias` varchar(10) DEFAULT NULL,
  `IM_alergia_detalle` text,
  `IM_osea` varchar(10) DEFAULT NULL,
  `IM_osea_detalle` text,
  `IM_muscular` varchar(10) DEFAULT NULL,
  `IM_muscualr_detalle` text,
  `IM_asfixia` varchar(10) DEFAULT NULL,
  `IM_embarazada` varchar(10) DEFAULT NULL,
  `IM_anemia` varchar(10) DEFAULT NULL,
  `IM_medicamentos` text
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `informe_medico`
--

INSERT INTO `informe_medico` (`IM_id`, `SO_id`, `PRO_id`, `IM_cardiacas`, `IM_cardicas_detalle`, `IM_alergias`, `IM_alergia_detalle`, `IM_osea`, `IM_osea_detalle`, `IM_muscular`, `IM_muscualr_detalle`, `IM_asfixia`, `IM_embarazada`, `IM_anemia`, `IM_medicamentos`) VALUES
(3, NULL, 2, 'Si', '', 'Si', '', 'Si', '', 'Si', '', 'Si', 'Si', 'Si', 'asdasdasdas'),
(4, NULL, 3, 'No', '', 'No', '', 'No', '', 'No', '', 'No', 'No', 'No', ''),
(5, NULL, 4, 'No', '', 'No', '', 'No', '', 'No', '', 'No', 'No', 'No', ''),
(6, NULL, 5, 'No', '', 'No', '', 'No', '', 'No', '', 'No', 'No', 'No', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1435735012),
('m150214_044831_init_user', 1435735019);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE IF NOT EXISTS `pago` (
`PA_id` int(11) NOT NULL,
  `SO_id` int(11) DEFAULT NULL,
  `PA_monto` int(11) DEFAULT NULL,
  `PA_pago_mes` varchar(10) DEFAULT NULL,
  `PA_fecha_pago` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE IF NOT EXISTS `profesor` (
`PRO_id` int(11) NOT NULL,
  `HOR_id` int(11) DEFAULT NULL,
  `SUE_id` int(11) DEFAULT NULL,
  `IM_id` int(11) DEFAULT NULL,
  `TIP_id` int(11) DEFAULT NULL,
  `PRO_rut` varchar(10) DEFAULT NULL,
  `PRO_nombre` varchar(20) DEFAULT NULL,
  `PRO_apellidop` varchar(20) DEFAULT NULL,
  `PRO_apellidom` varchar(20) DEFAULT NULL,
  `PRO_email` varchar(100) DEFAULT NULL,
  `PRO_disciplina` varchar(120) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `PRO_clases` varchar(120) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`PRO_id`, `HOR_id`, `SUE_id`, `IM_id`, `TIP_id`, `PRO_rut`, `PRO_nombre`, `PRO_apellidop`, `PRO_apellidom`, `PRO_email`, `PRO_disciplina`, `PRO_clases`) VALUES
(2, NULL, NULL, NULL, NULL, '8983037-0', 'Carlos', 'Guzman', 'Renombrado', 'jsalazar@dfa.cl', 'Fitness grupal', 'Power punch'),
(3, NULL, NULL, NULL, NULL, '13300292-8', 'Pedro', 'Soto', 'Soto', 'pgsoto@hotmail.com', 'Musculación', 'Grit series'),
(4, NULL, NULL, NULL, NULL, '20359941-2', 'Canelo', 'Lopez', 'Campos', 'calorslopez@gmail.com', 'Fitness grupal', 'Cardio box'),
(5, NULL, NULL, NULL, NULL, '24517864-6', 'Oscar', 'Perez', 'Suazo', 'oscarito@gmail.com', 'Musculación', 'Abdominales'),
(11, NULL, NULL, NULL, NULL, '17539625-K', 'Erick', 'Leal', 'Escobar', 'eleal3@alumnos.ubiobio.cl', 'Musculación', 'Grit series');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_time` timestamp NULL DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `profile`
--

INSERT INTO `profile` (`id`, `user_id`, `create_time`, `update_time`, `full_name`) VALUES
(1, 1, '2015-07-01 12:16:59', NULL, 'the one'),
(2, 2, '2015-07-01 12:23:02', NULL, 'Pedro Soto soto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `progreso`
--

CREATE TABLE IF NOT EXISTS `progreso` (
`PROG_id` int(11) NOT NULL,
  `SO_id` int(11) DEFAULT NULL,
  `PROG_peso` float DEFAULT NULL,
  `PROG_altura` float DEFAULT NULL,
  `PROG_porcentaje_grasa` float DEFAULT NULL,
  `PROG_indice_masa_corporal` float DEFAULT NULL,
  `PROG_fecha_evaluacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role`
--

CREATE TABLE IF NOT EXISTS `role` (
`id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_time` timestamp NULL DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT NULL,
  `can_admin` smallint(6) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `role`
--

INSERT INTO `role` (`id`, `name`, `create_time`, `update_time`, `can_admin`) VALUES
(1, 'Admin', '2015-07-01 12:16:58', NULL, 1),
(2, 'Profesor', '2015-07-01 12:16:58', NULL, 0),
(3, 'Socio', '2015-07-01 12:16:58', NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socio`
--

CREATE TABLE IF NOT EXISTS `socio` (
`SO_id` int(11) NOT NULL,
  `SO_rut` varchar(256) DEFAULT NULL,
  `SO_nombre` varchar(256) DEFAULT NULL,
  `SO_apellido_materno` varchar(256) DEFAULT NULL,
  `SO_apellido_paterno` varchar(256) DEFAULT NULL,
  `SO_direccion` varchar(256) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `PROG_id` int(11) DEFAULT NULL,
  `IM_id` int(11) DEFAULT NULL,
  `PA_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `socio`
--

INSERT INTO `socio` (`SO_id`, `SO_rut`, `SO_nombre`, `SO_apellido_materno`, `SO_apellido_paterno`, `SO_direccion`, `user_id`, `PROG_id`, `IM_id`, `PA_id`) VALUES
(9, '18414437-9', 'Pedro', 'Soto', 'Soto', 'Hipolito Salas 1515 Depto. 303', 2, NULL, NULL, NULL),
(10, '21184406-k', 'Yojans', 'Varela', 'Cid', 'Lautaro sn Santa Juana', 5, NULL, NULL, NULL),
(12, '13800414-7', 'Joel', 'Llanos', 'Salazar', 'Lomas Coloradas ', 7, NULL, NULL, NULL),
(13, '16818192-2', 'Emanuel', 'Uribe', 'Inostroza', 'pasaje nuevo 333 coronel', 8, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sueldo`
--

CREATE TABLE IF NOT EXISTS `sueldo` (
`SUE_id` int(11) NOT NULL,
  `PRO_id` int(11) DEFAULT NULL,
  `SUE_sueldo` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sueldo`
--

INSERT INTO `sueldo` (`SUE_id`, `PRO_id`, `SUE_sueldo`) VALUES
(3, 3, 750000),
(4, 4, 500000),
(5, 5, 650000),
(6, 5, 242000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_profesor`
--

CREATE TABLE IF NOT EXISTS `tipo_profesor` (
`TIP_id` int(11) NOT NULL,
  `PRO_id` int(11) DEFAULT NULL,
  `TIP_nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_profesor`
--

INSERT INTO `tipo_profesor` (`TIP_id`, `PRO_id`, `TIP_nombre`) VALUES
(1, NULL, 'Personal Trainer'),
(2, NULL, 'Zumba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
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
  `ban_reason` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `role_id`, `status`, `email`, `new_email`, `username`, `password`, `auth_key`, `api_key`, `login_ip`, `login_time`, `create_ip`, `create_time`, `update_time`, `ban_time`, `ban_reason`) VALUES
(1, 1, 1, 'neo@neo.com', NULL, 'neo', '$2y$13$dyVw4WkZGkABf2UrGWrhHO4ZmVBv.K4puhOL59Y9jQhIdj63TlV.O', 'JCMGQ9Ifc3aGH5zxI1EQEqCXaAlfOld8', 'J2AoyngyVjdHwDVGNtKWxhZymZsHPDOP', '127.0.0.1', '2015-07-03 17:36:56', NULL, '2015-07-01 12:16:59', NULL, NULL, NULL),
(2, 1, 1, 'pgsoto@alumnos.ubiobio.cl', NULL, 'pgsoto', '$2y$13$kkRsqu9h4Xc1jTFMFJyN0.2b2qiMLrOZFrfGL1MOijSysZPPz10FO', NULL, NULL, NULL, NULL, NULL, '2015-07-01 12:23:02', '2015-07-03 13:39:33', NULL, NULL),
(5, 1, 1, 'ycid@alumnos.ubiobio.cl', NULL, 'ycid', '$2y$13$YWeMYtVVPKT72NDBjBS67.5Ga75scOmX8YaZIoyO.tof4uWSOQvWi', NULL, NULL, NULL, NULL, NULL, '2015-07-03 13:42:49', NULL, NULL, NULL),
(7, 2, 1, 'joesalaz@alumnos.ubiobio.cl', NULL, 'joesalaz', '$2y$13$wCOc3UneK4F8om08ZH84b.dFzOQNs4FuxC3.7GcihxCSnmKq9NA6q', NULL, NULL, NULL, NULL, NULL, '2015-07-03 14:47:17', NULL, NULL, NULL),
(8, 2, 1, 'eminostr@alumnos.ubiobio.cl', NULL, 'eminostr', '$2y$13$7sb68MBvE5Duugo5om5C1OZ3em8BA982VbETjadtsgowsmQfXGg8.', NULL, NULL, NULL, NULL, NULL, '2015-07-03 17:42:02', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_auth`
--

CREATE TABLE IF NOT EXISTS `user_auth` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provider_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provider_attributes` text COLLATE utf8_unicode_ci NOT NULL,
  `create_time` timestamp NULL DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_key`
--

CREATE TABLE IF NOT EXISTS `user_key` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` smallint(6) NOT NULL,
  `key_value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_time` timestamp NULL DEFAULT NULL,
  `consume_time` timestamp NULL DEFAULT NULL,
  `expire_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `user_key`
--

INSERT INTO `user_key` (`id`, `user_id`, `type`, `key_value`, `create_time`, `consume_time`, `expire_time`) VALUES
(1, 2, 1, 'DtFRtwz6Ts612uxiHCeABJxy2BpOyZM1', '2015-07-03 10:23:44', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clase`
--
ALTER TABLE `clase`
 ADD PRIMARY KEY (`CLA_id`), ADD KEY `FK_FK_CLASE_DISCIPLINA` (`DIS_id`);

--
-- Indices de la tabla `disciplina`
--
ALTER TABLE `disciplina`
 ADD PRIMARY KEY (`DIS_id`);

--
-- Indices de la tabla `fk_disciplina_tipo_profesor`
--
ALTER TABLE `fk_disciplina_tipo_profesor`
 ADD PRIMARY KEY (`DIS_id`,`TIP_id`), ADD KEY `FK_FK_DISCIPLINA_TIPO_PROFESOR2` (`TIP_id`);

--
-- Indices de la tabla `fk_socio_profesor`
--
ALTER TABLE `fk_socio_profesor`
 ADD PRIMARY KEY (`PRO_id`,`SO_id`), ADD KEY `FK_FK_SOCIO_PROFESOR2` (`SO_id`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
 ADD PRIMARY KEY (`HOR_id`), ADD KEY `FK_FK_PROFESOR_HORARIO2` (`PRO_id`);

--
-- Indices de la tabla `informe_medico`
--
ALTER TABLE `informe_medico`
 ADD PRIMARY KEY (`IM_id`), ADD KEY `FK_FK_PREFESOR_INFORMEMEDICO` (`PRO_id`), ADD KEY `FK_FK_SOCIO_INFORME_MEDICO2` (`SO_id`);

--
-- Indices de la tabla `migration`
--
ALTER TABLE `migration`
 ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
 ADD PRIMARY KEY (`PA_id`), ADD KEY `FK_FK_SOCIO_PAGO2` (`SO_id`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
 ADD PRIMARY KEY (`PRO_id`), ADD KEY `FK_FK_PREFESOR_INFORMEMEDICO2` (`IM_id`), ADD KEY `FK_FK_PROFESOR_HORARIO` (`HOR_id`), ADD KEY `FK_FK_PROFESOR_SUELDO` (`SUE_id`), ADD KEY `FK_FK_PROFESOR_TIPOPROFESOR` (`TIP_id`);

--
-- Indices de la tabla `profile`
--
ALTER TABLE `profile`
 ADD PRIMARY KEY (`id`), ADD KEY `profile_user_id` (`user_id`);

--
-- Indices de la tabla `progreso`
--
ALTER TABLE `progreso`
 ADD PRIMARY KEY (`PROG_id`), ADD KEY `FK_FK_SOCIO_PROGRESO` (`SO_id`);

--
-- Indices de la tabla `role`
--
ALTER TABLE `role`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `socio`
--
ALTER TABLE `socio`
 ADD PRIMARY KEY (`SO_id`), ADD KEY `FK_FK_SOCIO_INFORME_MEDICO` (`IM_id`), ADD KEY `FK_FK_SOCIO_PAGO` (`PA_id`), ADD KEY `FK_FK_SOCIO_PROGRESO2` (`PROG_id`), ADD KEY `FK_SOCIO_USER` (`user_id`);

--
-- Indices de la tabla `sueldo`
--
ALTER TABLE `sueldo`
 ADD PRIMARY KEY (`SUE_id`), ADD KEY `FK_FK_PROFESOR_SUELDO2` (`PRO_id`);

--
-- Indices de la tabla `tipo_profesor`
--
ALTER TABLE `tipo_profesor`
 ADD PRIMARY KEY (`TIP_id`), ADD KEY `FK_FK_PROFESOR_TIPOPROFESOR2` (`PRO_id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `user_email` (`email`), ADD UNIQUE KEY `user_username` (`username`), ADD KEY `user_role_id` (`role_id`);

--
-- Indices de la tabla `user_auth`
--
ALTER TABLE `user_auth`
 ADD PRIMARY KEY (`id`), ADD KEY `user_auth_provider_id` (`provider_id`), ADD KEY `user_auth_user_id` (`user_id`);

--
-- Indices de la tabla `user_key`
--
ALTER TABLE `user_key`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `user_key_key` (`key_value`), ADD KEY `user_key_user_id` (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clase`
--
ALTER TABLE `clase`
MODIFY `CLA_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `disciplina`
--
ALTER TABLE `disciplina`
MODIFY `DIS_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
MODIFY `HOR_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `informe_medico`
--
ALTER TABLE `informe_medico`
MODIFY `IM_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
MODIFY `PA_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
MODIFY `PRO_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `profile`
--
ALTER TABLE `profile`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `progreso`
--
ALTER TABLE `progreso`
MODIFY `PROG_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `role`
--
ALTER TABLE `role`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `socio`
--
ALTER TABLE `socio`
MODIFY `SO_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `sueldo`
--
ALTER TABLE `sueldo`
MODIFY `SUE_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tipo_profesor`
--
ALTER TABLE `tipo_profesor`
MODIFY `TIP_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `user_auth`
--
ALTER TABLE `user_auth`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `user_key`
--
ALTER TABLE `user_key`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clase`
--
ALTER TABLE `clase`
ADD CONSTRAINT `FK_FK_CLASE_DISCIPLINA` FOREIGN KEY (`DIS_id`) REFERENCES `disciplina` (`DIS_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `fk_disciplina_tipo_profesor`
--
ALTER TABLE `fk_disciplina_tipo_profesor`
ADD CONSTRAINT `FK_FK_DISCIPLINA_TIPO_PROFESOR` FOREIGN KEY (`DIS_id`) REFERENCES `disciplina` (`DIS_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_FK_DISCIPLINA_TIPO_PROFESOR2` FOREIGN KEY (`TIP_id`) REFERENCES `tipo_profesor` (`TIP_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `fk_socio_profesor`
--
ALTER TABLE `fk_socio_profesor`
ADD CONSTRAINT `FK_FK_SOCIO_PROFESOR` FOREIGN KEY (`PRO_id`) REFERENCES `profesor` (`PRO_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_FK_SOCIO_PROFESOR2` FOREIGN KEY (`SO_id`) REFERENCES `socio` (`SO_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `horario`
--
ALTER TABLE `horario`
ADD CONSTRAINT `FK_FK_PROFESOR_HORARIO2` FOREIGN KEY (`PRO_id`) REFERENCES `profesor` (`PRO_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `informe_medico`
--
ALTER TABLE `informe_medico`
ADD CONSTRAINT `FK_FK_PREFESOR_INFORMEMEDICO` FOREIGN KEY (`PRO_id`) REFERENCES `profesor` (`PRO_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_FK_SOCIO_INFORME_MEDICO2` FOREIGN KEY (`SO_id`) REFERENCES `socio` (`SO_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pago`
--
ALTER TABLE `pago`
ADD CONSTRAINT `FK_FK_SOCIO_PAGO2` FOREIGN KEY (`SO_id`) REFERENCES `socio` (`SO_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `profesor`
--
ALTER TABLE `profesor`
ADD CONSTRAINT `FK_FK_PREFESOR_INFORMEMEDICO2` FOREIGN KEY (`IM_id`) REFERENCES `informe_medico` (`IM_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_FK_PROFESOR_HORARIO` FOREIGN KEY (`HOR_id`) REFERENCES `horario` (`HOR_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_FK_PROFESOR_SUELDO` FOREIGN KEY (`SUE_id`) REFERENCES `sueldo` (`SUE_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_FK_PROFESOR_TIPOPROFESOR` FOREIGN KEY (`TIP_id`) REFERENCES `tipo_profesor` (`TIP_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `profile`
--
ALTER TABLE `profile`
ADD CONSTRAINT `profile_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `progreso`
--
ALTER TABLE `progreso`
ADD CONSTRAINT `FK_FK_SOCIO_PROGRESO` FOREIGN KEY (`SO_id`) REFERENCES `socio` (`SO_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `socio`
--
ALTER TABLE `socio`
ADD CONSTRAINT `FK_FK_SOCIO_INFORME_MEDICO` FOREIGN KEY (`IM_id`) REFERENCES `informe_medico` (`IM_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_FK_SOCIO_PAGO` FOREIGN KEY (`PA_id`) REFERENCES `pago` (`PA_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_FK_SOCIO_PROGRESO2` FOREIGN KEY (`PROG_id`) REFERENCES `progreso` (`PROG_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_SOCIO_USER` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sueldo`
--
ALTER TABLE `sueldo`
ADD CONSTRAINT `FK_FK_PROFESOR_SUELDO2` FOREIGN KEY (`PRO_id`) REFERENCES `profesor` (`PRO_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tipo_profesor`
--
ALTER TABLE `tipo_profesor`
ADD CONSTRAINT `FK_FK_PROFESOR_TIPOPROFESOR2` FOREIGN KEY (`PRO_id`) REFERENCES `profesor` (`PRO_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
ADD CONSTRAINT `user_role_id` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `user_auth`
--
ALTER TABLE `user_auth`
ADD CONSTRAINT `user_auth_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Filtros para la tabla `user_key`
--
ALTER TABLE `user_key`
ADD CONSTRAINT `user_key_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
