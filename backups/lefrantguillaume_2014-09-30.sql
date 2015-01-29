-- MySQL dump 10.13  Distrib 5.5.38, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: lefrantguillaume
-- ------------------------------------------------------
-- Server version	5.5.38-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `check_out`
--

DROP TABLE IF EXISTS `check_out`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `check_out` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `html` text NOT NULL,
  `contact_id` int(11) NOT NULL,
  `seen` int(10) unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `check_out`
--

LOCK TABLES `check_out` WRITE;
/*!40000 ALTER TABLE `check_out` DISABLE KEYS */;
INSERT INTO `check_out` VALUES (1,'Jade Massage','<p class=\"lead\">Are you stressed ? Do you need to relax ?</p>\r\n<p>If you are near to Paris, Jade can help you to relax with Fu Jing Tao massage. And guess what ? You haven\'t to move, she can do it at home.</p>',2,7,'2014-09-09 23:07:20'),(2,'Styve Simonneau<small> - Developer</small>','<p class=\"lead\">You need another developer ?</p>\r\n<p>Styve is here for you. You can check his website <a href=\"http://www.styve-simonneau.com\" target=\"_blank\">here</a>.</p>',3,6,'2014-09-12 12:28:00');
/*!40000 ALTER TABLE `check_out` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `contacted` int(11) NOT NULL DEFAULT '0',
  `color` varchar(20) NOT NULL DEFAULT 'black',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'Lefrant Guillaume','lefrantguillaume@gmail.com',73,'red'),(2,'Jade Vera Ortiz','jade.VO@hotmail.fr',0,'purple'),(3,'Styve Simonneau','styve.simonneau@epitech.eu',2,'#2694c3');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `experiences`
--

DROP TABLE IF EXISTS `experiences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `experiences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `begin_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `company` varchar(200) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `rating` tinyint(4) NOT NULL DEFAULT '0',
  `commentary` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `experiences`
--

LOCK TABLES `experiences` WRITE;
/*!40000 ALTER TABLE `experiences` DISABLE KEYS */;
INSERT INTO `experiences` VALUES (1,'2013-09-15','2013-12-20','SQLI Pessac','System and Network Technician, Network Administrator, Resource Manager.',7,'I evolved in a warm environment. Supported by my Internship Master, Frederic, I had the chance to touch a lot of technologies. Frederic offered me the challenge to realize their portal web page, for all the collaborators - Great Responsibility.  I worked in autonomy, and got assisted on new domains.\r\nFrom the Network into the server room to the Shell Scripting, I used a lot of tools and discovered a lot of things and notions  (Network Architecture to PHP frameworks and save scripts).\r\nDynamic, enthusiastic and friendly, this company was a good choice for a first internship.'),(2,'2014-06-02','2014-08-01','Silkke','Web and System Developer.',6,'This internship ran for 2 months by telework. I was with a school mate for these missions. The job was to extend the web site, design and develop an innovating application. This app uses a lot of components as 114 Sony cameras, a weight sensor, ... This was a good experience, I will continue it on October 2014 with a part-time. This internship was also good for my English comprehension, because we worked with people in different countries, such as Poland or Dubai (UAE). The hardest part was the communication between teams and synchronizing our progress, but we did it quite well. It was interesting and more professional than the first internship.');
/*!40000 ALTER TABLE `experiences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `golden_book`
--

DROP TABLE IF EXISTS `golden_book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `golden_book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(500) NOT NULL,
  `rating` int(11) NOT NULL,
  `commentary` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `golden_book`
--

LOCK TABLES `golden_book` WRITE;
/*!40000 ALTER TABLE `golden_book` DISABLE KEYS */;
INSERT INTO `golden_book` VALUES (1,'2014-09-14 02:24:44','LeNiglo',9,'This is my first commentary, it\'s just here for testing.\r\nThe rating is for real. I\'m proud of what I did !');
/*!40000 ALTER TABLE `golden_book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `osu_replays`
--

DROP TABLE IF EXISTS `osu_replays`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `osu_replays` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `link_replay` varchar(200) NOT NULL,
  `link_song` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `osu_replays`
--

LOCK TABLES `osu_replays` WRITE;
/*!40000 ALTER TABLE `osu_replays` DISABLE KEYS */;
/*!40000 ALTER TABLE `osu_replays` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: coding / 1: oss',
  `language` varchar(50) DEFAULT NULL,
  `level` int(3) NOT NULL,
  `thumbs` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skills`
--

LOCK TABLES `skills` WRITE;
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
INSERT INTO `skills` VALUES (1,0,'C',90,1),(2,0,'Algorithmy',80,1),(3,0,'C++',45,0),(4,0,'Python',45,0),(5,0,'Lua',55,0),(6,0,'.NET',0,0),(7,0,'Java',0,0),(8,0,'ASM',15,0),(9,0,'Shell Scripting',40,0),(10,0,'HTML5 / CSS3',75,0),(11,0,'PHP',80,1),(12,0,'JavaScript',60,0),(13,0,'JQuery',50,0),(14,0,'MySQL',60,0),(15,1,'Windows 7',90,0),(16,1,'Windows 8.1',80,0),(17,1,'Windows XP',65,0),(18,1,'Ubuntu / Debian',85,0),(19,1,'Linux',65,0),(20,1,'Android',70,0),(21,1,'Mac OS',30,0);
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` tinytext NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'leniglo','lefrantguillaume@gmail.com','eyJpdiI6IndDSDdKS2lyMDlVZlwvV3AzckhpTDZBPT0iLCJ2YWx1ZSI6IktwMUVsczdKeVFGSGxKMVV4Z1g4YUx0SmdlcllcL3hSSGNOWTNtcDU4dTk0PSIsIm1hYyI6IjRjMTZiMWEyYTkwMzI0N2UyYTVlMTc0ZmEwYWQ3OWNkM2RlYmE5YTcyYzZiYjQ4NjRhMTRkM2M3MDJmN2Q0OTkifQ==',1,'2014-09-29 16:12:40',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-09-30  8:06:54
