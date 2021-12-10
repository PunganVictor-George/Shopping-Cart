-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 10, 2021 at 08:25 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magazin2`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id`, `name`) VALUES
(1, 'telefoane'),
(2, 'TV'),
(3, 'aparate de ras');

-- --------------------------------------------------------

--
-- Table structure for table `clienti`
--

CREATE TABLE `clienti` (
  `client_id` int(11) NOT NULL,
  `client_username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `client_pass` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `client_email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `client_str` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `client_oras` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `client_tara` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `client_codpost` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `client_nrcard` int(100) NOT NULL,
  `client_tipcard` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `client_dataexp` datetime NOT NULL,
  `acceptareemail` int(3) NOT NULL,
  `client_nrinregRC` int(100) NOT NULL,
  `client_nume` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `cod_fiscal` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(8) NOT NULL,
  `name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `code` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `image` text COLLATE latin1_general_ci NOT NULL,
  `price` double(10,2) NOT NULL,
  `descriere` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `categorie` varchar(40) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `code`, `image`, `price`, `descriere`, `categorie`) VALUES
(1, 'Apple Iphone 6', '543678', 'iphone6.png', 350.00, 'nou', 'telefoane'),
(2, 'Phillips Trimmer', '123654', 'trimmer.png', 100.00, 'resigilat', 'aparate de ras'),
(3, 'Vivo X20', '456321', 'vivox20.png', 150.00, 'nou', 'telefoane'),
(4, 'Braun Trimmer', '123423', 'braun.jpeg', 230.00, 'resigilat', 'aparate de ras'),
(5, 'Smart TV Samsung', '988768', 'samsung.jpeg', 475.00, 'nou', 'TV'),
(6, 'Smart TV LG', '983768', 'lg.jpeg', 400.00, 'resigilat', 'TV');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(5, 'george', 'b521e0f25e5d310f7385421a49ba7c83', 'pungangeorge@gmail.com'),
(6, 'raluca', 'e10adc3949ba59abbe56e057f20f883e', 'tomescuralucaioana@yahoo.com'),
(7, 'radu', '040b7cf4a55014e185813e0644502ea9', 'radu_emil@gmail.com'),
(8, 'marcel', '24dde05168c24253ce9fec0fddd1e48d', 'marcel@yahoo.com'),
(9, 'examen', 'examen', 'examen@examen.ro');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clienti`
--
ALTER TABLE `clienti`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
