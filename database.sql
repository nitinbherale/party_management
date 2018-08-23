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

insert  into `tbl_adm`(`ad_id`,`ad_f_nm`,`ad_usr_nm`,`ad_pwd`,`ad_mob_no`,`ad_mail`,`ad_type`,`ad_active`,`ad_pic`,`ad_sess`) values (1,'Akshata Pawar','akshata','675737b908ed6fa14bb6c3d7157f49d6','8652598488','akshatapawar129@gmail.com',0,0,NULL,'k3mtqj6u0eipotgdr451ou70h7');

/*Table structure for table `tbl_evnt` */

DROP TABLE IF EXISTS `tbl_evnt`;

CREATE TABLE `tbl_evnt` (
  `evnt_id` int(11) NOT NULL AUTO_INCREMENT,
  `evnt_tit` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `evnt_des` longtext COLLATE utf8_unicode_ci,
  `evnt_date` date DEFAULT NULL,
  `evnt_time` time DEFAULT NULL,
  `evnt_str` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `evnt_cty` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `evnt_pin_cod` decimal(10,0) DEFAULT NULL,
  `evnt_coor_per` longtext COLLATE utf8_unicode_ci,
  `evnt_pic` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `evnt_appr` int(11) DEFAULT '0',
  `evnt_appr_time` datetime DEFAULT NULL,
  `evnt_appr_by` int(11) DEFAULT NULL,
  `evnt_dis_appr_time` datetime DEFAULT NULL,
  `evnt_dis_appr_by` int(11) DEFAULT NULL,
  `evnt_active` int(11) DEFAULT '0',
  `evnt_edit_time` datetime DEFAULT NULL,
  `evnt_add_by` int(11) DEFAULT NULL,
  `evnt_add_time` datetime DEFAULT NULL,
  `evnt_assg_to_id` int(11) DEFAULT NULL,
  `evnt_assg_to_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `evnt_assg_time` datetime DEFAULT NULL,
  `evnt_assg` int(11) DEFAULT '0',
  `evnt_noti` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `evnt_cnl` int(11) DEFAULT '0',
  PRIMARY KEY (`evnt_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_evnt` */

insert  into `tbl_evnt`(`evnt_id`,`evnt_tit`,`evnt_des`,`evnt_date`,`evnt_time`,`evnt_str`,`evnt_cty`,`evnt_pin_cod`,`evnt_coor_per`,`evnt_pic`,`evnt_appr`,`evnt_appr_time`,`evnt_appr_by`,`evnt_dis_appr_time`,`evnt_dis_appr_by`,`evnt_active`,`evnt_edit_time`,`evnt_add_by`,`evnt_add_time`,`evnt_assg_to_id`,`evnt_assg_to_name`,`evnt_assg_time`,`evnt_assg`,`evnt_noti`,`evnt_cnl`) values (1,'Self Defence','This event orgnized on 24/08/2018','2018-08-24','14:00:00','Gokhale Road','mumbai','426633','1,2','no_image.png',0,NULL,NULL,NULL,NULL,0,NULL,1,'2018-08-23 15:40:47',NULL,'',NULL,0,NULL,0),(2,'Self Defence','This event orgnized on 24/08/2018','2018-08-24','12:51:00','Gokhale Road','mumbai','402233','1,2','1535019384_Untitled-3-01.png',0,NULL,NULL,NULL,NULL,0,NULL,1,'2018-08-23 15:46:44',NULL,'',NULL,0,NULL,0),(3,'Aarogy Shibir','This progrm is orgnized on 24/08/2018','2018-08-25','14:00:00','Sangharsh Nagar','Mubmai','400263','1,2','1535019766_Untitled-3-01.png',0,NULL,NULL,NULL,NULL,0,NULL,1,'2018-08-23 15:54:06',NULL,'',NULL,0,NULL,0),(4,'Aarogy Shibir','This progrm is orgnized on 24/08/2018','2018-08-25','14:00:00','Sangharsh Nagar','Mubmai','425636','1,2','no_image.png',0,NULL,NULL,NULL,NULL,0,NULL,1,'2018-08-23 16:17:56',NULL,'',NULL,0,NULL,0),(5,'Aarogy Shibir','This progrm is orgnized on 24/08/2018','2018-08-25','14:00:00','Sangharsh Nagar','Mubmai','425636','1,2','no_image.png',0,NULL,NULL,NULL,NULL,0,NULL,1,'2018-08-23 16:20:02',NULL,'',NULL,0,NULL,0),(6,'Aarogy Shibir','This progrm is orgnized on 24/08/2018','2018-08-25','14:00:00','Sangharsh Nagar','Mubmai','425636','1,2','no_image.png',0,NULL,NULL,NULL,NULL,0,NULL,1,'2018-08-23 16:20:02',NULL,'',NULL,0,NULL,0),(7,'Aarogy Shibir','This progrm is orgnized on 24/08/2018','2018-08-25','14:00:00','Sangharsh Nagar','Mubmai','425636','1,2','no_image.png',0,NULL,NULL,NULL,NULL,0,NULL,1,'2018-08-23 16:20:03',NULL,'',NULL,0,NULL,0),(8,'Aarogy Shibir','This progrm is orgnized on 24/08/2018','2018-08-25','14:00:00','Sangharsh Nagar','Mubmai','425636','1,2','no_image.png',0,NULL,NULL,NULL,NULL,0,NULL,1,'2018-08-23 16:20:03',NULL,'',NULL,0,NULL,0),(9,'Aarogy Shibir','This progrm is orgnized on 24/08/2018','2018-08-25','14:00:00','Sangharsh Nagar','Mubmai','425636','1,2','no_image.png',0,NULL,NULL,NULL,NULL,0,NULL,1,'2018-08-23 16:20:03',NULL,'',NULL,0,NULL,0),(10,'Aarogy Shibir','This progrm is orgnized on 24/08/2018','2018-08-25','14:00:00','Sangharsh Nagar','Mubmai','425636','1,2','no_image.png',0,NULL,NULL,NULL,NULL,0,NULL,1,'2018-08-23 16:20:10',NULL,'',NULL,0,NULL,0),(11,'Aarogy Shibir','This progrm is orgnized on 24/08/2018','2018-08-25','14:00:00','Sangharsh Nagar','Mubmai','425636','1,2','no_image.png',0,NULL,NULL,NULL,NULL,0,NULL,1,'2018-08-23 16:21:23',NULL,'',NULL,0,NULL,0);

/*Table structure for table `tbl_master` */

DROP TABLE IF EXISTS `tbl_master`;

CREATE TABLE `tbl_master` (
  `app_title` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `app_meta_key` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `app_meta_des` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `app_favicon` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `app_logo` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `app_head_name` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `app_head_email` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `app_head_m_no` decimal(10,0) DEFAULT NULL,
  `app_send_by` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_master` */

insert  into `tbl_master`(`app_title`,`app_meta_key`,`app_meta_des`,`app_favicon`,`app_logo`,`app_head_name`,`app_head_email`,`app_head_m_no`,`app_send_by`) values ('Shivsena Party Management','Shivsena,Yuvasena','Shivsena Program Management Application','favicon.ico','logo.png','Aaditya Thackeray','akshatapawar129gmail.com','8652598488','ShivSena Digital Media Team');

/*Table structure for table `tbl_member` */

DROP TABLE IF EXISTS `tbl_member`;

CREATE TABLE `tbl_member` (
  `mem_id` int(11) NOT NULL AUTO_INCREMENT,
  `mem_f_nm` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mem_desn` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mem_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mem_m_no` decimal(10,0) DEFAULT NULL,
  `mem_wp_no` decimal(10,0) DEFAULT NULL,
  `mem_dis` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mem_tah` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mem_str` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mem_cty` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mem_ps_cd` decimal(10,0) DEFAULT NULL,
  `mem_gen` int(11) DEFAULT NULL,
  `mem_dob` date DEFAULT NULL,
  `mem_fb_lk` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mem_tw_lk` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mem_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mem_srt_info` longtext COLLATE utf8_unicode_ci,
  `mem_grp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mem_active` int(11) DEFAULT '0',
  PRIMARY KEY (`mem_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

/*Data for the table `tbl_member` */

insert  into `tbl_member`(`mem_id`,`mem_f_nm`,`mem_desn`,`mem_email`,`mem_m_no`,`mem_wp_no`,`mem_dis`,`mem_tah`,`mem_str`,`mem_cty`,`mem_ps_cd`,`mem_gen`,`mem_dob`,`mem_fb_lk`,`mem_tw_lk`,`mem_img`,`mem_srt_info`,`mem_grp`,`mem_active`) values (1,'Akshata Pawar','web developer','akshatapawar129@gmail.com','8652598488','8652598487','mumbai suburban','kurla','sangharsh nagar','mumbai','402563',2,'2018-08-15','https://www.facebook.com/ThaneVartaNews/','https://twitter.com/akshatapawar129','1534761393_16 AUGSCORE BOARD.jpg','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.','1,2',0),(2,'nitin bherale','web designer','nitinbherale@gmail.com','8652598488','8652598488','Thane','Thane','Gokhale Road','Thane','402365',1,'2018-01-10','','',NULL,'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.','',0);

/*Table structure for table `tbl_sms` */

DROP TABLE IF EXISTS `tbl_sms`;

CREATE TABLE `tbl_sms` (
  `sms_id` int(11) NOT NULL AUTO_INCREMENT,
  `sms_sender_id` int(11) DEFAULT NULL,
  `sms_sender_usnm` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sms_rece_id` int(11) DEFAULT NULL,
  `sms_rece_mn` decimal(10,0) DEFAULT NULL,
  `sms_sent_time` datetime DEFAULT NULL,
  `sms_content` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`sms_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_sms` */

insert  into `tbl_sms`(`sms_id`,`sms_sender_id`,`sms_sender_usnm`,`sms_rece_id`,`sms_rece_mn`,`sms_sent_time`,`sms_content`) values (1,1,'akshata',2,'8652598488','2018-08-21 13:26:55',NULL),(2,1,'akshata',2,'8652598488','2018-08-21 13:30:03','This is my message\r\n\nShivSena Digital Media Team'),(3,1,'akshata',2,'8652598488','2018-08-21 13:32:39','This is my program\nShivSena Digital Media Team'),(4,1,'akshata',2,'8652598488','2018-08-23 16:06:07','THis is my message\nShivSena Digital Media Team');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
