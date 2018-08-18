/*
SQLyog Enterprise - MySQL GUI v7.02 
MySQL - 5.7.21 : Database - program_mng
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`program_mng` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `program_mng`;

/*Table structure for table `tbl_adm` */

DROP TABLE IF EXISTS `tbl_adm`;

CREATE TABLE `tbl_adm` (
  `ad_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_f_nm` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ad_usr_nm` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ad_pwd` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ad_mob_no` decimal(10,0) DEFAULT NULL,
  `ad_mail` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ad_type` int(11) DEFAULT '0',
  `ad_active` int(11) DEFAULT '0',
  `ad_pic` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ad_sess` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_adm` */

insert  into `tbl_adm`(`ad_id`,`ad_f_nm`,`ad_usr_nm`,`ad_pwd`,`ad_mob_no`,`ad_mail`,`ad_type`,`ad_active`,`ad_pic`,`ad_sess`) values (1,'Akshata Pawar','akshata','675737b908ed6fa14bb6c3d7157f49d6','8652598488','akshatapawar129@gmail.com',0,0,NULL,'0lhotu2ukb4tsvqv2i58d31l43');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
