CREATE DATABASE IF NOT EXISTS `examen1`;
USE `examen1`;

DROP TABLE IF EXISTS `songs`;
CREATE TABLE `songs` (
  `id_song` int NOT NULL AUTO_INCREMENT,
  `song_name` varchar(255) DEFAULT NULL,
  `artist` varchar(255) DEFAULT NULL,
  `song_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_song`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `songs` WRITE;
INSERT INTO `songs` VALUES (12,'Cancion 1','artista 1','uploads/673e16ff76804_dojacatcancion.mp3');
UNLOCK TABLES;

