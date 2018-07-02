/*
SQLyog Community Edition- MySQL GUI v6.05
Host - 5.7.17-log : Database - rasio
*********************************************************************
Server version : 5.7.17-log
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `rasio`;

USE `rasio`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id_admin` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(8) NOT NULL,
  `password` varchar(8) NOT NULL,
  `level` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `admin` */

insert  into `admin`(`id_admin`,`username`,`password`,`level`) values (2,'admin','123','admin'),(3,'root','123','admin');

/*Table structure for table `debtequity` */

DROP TABLE IF EXISTS `debtequity`;

CREATE TABLE `debtequity` (
  `id_debtequity` int(8) NOT NULL AUTO_INCREMENT,
  `kode` varchar(100) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `total_utang` int(20) NOT NULL,
  `total_ekuitas` int(20) NOT NULL,
  `hasil` float NOT NULL,
  `tingkat` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id_debtequity`),
  KEY `id_pt` (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

/*Data for the table `debtequity` */

insert  into `debtequity`(`id_debtequity`,`kode`,`tahun`,`total_utang`,`total_ekuitas`,`hasil`,`tingkat`,`deskripsi`) values (4,'CPIN','2015',12123488,12684915,95.57,'Insolvable',''),(5,'CPIN','2016',10047751,14157243,70.97,'Solvable',''),(6,'JPFA','2015',11049774,6109692,180.86,'Insolvable',''),(7,'JPFA','2014',10440441,5289994,197.36,'Insolvable',''),(8,'JPFA','2016',9878062,9372964,105.39,'Insolvable',''),(9,'MAIN','2014',2453334,1077885,227.61,'Insolvable',''),(10,'MAIN','2015',2413482,1548585,155.85,'Insolvable',''),(11,'MAIN','2016',2082189,1837575,113.31,'Insolvable',''),(12,'SIPD','2014',1513908,1287006,117.63,'Insolvable',''),(13,'SIPD','2015',1512527,734242,206,'Insolvable',''),(14,'SIPD','2016',1424380,1142830,124.64,'Insolvable',''),(15,'CPIN','2014',9919150,10943289,90.64,'Insolvable','');

/*Table structure for table `debtratio` */

DROP TABLE IF EXISTS `debtratio`;

CREATE TABLE `debtratio` (
  `id_debtratio` int(8) NOT NULL AUTO_INCREMENT,
  `kode` varchar(100) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `total_utang` int(20) NOT NULL,
  `total_aset` int(20) NOT NULL,
  `hasil` float NOT NULL,
  `tingkat` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id_debtratio`),
  KEY `id_pt` (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

/*Data for the table `debtratio` */

insert  into `debtratio`(`id_debtratio`,`kode`,`tahun`,`total_utang`,`total_aset`,`hasil`,`tingkat`,`deskripsi`) values (4,'CPIN','2015',12123488,24684915,49.11,'Insolvable',''),(5,'CPIN','2016',10047751,24204994,41.51,'Insolvable',''),(6,'JPFA','2014',10440441,15730435,66.37,'Insolvable',''),(7,'JPFA','2015',11049774,17159466,64.39,'Insolvable',''),(8,'JPFA','2016',9878062,19251026,51.31,'Insolvable',''),(9,'MAIN','2014',2453334,3531219,69.48,'Insolvable',''),(10,'MAIN','2015',2413482,3962068,60.91,'Insolvable',''),(11,'MAIN','2016',2082189,3919764,53.12,'Insolvable',''),(12,'SIPD','2014',1513908,2800914,54.05,'Insolvable',''),(13,'SIPD','2015',1512527,2246770,67.32,'Insolvable',''),(14,'SIPD','2016',1424380,2567211,55.48,'Insolvable',''),(15,'CPIN','2014',9919150,20862439,47.55,'Insolvable','');

/*Table structure for table `perusahaan` */

DROP TABLE IF EXISTS `perusahaan`;

CREATE TABLE `perusahaan` (
  `id_pt` int(8) NOT NULL AUTO_INCREMENT,
  `kode` varchar(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pt`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `perusahaan` */

insert  into `perusahaan`(`id_pt`,`kode`,`nama`) values (7,'CPIN','PT Charoen Pokphand Indonesia Tbk  '),(8,'JPFA','PT Japfa Comfeed Indonesia Tbk '),(9,'MAIN','PT Malindo Feedmil Tbk '),(10,'SIPD','PT Sierad Produce Tbk');

/*Table structure for table `profit` */

DROP TABLE IF EXISTS `profit`;

CREATE TABLE `profit` (
  `id_profit` int(8) NOT NULL AUTO_INCREMENT,
  `kode` varchar(100) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `EAIT` int(20) NOT NULL,
  `penjualan` int(20) NOT NULL,
  `hasil` float NOT NULL,
  `tingkat` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id_profit`),
  KEY `id_pt` (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

/*Data for the table `profit` */

insert  into `profit`(`id_profit`,`kode`,`tahun`,`EAIT`,`penjualan`,`hasil`,`tingkat`,`deskripsi`) values (3,'CPIN','2015',1832598,30107727,6.09,'Unrendabel',''),(4,'CPIN','2016',5109719,38256857,13.36,'Unrendabel',''),(5,'JPFA','2014',384846,24458880,1.57,'Unrendabel',''),(6,'JPFA','2015',524484,25022913,2.1,'Unrendabel',''),(7,'JPFA','2016',2171017,27063310,8.02,'Unrendabel',''),(8,'MAIN','2014',-84778,4502078,-1.88,'Unrendabel',''),(9,'MAIN','2015',-62097,4775014,-1.3,'Unrendabel',''),(10,'MAIN','2016',290230,5246340,5.53,'Unrendabel',''),(11,'SIPD','2014',2064,2505575,0.08,'Unrendabel',''),(12,'SIPD','2015',-362030,21131148,-1.71,'Unrendabel',''),(13,'SIPD','2016',13048,2427199,0.54,'Unrendabel',''),(14,'CPIN','2014',1746644,29150275,5.99,'Unrendabel','');

/*Table structure for table `rasiocepat` */

DROP TABLE IF EXISTS `rasiocepat`;

CREATE TABLE `rasiocepat` (
  `id_rasiocepat` int(8) NOT NULL AUTO_INCREMENT,
  `kode` varchar(100) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `aktiva_lancar` int(20) NOT NULL,
  `persediaan` int(20) NOT NULL,
  `utang_lancar` int(20) NOT NULL,
  `hasil` float NOT NULL,
  `tingkat` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id_rasiocepat`),
  KEY `id_pt` (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

/*Data for the table `rasiocepat` */

insert  into `rasiocepat`(`id_rasiocepat`,`kode`,`tahun`,`aktiva_lancar`,`persediaan`,`utang_lancar`,`hasil`,`tingkat`,`deskripsi`) values (5,'JPFA','2014',8709315,5133782,4916448,0.73,'Illikuid,',''),(6,'MAIN','2014',1875171,610432,1742383,0.73,'Illikuid,',''),(7,'SIPD','2014',1720579,557327,1203289,0.97,'Illikuid,',''),(8,'CPIN','2015',12013294,5454001,5703842,1.15,'Illikuid,',''),(9,'JPFA','2015',9604154,5854975,5352670,0.7,'Illikuid,',''),(11,'SIPD','2015',1145162,373941,1046536,0.74,'Illikuid,',''),(12,'CPIN','2016',12059433,5109719,5550257,1.25,'Illikuid,',''),(13,'JPFA','2016',11061008,5500017,5193549,1.07,'Illikuid,',''),(14,'MAIN','2016',1761071,625872,1365050,0.83,'Illikuid,',''),(15,'SIPD','2016',1498156,446440,1075374,0.978,'Illikuid',''),(24,'MAIN','2015',2027927,551010,1520801,0.97,'Illikuid,',''),(25,'CPIN','2014',10009670,4333238,4467240,1.27,'Illikuid','');

/*Table structure for table `rasiokas` */

DROP TABLE IF EXISTS `rasiokas`;

CREATE TABLE `rasiokas` (
  `id_rasiokas` int(8) NOT NULL AUTO_INCREMENT,
  `kode` varchar(100) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `kas_bank` int(20) NOT NULL,
  `utang_lancar` int(20) NOT NULL,
  `hasil` float NOT NULL,
  `tingkat` varchar(10) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  PRIMARY KEY (`id_rasiokas`),
  KEY `id_pt` (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

/*Data for the table `rasiokas` */

insert  into `rasiokas`(`id_rasiokas`,`kode`,`tahun`,`kas_bank`,`utang_lancar`,`hasil`,`tingkat`,`deskripsi`) values (3,'CPIN','2015',1679273,5703842,29.44,'Illikuid,',''),(4,'CPIN','2016',2504434,5550257,45.12,'Illikuid,',''),(5,'JPFA','2014',768461,4916448,15.63,'Illikuid,',''),(6,'JPFA','2015',901201,5352670,16.84,'Illikuid,',''),(7,'JPFA','2016',2701265,5193549,52.01,'Likuid,',''),(8,'MAIN','2014',310112,1742383,17.8,'Illikuid,',''),(9,'MAIN','2015',524520,1520801,34.49,'Illikuid,',''),(10,'MAIN','2016',146426,1365050,10.73,'Illikuid,',''),(11,'SIPD','2014',150815,1203289,12.53,'Illikuid,',''),(12,'SIPD','2015',54384,1046536,5.2,'Illikuid,',''),(13,'SIPD','2016',397370,1075374,36.95,'Illikuid,',''),(14,'CPIN','2014',884831,4467240,19.81,'Illikuid,','');

/*Table structure for table `rasiolancar` */

DROP TABLE IF EXISTS `rasiolancar`;

CREATE TABLE `rasiolancar` (
  `id_rasiolancar` int(8) NOT NULL AUTO_INCREMENT,
  `kode` varchar(10) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `aktiva_lancar` int(30) NOT NULL,
  `utang_lancar` int(30) NOT NULL,
  `hasil` double NOT NULL,
  `tingkat` varchar(10) NOT NULL,
  PRIMARY KEY (`id_rasiolancar`),
  KEY `id_pt` (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

/*Data for the table `rasiolancar` */

insert  into `rasiolancar`(`id_rasiolancar`,`kode`,`tahun`,`aktiva_lancar`,`utang_lancar`,`hasil`,`tingkat`) values (7,'SIPD','2014',1720579,1203289,1.43,'Illikuid,'),(8,'JPFA','2014',8709315,4916448,1.77,'Illikuid,'),(9,'MAIN','2014',1875171,1742383,1.08,'Illikuid,'),(10,'CPIN','2015',12013294,5703842,2.11,'Likuid,'),(11,'JPFA','2015',9604154,5352670,1.79,'Illikuid,'),(12,'MAIN','2015',2027927,1520801,1.33,'Illikuid,'),(13,'SIPD','2015',1145162,1046536,1.09,'Illikuid,'),(14,'CPIN','2016',12059433,5550257,2.17,'Likuid,'),(15,'JPFA','2016',11061008,5193549,2.13,'Likuid,'),(16,'MAIN','2016',1761071,1365050,1.29,'Illikuid,'),(17,'SIPD','2016',1498156,1075374,1.39,'Illikuid,'),(18,'CPIN','2014',10009670,4467240,2.24,'Likuid,');

/*Table structure for table `roe` */

DROP TABLE IF EXISTS `roe`;

CREATE TABLE `roe` (
  `id_roe` int(8) NOT NULL AUTO_INCREMENT,
  `kode` varchar(100) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `EAIT` int(20) NOT NULL,
  `total_ekuitas` int(20) NOT NULL,
  `hasil` float NOT NULL,
  `tingkat` varchar(10) NOT NULL,
  PRIMARY KEY (`id_roe`),
  KEY `id_pt` (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

/*Data for the table `roe` */

insert  into `roe`(`id_roe`,`kode`,`tahun`,`EAIT`,`total_ekuitas`,`hasil`,`tingkat`) values (6,'CPIN','2015',1832598,12684915,14.45,'Unrendabel'),(7,'CPIN','2016',5109719,14157243,36.09,'Unrendabel'),(8,'JPFA','2014',384846,5289994,7.27,'Unrendabel'),(9,'JPFA','2015',524484,6109692,8.58,'Unrendabel'),(10,'JPFA','2016',2171017,9878062,21.98,'Unrendabel'),(11,'MAIN','2014',-84778,1077885,-7.87,'Unrendabel'),(12,'MAIN','2015',-62097,1548585,-4.01,'Unrendabel'),(13,'MAIN','2016',290230,1837575,15.79,'Unrendabel'),(14,'SIPD','2014',2064,1287006,0.16,'Unrendabel'),(15,'SIPD','2015',-362030,734242,-49.31,'Unrendabel'),(16,'SIPD','2016',13048,1142830,1.14,'Unrendabel'),(17,'CPIN','2014',1746644,10943289,15.96,'Unrendabel');

/*Table structure for table `roi` */

DROP TABLE IF EXISTS `roi`;

CREATE TABLE `roi` (
  `id_roi` int(8) NOT NULL AUTO_INCREMENT,
  `kode` varchar(100) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `EAIT` int(20) NOT NULL,
  `total_aset` int(20) NOT NULL,
  `hasil` float NOT NULL,
  `tingkat` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id_roi`),
  KEY `id_pt` (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

/*Data for the table `roi` */

insert  into `roi`(`id_roi`,`kode`,`tahun`,`EAIT`,`total_aset`,`hasil`,`tingkat`,`deskripsi`) values (3,'CPIN','2015',1832598,24684915,7.42,'Unrendabel',''),(4,'CPIN','2016',5109719,24204994,21.11,'Unrendabel',''),(5,'JPFA','2014',384846,15730435,2.45,'Unrendabel',''),(6,'JPFA','2015',524484,17159466,3.06,'Unrendabel',''),(7,'JPFA','2016',2171017,19251026,11.28,'Unrendabel',''),(8,'MAIN','2014',-84778,3531219,-2.4,'Unrendabel',''),(9,'MAIN','2015',-62097,3962068,-1.57,'Unrendabel',''),(10,'MAIN','2016',290230,3919764,7.4,'Unrendabel',''),(11,'SIPD','2014',2064,2800914,0.07,'Unrendabel',''),(12,'SIPD','2015',-362030,2246770,-16.11,'Unrendabel',''),(13,'SIPD','2016',13048,2567211,0.51,'Unrendabel',''),(14,'CPIN','2014',1746644,20862439,8.37,'Unrendabel','');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
