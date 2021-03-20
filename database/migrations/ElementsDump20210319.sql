-- MySQL dump 10.13  Distrib 5.7.33, for Linux (x86_64)
--
-- Host: localhost    Database: elements
-- ------------------------------------------------------
-- Server version	5.7.33-0ubuntu0.18.04.1

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
-- Table structure for table `chats`
--

DROP TABLE IF EXISTS `chats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chats` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(20) DEFAULT NULL,
  `ref_id` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `chat_channel` text COLLATE utf8mb4_unicode_ci,
  `chat_bot` text COLLATE utf8mb4_unicode_ci,
  `chat_username_color` text COLLATE utf8mb4_unicode_ci,
  `chat_use_twitch_colors` text COLLATE utf8mb4_unicode_ci,
  `chat_msg_color` text COLLATE utf8mb4_unicode_ci,
  `chat_bg_color` text COLLATE utf8mb4_unicode_ci,
  `chat_max_cnt` int(11) DEFAULT NULL,
  `chat_refresh` int(11) DEFAULT NULL,
  `chat_transparency` text COLLATE utf8mb4_unicode_ci,
  `chat_template` text COLLATE utf8mb4_unicode_ci,
  `chat_scene` text COLLATE utf8mb4_unicode_ci,
  `chat_transition` text COLLATE utf8mb4_unicode_ci,
  `chat_show_emotes` text COLLATE utf8mb4_unicode_ci,
  `chat_show_badges` text COLLATE utf8mb4_unicode_ci,
  `chat_bg_image` text COLLATE utf8mb4_unicode_ci,
  `chat_username_font` text COLLATE utf8mb4_unicode_ci,
  `chat_msg_font` text COLLATE utf8mb4_unicode_ci,
  `chat_msg_font_size` text COLLATE utf8mb4_unicode_ci,
  `chat_username_font_size` text COLLATE utf8mb4_unicode_ci,
  `chat_title` text COLLATE utf8mb4_unicode_ci,
  `chat_title_color` text COLLATE utf8mb4_unicode_ci,
  `chat_title_bg` text COLLATE utf8mb4_unicode_ci,
  `chat_title_font` text COLLATE utf8mb4_unicode_ci,
  `chat_title_font_size` text COLLATE utf8mb4_unicode_ci,
  `chat_text_shadow` text COLLATE utf8mb4_unicode_ci,
  `chat_text_shadow_color` text COLLATE utf8mb4_unicode_ci,
  `chat_title_text_shadow_color` text COLLATE utf8mb4_unicode_ci,
  `chat_title_text_shadow` text COLLATE utf8mb4_unicode_ci,
  `chat_template_gradient_start` text COLLATE utf8mb4_unicode_ci,
  `chat_template_gradient_end` text COLLATE utf8mb4_unicode_ci,
  `chat_template_gradient_transparency` text COLLATE utf8mb4_unicode_ci,
  `chat_background_gradient_start` text COLLATE utf8mb4_unicode_ci,
  `chat_background_gradient_end` text COLLATE utf8mb4_unicode_ci,
  `chat_template_gradient_position` text COLLATE utf8mb4_unicode_ci,
  `chat_background_gradient_position` text COLLATE utf8mb4_unicode_ci,
  `chat_msg_twitch_colors` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `fonts`
--

DROP TABLE IF EXISTS `fonts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fonts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `font` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `fonts_id_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fonts`
--

LOCK TABLES `fonts` WRITE;
/*!40000 ALTER TABLE `fonts` DISABLE KEYS */;
INSERT INTO `fonts` VALUES (1,'Amaranth'),(2,'Asap'),(3,'Audiowide'),(4,'Bangers'),(5,'Barrio'),(6,'Basic'),(7,'Black Ops One'),(8,'Butcherman'),(9,'Cinzel Decorative'),(10,'Dokdo'),(11,'Eater'),(12,'Emblema One'),(13,'Faster One'),(14,'Fontdiner Swanky'),(15,'Frijole'),(16,'Gorditas'),(17,'Luckiest Guy'),(19,'Metal Mania'),(20,'New Rocker'),(21,'Nosifer'),(22,'Notable'),(23,'Passion One'),(24,'Permanent Marker'),(25,'Press Start 2P'),(26,'Rammetto One'),(27,'Stalinist One'),(28,'Ultra'),(29,'VT323'),(30,'Wendy One'),(31,'ZCOOL KuaiLe');
/*!40000 ALTER TABLE `fonts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_09_02_235552_create_todos_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `positions`
--

DROP TABLE IF EXISTS `positions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `positions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `gradient_positions_id_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `positions`
--

LOCK TABLES `positions` WRITE;
/*!40000 ALTER TABLE `positions` DISABLE KEYS */;
INSERT INTO `positions` VALUES (1,'to top right'),(2,'to top left'),(3,'to bottom right'),(4,'to bottom left'),(5,'to top'),(6,'to bottom');
/*!40000 ALTER TABLE `positions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `templates`
--

DROP TABLE IF EXISTS `templates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `template` text NOT NULL,
  `ref_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `templates_id_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `templates`
--

LOCK TABLES `templates` WRITE;
/*!40000 ALTER TABLE `templates` DISABLE KEYS */;
INSERT INTO `templates` VALUES (2,'Gradient',2),(3,'IRC',3),(4,'Compact',4);
/*!40000 ALTER TABLE `templates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transitions`
--

DROP TABLE IF EXISTS `transitions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transitions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transition` text,
  `ref_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `transitions_id_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transitions`
--

LOCK TABLES `transitions` WRITE;
/*!40000 ALTER TABLE `transitions` DISABLE KEYS */;
INSERT INTO `transitions` VALUES (1,'fade-in',2),(4,'slide-in',3),(5,'shake',4),(6,'flipX',5),(7,'flipY',6);
/*!40000 ALTER TABLE `transitions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transparencies`
--

DROP TABLE IF EXISTS `transparencies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transparencies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `int_value` text,
  `hex_value` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `transparency_id_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transparencies`
--

LOCK TABLES `transparencies` WRITE;
/*!40000 ALTER TABLE `transparencies` DISABLE KEYS */;
INSERT INTO `transparencies` VALUES (1,'100','00'),(2,'95','0D'),(3,'90','1A'),(4,'85','26'),(5,'80','33'),(6,'75','40'),(7,'70','4D'),(8,'65','59'),(9,'60','66'),(10,'55','73'),(11,'50','80'),(12,'45','8C'),(13,'40','99'),(14,'35','A6'),(15,'30','B3'),(16,'25','BF'),(17,'20','CC'),(18,'15','D9'),(19,'10','E6'),(20,'5','F2'),(21,'0','FF');
/*!40000 ALTER TABLE `transparencies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;


/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-19 23:19:39
