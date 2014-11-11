/*
SQLyog Community Edition- MySQL GUI v8.05 
MySQL - 5.5.16 : Database - usuario
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`usuario` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `usuario`;

/*Table structure for table `alumno_grupo` */

DROP TABLE IF EXISTS `alumno_grupo`;

CREATE TABLE `alumno_grupo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idalumno` int(11) DEFAULT NULL,
  `idgrupo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `alumno_grupo` */

/*Table structure for table `grupos` */

DROP TABLE IF EXISTS `grupos`;

CREATE TABLE `grupos` (
  `idgrupo` int(11) NOT NULL AUTO_INCREMENT,
  `grupo` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idgrupo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `grupos` */

insert  into `grupos`(`idgrupo`,`grupo`) values (1,'a'),(2,'b'),(3,'c'),(4,'d');

/*Table structure for table `maestro_materia` */

DROP TABLE IF EXISTS `maestro_materia`;

CREATE TABLE `maestro_materia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_maestro` int(11) DEFAULT NULL,
  `id_materia` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

/*Data for the table `maestro_materia` */

insert  into `maestro_materia`(`id`,`id_maestro`,`id_materia`) values (28,1,1),(30,1,2),(31,2,3),(33,2,4),(35,1,4),(38,1,3),(39,2,3),(40,2,5),(41,7,1),(42,7,1);

/*Table structure for table `materia` */

DROP TABLE IF EXISTS `materia`;

CREATE TABLE `materia` (
  `id_materia` int(11) NOT NULL AUTO_INCREMENT,
  `materia` varchar(100) DEFAULT NULL,
  `estatus` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_materia`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `materia` */

insert  into `materia`(`id_materia`,`materia`,`estatus`) values (1,'a',1),(2,'b',1),(3,'c',1),(4,'d',1),(5,'e',1),(6,'f',1),(7,'g',1),(8,'h',1),(9,'i',1),(10,'j',1);

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) DEFAULT NULL,
  `ApellidoPaterno` varchar(100) DEFAULT NULL,
  `ApellidoMaterno` varchar(100) DEFAULT NULL,
  `Telefono` varchar(100) DEFAULT NULL,
  `Calle` varchar(100) DEFAULT NULL,
  `NumeroExterior` int(11) DEFAULT NULL,
  `NumeroInterior` int(11) DEFAULT NULL,
  `Colonia` varchar(100) DEFAULT NULL,
  `Municipio` varchar(100) DEFAULT NULL,
  `Estado` varchar(100) DEFAULT NULL,
  `CP` varchar(100) DEFAULT NULL,
  `Correo` varchar(100) DEFAULT NULL,
  `Usuario` varchar(100) DEFAULT NULL,
  `Contrasena` varchar(100) DEFAULT NULL,
  `Nivel` int(11) DEFAULT NULL,
  `Estatus` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

insert  into `usuario`(`Id`,`Nombre`,`ApellidoPaterno`,`ApellidoMaterno`,`Telefono`,`Calle`,`NumeroExterior`,`NumeroInterior`,`Colonia`,`Municipio`,`Estado`,`CP`,`Correo`,`Usuario`,`Contrasena`,`Nivel`,`Estatus`) values (1,'raul','lopez','zarate','m','m',3,3,'m','m','m','m','m','m','m',2,'2'),(2,'raul','maldonado','sandoval','i','i',0,2,'i','i','i','i','i','i','i',2,'1'),(3,'raul','mtz','uohjb','ukjb','kkj.nm',2,2,'uhkj','jh,','jh','gh','jbk','bjk','bjn',2,'3'),(4,'juan','khgm','jhgm','hj','jjh',0,0,'ijh','jh','jh','jh',NULL,'j,hj','l',1,'3'),(5,'pepe','kjmn','kjmn','n','lhn',0,0,'jhk','uhk','kj','jk','jh','jk','jk',1,'3'),(6,'luis','luisap','luisam','ij','ij',9,9,'knnm','kjnm','knm','kn','n','knm','n',1,'3'),(7,'pedro','hdz','zarco','jn','jkn',0,0,'kjn','kj','kjnm','kjm','km','kjmn','kjm',1,'3'),(8,'memo','gtz','gtz','9','9',9,9,'9','9','9','9','9','9','9',1,'3'),(9,'vic','mora','mora','9','9',9,9,'9','09','9','9','9','09','9',2,'3');

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `idusu` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `estatus` int(11) DEFAULT NULL,
  PRIMARY KEY (`idusu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `usuarios` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
