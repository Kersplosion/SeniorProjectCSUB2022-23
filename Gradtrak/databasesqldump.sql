-- MySQL dump 10.19  Distrib 10.3.38-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: seniorpro23
-- ------------------------------------------------------
-- Server version       10.3.38-MariaDB-0+deb10u1

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
-- Temporary table structure for view `AutoIncStudentInfo`
--

DROP TABLE IF EXISTS `AutoIncStudentInfo`;
/*!50001 DROP VIEW IF EXISTS `AutoIncStudentInfo`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `AutoIncStudentInfo` AS SELECT
 1 AS `NetID`,
  1 AS `StudentID`,
  1 AS `Name`,
  1 AS `Major`,
  1 AS `OverallGPA`,
  1 AS `TotalCompletedUnits`,
  1 AS `Percent` */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `CompUnitsPercent`
--

DROP TABLE IF EXISTS `CompUnitsPercent`;
/*!50001 DROP VIEW IF EXISTS `CompUnitsPercent`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `CompUnitsPercent` AS SELECT
 1 AS `NetID`,
  1 AS `TotalCompletedUnits`,
  1 AS `Percent` */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `DistinctGenMajorCombo`
--

DROP TABLE IF EXISTS `DistinctGenMajorCombo`;
/*!50001 DROP VIEW IF EXISTS `DistinctGenMajorCombo`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `DistinctGenMajorCombo` AS SELECT
 1 AS `NetID`,
  1 AS `CourseType`,
  1 AS `CourseID`,
  1 AS `CourseName`,
  1 AS `Units`,
  1 AS `Grade`,
  1 AS `Status` */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `GenMajorCombo`
--

DROP TABLE IF EXISTS `GenMajorCombo`;
/*!50001 DROP VIEW IF EXISTS `GenMajorCombo`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `GenMajorCombo` AS SELECT
 1 AS `NetID`,
  1 AS `CourseType`,
  1 AS `CourseID`,
  1 AS `CourseName`,
  1 AS `Units`,
  1 AS `Grade`,
  1 AS `Status` */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `GeneralEducation`
--

DROP TABLE IF EXISTS `GeneralEducation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `GeneralEducation` (
  `NetID` varchar(30) NOT NULL,
  `CourseType` varchar(50) NOT NULL,
  `CourseID` varchar(50) NOT NULL,
  `CourseName` varchar(100) NOT NULL,
  `Units` int(11) DEFAULT NULL,
  `Grade` varchar(20) DEFAULT NULL,
  `Status` varchar(40) DEFAULT NULL,
  KEY `NetID` (`NetID`),
  CONSTRAINT `GeneralEducation_ibfk_1` FOREIGN KEY (`NetID`) REFERENCES `StudentInfo` (`NetID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci `ENCRYPTION_KEY_ID`=100;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `GeneralEducation`
--

