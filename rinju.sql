-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `admin` (`id`, `name`, `address`, `username`, `password`) VALUES
(1,	'test',	'994 Martine Ranch Suite 900',	'admin',	'admin');

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `studentid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `rollnumber` int(11) NOT NULL,
  `class` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  PRIMARY KEY (`studentid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `students` (`studentid`, `name`, `rollnumber`, `class`, `address`, `phone`, `gender`) VALUES
(2,	'test',	1,	'2 A',	'  994 Martine Ranch Suite 900                                                                                        ',	'07799807568',	'Female'),
(6,	'ascas',	22,	'e2e',	'KOOTTARAPPALLIL HOUSE,  ANGADIKADAVU POST OFFICE,  IRITTY,  KANNUR,  KERALA, PIN 670706',	'08867306167',	'Male');

DROP TABLE IF EXISTS `students_table_header`;
CREATE TABLE `students_table_header` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `heading` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `students_table_header` (`id`, `heading`) VALUES
(1,	'Sl No.'),
(2,	'Name'),
(3,	'Roll Number'),
(4,	'Class'),
(5,	'Address'),
(6,	'Phone'),
(7,	'Gender'),
(8,	'Action');

DROP TABLE IF EXISTS `tableheaders`;
CREATE TABLE `tableheaders` (
  `id` int(11) NOT NULL,
  `tablename` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `tableheaders` (`id`, `tablename`) VALUES
(1,	'Student table'),
(2,	'Admin Table');

-- 2020-10-12 14:26:56
