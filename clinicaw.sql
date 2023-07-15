-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: clinicaw
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Dumping data for table `cita`
--

LOCK TABLES `cita` WRITE;
/*!40000 ALTER TABLE `cita` DISABLE KEYS */;
INSERT INTO `cita` VALUES (1,'2023-07-17','17:00:00','operacion de corazón',1),(2,'2023-07-14','11:00:00','dolor de cabeza',15);
/*!40000 ALTER TABLE `cita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Pepe','Vasquez','pepesv@gmail.com','$2y$10$4qOs/T9y6uOJ6lsoiOc6U.0dI/Rfp43NcT..l/W5qbTHWepcxWjU6','Masculino',123456789,'administrador'),(2,'Juanita','Vergara','juanav@gmail.com','$2y$10$4qOs/T9y6uOJ6lsoiOc6U.0dI/Rfp43NcT..l/W5qbTHWepcxWjU6','Femenino',987654321,'recepcionista'),(3,'Rodolfo','Gonzales','rodog@gmail.com','$2y$10$4qOs/T9y6uOJ6lsoiOc6U.0dI/Rfp43NcT..l/W5qbTHWepcxWjU6','Masculino',999888777,'medico'),(4,'Jenny','Ortega','jenny@gmail.com','$2y$10$4qOs/T9y6uOJ6lsoiOc6U.0dI/Rfp43NcT..l/W5qbTHWepcxWjU6','Femenino',999777555,'administrador'),(13,'David','Trinidad','david@gmail.com','$2y$10$JTm3sU3PRF85Hqyp3bVYl.9cVfWoA.JbNKB7PrQH4n3PyhfuJZQU6','Masculino',976107903,'cliente'),(14,'Dora','Trinidad','dora@gmail.com','$2y$10$nCD.8NKJj1JQUorA/DP/8epwflNIi70Mzk716BI4hkNS5fO55fimK','Femenino',976107903,'cliente'),(15,'joel','ramos','joel@gmail.com','$2y$10$nUiH99yFEgtrXnEwXrDhheRSKbbmovM0/CbiSKFj90Ut4WNa/rENS','Masculino',985623654,'cliente'),(23,'David','Trinidad','david@gmail.com','$2y$10$9Wuz4UVOdDHavG3wpRWf6.O25MuPFsxOM1i9QQGlBJ3bqDtY0srf2','Masculino',976107903,''),(30,'Jose','Gonzales','jgon@gmail.com','$2y$10$wLB5AQeNpGBvPwG61siSS.zmY7MJS1zhTnoEyazEeejTkUN2zgUGS','Masculino',999777444,'administrador');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-07-14 18:21:40
