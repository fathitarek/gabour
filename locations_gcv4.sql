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
-- Table structure for table `location_items`
--

DROP TABLE IF EXISTS `location_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `location_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name_ar` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lat` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `long` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address_ar` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `website_id` int(10) unsigned NOT NULL,
  `location_category_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `city_id` int(10) NOT NULL,
  `published` tinyint(4) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `location_items`
--

LOCK TABLES `location_items` WRITE;
/*!40000 ALTER TABLE `location_items` DISABLE KEYS */;
INSERT INTO `location_items` VALUES (1,'one','334567','30.0444196','31.23571160000006','','','','','','0000-00-00 00:00:00','2017-06-11 09:50:01',1,2,3,1,1,NULL),(4,'service1','newww','31.037933','31.381523','42st abd el rhman nasr','عبد الرحمن نصر','445454545','666666','admin@admin.com','2017-04-27 06:45:38','2017-06-11 10:40:20',1,2,3,1,1,NULL),(7,'G 1','الخدمه اﻻولى','31.205753','29.924526','italy','عبد الرحمن نصر 40','4344334334','3333','ftarek@fcih1.com','2017-04-27 07:06:41','2017-06-11 11:03:32',1,2,3,1,1,NULL),(83,'g2','g2','0.0389674','31.2416671','','','','','','2017-06-11 09:26:30','2017-06-11 09:31:12',1,2,3,1,1,NULL),(85,'CAIRO','CAIRO','30.0444196','31.23571160000006','42st abd el rhman nasr','عبد الرحمن نصر','123456789','666666','fathi.tarek@mortimerharvey.com','2017-08-08 14:42:56','2017-08-08 14:42:56',1,2,3,1,1,NULL),(86,'Volvo location','Volvo location','30.0444196','31.23571160000006','42st abd el rhman nasr','عبد الرحمن نصر 40','4344334334','666666','fathi.tarek@mortimerharvey.com','2017-08-08 14:50:37','2017-08-08 14:50:37',1,2,3,1,1,NULL),(87,'Volvo location','Volvo location','30.0444196','31.23571160000006','42st abd el rhman nasr','عبد الرحمن نصر','4344334334','666666','fathi.tarek@mortimerharvey.com','2017-08-08 14:57:02','2017-08-08 14:57:02',2,2,3,1,1,NULL),(88,'Merghem','مرغم','29.7853391','31.0293889','Cairo–Alexandria desert road- before Merghem bridge','طريق مصر - اسكندرية الصحراوى - قبل كوبرى مرغم','16216',' ',' ','2017-08-30 16:20:15','2017-08-30 17:18:18',3,3,2,9,1,NULL),(89,'Amriyah','العامرية','0','0','Kilo 29/28, Cairo Alex Desert Road, Al Amiryah infront of the Free Zone','ك 28/29، طريق مصر اسكندرية الصحراوى، العامرية امام المنطقة الحرة','16216','16216','','2017-08-30 16:43:38','2017-08-30 17:21:03',3,2,2,10,1,NULL),(90,'Amriyah','العامرية','  0','  0','Kilo 29/28, Cairo Alex Desert Road, Al Amiryah infront of the Free Zone','ك 28/29، طريق مصر اسكندرية الصحراوى، العامرية امام المنطقة الحرة','16216','','','2017-08-30 16:44:25','2017-08-30 17:21:10',3,3,2,10,1,NULL),(91,'Amriyah','العامرية','  0','  0','Kilo 29/28, Cairo Alex Desert Road, Al Amiryah infront of the Free Zone','ك 28/29، طريق مصر اسكندرية الصحراوى، العامرية امام المنطقة الحرة','16216','','','2017-08-30 16:44:56','2017-08-30 17:21:17',3,4,2,10,1,NULL),(92,'Sharm El Sheikh','شرم الشيخ','34.2787835','27.9008904','Sharm el Sheikh : Al-Rouissat -Industrial Zone','الرويسات –المنطقة الصناعية','16216','','','2017-08-30 16:46:08','2017-08-30 17:21:23',3,3,2,11,1,NULL),(93,'Sharm El Sheikh','شرم الشيخ','34.2787835','27.9008904','Sharm el Sheikh : Al-Rouissat -Industrial Zone','الرويسات –المنطقة الصناعية','16216','','','2017-08-30 16:46:32','2017-08-30 17:21:38',3,4,2,11,1,NULL),(94,'Hurghada','الغردقة','33.7968391','27.2183611','Hurghada : Industrial Zone- El Herafyeen- next to Al-Asdiqa’ flour mill','المنطقة الصناعية – الحرفين – بجوار مطحن الأصدقاء طريق المطار المدني','16216','','','2017-08-30 16:47:33','2017-08-30 17:21:44',3,3,2,12,1,NULL),(95,'Hurghada','الغردقة','33.7968391','27.2183611','Hurghada : Industrial Zone- El Herafyeen- next to Al-Asdiqa’ flour mill','المنطقة الصناعية – الحرفين – بجوار مطحن الأصدقاء طريق المطار المدني','16216','','','2017-08-30 16:48:06','2017-08-30 17:21:51',3,4,2,12,1,NULL),(96,'Assiut','أسيوط','31.0475891','27.1863174','West road, Airport road infront of the Armed Forces Farms beside Mansour Chevrolet','اسيوط  : الطريق الغربى طريق المطار امام مزارع القوات المسلحه بجوار منصور شيفروليه','16216','','','2017-08-30 16:57:48','2017-08-30 17:22:01',3,2,2,13,1,NULL),(97,'Assiut','أسيوط','31.0475891','27.1863174','West road, Airport road infront of the Armed Forces Farms beside Mansour Chevrolet','اسيوط  : الطريق الغربى طريق المطار امام مزارع القوات المسلحه بجوار منصور شيفروليه','16216','','','2017-08-30 16:57:52','2017-08-30 17:22:17',3,3,2,13,1,NULL),(98,'Assiut','أسيوط','31.0475891','27.1863174','West road, Airport road infront of the Armed Forces Farms beside Mansour Chevrolet','اسيوط  : الطريق الغربى طريق المطار امام مزارع القوات المسلحه بجوار منصور شيفروليه','16216','','','2017-08-30 16:57:55','2017-08-30 17:22:26',3,4,2,13,1,NULL),(99,'Qaliuob K3','قليوب كيلو 3','31.2269899','30.1516269','Kilo 3 Qaluib, Cairo Alex Agriculture road','ك3 طريق مصر إسكندرية الزراعي','16216','','','2017-08-30 17:00:50','2017-08-30 17:22:34',3,2,2,14,1,NULL),(100,'Qaliuob K3','قليوب كيلو 3','31.2269899','30.1516269','Kilo 3 Qaluib, Cairo Alex Agriculture road','ك3 طريق مصر إسكندرية الزراعي','16216','','','2017-08-30 17:01:04','2017-08-30 17:22:43',3,3,2,14,1,NULL),(101,'Sohag','سوهاج','31.6604502','26.5919444','Kilo 94 Suhag Assiut agriculture road next to Al-Sha`rana bridge, Al-Hamadeya village','الكيلو ٩٤ طريق سوهاج اسيوط الزراعى، الحماديه، كوبرى الشعارنه','16216','','','2017-08-30 17:02:36','2017-08-30 17:22:57',3,2,2,15,1,NULL),(102,'Sohag','سوهاج','31.6604502','26.5919444','Kilo 94 Suhag Assiut agriculture road next to Al-Sha`rana bridge, Al-Hamadeya village','الكيلو ٩٤ طريق سوهاج اسيوط الزراعى، الحماديه، كوبرى الشعارنه','16216','','','2017-08-30 17:02:42','2017-08-30 17:23:04',3,3,2,15,1,NULL),(103,'Sohag','سوهاج','31.6604502','26.5919444','Kilo 94 Suhag Assiut agriculture road next to Al-Sha`rana bridge, Al-Hamadeya village','الكيلو ٩٤ طريق سوهاج اسيوط الزراعى، الحماديه، كوبرى الشعارنه','16216','','','2017-08-30 17:02:46','2017-08-30 17:23:09',3,4,2,15,1,NULL),(104,'Abou Simbel','أبو سمبل','31.6096446','22.3502884','Touristic city, Ring Road, next to Al- Tatbiqyeen Hotel','أبو سمبل- المنطقة السياحية – بجوار فندق التطبيقيين','16216','','','2017-08-30 17:04:06','2017-08-30 17:23:17',3,3,2,16,1,NULL),(105,'Abou Simbel','أبو سمبل','31.6096446','22.3502884','Touristic city, Ring Road, next to Al- Tatbiqyeen Hotel','أبو سمبل- المنطقة السياحية – بجوار فندق التطبيقيين','16216','','','2017-08-30 17:04:14','2017-08-30 17:23:23',3,4,2,16,1,NULL),(106,'Qaliuob K16','قليوب كيلو 16','0','0','Kilo 16 Qaluib, Cairo Alex Agriculture road','ك16 طريق مصر إسكندرية الزراعي','16216','','','2017-08-30 17:07:51','2017-08-30 17:23:30',3,3,2,17,1,NULL),(107,'Qaliuob K16','قليوب كيلو 16','0','0','Kilo 16 Qaluib, Cairo Alex Agriculture road','ك16 طريق مصر إسكندرية الزراعي','16216','','','2017-08-30 17:07:57','2017-08-30 17:23:37',3,4,2,17,1,NULL),(108,'Damietta','دمياط','0','0','Area 94, New Damietta, Mubarak street, the Central area','قطعه 94، دمياط الجديدة، شارع مبارك، المنطقة المركزية ','16216','','','2017-08-30 17:09:06','2017-08-30 17:23:43',3,2,2,18,1,NULL),(109,'Suez','السويس','0','0','Kilo 9, Al Suez Al Adabia','الكيلو 9، السويس الآدابية','16216','','','2017-08-30 17:09:42','2017-08-30 17:23:48',3,2,2,19,1,NULL);
/*!40000 ALTER TABLE `location_items` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-06 15:13:02
