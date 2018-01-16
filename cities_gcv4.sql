-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: gcv_4
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1

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
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name_ar` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(10) unsigned NOT NULL,
  `website_id` int(10) NOT NULL,
  `published` tinyint(4) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cities`
--

LOCK TABLES `cities` WRITE;
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
INSERT INTO `cities` VALUES (1,'Cairo','القاهره','2017-04-25 20:00:00','0000-00-00 00:00:00',2,1,1,NULL),(3,'6th of  October','6 أكتوبر','2017-04-27 09:42:29','2017-08-30 17:47:01',5,3,0,NULL),(7,'Giza','الجيزه','2017-05-10 12:43:37','2017-07-30 16:37:34',3,1,1,NULL),(8,'volvocity','VolvoCity','2017-08-08 14:49:33','2017-08-08 14:49:33',3,2,1,NULL),(9,'Merghem','مرغم','2017-08-30 16:05:20','2017-08-30 16:05:20',2,3,1,NULL),(10,'Amriyah','العامرية','2017-08-30 16:05:34','2017-08-30 16:05:34',2,3,1,NULL),(11,'Sharm El Sheikh','شرم الشيخ','2017-08-30 16:05:47','2017-08-30 16:05:47',2,3,1,NULL),(12,'Hurghada','الغردقة','2017-08-30 16:06:01','2017-08-30 16:06:01',2,3,1,NULL),(13,'Assiut','أسيوط','2017-08-30 16:06:13','2017-08-30 16:06:13',2,3,1,NULL),(14,'Qaliuob K3','قليوب كيلو 3','2017-08-30 16:06:27','2017-08-30 16:06:27',2,3,1,NULL),(15,'Sohag','سوهاج','2017-08-30 16:06:38','2017-08-30 16:06:38',2,3,1,NULL),(16,'Abou Simbel','أبو سمبل','2017-08-30 16:06:56','2017-08-30 16:06:56',2,3,1,NULL),(17,'Qaliuob K16','قليوب كيلو 16','2017-08-30 16:07:12','2017-08-30 16:07:12',2,3,1,NULL),(18,'Damietta','دمياط','2017-08-30 16:07:24','2017-08-30 16:07:24',2,3,1,NULL),(19,'Suez','السويس','2017-08-30 16:07:36','2017-08-30 16:07:36',2,3,1,NULL);
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-06 15:15:27