LOCK TABLES `GeneralEducation` WRITE;
/*!40000 ALTER TABLE `GeneralEducation` DISABLE KEYS */;
INSERT INTO `GeneralEducation` VALUES ('jdoe','FS','COMM 1008','Communication',3,'A','Complete'),('jdoe','FS','ENGL 1109','Writing and Research',3,'B+','Incomplete'),('isanchez14','FS','COMM 2020','Introduction to Communication Studies',3,'A','Complete'),('jdoe','NS','PHYS 2210','Physics for Scientists and Engineers I',4,'A','Complete'),('jdoe','FS','PHIL 1019','Critical Thinking',3,'B','Complete'),('jdoe','FS','MATH 1050','Precalculus I',4,'A','Complete'),('jdoe','AI','PLSI 1018','American Government and Politics',3,'A','Complete'),('jdoe','AI','HIST 1228','Survey of US History Since 1865',3,'A','Complete'),('jdoe','AH','MATH 2010','Calculus for the Biological and Chemical Sciences I',4,'B+','Incomplete'),('jdoe','AH','ENGL 1208','Introduction to Literature',3,'B','Complete'),('jdoe','SELF','KINE 1018','Lifetime Fitness',2,'A','Complete'),('jdoe','JYDR','PHIL 3548','Race, Class, Gender, Sexuality',3,'A','Complete'),('jdoe','GWAR','ENGL 3109','Modes of Writing',3,'A','Complete'),('jdoe','C','CMPS 4928','Senior Project II',2,'A','Complete'),('isanchez14','AH','ENGL 1208','Introduction to Literature',3,'A','Complete'),('isanchez14','SELF','SOC 2018','Self and Society',3,'B+','Complete');
/*!40000 ALTER TABLE `GeneralEducation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MajorRequirements`
--

DROP TABLE IF EXISTS `MajorRequirements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MajorRequirements` (
  `NetID` varchar(30) NOT NULL,
  `CourseType` varchar(50) NOT NULL,
  `CourseID` varchar(50) NOT NULL,
  `CourseName` varchar(100) NOT NULL,
  `Units` int(11) DEFAULT NULL,
  `Grade` varchar(20) DEFAULT NULL,
  `Status` varchar(40) DEFAULT NULL,
  KEY `NetID` (`NetID`),
  CONSTRAINT `MajorRequirements_ibfk_1` FOREIGN KEY (`NetID`) REFERENCES `StudentInfo` (`NetID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci `ENCRYPTION_KEY_ID`=100;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MajorRequirements`
--

LOCK TABLES `MajorRequirements` WRITE;
/*!40000 ALTER TABLE `MajorRequirements` DISABLE KEYS */;
INSERT INTO `MajorRequirements` VALUES ('jdoe','LDC','CMPS 2010','Programming I: Programming Fundamentals',4,'A','Complete'),('jdoe','LDC','CMPS 2020','Programming II: Data Structures and Algorithms',4,'B+','Incomplete'),('jdoe','UDC','CMPS 3420','Database Systems',4,'B','Complete'),('jdoe','LDC','CMPS 2120','Discrete Structures',4,'B','Complete'),('jdoe','LDC','CMPS 2240','Computer Architecture I: Assembly Language Programming',4,'B','Complete'),('jdoe','UDC','CMPS 3120','Algorithm Analysis',3,'A','Complete'),('jdoe','UDC','CMPS 3140','Theory of Computation',3,'B+','Incomplete'),('jdoe','UDC','CMPS 3240','Computer Architecture II: Organization',4,'B','Complete'),('jdoe','UDC','CMPS 3350','Software Engineering',4,'B','Complete'),('jdoe','UDC','CMPS 3500','Programming Languages',3,'B','Complete'),('jdoe','UDC','CMPS 3560','Artificial Intelligence',3,'B','Complete'),('jdoe','UDC','CMPS 3600','Operating Systems',4,'B','Complete'),('jdoe','UDC','CMPS 3620','Computer Networks',4,'B','Complete'),('jdoe','UDC','CMPS 3640','Distributed and Parallel Computation',3,'B','Complete'),('jdoe','UDC','CMPS 4910','Senior Project I',2,'B','Complete'),('jdoe','UDC','CMPS 4928','Senior Project II',2,'A','Complete'),('jdoe','UDE','CMPS 4490','Game Development',4,'B+','Incomplete'),('jdoe','UDE','CMPS 4480','Computer Animation',4,'A','Complete'),('jdoe','CR','MATH 2510','Single Variable Calculus I',4,'A','Complete'),('jdoe','CR','MATH 2520','Single Variable Calculus II',4,'B+','Incomplete'),('jdoe','CR','MATH 3200','Probability Theory',3,'B','Complete'),('jdoe','CR','PHYS 2210','Physics for Scientists and Engineers I',4,'A','Complete'),('jdoe','CR','PHYS 2220','Physics for Scientists and Engineers II',4,'B','Complete'),('jdoe','CR','PHYS 2230','Physics for Scientists and Engineers III',4,'B','Complete'),('jdoe','CR','PHIL 3318','Professional Ethics',3,'B','Complete'),('jdoe','AU','MATH 1050','Precalculus I',4,'A','Complete'),('jdoe','AU','MATH 1060','Precalculus II',4,'B+','Incomplete');
/*!40000 ALTER TABLE `MajorRequirements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `StudentInfo`
--

DROP TABLE IF EXISTS `StudentInfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `StudentInfo` (
  `NetID` varchar(30) NOT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `StudentID` varchar(40) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Major` varchar(50) DEFAULT NULL,
  `OverallGPA` decimal(2,1) DEFAULT NULL,
  `TotalUnits` int(5) DEFAULT NULL,
  PRIMARY KEY (`NetID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci `ENCRYPTION_KEY_ID`=100;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `StudentInfo`
--

LOCK TABLES `StudentInfo` WRITE;
/*!40000 ALTER TABLE `StudentInfo` DISABLE KEYS */;
INSERT INTO `StudentInfo` VALUES ('isanchez14','$2y$10$OMzpRF/0Hl80LqJ8C9SrfuM1G1dhN/PTUFZmF8EcCb1XWRi8SKXI2','100847203','Idris Sanchez','Biology',3.6,100),('jdoe','$2y$10$yzKsCPTAvaCxzQ9dmzwtcOErX9UK1MZaPzR5Sksw4XblWMtNfRltK','123456789','John Doe','Computer Science',3.2,90);
/*!40000 ALTER TABLE `StudentInfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `AutoIncStudentInfo`
--

/*!50001 DROP VIEW IF EXISTS `AutoIncStudentInfo`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`seniorpro23`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `AutoIncStudentInfo` AS select `StudentInfo`.`NetID` AS `NetID`,`StudentInfo`.`StudentID` AS `StudentID`,`StudentInfo`.`Name` AS `Name`,`StudentInfo`.`Major` AS `Major`,`StudentInfo`.`OverallGPA` AS `OverallGPA`,`CompUnitsPercent`.`TotalCompletedUnits` AS `TotalCompletedUnits`,`CompUnitsPercent`.`Percent` AS `Percent` from (`StudentInfo` join `CompUnitsPercent` on(`CompUnitsPercent`.`NetID` = `StudentInfo`.`NetID`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `CompUnitsPercent`
--

/*!50001 DROP VIEW IF EXISTS `CompUnitsPercent`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`seniorpro23`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `CompUnitsPercent` AS select `DistinctGenMajorCombo`.`NetID` AS `NetID`,sum(`DistinctGenMajorCombo`.`Units`) AS `TotalCompletedUnits`,format(sum(`DistinctGenMajorCombo`.`Units`) / 120 * 100,0) AS `Percent` from `DistinctGenMajorCombo` where `DistinctGenMajorCombo`.`Status` = 'Complete' group by `DistinctGenMajorCombo`.`NetID` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `DistinctGenMajorCombo`
--

/*!50001 DROP VIEW IF EXISTS `DistinctGenMajorCombo`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`seniorpro23`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `DistinctGenMajorCombo` AS select `GenMajorCombo`.`NetID` AS `NetID`,`GenMajorCombo`.`CourseType` AS `CourseType`,`GenMajorCombo`.`CourseID` AS `CourseID`,`GenMajorCombo`.`CourseName` AS `CourseName`,`GenMajorCombo`.`Units` AS `Units`,`GenMajorCombo`.`Grade` AS `Grade`,`GenMajorCombo`.`Status` AS `Status` from `GenMajorCombo` group by `GenMajorCombo`.`NetID`,`GenMajorCombo`.`CourseID` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `GenMajorCombo`
--

/*!50001 DROP VIEW IF EXISTS `GenMajorCombo`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`seniorpro23`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `GenMajorCombo` AS select `GeneralEducation`.`NetID` AS `NetID`,`GeneralEducation`.`CourseType` AS `CourseType`,`GeneralEducation`.`CourseID` AS `CourseID`,`GeneralEducation`.`CourseName` AS `CourseName`,`GeneralEducation`.`Units` AS `Units`,`GeneralEducation`.`Grade` AS `Grade`,`GeneralEducation`.`Status` AS `Status` from `GeneralEducation` union select `MajorRequirements`.`NetID` AS `NetID`,`MajorRequirements`.`CourseType` AS `CourseType`,`MajorRequirements`.`CourseID` AS `CourseID`,`MajorRequirements`.`CourseName` AS `CourseName`,`MajorRequirements`.`Units` AS `Units`,`MajorRequirements`.`Grade` AS `Grade`,`MajorRequirements`.`Status` AS `Status` from `MajorRequirements` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-12  0:39:55
