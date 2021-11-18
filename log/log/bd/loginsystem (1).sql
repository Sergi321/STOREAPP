-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2021 a las 13:54:55
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `loginsystem`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `proname` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `price` int(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id`, `proname`, `amount`, `time`, `price`, `image`) VALUES
(8, 'Maceta', '21', '2021-11-02 17:35:49', 3, 'http://localhost/log/assets/maceta.jpg'),
(11, 'Xiaomi MI 365', '543', '2021-11-02 19:04:44', 365, 'http://localhost/log/assets/patinete.jpg'),
(12, 'Pata jamÃ³n', '32', '2021-11-04 18:31:28', 88, 'http://localhost/log/assets/jamon.jpg'),
(14, 'Redmi Note Pro 10', '43', '2021-11-18 09:45:29', 289, 'http://localhost/log/assets/productos/tecnologia/redmi_note.jpg'),
(19, 'Oppo FX3 pro', '23', '2021-11-18 10:32:02', 1056, 'http://localhost/log/assets/productos/tecnologia/OPPOFX3.png'),
(20, 'iPhone 13 Pro 512 GB', '34', '2021-11-18 12:25:27', 1259, 'http://localhost/log/assets/productos/tecnologia/iphone-13.jfif');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `create_datetime` datetime NOT NULL,
  `usertype` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'user',
  `ruta_img` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `create_datetime`, `usertype`, `ruta_img`) VALUES
(16, 'admin', 'admin@admin.com', '63a9f0ea7bb98050796b649e85481845', '0000-00-00 00:00:00', 'admin', 'http://localhost/log/assets/picture_users/iphone-13.jfif'),
(55, 'Juanjo', 'admin@admin.com', '202cb962ac59075b964b07152d234b70', '0000-00-00 00:00:00', 'user', 'http://localhost/log/assets/picture_users/OPPOFX3.png'),
(57, 'root', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', '0000-00-00 00:00:00', 'admin', './../assets/picture_users/user.png'),
(58, 'ivvlg2', 'werwer@sdfsdf', '202cb962ac59075b964b07152d234b70', '0000-00-00 00:00:00', 'user', './../assets/picture_users/user.png'),
(59, 'test1', 'email@a.com', '202cb962ac59075b964b07152d234b70', '0000-00-00 00:00:00', 'user', 'http://localhost/log/assets/picture_users/icons8-admin-64.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
