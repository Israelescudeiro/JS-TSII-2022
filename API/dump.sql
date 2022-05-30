-- MariaDB dump 10.19  Distrib 10.4.22-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: aula_php
-- ------------------------------------------------------
-- Server version	10.4.22-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tarefas`
--

DROP TABLE IF EXISTS `tarefas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tarefas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) NOT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `apagado` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tarefas`
--

LOCK TABLES `tarefas` WRITE;
/*!40000 ALTER TABLE `tarefas` DISABLE KEYS */;
INSERT INTO `tarefas` VALUES (1,'Estudar PHP nos finais de semana',NULL,0),(2,'Assistir aos ',NULL,0),(3,'Tomar duas',NULL,0),(5,'Ir para academia',NULL,0),(6,'Churrasco!',NULL,1),(8,'Estudar JS',NULL,0),(10,'Bonus: Estudar Excel - Inserida pelo php',NULL,0),(12,'Inserida pelo php',NULL,0),(14,'Inserida pelo php',NULL,0),(15,'Inserida pelo php',NULL,0),(19,' Estudar mais e mais','',0),(20,'INSERIDO VIA PHP',NULL,0),(22,'Adicionando via html',NULL,0),(23,'Adicionando via html 2',NULL,0),(24,'Adicionando via html 3',NULL,0),(25,'Adicionando via html 6',NULL,0),(26,'Adicionando via html 7',NULL,0),(27,'Adicionando via html 7',NULL,0),(28,' Adicionando via html 8','',0),(29,'OPA',NULL,0),(30,'Adicionando via html 10',NULL,0),(33,'Teste Tarefa por API2','',1);
/*!40000 ALTER TABLE `tarefas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES ('teste@senacsp.edu.br','Esequiel','$2y$10$D..0hC4VhJv4RJgBzOzNwugOHeXV/0uwC0PWfui69nbRtW7.OS75a'),('teste@senacsp.edu.br.com','boninho','$2y$10$VipgMm0rFaVbO2PWBgceEOp4/3evkaNqpXyh5DZ/Wcg4uosSFJyk6'),('teste@senacsp.edu.br.com.br','boninho','$2y$10$zFuTDtH7oppzhVgdfEUcFet9ob4tG.DqAsSK6GLI5Xe.TRIzmgJt2'),('testedostestes@testando.com','Aland Delan','$2y$10$1CIfXD4PA3SiAuxvY1eIy.Ssht9Gt1AyDtKTEobUaPsCsP8qH1AXa');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-19 19:54:18