-- phpMyAdmin SQL Dump
-- version 4.4.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-03-2018 a las 22:19:46
-- Versión del servidor: 5.7.19
-- Versión de PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bright`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `course_files`
--

CREATE TABLE IF NOT EXISTS `course_files` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `extension` varchar(45) DEFAULT NULL,
  `position` tinyint(4) DEFAULT NULL,
  `w` int(11) DEFAULT NULL,
  `h` int(11) DEFAULT NULL,
  `x` int(11) DEFAULT NULL,
  `y` int(11) DEFAULT NULL,
  `x2` int(11) DEFAULT NULL,
  `y2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `creating_user_id` int(11) DEFAULT NULL,
  `user_type_id` int(11) NOT NULL,
  `user_origin_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `description` text,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `hash` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT 'default.png',
  `state` tinyint(4) DEFAULT '1',
  `created` bigint(20) DEFAULT NULL,
  `updated` bigint(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `creating_user_id`, `user_type_id`, `user_origin_id`, `first_name`, `last_name`, `description`, `email`, `password`, `hash`, `image`, `state`, `created`, `updated`) VALUES
(1, NULL, 1, 1, 'Administrador', 'Apellido', NULL, 'admin@admin.com', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a', '68a67f33c3df02d4c70aafec63746475', 'db793d70c6f4dede985b8f65a4cdfd33.png', 1, 767040624, 1519939106),
(6, 3, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default.png', 1, NULL, 1519937946);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_files`
--

CREATE TABLE IF NOT EXISTS `user_files` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `extension` varchar(45) DEFAULT NULL,
  `position` tinyint(4) DEFAULT NULL,
  `w` int(11) DEFAULT NULL,
  `h` int(11) DEFAULT NULL,
  `x` int(11) DEFAULT NULL,
  `y` int(11) DEFAULT NULL,
  `x2` int(11) DEFAULT NULL,
  `y2` int(11) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_origins`
--

CREATE TABLE IF NOT EXISTS `user_origins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user_origins`
--

INSERT INTO `user_origins` (`id`, `name`) VALUES
(1, 'Nacional'),
(2, 'Internacional');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_sessions`
--

CREATE TABLE IF NOT EXISTS `user_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` bigint(20) NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user_sessions`
--

INSERT INTO `user_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('u6ln05r6krlddidts10kr8s3msrq577q', '127.0.0.1', 1519939162, 0x4d656e757c613a313a7b733a353a22636c617373223b733a303a22223b7d557365727c4f3a383a22737464436c617373223a31343a7b733a323a226964223b733a313a2233223b733a31363a226372656174696e675f757365725f6964223b4e3b733a31323a22757365725f747970655f6964223b733a313a2231223b733a31343a22757365725f6f726967696e5f6964223b4e3b733a31303a2266697273745f6e616d65223b733a363a22617364617364223b733a393a226c6173745f6e616d65223b733a333a22446f73223b733a31313a226465736372697074696f6e223b733a303a22223b733a353a22656d61696c223b733a31333a22646f734061646d696e2e636f6d223b733a383a2270617373776f7264223b733a34303a2262643565356562303439663339303731373566353466356135373162613662396664656133366162223b733a343a2268617368223b4e3b733a353a22696d616765223b733a31313a2264656661756c742e706e67223b733a353a227374617465223b733a313a2231223b733a373a2263726561746564223b733a31303a2231353139393335363432223b733a373a2275706461746564223b733a31303a2231353139393335363831223b7d757365725f706167696e6174696f6e5f317c613a373a7b733a343a2274797065223b733a313a2231223b733a353a226669656c64223b733a323a226964223b733a353a226f72646572223b733a333a22617363223b733a373a226e756d726f7773223b733a323a223130223b733a353a227374617274223b733a313a2230223b733a363a22736561726368223b4e3b733a353a227374617465223b4e3b7d757365725f706167696e6174696f6e5f327c613a373a7b733a343a2274797065223b733a313a2232223b733a353a226669656c64223b733a323a226964223b733a353a226f72646572223b733a333a22617363223b733a373a226e756d726f7773223b733a323a223130223b733a353a227374617274223b733a313a2230223b733a363a22736561726368223b4e3b733a353a227374617465223b4e3b7d);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_types`
--

CREATE TABLE IF NOT EXISTS `user_types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user_types`
--

INSERT INTO `user_types` (`id`, `name`) VALUES
(1, 'Administrador'),
(2, 'Fotografo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `course_files`
--
ALTER TABLE `course_files`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_users_user_types_idx` (`user_type_id`),
  ADD KEY `fk_users_user_origins1_idx` (`user_origin_id`);

--
-- Indices de la tabla `user_files`
--
ALTER TABLE `user_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_files_users1_idx` (`user_id`);

--
-- Indices de la tabla `user_origins`
--
ALTER TABLE `user_origins`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `course_files`
--
ALTER TABLE `course_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `user_files`
--
ALTER TABLE `user_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT de la tabla `user_origins`
--
ALTER TABLE `user_origins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_user_origins1` FOREIGN KEY (`user_origin_id`) REFERENCES `user_origins` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_user_types` FOREIGN KEY (`user_type_id`) REFERENCES `user_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `user_files`
--
ALTER TABLE `user_files`
  ADD CONSTRAINT `fk_user_files_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
