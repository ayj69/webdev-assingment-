-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 07, 2022 at 02:28 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`product_code`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `price`) VALUES
(1, 'PD1001', 'Series Nya: Absolution', 'A timepiece from the Series Nya Collection, the Absolution is a monument of modern engineering and craftsmanship.', 'Absolution.jpg', '2000.50'),
(2, 'PD1002', 'Series Nya: Delirious', 'A piece from the Series Nya collection, the Delirious is a playful and exquisite piece.', 'Delirious.jpg', '5000.85'),
(3, 'PD1003', 'Series Nya: Resolution', 'A timepiece from the Series Nya collection, the Resolution is a testament to the pinnacle of human engineering condensed into a marvelous timepiece.', 'Resolution.jpg', '10000.00'),
(4, 'PD1004', 'The Siamese Catalogue: Siam ', 'The Siam is the first piece in the trio from the Siamese Catalogue. The piece represents The Sky.', 'Siam 1.jpg', '4000.30'),
(5, 'PD1005', 'The Siamese Catalogue: Siam 2', 'The second piece of the Siam trio from the Siamese Catalogue. This piece represents the Earth.', 'Siam 2.png', '5000.85'),
(6, 'PD1006', 'The Siamese Catalogue: Siam 3', 'The final piece from the Siam trio in the Siamese Catalogue. This piece represents Man.', 'Siam 3.jpg', '6542.21'),
(7, 'PD1007', 'Norwegian Forest: Act 1', 'The Act 1 from the Norwegian Forest Series. The theme of this piece represents the Seedling.', 'Act1.jpg', '12455.23'),
(8, 'PD1008', 'Norwegian Forest: Act 2', 'Following the first Act, the Act 2 from the Norwegian Forest Series represents the Sprout.', 'Act2.jpg', '5100.85'),
(9, 'PD1009', 'Norwegian Forest: Act 3', 'The final piece from the Act trio in the Norwegian Forest Series. This piece is meant to represent the Tree.', 'Act3.jpg', '15678.00'),
(10, 'PD1010', 'Russian Blue: X-Factor', 'The X-Factor from the Russian Blue Series shows the fine craftsmanship of our timekeepers. This piece is meant to signify the Beginning.', 'X-factor.jpg', '12564.00'),
(11, 'PD1011', 'Russian Blue: Y-Factor', 'The X-Factor from the Russian Blue Series shows the fine craftsmanship of our timekeepers. This piece is meant to signify the End.', 'Y-factor.jpg', '12356.00'),
(12, 'PD1012', 'Russian Blue: Z-Factor', 'The X-Factor from the Russian Blue Series shows the fine craftsmanship of our timekeepers. This piece is meant to signify the Rebirth.', 'z-factor.jpg', '50120.85');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(35) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `is_admin`, `created_at`, `updated_at`) VALUES
(22, 'sohai2000', 'angyongjie911@gmail.com', 'buster', 0, '2022-04-03 03:14:45', '2022-04-03 11:14:45'),
(25, 'plsgod', 'test2@gmail.com', 'buster', 0, '2022-04-05 00:45:40', '2022-04-05 08:45:40'),
(26, 'test6', 'test6@gmail.com', 'buster', 0, '2022-04-05 00:45:51', '2022-04-05 09:55:09'),
(27, 'test445', 'test4@gmail.com', 'buster', 0, '2022-04-05 00:46:07', '2022-04-05 10:19:06'),
(28, 'test5', 'test5@gmail.com', 'buster', 0, '2022-04-05 00:46:27', '2022-04-05 08:46:27'),
(29, 'admin1', 'admin1@gmail.com', 'buster', 1, '2022-04-05 00:46:50', '2022-04-05 10:30:36'),
(38, 'test1', 'test1@gmail.com', 'buster', 0, '2022-04-05 02:11:24', '2022-04-05 10:11:24'),
(39, 'Bruh', 'bruh@gmail.com', '$2y$10$BetasWYyfy.SEF371qIPruT8mHtyftt.3d6nndX4Sw4KtRWwUae/G', 1, '2022-04-07 13:31:09', '2022-04-07 22:24:13'),
(40, 'NotBruh', 'Badabing@gmai.com', '$2y$10$pCGHgYM1KWeDrjnABHtVY.LNbgVbBT7M76jL9yXsNBTF/ou9xpWDy', 0, '2022-04-07 14:27:19', '2022-04-07 22:27:19');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;