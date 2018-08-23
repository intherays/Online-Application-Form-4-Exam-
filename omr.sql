/*
SQLyog - Free MySQL GUI v5.02
Host - 5.5.5-10.1.31-MariaDB : Database - omr
*********************************************************************
Server version : 5.5.5-10.1.31-MariaDB
*/


create database if not exists `omr`;

USE `omr`;

/*Table structure for table `examfrm` */

DROP TABLE IF EXISTS `examfrm`;

CREATE TABLE `examfrm` (
  `name` varchar(30) DEFAULT NULL,
  `father` varchar(30) DEFAULT NULL,
  `reg_num` varchar(12) NOT NULL,
  `gender` char(7) DEFAULT NULL,
  `college` varchar(30) DEFAULT NULL,
  `coll_code` varchar(5) DEFAULT NULL,
  `dept` varchar(30) DEFAULT NULL,
  `dept_code` varchar(5) DEFAULT NULL,
  `course` varchar(20) DEFAULT NULL,
  `medium` char(10) DEFAULT NULL,
  `fee` int(5) DEFAULT NULL,
  `catagory` varchar(5) DEFAULT NULL,
  `photo` longblob,
  `thumb` mediumblob,
  PRIMARY KEY (`reg_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `reg_num` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`reg_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `register` */

DROP TABLE IF EXISTS `register`;

CREATE TABLE `register` (
  `reg_num` varchar(12) NOT NULL,
  `college_name` varchar(30) DEFAULT NULL,
  `student_name` varchar(30) DEFAULT NULL,
  `gender` char(7) DEFAULT NULL,
  `std_father` varchar(30) DEFAULT NULL,
  `mobile` decimal(12,0) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `pincode` decimal(8,0) DEFAULT NULL,
  `password` varchar(30) NOT NULL,
  `colcode` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`reg_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `subject` */

DROP TABLE IF EXISTS `subject`;

CREATE TABLE `subject` (
  `reg_num` varchar(12) NOT NULL,
  `sm1` varchar(2) DEFAULT NULL,
  `sub1` varchar(30) DEFAULT NULL,
  `code1` varchar(6) DEFAULT NULL,
  `sm2` varchar(2) DEFAULT NULL,
  `sub2` varchar(30) DEFAULT NULL,
  `code2` varchar(6) DEFAULT NULL,
  `sm3` varchar(2) DEFAULT NULL,
  `sub3` varchar(30) DEFAULT NULL,
  `code3` varchar(6) DEFAULT NULL,
  `sm4` varchar(2) DEFAULT NULL,
  `sub4` varchar(30) DEFAULT NULL,
  `code4` varchar(6) DEFAULT NULL,
  `sm5` varchar(2) DEFAULT NULL,
  `sub5` varchar(30) DEFAULT NULL,
  `code5` varchar(6) DEFAULT NULL,
  `sm6` varchar(2) DEFAULT NULL,
  `sub6` varchar(30) DEFAULT NULL,
  `code6` varchar(6) DEFAULT NULL,
  `sm7` varchar(2) DEFAULT NULL,
  `sub7` varchar(30) DEFAULT NULL,
  `code7` varchar(6) DEFAULT NULL,
  `sm8` varchar(2) DEFAULT NULL,
  `sub8` varchar(30) DEFAULT NULL,
  `code8` varchar(6) DEFAULT NULL,
  `sm9` varchar(2) DEFAULT NULL,
  `sub9` varchar(30) DEFAULT NULL,
  `code9` varchar(6) DEFAULT NULL,
  `sm10` varchar(2) DEFAULT NULL,
  `sub10` varchar(30) DEFAULT NULL,
  `code10` varchar(6) DEFAULT NULL,
  `sm11` varchar(2) DEFAULT NULL,
  `sub11` varchar(30) DEFAULT NULL,
  `code11` varchar(6) DEFAULT NULL,
  `sm12` varchar(2) DEFAULT NULL,
  `sub12` varchar(30) DEFAULT NULL,
  `code12` varchar(6) DEFAULT NULL,
  `sm13` varchar(2) DEFAULT NULL,
  `sub13` varchar(30) DEFAULT NULL,
  `code13` varchar(6) DEFAULT NULL,
  `sm14` varchar(2) DEFAULT NULL,
  `sub14` varchar(30) DEFAULT NULL,
  `code14` varchar(6) DEFAULT NULL,
  `sm15` varchar(2) DEFAULT NULL,
  `sub15` varchar(30) DEFAULT NULL,
  `code15` varchar(6) DEFAULT NULL,
  `sm16` varchar(2) DEFAULT NULL,
  `sub16` varchar(30) DEFAULT NULL,
  `code16` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`reg_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
