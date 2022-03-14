CREATE DATABASE  IF NOT EXISTS `duenas_alexandria` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `duenas_alexandria`;
-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: duenas_alexandria
-- ------------------------------------------------------
-- Server version	8.0.26

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
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `book` (
  `bookID` int NOT NULL AUTO_INCREMENT,
  `bookTitle` varchar(45) NOT NULL,
  `bookAuthor` varchar(45) NOT NULL,
  `year` year NOT NULL,
  `genre` varchar(45) NOT NULL,
  PRIMARY KEY (`bookID`),
  KEY `bookFK` (`bookTitle`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book`
--

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
INSERT INTO `book` VALUES (1,'The Sixth Extinction: An Unnatural History','Elizabeth Kolbert',1925,'Non-Fiction'),(2,'A Brief History of Time','Stephen Hawking',1949,'Non-Fiction'),(3,'One Hundred Years of Solitude','Gabriel García Márquez',1967,'Non-Fiction'),(4,'In Cold Blood','Truman Capote',1965,'Non-Fiction'),(5,'Silent Spring','Rachel Carson',1962,'Non-Fiction'),(6,'The Catcher in the Rye','Jerome David Salinger',1951,'Fiction'),(7,'Nineteen Eighty-Four','George Orwell',1949,'Fiction'),(8,'A Room of One\'s Own','Virginia Woolf',1929,'Fiction'),(9,'The Great Gatsby','Francis Scott Key Fitzgerald',1925,'Fiction'),(10,'Anna Karenina','Leo Tolstoy',1988,'Fiction'),(11,'The Handmaid\'s Tale: The Graphic Novel','Margaret Atwood',1985,'Fiction');
/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `borrowerhistory`
--

DROP TABLE IF EXISTS `borrowerhistory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `borrowerhistory` (
  `bhID` int NOT NULL AUTO_INCREMENT,
  `book_bookTitle` varchar(45) NOT NULL,
  `member_fullName` varchar(45) NOT NULL,
  `borrowDate` date NOT NULL,
  `returnDate` date DEFAULT NULL,
  PRIMARY KEY (`bhID`),
  KEY `fk_BorrowerRecord_Book_idx` (`book_bookTitle`) /*!80000 INVISIBLE */,
  KEY `fk_BorrowerRecord_Member1_idx` (`member_fullName`),
  CONSTRAINT `book_bookTitle` FOREIGN KEY (`book_bookTitle`) REFERENCES `book` (`bookTitle`),
  CONSTRAINT `member_fullName` FOREIGN KEY (`member_fullName`) REFERENCES `member` (`fullName`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `borrowerhistory`
--

LOCK TABLES `borrowerhistory` WRITE;
/*!40000 ALTER TABLE `borrowerhistory` DISABLE KEYS */;
INSERT INTO `borrowerhistory` VALUES (6,'The Sixth Extinction: An Unnatural History','James Smith','2021-09-10','2021-10-10'),(7,'Silent Spring','William Jones','2021-10-30','2021-12-10'),(8,'A Room of One\'s Own','Jennife Davis','2021-11-01','2021-11-10'),(9,'A Brief History of Time','Elizabeth Martinez','2021-11-19','2021-11-21'),(10,'Nineteen Eighty-Four','Linda Rodriguez','2021-11-20','2021-12-28');
/*!40000 ALTER TABLE `borrowerhistory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `member` (
  `memberID` int NOT NULL AUTO_INCREMENT,
  `fullName` varchar(45) NOT NULL,
  `contactNumber` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  PRIMARY KEY (`memberID`),
  KEY `fullnameFK` (`fullName`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES (1,'James Smith','09835559023','2 Princeton Street'),(2,'Robert Johnson','09075556532','637 Sunnyslope Street'),(3,'John Williams','09805553808','127 Wild Horse Ave.'),(4,'Michael Brown','09215551830','786 Harrison Drive'),(5,'William Jones','09835556147','253 Roberts Circle'),(6,'Mary Garcia','09295556201','28 N. Grant Lane'),(7,'Patricia Miller','09335551104','7355 Carpenter Circle'),(8,'Jennife Davis','02805551691','7496 Selby Lane'),(9,'Linda Rodriguez','09805550955','87A Whitemarsh Ave.'),(10,'Elizabeth Martinez','9805554102','180 West Cardinal Lane');
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-01-19 11:41:33
