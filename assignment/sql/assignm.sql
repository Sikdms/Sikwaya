DROP DATABASE IF EXISTS `assignm`;
CREATE DATABASE IF NOT EXISTS `assignm` ;
USE `assignm`;


DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userId` bigint(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL DEFAULT '',
  `gender` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(60) NOT NULL DEFAULT '',
  `userType` varchar(30) NOT NULL,
  `date_created` datetime DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`userId`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


