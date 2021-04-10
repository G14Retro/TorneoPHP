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
  `ronda` varchar(45) NOT NULL,
  `combates` int(11) NOT NULL,
  `resultado` char(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `fk_peleas_personas1_idx` (`jugador`),
  UNIQUE KEY `fk_enfrentamientos_personas1_idx` (`oponente`),
  KEY `fk_enfrentamientos_resultado_combate1_idx` (`resultado`),
  KEY `fk_enfrentamientos_partidas1_idx` (`partida`),
  KEY `fk_enfrentamientos_personaje` (`personaje`),
  CONSTRAINT `fk_enfrentamientos_jugador` FOREIGN KEY (`jugador`) REFERENCES `personas` (`idjugadores`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_enfrentamientos_partidas1` FOREIGN KEY (`partida`) REFERENCES `partidas` (`idpartidas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_enfrentamientos_personaje` FOREIGN KEY (`personaje`) REFERENCES `personajes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_enfrentamientos_personas1` FOREIGN KEY (`oponente`) REFERENCES `personas` (`idjugadores`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_enfrentamientos_resultado_combate1` FOREIGN KEY (`resultado`) REFERENCES `resultado_combate` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `enfrentamientos` */

insert  into `enfrentamientos` values (1,4,7,1,11,'1',2,'p');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Data for the table `personas` */

insert  into `personas` values (7,'cc','12345678','cristian','gallo','ejemplo@ejemplo.com','ejemplo','1994-03-09','123456','a',2),(10,'cc','123456789','cristian','gallo','g14_0309@hotmail.com','Hola','1994-09-09','123456','a',1),(11,'cc','1022456529','ejemplo4','juego','ejemplo2@ejemplo.com','g14retro','1994-03-09','123456','a',2);

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
