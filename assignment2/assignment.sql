
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
) 

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
) 

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `is_admin`, `created_at`, `updated_at`) VALUES
(42, 'test2', 'test2@gmail.com', '$2y$10$q2TpKz5RCdlJxlnazMVZfeUiwQ0MnLo3iXRKNN2H2gWkJwTKW8Rva', 0, '2022-04-07 19:29:57', '2022-04-08 04:40:27'),
(43, 'test3', 'test3@gmail.com', '$2y$10$ivTniBpI0Rr6RXSDt5d.Ae61lfs/n//jVVCvQ9/R4TPACPC/88zf2', 0, '2022-04-07 19:30:15', '2022-04-08 04:41:46'),
(44, 'test4', 'test4@gmail.com', '$2y$10$JyV1fBY6SV3TocO4UEaAqOzcIm3nrrMM2EmFyKbFe6U5eK5vK2Clq', 0, '2022-04-07 19:30:32', '2022-04-08 04:41:47'),
(45, 'test5', 'test5@gmail.com', '$2y$10$amXRB1mCPlXnL7Xviwgvf.ARWyuAkGZVxu27pR49Ic9gNOmstammG', 0, '2022-04-07 19:30:50', '2022-04-08 03:30:50'),
(46, 'admin', 'admin@gmail.com', '$2y$10$9syX/jh0UmjQvz2vVEyhYuYsBPpjiNpf3Py3RD9JZ5g9NEoB3OJQy', 1, '2022-04-07 19:31:55', '2022-04-08 04:41:41'),
(48, 'test1', 'test1@gmail.com', '$2y$10$7bSkb.PW8CxfmdmQHVR1COKWwuD.CpifQoMZBVtVjIh7UjpJUXxwm', 0, '2022-04-08 05:21:41', '2022-04-08 13:21:41');

