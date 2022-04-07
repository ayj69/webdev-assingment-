-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
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

-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `price`) VALUES
(1, 'PD1001', 'Android Phone FX1', 'Di sertakan secara rambang yang lansung tidak munasabah. Jika anda ingin menggunakan Lorem Ipsum, anda perlu memastikan bahwa tiada apa yang', 'android-phone.jpg', '200.50'),
(2, 'PD1002', 'Television DXT', 'Ia menggunakan kamus yang mengandungi lebih 200 ayat Latin, bersama model dan struktur ayat Latin, untuk menghasilkan Lorem Ipsum yang munasabah.', 'lcd-tv.jpg', '500.85'),
(3, 'PD1003', 'External Hard Disk', 'Ada banyak versi dari mukasurat-mukasurat Lorem Ipsum yang sedia ada, tetapi kebanyakkannya telah diubahsuai, lawak jenaka diselitkan, atau ayat ayat yang', 'external-hard-disk.jpg', '100.00'),
(4, 'PD1004', 'Wrist Watch GE2', 'Memalukan akan terselit didalam di tengah tengah kandungan text. Semua injin Lorem Ipsum didalam Internet hanya mengulangi text, sekaligus menjadikan injin kami sebagai yang terunggul dan tepat sekali di Internet.', 'wrist-watch.jpg', '400.30');


-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

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

-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

INSERT INTO `users` (`id`, `username`, `email`, `password`, `is_admin`, `created_at`, `updated_at`) VALUES
(22, 'sohai2000', 'angyongjie911@gmail.com', '$2y$10$JTdUPQxzI0DbpRvlxZlmzezU0GguRwjs4JEgDvd96BZCZ1AlECmkq', 0, '2022-04-03 03:14:45', '2022-04-03 11:14:45'),
(25, 'test2', 'test2@gmail.com', '$2y$10$bmibevZpJI5X1DiPQWP5GeE6bs.yRN7t2MNbxqMjTLwQr7sCDQ0oS', 0, '2022-04-05 00:45:40', '2022-04-05 08:45:40'),
(26, 'test6', 'test6@gmail.com', '$2y$10$6uIK5wi4yb47hv3HgYNZCO4t7/idkaQDLO9n2q6Cw9E.oG3ADFgya', 0, '2022-04-05 00:45:51', '2022-04-05 09:55:09'),
(27, 'test445', 'test4@gmail.com', '$2y$10$/kMXrV5crRn9.tVJyYGW2.0dB8wCcKLCYY2..lCNtrlMW.IxiMfzq', 0, '2022-04-05 00:46:07', '2022-04-05 10:19:06'),
(28, 'test5', 'test5@gmail.com', '$2y$10$wz5hjKUnHIZ.qH6IPTFOu.E6yDUPD3UKOVrL5mEbnpC5dRfIfGnW2', 0, '2022-04-05 00:46:27', '2022-04-05 08:46:27'),
(29, 'admin1', 'admin1@gmail.com', '$2y$10$Fj9fuzuJsLBDTTu9UvRDzOZOUODfpzCrxzvDxIqHu6HkvdKplYkkS', 1, '2022-04-05 00:46:50', '2022-04-05 10:30:36'),
(38, 'test1', 'test1@gmail.com', '$2y$10$UnV/H4PZj5Ly8VbyTMDDUujYFG64h8rif6SwNDNgmIrlwd06Rc/CW', 0, '2022-04-05 02:11:24', '2022-04-05 10:11:24');

-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------