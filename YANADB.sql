-- Adminer 4.8.1 MySQL 8.0.30 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP DATABASE IF EXISTS `YANADB`;
CREATE DATABASE `YANADB` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `YANADB`;

DROP TABLE IF EXISTS `user_activities`;
CREATE TABLE `user_activities` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `uid` int NOT NULL,
  `message_text` mediumtext NOT NULL,
  `message_from` varchar(100) NOT NULL,
  `datetime` varchar(100) NOT NULL,
  `timestamp` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `activities_user_index` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

TRUNCATE `user_activities`;
INSERT INTO `user_activities` (`id`, `uid`, `message_text`, `message_from`, `datetime`, `timestamp`) VALUES
(1,	1,	'Mensaje 1',	'Moises',	'2022-09-08',	'00:59'),
(3,	1,	'Mensaje 2',	'Pedro',	'2022-09-08',	'01:00'),
(4,	1,	'Mensaje 3',	'Moises',	'2022-09-08',	'01:00');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

TRUNCATE `users`;
INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1,	'moisesdavidaaron@gmail.com',	'$2y$10$HPQ9.p3lLSwUSxBJ0bmKE.ZOi12NArkveKcQkDEL46MNlvkDLjcFq'),
(9,	'moisesdavidaaron2@gmail.com',	'$2y$10$HPQ9.p3lLSwUSxBJ0bmKE.ZOi12NArkveKcQkDEL46MNlvkDLjcFq'),
(10,	'moisesdavidaaron@gmail.com11',	'$2y$10$HAryvqGMauPGa5gLWW/e7Oy3fkifUx3Z7/w84.R5owEXPMLuF6ncC'),
(11,	'moisesdavidaaron@gmail.com111',	'$2y$10$5TP3JYt0CUoRu2zhjPBdv..ruQl7tv7R89op3x6KOifNDh4vTw9fu'),
(12,	'moisesdavidaaron@gmail.com1111',	'$2y$10$9UXiRm6hxPJ8eZs.kp5eG.fk0Kk0LwoTW5JVkFLDMvmVMlyUE1/7e'),
(13,	'moisesdavidaaron@gmail.com1',	'$2y$10$LtuPPODlpc8xtYo0lUkCR.sLX.GRfVAdKxsxxEDsnVshavngbFZmK'),
(14,	'moi@gmail.com',	'$2y$10$J4mJdOnhlnSeOvARb6lkAe.K.0FU7ab6wysR9wK0NYUl5J1vc/ZTm'),
(15,	'moi@gmail.com1',	'$2y$10$2k9h5Fqt9G3uxb.GVi3g4.esCiCi5.VcRfAJa40.s9IUTWGY8oA42'),
(16,	'moi@gmail.com111',	'$2y$10$UcHehmqAE26z5c3q75XLnuOhNcJqDNLA9pURuW9FwPsdjeGx2Eplm'),
(17,	'moi@gmail.com111a',	'$2y$10$v.zekZr4sVYOPW1r75zO0e7RSo5AUqoXvkRuzRNhfFq76IvAHzZjC'),
(18,	'moi@gmail.com5',	'$2y$10$fN2CPdzoNGAtjIXVtv8Zeu2YrxnrCRlaBdfPQRgXxrUotgVlvwV62'),
(19,	'moi@gmail.com51',	'$2y$10$c2c7L8leWn.jEpfUX1DAquckkktfNpmXjJy.xs.mqKK0VjsP6.7am'),
(20,	'moi@gmail.com511',	'$2y$10$ePrCk5Isd23lo0DVLExnIeLm1RbHXrzLsA9OGEdT5GMtYMKMhrjC2'),
(21,	'moi@gmail.com511a',	'$2y$10$mjdw/9TcVxl/Fz1sfDNWX.gFrsyAWerc3vDsSG09rKx1JCNBcMMMK');

-- 2022-09-09 00:03:16
