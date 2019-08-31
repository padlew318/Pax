-- MySQL dump 10.13  Distrib 5.5.36, for Linux (x86_64)
--
-- Host: web80.extendcp.co.uk    Database: web80-paxplace
-- ------------------------------------------------------
-- Server version	5.5.33

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
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `image_id` int(255) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `thumb_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `page_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `image_title` varchar(255) COLLATE utf8_bin NOT NULL,
  `sortOrder` varchar(255) COLLATE utf8_bin NOT NULL,
  `imgGroup` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=MyISAM AUTO_INCREMENT=123 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (2,'image_1341265096.jpg','thumb_1341265096.jpg','Gallery','Kitchen','01','Pax'),(57,'image_1341762003.jpg','thumb_1341762003.jpg','Gallery','','99',''),(5,'image_1341601737.jpg','thumb_1341601737.jpg','Gallery','Harbour View','2','Portloe'),(6,'image_1341601898.jpg','thumb_1341601898.jpg','Gallery','Shower','2',''),(7,'image_1341616018.jpg','thumb_1341616018.jpg','Gallery','Shells','5',''),(8,'image_1341616150.jpg','thumb_1341616150.jpg','Gallery','Portloe','3','Portloe'),(60,'image_1341762070.jpg','thumb_1341762070.jpg','Gallery','','2','Portloe'),(12,'image_1341648988.jpg','thumb_1341648988.jpg','Gallery','Bathroom','99','Pax'),(21,'image_1341739439.jpg','thumb_1341739439.jpg','Gallery','','',''),(112,'image_1395349811.jpg','thumb_1395349811.jpg','Gallery','','01','Pax'),(17,'image_1341682780.jpg','thumb_1341682780.jpg','Gallery','','',''),(48,'image_1341741587.jpg','thumb_1341741587.jpg','Gallery','','','Other'),(18,'image_1341683670.jpg','thumb_1341683670.jpg','Gallery','','2','Portloe'),(19,'image_1341684358.jpg','thumb_1341684358.jpg','Gallery','','1',''),(20,'image_1341738850.jpg','thumb_1341738850.jpg','Gallery','','','Other'),(68,'image_1342133388.jpg','thumb_1342133388.jpg','Gallery','','','Other'),(67,'image_1342133295.jpg','thumb_1342133295.jpg','Gallery','','','Other'),(66,'image_1342133239.jpg','thumb_1342133239.jpg','Gallery','','','Other'),(65,'image_1342133080.jpg','thumb_1342133080.jpg','Gallery','','','Other'),(61,'image_1341767855.jpg','thumb_1341767855.jpg','Gallery','','01',''),(113,'image_1395349857.jpg','thumb_1395349857.jpg','Gallery','','',''),(108,'image_1394275476.jpg','thumb_1394275476.jpg','Gallery','','05','Pax'),(62,'image_1341856342.jpg','thumb_1341856342.jpg','Gallery','The Ship Inn','6',''),(63,'image_1342132912.jpg','thumb_1342132912.jpg','Gallery','','','Other'),(56,'image_1341761979.jpg','thumb_1341761979.jpg','Gallery','','99',''),(37,'image_1341739784.jpg','thumb_1341739784.jpg','Gallery','','07','Pax'),(107,'image_1366055423.jpg','thumb_1366055423.jpg','Gallery','','01',''),(39,'image_1341739834.jpg','thumb_1341739834.jpg','Gallery','','06','Pax'),(40,'image_1341739853.jpg','thumb_1341739853.jpg','Gallery','','12','Pax'),(44,'image_1341741198.jpg','thumb_1341741198.jpg','Gallery','','2',''),(59,'image_1341762046.jpg','thumb_1341762046.jpg','Gallery','','8',''),(43,'image_1341739942.jpg','thumb_1341739942.jpg','Gallery','','',''),(47,'image_1341741424.jpg','thumb_1341741424.jpg','Gallery','','3','Portloe'),(64,'image_1342133022.jpg','thumb_1342133022.jpg','Gallery','','','Other'),(55,'image_1341761956.jpg','thumb_1341761956.jpg','Gallery','','2','Portloe'),(49,'image_1341741707.jpg','thumb_1341741707.jpg','Gallery','Sunset','2','Portloe'),(50,'image_1341741726.jpg','thumb_1341741726.jpg','Gallery','','2','Portloe'),(51,'image_1341741891.jpg','thumb_1341741891.jpg','Gallery','','','Other'),(53,'image_1341742312.jpg','thumb_1341742312.jpg','Gallery','','01','Pax'),(54,'image_1341742409.jpg','thumb_1341742409.jpg','Gallery','','','Other'),(58,'image_1341762028.jpg','thumb_1341762028.jpg','Gallery','','2','Portloe'),(96,'image_1342641502.jpg','thumb_1342641502.jpg','Gallery','','2',''),(69,'image_1342186998.jpg','thumb_1342186998.jpg','Gallery','','',''),(70,'image_1342251490.jpg','thumb_1342251490.jpg','Gallery','Kitchen','11',''),(71,'image_1342253305.jpg','thumb_1342253305.jpg','Gallery','Entrance','99',''),(72,'image_1342253704.jpg','thumb_1342253704.jpg','Gallery','','2','Portloe'),(73,'image_1342254306.jpg','thumb_1342254306.jpg','Gallery','','99',''),(74,'image_1342254608.jpg','thumb_1342254608.jpg','Gallery','','2','Portloe'),(75,'image_1342254785.jpg','thumb_1342254785.jpg','Gallery','','99',''),(76,'image_1342254880.jpg','thumb_1342254880.jpg','Gallery','','2','Portloe'),(77,'image_1342260591.jpg','thumb_1342260591.jpg','Gallery','','99',''),(78,'image_1342260650.jpg','thumb_1342260650.jpg','Gallery','','99',''),(79,'image_1342260694.jpg','thumb_1342260694.jpg','Gallery','','',''),(80,'image_1342260991.jpg','thumb_1342260991.jpg','Gallery','','2','Portloe'),(81,'image_1342279310.jpg','thumb_1342279310.jpg','Gallery','','',''),(82,'image_1342279332.jpg','thumb_1342279332.jpg','Gallery','','99',''),(83,'image_1342280679.jpg','thumb_1342280679.jpg','Gallery','','7','Portloe'),(84,'image_1342280712.jpg','thumb_1342280712.jpg','Gallery','','001','Portloe'),(85,'image_1342280736.jpg','thumb_1342280736.jpg','Gallery','','002','Portloe'),(86,'image_1342280751.jpg','thumb_1342280751.jpg','Gallery','','003','Portloe'),(87,'image_1342280769.jpg','thumb_1342280769.jpg','Gallery','004','004','Portloe'),(88,'image_1342280791.jpg','thumb_1342280791.jpg','Gallery','','005','Portloe'),(89,'image_1342280813.jpg','thumb_1342280813.jpg','Gallery','Car park sign','006','Portloe'),(90,'image_1342280834.jpg','thumb_1342280834.jpg','Gallery','Car park','007','Portloe'),(91,'image_1342280851.jpg','thumb_1342280851.jpg','Gallery','','6','Portloe'),(92,'image_1342280872.jpg','thumb_1342280872.jpg','Gallery','','008','Portloe'),(93,'image_1342280889.jpg','thumb_1342280889.jpg','Gallery','','2','Portloe'),(95,'image_1342280923.jpg','thumb_1342280923.jpg','Gallery','','6','Portloe'),(97,'image_1342737944.jpg','thumb_1342737944.jpg','Gallery','','',''),(98,'image_1342737979.jpg','thumb_1342737979.jpg','Gallery','','5','Portloe'),(99,'image_1342738350.jpg','thumb_1342738350.jpg','Gallery','','','Other'),(100,'image_1342738456.jpg','thumb_1342738456.jpg','Gallery','','','Other'),(101,'image_1342738758.jpg','thumb_1342738758.jpg','Gallery','','',''),(102,'image_1342738930.jpg','thumb_1342738930.jpg','Gallery','','','Other'),(105,'image_1342794329.jpg','thumb_1342794329.jpg','Gallery','','','Other'),(104,'image_1342794177.jpg','thumb_1342794177.jpg','Gallery','','','Other'),(111,'image_1395349184.jpg','thumb_1395349184.jpg','Gallery','','04','Pax'),(109,'image_1394275564.jpg','thumb_1394275564.jpg','Gallery','','',''),(110,'image_1394275617.jpg','thumb_1394275617.jpg','Gallery','','','Portloe'),(114,'image_1395349950.jpg','thumb_1395349950.jpg','Gallery','','',''),(115,'image_1395350009.jpg','thumb_1395350009.jpg','Gallery','','',''),(116,'image_1395350249.jpg','thumb_1395350249.jpg','Gallery','','02',''),(117,'image_1395350296.jpg','thumb_1395350296.jpg','Gallery','','',''),(118,'image_1395534765.jpg','thumb_1395534765.jpg','Gallery','','',''),(119,'image_1395534896.jpg','thumb_1395534896.jpg','Gallery','','',''),(120,'image_1395534944.jpg','thumb_1395534944.jpg','Gallery','','03','Pax'),(121,'image_1395534972.jpg','thumb_1395534972.jpg','Gallery','','02','Pax'),(122,'image_1402224243.jpg','thumb_1402224243.jpg','Gallery','','','Pax');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varbinary(65) NOT NULL DEFAULT '',
  `password` varbinary(65) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=binary;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES (1,'padlew318','fogdog33');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prices`
--

DROP TABLE IF EXISTS `prices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prices` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `yr` int(4) NOT NULL,
  `fromDate` text COLLATE utf8_bin NOT NULL,
  `toDate` text COLLATE utf8_bin NOT NULL,
  `price` int(4) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prices`
--

LOCK TABLES `prices` WRITE;
/*!40000 ALTER TABLE `prices` DISABLE KEYS */;
INSERT INTO `prices` VALUES (2,2013,'4 January','5 April',334,1),(3,2013,'5 April','17 May',434,1),(6,2013,'17 May','7 June',525,1),(9,2013,'7 June','16 August',434,1),(10,2013,'16 August','30 August',525,1),(11,2013,'30 August','13 December',434,1),(12,2013,'13 December','3 January 2014',525,1),(13,2014,'3rd January','4th April',334,0),(14,2014,'4th April','16th May',434,0),(15,2014,'16th May','6th June',525,0),(16,2014,'6th June','15th August',434,0),(17,2014,'15th August','29th August',525,0),(18,2014,'29th August','19th December',434,0),(19,2014,'19th December','9th January 2015',525,0);
/*!40000 ALTER TABLE `prices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'web80-paxplace'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-09-14 11:34:32
