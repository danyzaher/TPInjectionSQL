

--
-- Table structure for table `credential`
--

DROP TABLE IF EXISTS `credential`;

CREATE TABLE `credential` (
  `ID` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `EID` varchar(20) DEFAULT NULL,
  `Salary` int(9) DEFAULT NULL,
  `birth` varchar(20) DEFAULT NULL,
  `SSN` varchar(20) DEFAULT NULL,
  `PhoneNumber` varchar(20) DEFAULT NULL,
  `Address` varchar(300) DEFAULT NULL,
  `Email` varchar(300) DEFAULT NULL,
  `NickName` varchar(300) DEFAULT NULL,
  `Password` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ;


INSERT INTO `credential` VALUES (1,'Alice','10000',20000,'9/20','10211002','','','','','fdbe918bdae83000aa54747fc95fe0470fff4976'),(2,'Boby','20000',30000,'4/20','10213352','','','','','b78ed97677c161c1c82c142906674ad15242b2d4'),(3,'Ryan','30000',50000,'4/10','98993524','','','','','a3c50276cb120637cca669eb38fb9928b017e9ef'),(4,'Samy','40000',90000,'1/11','32193525','','','','','995b8b8c183f349b3cab0ae7fccd39133508d2af'),(5,'Ted','50000',110000,'11/3','32111111','','','','','99343bff28a7bb51cb6f22cb20a618701a2c2f58'),(6,'Admin','99999','400000','3/5','43254314','','','','','a5bdf35a1df4ea895905f6f6618e83951a6effc0');

--
-- Table structure for table `secret`
--

DROP TABLE IF EXISTS `secret`;

CREATE TABLE `secret` (
 `message` varchar(300)
);


INSERT INTO `secret` VALUES ('Ceci est une message secret');

