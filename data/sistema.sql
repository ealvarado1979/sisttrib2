/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.11-MariaDB : Database - sisttrib
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sisttrib` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `sisttrib`;

/*Table structure for table `c_area` */

DROP TABLE IF EXISTS `c_area`;

CREATE TABLE `c_area` (
  `id_area` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion_area` varchar(70) NOT NULL,
  PRIMARY KEY (`id_area`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `c_area` */

insert  into `c_area`(`id_area`,`descripcion_area`) values 
(1,'CATASTRO'),
(2,'CUENTAS CORRIENTES'),
(3,'COLECTURIA'),
(4,'ADMINISTRADOR');

/*Table structure for table `c_clase` */

DROP TABLE IF EXISTS `c_clase`;

CREATE TABLE `c_clase` (
  `idclase` int(11) NOT NULL,
  `tipo_clase` varchar(45) NOT NULL,
  PRIMARY KEY (`idclase`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `c_clase` */

insert  into `c_clase`(`idclase`,`tipo_clase`) values 
(1,'METRICA'),
(2,'VALOR');

/*Table structure for table `c_sede` */

DROP TABLE IF EXISTS `c_sede`;

CREATE TABLE `c_sede` (
  `id_sede` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion_sede` varchar(125) DEFAULT NULL,
  `fh_creacion` datetime DEFAULT NULL,
  PRIMARY KEY (`id_sede`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `c_sede` */

insert  into `c_sede`(`id_sede`,`descripcion_sede`,`fh_creacion`) values 
(1,'ADMINISTRACION','2020-05-23 14:55:03'),
(2,'ALCANDIA 1','2020-05-23 14:55:16');

/*Table structure for table `c_tributo` */

DROP TABLE IF EXISTS `c_tributo`;

CREATE TABLE `c_tributo` (
  `id_tributo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_tributo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tributo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `c_tributo` */

insert  into `c_tributo`(`id_tributo`,`nombre_tributo`) values 
(1,'ASEO'),
(2,'ALUMBRADO'),
(3,'BARRIDO'),
(4,'PAVIMENTACION'),
(5,'PAGOS MENSUALES'),
(6,'PLAN DE PAGO');

/*Table structure for table `c_usuarios` */

DROP TABLE IF EXISTS `c_usuarios`;

CREATE TABLE `c_usuarios` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `password` varchar(240) NOT NULL,
  `id_area` int(11) NOT NULL,
  `editado` datetime NOT NULL,
  `nivel` int(1) NOT NULL DEFAULT 0,
  `estado` tinyint(1) DEFAULT 0,
  `id_sede` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_admin`),
  UNIQUE KEY `usuario` (`usuario`),
  KEY `fk_c_usuarios_c_area` (`id_area`),
  KEY `fj_c_usuarios_c_sede` (`id_sede`),
  CONSTRAINT `fj_c_usuarios_c_sede` FOREIGN KEY (`id_sede`) REFERENCES `c_sede` (`id_sede`) ON UPDATE CASCADE,
  CONSTRAINT `fk_c_usuarios_c_area` FOREIGN KEY (`id_area`) REFERENCES `c_area` (`id_area`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `c_usuarios` */

insert  into `c_usuarios`(`id_admin`,`usuario`,`nombre`,`password`,`id_area`,`editado`,`nivel`,`estado`,`id_sede`) values 
(1,'admin','Hector Lopez Herrera','$2y$12$hOwsKCa1Y7M3VVPAW1BGxusIbzmkXC5.GxbVxDWSrEzUavhLhkh9.',4,'2020-04-30 21:42:19',1,0,1),
(2,'catastro','Juan Jose Segovia Flores','$2y$12$hOwsKCa1Y7M3VVPAW1BGxusIbzmkXC5.GxbVxDWSrEzUavhLhkh9.',1,'2020-05-20 17:08:18',0,0,2),
(3,'ccorriente','Valeria Sofia Lopez ','$2y$12$hOwsKCa1Y7M3VVPAW1BGxusIbzmkXC5.GxbVxDWSrEzUavhLhkh9.',2,'2020-05-20 17:19:34',0,0,2),
(4,'colecturia','Ernesto Eduardo Lopez Herrera','$2y$12$hOwsKCa1Y7M3VVPAW1BGxusIbzmkXC5.GxbVxDWSrEzUavhLhkh9.',3,'2020-05-19 16:19:44',0,0,2),
(5,'alopez','Hector Antonino Lopez Eguizabal','$2y$12$hOwsKCa1Y7M3VVPAW1BGxusIbzmkXC5.GxbVxDWSrEzUavhLhkh9.',1,'2020-05-21 09:59:29',0,0,2);

/*Table structure for table `c_versiones` */

DROP TABLE IF EXISTS `c_versiones`;

CREATE TABLE `c_versiones` (
  `id_version` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `mayor` tinyint(2) unsigned zerofill DEFAULT NULL,
  `menor` tinyint(2) unsigned zerofill DEFAULT NULL,
  `revision` tinyint(2) unsigned zerofill DEFAULT NULL,
  `descripcion_cambios` varchar(250) DEFAULT NULL,
  `fh_cambios` datetime DEFAULT NULL,
  PRIMARY KEY (`id_version`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `c_versiones` */

insert  into `c_versiones`(`id_version`,`mayor`,`menor`,`revision`,`descripcion_cambios`,`fh_cambios`) values 
(1,01,00,00,'sistema sisstrib','2020-05-23 10:54:02');

/*Table structure for table `tributo` */

DROP TABLE IF EXISTS `tributo`;

CREATE TABLE `tributo` (
  `idtributo` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(80) NOT NULL,
  `tributo` varchar(50) NOT NULL,
  `clase` varchar(45) NOT NULL,
  PRIMARY KEY (`idtributo`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

/*Data for the table `tributo` */

insert  into `tributo`(`idtributo`,`descripcion`,`tributo`,`clase`) values 
(13,'ALUMBRADO DE COLONIAS','ALUMBRADO','METRICA'),
(14,'PAGOS MENSUALES A COLONIAS','PLAN DE PAGO','VALOR'),
(27,'FDAFAFDDFDA','BARRIDO','METRICA');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
