-- MariaDB dump 10.19  Distrib 10.4.21-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: Pengu_PC
-- ------------------------------------------------------
-- Server version	10.4.21-MariaDB

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
-- Table structure for table `bestellungen`
--

DROP TABLE IF EXISTS `bestellungen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bestellungen` (
  `KundenNr` int(10) NOT NULL,
  `PersonalNr` int(10) NOT NULL,
  `BestellNr` int(10) NOT NULL,
  `Anzahl_Artikel` int(4) NOT NULL,
  `Gesamtpreis` decimal(7,2) NOT NULL,
  `Versandart` varchar(10) NOT NULL,
  PRIMARY KEY (`KundenNr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bestellungen`
--

LOCK TABLES `bestellungen` WRITE;
/*!40000 ALTER TABLE `bestellungen` DISABLE KEYS */;
/*!40000 ALTER TABLE `bestellungen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cpus`
--

DROP TABLE IF EXISTS `cpus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cpus` (
  `ArtikelNr` int(10) NOT NULL,
  `Hersteller` varchar(20) NOT NULL,
  `Produktname` varchar(20) NOT NULL,
  `Einzelpreis` decimal(7,2) NOT NULL,
  `Sockel` varchar(5) NOT NULL,
  `Taktraten` decimal(3,1) NOT NULL,
  PRIMARY KEY (`ArtikelNr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cpus`
--

LOCK TABLES `cpus` WRITE;
/*!40000 ALTER TABLE `cpus` DISABLE KEYS */;
INSERT INTO `cpus` VALUES (1040000001,'Intel','i7 13700K',400.00,'1700',3.4);
/*!40000 ALTER TABLE `cpus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fertigpc`
--

DROP TABLE IF EXISTS `fertigpc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fertigpc` (
  `BestellNr` int(10) NOT NULL,
  `Gehaeuse` varchar(25) NOT NULL,
  `Mainboard` varchar(25) NOT NULL,
  `CPU` varchar(25) NOT NULL,
  `Grafikkarte` varchar(25) NOT NULL,
  `Netzteil` varchar(25) NOT NULL,
  `RAM` varchar(25) NOT NULL,
  `Festplatte` varchar(25) NOT NULL,
  `Luefter` varchar(25) NOT NULL,
  `Kuehler` varchar(25) NOT NULL,
  PRIMARY KEY (`BestellNr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fertigpc`
--

LOCK TABLES `fertigpc` WRITE;
/*!40000 ALTER TABLE `fertigpc` DISABLE KEYS */;
/*!40000 ALTER TABLE `fertigpc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `festplatten`
--

DROP TABLE IF EXISTS `festplatten`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `festplatten` (
  `ArtikelNr` int(10) NOT NULL,
  `Hersteller` varchar(20) NOT NULL,
  `Produktname` varchar(20) NOT NULL,
  `Einzelpreis` decimal(7,2) NOT NULL,
  `Bauform` varchar(3) NOT NULL,
  `GeschwindigkeitSchreiben` varchar(10) NOT NULL,
  `GeschwindigkeitLesen` varchar(10) NOT NULL,
  `Formfaktor` varchar(8) NOT NULL,
  PRIMARY KEY (`ArtikelNr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `festplatten`
--

LOCK TABLES `festplatten` WRITE;
/*!40000 ALTER TABLE `festplatten` DISABLE KEYS */;
INSERT INTO `festplatten` VALUES (1060000001,'Samsung','870 EVO',50.00,'SSD','3500MB/s','3500MB/s','NVME');
/*!40000 ALTER TABLE `festplatten` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gehaeuse`
--

DROP TABLE IF EXISTS `gehaeuse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gehaeuse` (
  `ArtikelNr` int(10) NOT NULL,
  `Hersteller` varchar(20) NOT NULL,
  `Produktname` varchar(20) NOT NULL,
  `Einzelpreis` decimal(7,2) NOT NULL,
  `Gehaeusetyp` varchar(10) NOT NULL,
  `Abmessungen` varchar(15) NOT NULL,
  `Gewicht` decimal(4,2) NOT NULL,
  `Mainboardgroesse` varchar(10) NOT NULL,
  `Luefteranzahl` int(2) NOT NULL,
  `MaxGrafikkartenlaenge` int(3) DEFAULT NULL,
  PRIMARY KEY (`ArtikelNr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gehaeuse`
--

LOCK TABLES `gehaeuse` WRITE;
/*!40000 ALTER TABLE `gehaeuse` DISABLE KEYS */;
INSERT INTO `gehaeuse` VALUES (1030000001,'BeQuiet','Silent Base 802',170.00,'Midi-Tower','281x553x539mm',13.15,'bis ATX',8,432);
/*!40000 ALTER TABLE `gehaeuse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grafikkarten`
--

DROP TABLE IF EXISTS `grafikkarten`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grafikkarten` (
  `ArtikelNr` int(10) NOT NULL,
  `Hersteller` varchar(20) NOT NULL,
  `Produktname` varchar(20) NOT NULL,
  `Einzelpreis` decimal(7,2) NOT NULL,
  `Laenge` varchar(15) NOT NULL,
  PRIMARY KEY (`ArtikelNr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grafikkarten`
--

LOCK TABLES `grafikkarten` WRITE;
/*!40000 ALTER TABLE `grafikkarten` DISABLE KEYS */;
INSERT INTO `grafikkarten` VALUES (1045000001,'Nvidia','Geforce RTX 4080',1300.00,'350mm');
/*!40000 ALTER TABLE `grafikkarten` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `headsets`
--

DROP TABLE IF EXISTS `headsets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `headsets` (
  `ArtikelNr` int(10) NOT NULL,
  `Hersteller` varchar(20) NOT NULL,
  `Produktname` varchar(20) NOT NULL,
  `Einzelpreis` decimal(7,2) NOT NULL,
  `Bauart` varchar(10) NOT NULL,
  `Mikrofon` varchar(15) DEFAULT NULL,
  `Verbindung` varchar(10) NOT NULL,
  PRIMARY KEY (`ArtikelNr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `headsets`
--

LOCK TABLES `headsets` WRITE;
/*!40000 ALTER TABLE `headsets` DISABLE KEYS */;
INSERT INTO `headsets` VALUES (1010000001,'Beyerdynamic','DT 770 Pro',100.00,'Geschlosse',NULL,'Kabel');
/*!40000 ALTER TABLE `headsets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kuehler`
--

DROP TABLE IF EXISTS `kuehler`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kuehler` (
  `ArtikelNr` int(10) NOT NULL,
  `Hersteller` varchar(20) NOT NULL,
  `Produktname` varchar(20) NOT NULL,
  `Einzelpreis` decimal(7,2) NOT NULL,
  `Sockel` varchar(5) NOT NULL,
  `Kuehlart` varchar(15) NOT NULL,
  `Drehzahl` int(5) DEFAULT NULL,
  `Radiatorgroesse` int(3) DEFAULT NULL,
  PRIMARY KEY (`ArtikelNr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kuehler`
--

LOCK TABLES `kuehler` WRITE;
/*!40000 ALTER TABLE `kuehler` DISABLE KEYS */;
INSERT INTO `kuehler` VALUES (1070000001,'Arctic','Liquid Freezer II 36',119.99,'1700','All In One',3000,360);
/*!40000 ALTER TABLE `kuehler` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kunden`
--

DROP TABLE IF EXISTS `kunden`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kunden` (
  `KundenNr` int(10) NOT NULL,
  `Nachname` varchar(20) NOT NULL,
  `Vorname` varchar(20) NOT NULL,
  `Adresse` varchar(20) NOT NULL,
  `Hausnummer` varchar(5) NOT NULL,
  `Wohnort` varchar(20) NOT NULL,
  `PLZ` int(5) NOT NULL,
  `Aktuelle_Zahlungsmethode` varchar(15) DEFAULT NULL,
  `Telefon` varchar(16) DEFAULT NULL,
  `EMail` varchar(50) NOT NULL,
  `Passwort` varchar(100) NOT NULL,
  PRIMARY KEY (`KundenNr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kunden`
--

LOCK TABLES `kunden` WRITE;
/*!40000 ALTER TABLE `kunden` DISABLE KEYS */;
INSERT INTO `kunden` VALUES (0,'Peter','Hans','Muster Str.','1','Deutschland',12345,'+49 123 4567890','','Hans-Peter@gmail.com','1234'),(1,'Peters','Hans','11','1','1',1,'1','','1','12');
/*!40000 ALTER TABLE `kunden` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `luefter`
--

DROP TABLE IF EXISTS `luefter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `luefter` (
  `ArtikelNr` int(10) NOT NULL,
  `Hersteller` varchar(20) NOT NULL,
  `Produktname` varchar(20) NOT NULL,
  `Einzelpreis` decimal(7,2) NOT NULL,
  `Groesse` varchar(5) NOT NULL,
  `Drehzahl` int(5) NOT NULL,
  PRIMARY KEY (`ArtikelNr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `luefter`
--

LOCK TABLES `luefter` WRITE;
/*!40000 ALTER TABLE `luefter` DISABLE KEYS */;
INSERT INTO `luefter` VALUES (1065000001,'Arctic','P12 PWM',4.67,'120mm',1800);
/*!40000 ALTER TABLE `luefter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maeuse`
--

DROP TABLE IF EXISTS `maeuse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maeuse` (
  `ArtikelNr` int(10) NOT NULL,
  `Hersteller` varchar(20) NOT NULL,
  `Produktname` varchar(20) NOT NULL,
  `Einzelpreis` decimal(7,2) NOT NULL,
  `DPI` int(5) NOT NULL,
  `Gewicht` int(3) NOT NULL,
  `Verbindung` varchar(10) NOT NULL,
  PRIMARY KEY (`ArtikelNr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maeuse`
--

LOCK TABLES `maeuse` WRITE;
/*!40000 ALTER TABLE `maeuse` DISABLE KEYS */;
INSERT INTO `maeuse` VALUES (1005000001,'Roccat','Kone Pro Air',74.95,19000,75,'Kabel');
/*!40000 ALTER TABLE `maeuse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mainboards`
--

DROP TABLE IF EXISTS `mainboards`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mainboards` (
  `ArtikelNr` int(10) NOT NULL,
  `Hersteller` varchar(20) NOT NULL,
  `Produktname` varchar(20) NOT NULL,
  `Einzelpreis` decimal(7,2) NOT NULL,
  `Formfaktor` varchar(10) NOT NULL,
  `Sockel` varchar(5) NOT NULL,
  PRIMARY KEY (`ArtikelNr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mainboards`
--

LOCK TABLES `mainboards` WRITE;
/*!40000 ALTER TABLE `mainboards` DISABLE KEYS */;
INSERT INTO `mainboards` VALUES (1035000001,'MSI','MPG Z790 Carbon WIFI',482.99,'ATX','1700');
/*!40000 ALTER TABLE `mainboards` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mikrofone`
--

DROP TABLE IF EXISTS `mikrofone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mikrofone` (
  `ArtikelNr` int(10) NOT NULL,
  `Hersteller` varchar(20) NOT NULL,
  `Produktname` varchar(20) NOT NULL,
  `Einzelpreis` decimal(7,2) NOT NULL,
  `Anschluss` varchar(10) NOT NULL,
  PRIMARY KEY (`ArtikelNr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mikrofone`
--

LOCK TABLES `mikrofone` WRITE;
/*!40000 ALTER TABLE `mikrofone` DISABLE KEYS */;
INSERT INTO `mikrofone` VALUES (1020000001,'Beyerdynamic','Fox',99.99,'USB');
/*!40000 ALTER TABLE `mikrofone` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `monitore`
--

DROP TABLE IF EXISTS `monitore`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `monitore` (
  `ArtikelNr` int(10) NOT NULL,
  `Hersteller` varchar(20) NOT NULL,
  `Produktname` varchar(20) NOT NULL,
  `Einzelpreis` decimal(7,2) NOT NULL,
  `Aufloesung` varchar(10) NOT NULL,
  `Bildwiederholrate` int(4) NOT NULL,
  PRIMARY KEY (`ArtikelNr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `monitore`
--

LOCK TABLES `monitore` WRITE;
/*!40000 ALTER TABLE `monitore` DISABLE KEYS */;
INSERT INTO `monitore` VALUES (1015000001,'Alienware','AW2521HFA',360.99,'1080',240);
/*!40000 ALTER TABLE `monitore` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mousepads`
--

DROP TABLE IF EXISTS `mousepads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mousepads` (
  `ArtikelNr` int(10) NOT NULL,
  `Hersteller` varchar(20) NOT NULL,
  `Produktname` varchar(20) NOT NULL,
  `Einzelpreis` decimal(7,2) NOT NULL,
  `Abmessungen` varchar(15) NOT NULL,
  `Material` varchar(15) NOT NULL,
  PRIMARY KEY (`ArtikelNr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mousepads`
--

LOCK TABLES `mousepads` WRITE;
/*!40000 ALTER TABLE `mousepads` DISABLE KEYS */;
INSERT INTO `mousepads` VALUES (1025000001,'Corsair','MM350 PRO',38.99,'930x400','Stoff');
/*!40000 ALTER TABLE `mousepads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `netzteile`
--

DROP TABLE IF EXISTS `netzteile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `netzteile` (
  `ArtikelNr` int(10) NOT NULL,
  `Hersteller` varchar(20) NOT NULL,
  `Produktname` varchar(20) NOT NULL,
  `Einzelpreis` decimal(7,2) NOT NULL,
  `Wattzahl` int(4) NOT NULL,
  `Zertifizierung` varchar(15) NOT NULL,
  `Kabelmanagment` varchar(10) NOT NULL,
  PRIMARY KEY (`ArtikelNr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `netzteile`
--

LOCK TABLES `netzteile` WRITE;
/*!40000 ALTER TABLE `netzteile` DISABLE KEYS */;
INSERT INTO `netzteile` VALUES (1050000001,'Corsair','Series 2021 RM850x',159.99,850,'80 Plus Gold','Voll-Modul');
/*!40000 ALTER TABLE `netzteile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal`
--

DROP TABLE IF EXISTS `personal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal` (
  `PersonalNr` int(10) NOT NULL,
  `Nachname` varchar(20) NOT NULL,
  `Vorname` varchar(20) NOT NULL,
  `EMail` varchar(100) NOT NULL,
  `Telefon` varchar(16) NOT NULL,
  `Passwort` varchar(100) NOT NULL,
  `Adresse` varchar(20) NOT NULL,
  `Hausnummer` varchar(5) NOT NULL,
  `Wohnort` varchar(20) NOT NULL,
  `PLZ` int(5) NOT NULL,
  PRIMARY KEY (`PersonalNr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal`
--

LOCK TABLES `personal` WRITE;
/*!40000 ALTER TABLE `personal` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ram`
--

DROP TABLE IF EXISTS `ram`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ram` (
  `ArtikelNr` int(10) NOT NULL,
  `Hersteller` varchar(20) NOT NULL,
  `Produktname` varchar(20) NOT NULL,
  `Einzelpreis` decimal(7,2) NOT NULL,
  `Taktraten` varchar(8) NOT NULL,
  `Module` varchar(15) NOT NULL,
  PRIMARY KEY (`ArtikelNr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ram`
--

LOCK TABLES `ram` WRITE;
/*!40000 ALTER TABLE `ram` DISABLE KEYS */;
INSERT INTO `ram` VALUES (1055000001,'Corsair','Vengeance RGB PRO',99.00,'3600mhz','2x 16GB');
/*!40000 ALTER TABLE `ram` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tastatur`
--

DROP TABLE IF EXISTS `tastatur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tastatur` (
  `ArtikelNr` int(10) NOT NULL,
  `Hersteller` varchar(20) NOT NULL,
  `Produktname` varchar(20) NOT NULL,
  `Einzelpreis` decimal(7,2) NOT NULL,
  `Switches` varchar(15) NOT NULL,
  `Verbindung` varchar(10) NOT NULL,
  PRIMARY KEY (`ArtikelNr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tastatur`
--

LOCK TABLES `tastatur` WRITE;
/*!40000 ALTER TABLE `tastatur` DISABLE KEYS */;
INSERT INTO `tastatur` VALUES (0,'','',0.00,'',''),(1001000001,'Roccat','Pyro',99.99,'Red','Kabel');
/*!40000 ALTER TABLE `tastatur` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-02-21 15:52:09
