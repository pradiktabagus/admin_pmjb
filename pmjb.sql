/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.19-MariaDB : Database - pmjb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pmjb` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `pmjb`;

/*Table structure for table `pengaduan` */

DROP TABLE IF EXISTS `pengaduan`;

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT,
  `latitude` varchar(255) NOT NULL,
  `longtitude` varchar(255) NOT NULL,
  `detail_lokasi` text NOT NULL,
  `id_firebase` varchar(100) NOT NULL,
  `img` varchar(30) NOT NULL,
  `kondisi_jalan` tinyint(4) NOT NULL,
  `tanggal` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_pengaduan`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `pengaduan` */

insert  into `pengaduan`(`id_pengaduan`,`latitude`,`longtitude`,`detail_lokasi`,`id_firebase`,`img`,`kondisi_jalan`,`tanggal`,`status`) values (1,'1.2','3.2','anu','74832748372','gbr.PNG',1,'2017-11-01',9),(7,'4324','42','fdsfsdfsd','432432432','ggg.png',1,'2017-11-01',1),(8,'43243','4342','rtertret','6465465465','bb.png',1,'2017-11-01',1),(9,'53454','54345','dsffsd','74832748372','gbr.PNG',1,'2017-11-01',0);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_firebase` varchar(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` int(13) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id_user`,`id_firebase`,`nama`,`alamat`,`telp`) values (1,'74832748372','Bagas','Semarang ',89797965),(2,'432432432','Idun','Semarang',8787887),(3,'6465465465','irfan','Semarang',97767676);

/*Table structure for table `user_admin` */

DROP TABLE IF EXISTS `user_admin`;

CREATE TABLE `user_admin` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `user_admin` */

insert  into `user_admin`(`id`,`email`,`username`,`password`) values (3,'pradiktabagus@gmail.com','pradiktabagus','f921a205a70348d2493bf9499f6214'),(6,'','coba','c3ec0f7b054e729c5a716c8125839829'),(7,'','admin','21232f297a57a5a743894a0e4a801fc3');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
