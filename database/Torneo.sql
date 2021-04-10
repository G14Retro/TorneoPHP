/*
SQLyog Job Agent v11.11 (64 bit) Copyright(c) Webyog Inc. All Rights Reserved.


MySQL - 5.5.5-10.5.9-MariaDB-log : Database - torneo
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`torneo` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `torneo`;

/*Table structure for table `enfrentamientos` */

DROP TABLE IF EXISTS `enfrentamientos`;

CREATE TABLE `enfrentamientos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `partida` int(11) NOT NULL,
  `jugador` int(11) NOT NULL,
  `personaje` int(11) DEFAULT NULL,
  `oponente` int(11) DEFAULT NULL,
  `ronda` int(11) NOT NULL,
  `combates` int(11) NOT NULL,
  `resultado` char(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_enfrentamientos_resultado_combate1_idx` (`resultado`),
  KEY `fk_enfrentamientos_partidas1_idx` (`partida`),
  KEY `fk_enfrentamientos_personaje` (`personaje`),
  KEY `fk_peleas_personas1_idx` (`jugador`),
  KEY `fk_enfrentamientos_personas1_idx` (`oponente`),
  CONSTRAINT `fk_enfrentamientos_jugador` FOREIGN KEY (`jugador`) REFERENCES `personas` (`idjugadores`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_enfrentamientos_partidas1` FOREIGN KEY (`partida`) REFERENCES `partidas` (`idpartidas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_enfrentamientos_personaje` FOREIGN KEY (`personaje`) REFERENCES `personajes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_enfrentamientos_personas1` FOREIGN KEY (`oponente`) REFERENCES `personas` (`idjugadores`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_enfrentamientos_resultado_combate1` FOREIGN KEY (`resultado`) REFERENCES `resultado_combate` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `enfrentamientos` */

insert  into `enfrentamientos` values (1,4,7,1,11,1,2,'p'),(5,1,7,2,11,1,0,'p'),(6,1,11,5,7,1,1,'p');

/*Table structure for table `estado` */

DROP TABLE IF EXISTS `estado`;

CREATE TABLE `estado` (
  `id` char(1) NOT NULL,
  `estado` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `estado` */

insert  into `estado` values ('a','activo'),('i','inactivo');

/*Table structure for table `partidas` */

DROP TABLE IF EXISTS `partidas`;

CREATE TABLE `partidas` (
  `idpartidas` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_evento` varchar(100) NOT NULL,
  `fecha_partida` datetime NOT NULL,
  PRIMARY KEY (`idpartidas`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `partidas` */

insert  into `partidas` values (1,'InaguraciÃ³n 20 de abril','2021-04-20 12:30:00'),(2,'Octavos de final abril','2021-04-21 12:30:00'),(3,'Cuartos de Final','2021-04-22 12:30:00'),(4,'Final','2021-04-23 12:30:00');

/*Table structure for table `personajes` */

DROP TABLE IF EXISTS `personajes`;

CREATE TABLE `personajes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(70) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

/*Data for the table `personajes` */

insert  into `personajes` values (1,'Baraka'),(2,'Cassie Cage'),(3,'Cetrion'),(4,'D\'Vorah'),(5,'Erron Black'),(6,'Frost'),(7,'Geras'),(8,'Jacqui Briggs'),(9,'Jade'),(10,'Jax Briggs'),(11,'Johnny Cage'),(12,'Kabal'),(13,'Kano'),(14,'Kitana'),(15,'Kollector'),(16,'Kotal Kahn'),(17,'Kung Lao'),(18,'Liu Kang'),(19,'Noob Saibot'),(20,'Raiden'),(21,'Scorpion'),(22,'Skarlet'),(23,'Sonya Blade'),(24,'Sub-Zero'),(25,'Fujin'),(26,'The Joker'),(27,'Mileena'),(28,'Nightwolf'),(29,'Rain'),(30,'Rambo'),(31,'RoboCop'),(32,'Shao Kahn'),(33,'Shang Tsung'),(34,'Sheeva'),(35,'Sindel'),(36,'Spawn'),(37,'Terminator T-800');

/*Table structure for table `personas` */

DROP TABLE IF EXISTS `personas`;

CREATE TABLE `personas` (
  `idjugadores` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_documento` char(2) NOT NULL,
  `num_documento` varchar(15) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `correo` varchar(65) NOT NULL,
  `nickname` varchar(45) DEFAULT NULL,
  `fecha_nacimiento` date NOT NULL,
  `clave` varchar(255) NOT NULL,
  `estado` char(1) NOT NULL,
  `tipo_usuario` int(11) NOT NULL,
  PRIMARY KEY (`idjugadores`),
  UNIQUE KEY `documento_unico` (`num_documento`),
  UNIQUE KEY `correo_unico` (`correo`),
  KEY `fk_jugadores_tipo_documento_idx` (`tipo_documento`),
  KEY `fk_jugadores_estado1_idx` (`estado`),
  KEY `fk_jugadores_tipo_usuario1_idx` (`tipo_usuario`),
  CONSTRAINT `fk_jugadores_estado1` FOREIGN KEY (`estado`) REFERENCES `estado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_jugadores_tipo_documento` FOREIGN KEY (`tipo_documento`) REFERENCES `tipo_documento` (`tipo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_jugadores_tipo_usuario1` FOREIGN KEY (`tipo_usuario`) REFERENCES `tipo_usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

/*Data for the table `personas` */

insert  into `personas` values (7,'cc','12345678','cristian','gallo','ejemplo@ejemplo.com','ejemplo','1994-03-09','123456','a',2),(10,'cc','123456789','Administrador','Torneo','admin@torneo.com','Hola','1994-09-09','123456','a',1),(11,'cc','1022456529','ejemplo4','juego','ejemplo2@ejemplo.com','g14retro','1994-03-09','123456','a',2),(34,'cc','1234567899','jugador1','torneo','jugador1@torneo.com','jugador1','1994-03-09','123456','i',2),(35,'cc','985656465','jugador2','torneo','jugador2@torneo.com','jugador2','1994-03-09','123456','i',2),(36,'cc','987654321','jugador3','torneo','jugador3@torneo.com','jugador3','1994-03-09','123456','i',2),(37,'cc','147852369','jugador4','torneo','jugador4@torneo.com','jugador4','1994-03-09','123456','i',2),(38,'cc','963258741','jugador5','torneo','jugador5@torneo.com','jugador5','1994-03-09','123456','i',2),(39,'cc','7531598462','jugador6','torneo','jugador6@torneo.com','jugador6','1994-03-09','123456','i',2),(40,'cc','243576891','jugador7','torneo','jugador7@torneo.com','jugador7','1994-03-09','123456','i',2),(41,'cc','9513574268','jugador8','torneo','jugador8@torneo.com','jugador8','1994-03-09','123456','i',2),(42,'cc','741258963','jugador9','torneo','jugador9@torneo.com','jugador9','1994-03-09','123456','i',2),(43,'cc','654123987','jugador10','torneo','jugador10@torneo.com','jugador10','1994-03-09','123456','i',2),(44,'cc','321654987','jugador12','torneo','jugador12@torneo.com','jugador12','1994-03-09','123456','i',2),(45,'cc','789456123','jugador13','torneo','jugador13@torneo.com','jugador13','1994-03-09','123456','i',2),(46,'cc','987321654','jugador14','torneo','jugador14@torneo.com','jugador14','1994-03-09','123456','i',2),(47,'cc','456827193','jugador15','torneo','jugador15@torneo.com','jugador15','1994-03-09','123456','i',2),(48,'cc','123748596','jugador16','torneo','jugador16@torneo.com','jugador16','1994-03-09','123456','i',2),(49,'cc','321748596','jugador17','torneo','jugador17@torneo.com','jugador17','1994-03-09','123456','i',2),(50,'cc','654718293','jugador18','torneo','jugador18@torneo.com','jugador18','1994-03-09','123456','i',2),(51,'cc','654392817','jugador19','torneo','jugador19@torneo.com','jugador19','1994-03-09','123456','i',2),(52,'cc','654938271','jugador20','torneo','jugador20@torneo.com','jugador20','1994-03-09','123456','i',2),(53,'cc','987415263','jugador21','torneo','jugador21@torneo.com','jugador21','1994-03-09','123456','i',2),(54,'cc','987142536','jugador22','torneo','jugador22@torneo.com','jugador22','1994-03-09','123456','i',2),(55,'cc','192873654','jugador23','torneo','jugador23@torneo.com','jugador23','1994-03-09','123456','i',2);

/*Table structure for table `resultado_combate` */

DROP TABLE IF EXISTS `resultado_combate`;

CREATE TABLE `resultado_combate` (
  `id` char(1) NOT NULL,
  `resultado` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `resultado_combate` */

insert  into `resultado_combate` values ('d','derrota'),('e','empate'),('p','pendiente'),('v','victoria');

/*Table structure for table `tipo_documento` */

DROP TABLE IF EXISTS `tipo_documento`;

CREATE TABLE `tipo_documento` (
  `tipo` char(2) NOT NULL,
  `documento` varchar(45) NOT NULL,
  PRIMARY KEY (`tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tipo_documento` */

insert  into `tipo_documento` values ('cc','cedula de ciudadania'),('ce','cedula de extrangeria'),('pp','pasaporte'),('ti','tarjeta de identidad');

/*Table structure for table `tipo_usuario` */

DROP TABLE IF EXISTS `tipo_usuario`;

CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_usuario` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `tipo_usuario` */

insert  into `tipo_usuario` values (1,'administrador'),(2,'jugador');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
