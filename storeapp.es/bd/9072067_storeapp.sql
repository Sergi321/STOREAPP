-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: PMYSQL145.dns-servicio.com:3306
-- Tiempo de generación: 14-12-2021 a las 12:59:02
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `9072067_storeapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `name`, `email`, `phone`, `address`, `created`, `modified`, `status`) VALUES
(1, 'Usuario Demo', 'demo-demo@gmail.com', '900099900', 'Quito, EC, Ecuador', '2018-02-17 08:21:25', '2018-02-17 08:21:25', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mis_productos`
--

CREATE TABLE `mis_productos` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `mis_productos`
--

INSERT INTO `mis_productos` (`id`, `name`, `description`, `price`, `created`, `modified`, `status`) VALUES
(1, 'Producto 1', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 15.00, '2016-08-17 08:21:25', '2016-08-17 08:21:25', '1'),
(2, 'Producto 2', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 25.00, '2016-08-17 08:21:25', '2016-08-17 08:21:25', '1'),
(3, 'Producto 3', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 15.00, '2016-08-17 08:21:25', '2016-08-17 08:21:25', '1'),
(4, 'Producto 4', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 25.00, '2016-08-17 08:21:25', '2016-08-17 08:21:25', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `total_price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_articulos`
--

CREATE TABLE `orden_articulos` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `image` varchar(100) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id`, `proname`, `amount`, `time`, `price`, `image`, `description`) VALUES
(8, 'Maceta', '21', '2021-11-02 16:35:49', 3, './../assets/maceta.jpg', NULL),
(11, 'Xiaomi MI 365', '543', '2021-11-02 18:04:44', 365, './../assets/patinete.jpg', NULL),
(12, 'Pata jamÃ³n', '32', '2021-11-04 17:31:28', 88, './../assets/jamon.jpg', NULL),
(14, 'Redmi Note Pro 10', '43', '2021-11-18 08:45:29', 289, './../assets/productos/tecnologia/redmi_note.jpg', 'Procesador Qualcomm® Snapdragon™ 732GTecnología de procesamiento de 8 nmQualcomm® Adreno™ 618\r\nAlmacenamiento y RAM\r\n6 GB + 64 GB | 6 GB + 128 GB | 8 GB + 128 GBRAM LPDDR4X + UFS 2.2 * La cantidad disponible de almacenamiento y RAM es menor que la memoria indicada'),
(19, 'Oppo FX3 pro', '23', '2021-11-18 09:32:02', 1056, './../assets/productos/tecnologia/OPPOFX3.png', NULL),
(22, 'Penny ElÃ©ctrico', '23', '2021-11-18 17:43:10', 99, './../assets/productos/tecnologia/penny.jfif', NULL),
(28, 'alicates', '21', '2021-11-23 08:18:36', 12, '../../assets/productos/tecnologia/16a0f086fd83453f.png', NULL),
(29, 'Kike Aire Max 97', '34', '2021-11-24 16:34:14', 179, '../../assets/productos/tecnologia/descarga.jfif', 'las mitikas kike 97 max aire'),
(30, 'Aire Jonathan 1 Mid', '64', '2021-11-24 16:35:30', 399, '../../assets/productos/tecnologia/jordan1.jfif', 'jonathan 1 bien facheras'),
(31, 'Addidas Bad Bunny ED', '32', '2021-11-24 16:37:07', 299, '../../assets/productos/tecnologia/bad-bunny-forum-buckle-black-3.jpg', 'Colaboración de addidas con bad bunny para que te atraquen por la calle'),
(32, 'Jersey Cuello Alto', '345', '2021-11-24 17:49:50', 19, '../../assets/productos/tecnologia/jersey.jfif', 'Trabajamos con programas de seguimiento para garantizar el cumplimiento de los estándares de seguridad, salud y calidad de nuestros productos. \r\n\r\nEl estándar Green to Wear 2.0 tiene como objetivo minimizar el impacto ambiental de la producción textil. . \r\n'),
(33, 'Sudadera Trasher', '23', '2021-11-24 17:50:17', 49, '../../assets/productos/tecnologia/trasher.jpg', 'Sudadera flama trasher gris de alta calidad '),
(34, 'Camiseta O.S.', '123', '2021-11-24 17:51:02', 5, '../../assets/productos/tecnologia/camiseta.jfif', 'Camiseta oversized negra sin mas, buenos materiales y perfecta para ir a una boda'),
(35, 'Disco 20kg', '302', '2021-12-01 10:29:25', 35, '../../assets/productos/tecnologia/20kg.jpg', NULL),
(36, 'Banco 180Âº', '12', '2021-12-01 10:30:13', 109, '../../assets/productos/tecnologia/banco.webp', NULL),
(37, 'Barra Z Olimpica', '21', '2021-12-01 10:31:36', 98, '../../assets/productos/tecnologia/barraz.jpg', NULL),
(38, 'Barras paralelas', '12', '2021-12-01 10:32:21', 59, '../../assets/productos/tecnologia/paralelas.webp', NULL),
(39, 'Push Up bar', '201', '2021-12-01 10:33:25', 20, '../../assets/productos/tecnologia/pushup.jpg', NULL),
(40, 'Barra olÃ­mpica 20KG 1,5m', '2', '2021-12-01 10:35:33', 199, '../../assets/productos/tecnologia/barraol.webp', NULL),
(41, 'iPhone 13 Pro', '22', '2021-12-02 18:08:58', 1259, '../../assets/productos/tecnologia/iphone13.jpg', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `usertype` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'user',
  `ruta_img` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT './../assets/picture_users/user.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `usertype`, `ruta_img`) VALUES
(16, 'admin', 'admin@admin.com', '63a9f0ea7bb98050796b649e85481845', 'admin', '../../assets/picture_users/lock.png'),
(69, 'user', 'user@user.com', '202cb962ac59075b964b07152d234b70', 'user', '../../assets/picture_users/8FC18151-B1CE-43E2-B7AB-79EB2299A23A.jpeg'),
(78, 'usuario', 'admin@admin.com', '202cb962ac59075b964b07152d234b70', 'user', '../../assets/picture_users/1633017210945.jpg'),
(79, 'user1', 'hola@hola.com', '202cb962ac59075b964b07152d234b70', 'user', '../../assets/picture_users/bad-bunny-forum-buckle-black-3.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mis_productos`
--
ALTER TABLE `mis_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indices de la tabla `orden_articulos`
--
ALTER TABLE `orden_articulos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

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
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `mis_productos`
--
ALTER TABLE `mis_productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `orden_articulos`
--
ALTER TABLE `orden_articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `orden`
--
ALTER TABLE `orden`
  ADD CONSTRAINT `orden_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `clientes` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `orden_articulos`
--
ALTER TABLE `orden_articulos`
  ADD CONSTRAINT `orden_articulos_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orden` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
