-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: shop_hw
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `brand` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(45) COLLATE utf8mb3_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brand`
--

LOCK TABLES `brand` WRITE;
/*!40000 ALTER TABLE `brand` DISABLE KEYS */;
INSERT INTO `brand` VALUES (1,'Mango'),(2,'Reebok'),(3,'Colin\'s');
/*!40000 ALTER TABLE `brand` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) COLLATE utf8mb3_bin NOT NULL,
  `discount` tinyint NOT NULL,
  `alter_name` varchar(45) COLLATE utf8mb3_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Женская одежда',5,'women clothes'),(2,'Женская обувь',0,'women shoes'),(3,'Мужская одежда',15,'man clothes'),(4,'Мужская обувь',10,'man shoes'),(5,'Головные уборы',0,'hats');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order` (
  `id` int NOT NULL,
  `username` varchar(45) COLLATE utf8mb3_bin NOT NULL,
  `phone` varchar(45) COLLATE utf8mb3_bin NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` VALUES (1,'Vasya','+70000000000','2030-10-20 22:00:00'),(2,'Petya','+7900000000','2030-10-20 22:00:00');
/*!40000 ALTER TABLE `order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_product`
--

DROP TABLE IF EXISTS `order_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order_product` (
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `count` int NOT NULL,
  PRIMARY KEY (`order_id`,`product_id`),
  KEY `fk_product_order_id_idx` (`product_id`),
  CONSTRAINT `fk_order_id` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`),
  CONSTRAINT `fk_product_order_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_product`
--

LOCK TABLES `order_product` WRITE;
/*!40000 ALTER TABLE `order_product` DISABLE KEYS */;
INSERT INTO `order_product` VALUES (1,1,3),(1,2,2),(2,2,4);
/*!40000 ALTER TABLE `order_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `brand_id` int NOT NULL,
  `product_type_id` int NOT NULL,
  `category_id` int NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img_path` varchar(45) COLLATE utf8mb3_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_brand_id_idx` (`brand_id`),
  KEY `fk_category_id_idx` (`category_id`),
  KEY `fk_good_type_id_idx` (`product_type_id`),
  KEY `price_index` (`price`),
  CONSTRAINT `fk_brand_id` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_good_type_id` FOREIGN KEY (`product_type_id`) REFERENCES `product_type` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=52029 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,1,1,3,1600.00,'/images/uploaded/product_1.jpg'),(2,1,2,3,2800.00,'images/product_2.jpg'),(3,1,2,3,1500.00,'images/product_3.jpg'),(4,1,3,3,2500.00,'images/product_4.jpg'),(5,1,7,3,6700.00,'images/product_5.jpg'),(6,1,8,1,2600.00,'images/product_6.jpg'),(7,1,9,3,9000.00,'images/product_7.jpg'),(8,1,2,3,11000.00,'images/product_8.jpg'),(9,1,3,3,3200.00,'images/product_9.jpg'),(10,3,3,1,50.00,'/images/uploaded/Product_4.jpg'),(11,1,2,3,2899.00,'images/product_2.jpg'),(12,1,2,3,2899.00,'images/product_2.jpg'),(13,1,2,3,2899.00,'images/product_2.jpg'),(14,1,2,3,2899.00,'images/product_2.jpg'),(15,1,2,3,2899.00,'images/product_2.jpg'),(16,1,2,3,2899.00,'images/product_2.jpg'),(17,1,2,3,2899.00,'images/product_2.jpg'),(18,1,2,3,2899.00,'images/product_2.jpg'),(19,1,2,3,2899.00,'images/product_2.jpg'),(20,1,2,3,2899.00,'images/product_2.jpg'),(21,1,2,3,2899.00,'images/product_2.jpg'),(22,1,2,3,2899.00,'images/product_2.jpg'),(23,1,2,3,2899.00,'images/product_2.jpg'),(24,1,2,3,2899.00,'images/product_2.jpg'),(25,1,2,3,2899.00,'images/product_2.jpg'),(26,1,2,3,2899.00,'images/product_2.jpg'),(27,1,2,3,2899.00,'images/product_2.jpg'),(28,1,2,3,2899.00,'images/product_2.jpg'),(29,1,2,3,2899.00,'images/product_2.jpg'),(30,1,2,3,2899.00,'images/product_2.jpg'),(31,1,2,3,2899.00,'images/product_2.jpg'),(32,1,2,3,2899.00,'images/product_2.jpg'),(33,1,2,3,2899.00,'images/product_2.jpg'),(34,1,2,3,2899.00,'images/product_2.jpg'),(35,1,2,3,2899.00,'images/product_2.jpg'),(36,1,2,3,2899.00,'images/product_2.jpg'),(37,1,2,3,2899.00,'images/product_2.jpg'),(38,1,2,3,2899.00,'images/product_2.jpg'),(39,1,2,3,2899.00,'images/product_2.jpg'),(40,1,2,3,2899.00,'images/product_2.jpg'),(41,1,2,3,2899.00,'images/product_2.jpg'),(42,1,2,3,2899.00,'images/product_2.jpg'),(43,1,2,3,2899.00,'images/product_2.jpg'),(44,1,2,3,2899.00,'images/product_2.jpg'),(45,1,2,3,2899.00,'images/product_2.jpg'),(46,1,2,3,2899.00,'images/product_2.jpg'),(47,1,2,3,2899.00,'images/product_2.jpg'),(48,1,2,3,2899.00,'images/product_2.jpg'),(49,1,2,3,2899.00,'images/product_2.jpg'),(50,1,2,3,2899.00,'images/product_2.jpg');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_type`
--

DROP TABLE IF EXISTS `product_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(45) COLLATE utf8mb3_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_type`
--

LOCK TABLES `product_type` WRITE;
/*!40000 ALTER TABLE `product_type` DISABLE KEYS */;
INSERT INTO `product_type` VALUES (1,'Плащ'),(2,'Куртка'),(3,'Футболка'),(7,'Худи'),(8,'Брюки'),(9,'Пиджак');
/*!40000 ALTER TABLE `product_type` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-06 13:42:09
