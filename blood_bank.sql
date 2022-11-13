-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 13, 2022 at 03:35 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `delete_blood_donor_val`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_blood_donor_val` (IN `donid` INT)  BEGIN
delete from blood_donor where donor_id=donid;
END$$

DROP PROCEDURE IF EXISTS `delete_blood_receiver_val`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_blood_receiver_val` (IN `rcid` INT)  BEGIN
delete from blood_receiver where receiver_id=rcid;
END$$

DROP PROCEDURE IF EXISTS `delete_blood_request_val`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_blood_request_val` (IN `reqid` INT)  BEGIN
delete from blood_request where request_id=reqid;
END$$

DROP PROCEDURE IF EXISTS `delete_campagency_val`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_campagency_val` (IN `aid` INT)  BEGIN
delete from campagency where agency_id=aid;
END$$

DROP PROCEDURE IF EXISTS `delete_camp_val`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_camp_val` (IN `cid` INT)  BEGIN
delete from blood_camp where camp_id=cid;
END$$

DROP PROCEDURE IF EXISTS `delete_doctor_val`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_doctor_val` (IN `docid` INT)  BEGIN
delete from doctor where doctor_id=docid;
END$$

DROP PROCEDURE IF EXISTS `delete_hospital_val`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_hospital_val` (IN `hid` INT)  BEGIN
delete from hospital where hospital_id=hid;
END$$

DROP PROCEDURE IF EXISTS `delete_newdonors_val`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_newdonors_val` (IN `newid` INT)  BEGIN
delete from newdonors where newd_id=newid;
END$$

DROP PROCEDURE IF EXISTS `delete_newrequests_val`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_newrequests_val` (IN `rid` INT)  BEGIN
delete from newrequests where req_id=rid;
END$$

DROP PROCEDURE IF EXISTS `delete_stock_val`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_stock_val` (IN `sid` INT)  BEGIN
delete from stock where stock_id=sid;
END$$

DROP PROCEDURE IF EXISTS `delete_users_val`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_users_val` (IN `useid` INT)  BEGIN
delete from users where user_id=useid;
END$$

DROP PROCEDURE IF EXISTS `insert_blood_donor_val`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_blood_donor_val` (`name` VARCHAR(30), `gender` VARCHAR(30), `email` VARCHAR(30), `address` VARCHAR(50), `date` VARCHAR(50), `blood_group` VARCHAR(50), `camp_id` INT(11))  BEGIN
insert into blood_donor(name,gender,email,address,date,blood_group,camp_id) VALUES(name,gender,email,address,date,blood_group,camp_id);
END$$

DROP PROCEDURE IF EXISTS `insert_blood_receiver_val`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_blood_receiver_val` (`name` VARCHAR(30), `gender` VARCHAR(30), `contact` VARCHAR(50), `date` VARCHAR(50), `blood_group` VARCHAR(50), `stock_id` INT(11), `doctor_id` INT(11))  BEGIN
insert into blood_receiver(name,gender,contact,date,blood_group,stock_id,doctor_id) VALUES(name,gender,contact,date,blood_group,stock_id,doctor_id);
END$$

DROP PROCEDURE IF EXISTS `insert_blood_request_val`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_blood_request_val` (`name` VARCHAR(30), `gender` VARCHAR(30), `contact` VARCHAR(50), `date` VARCHAR(30), `blood_group` VARCHAR(30), `stock_id` INT(11))  BEGIN
insert into blood_request(name,gender,contact,date,blood_group,stock_id) VALUES(name,gender,contact,date,blood_group,stock_id);
END$$

DROP PROCEDURE IF EXISTS `insert_campagency_val`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_campagency_val` (`name` VARCHAR(30), `address` VARCHAR(30))  BEGIN
insert into campagency(name,address) VALUES(name,address);
END$$

DROP PROCEDURE IF EXISTS `insert_camp_val`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_camp_val` (`start_date` DATE, `end_date` DATE, `location` VARCHAR(30), `agency_id` INT)  BEGIN
insert into blood_camp(start_date,end_date,location,agency_id) VALUES(start_date,end_date,location,agency_id);
END$$

DROP PROCEDURE IF EXISTS `insert_doctor_val`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_doctor_val` (`name` VARCHAR(30), `contact` VARCHAR(30), `email` VARCHAR(50), `hospital_id` INT(11))  BEGIN
insert into doctor(name,contact,email,hospital_id) VALUES(name,contact,email,hospital_id);
END$$

DROP PROCEDURE IF EXISTS `insert_hospital_val`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_hospital_val` (`name` VARCHAR(30), `address` VARCHAR(30), `email` VARCHAR(50), `city` VARCHAR(50))  BEGIN
insert into hospital(name,address,email,city) VALUES(name,address,email,city);
END$$

DROP PROCEDURE IF EXISTS `insert_newdonors_val`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_newdonors_val` (`name` VARCHAR(30), `email` VARCHAR(30), `address` VARCHAR(30), `blood_group` VARCHAR(50), `gender` VARCHAR(50))  BEGIN
insert into newdonors(name,email,address,blood_group,gender) VALUES(name,email,address,blood_group,gender);
END$$

DROP PROCEDURE IF EXISTS `insert_newrequests_val`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_newrequests_val` (`name` VARCHAR(30), `gender` VARCHAR(30), `contact` VARCHAR(50), `blood_group` VARCHAR(30))  BEGIN
insert into newrequests(name,gender,contact,blood_group) VALUES(name,gender,contact,blood_group);
END$$

DROP PROCEDURE IF EXISTS `insert_stock_val`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_stock_val` (`blood_group` VARCHAR(30), `unit` VARCHAR(30))  BEGIN
insert into stock(blood_group,unit) VALUES(blood_group,unit);
END$$

DROP PROCEDURE IF EXISTS `insert_users_val`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_users_val` (`uname` VARCHAR(30), `password` VARCHAR(30))  BEGIN
insert into users(uname,password) VALUES(uname,password);
END$$

DROP PROCEDURE IF EXISTS `read_blood_donor_data`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `read_blood_donor_data` ()  BEGIN
SELECT * from blood_donor;
END$$

DROP PROCEDURE IF EXISTS `read_blood_receiver_data`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `read_blood_receiver_data` ()  BEGIN
SELECT * from blood_receiver;
END$$

DROP PROCEDURE IF EXISTS `read_blood_request_data`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `read_blood_request_data` ()  BEGIN
SELECT * from blood_request;
END$$

DROP PROCEDURE IF EXISTS `read_campagency_data`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `read_campagency_data` ()  BEGIN
SELECT * from campagency;
END$$

DROP PROCEDURE IF EXISTS `read_camp_data`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `read_camp_data` ()  BEGIN
SELECT * from blood_camp;
END$$

DROP PROCEDURE IF EXISTS `read_doctor_data`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `read_doctor_data` ()  BEGIN
SELECT * from doctor;
END$$

DROP PROCEDURE IF EXISTS `read_hospital_data`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `read_hospital_data` ()  BEGIN
SELECT * from hospital;
END$$

DROP PROCEDURE IF EXISTS `read_newdonors_data`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `read_newdonors_data` ()  BEGIN
SELECT * from newdonors;
END$$

DROP PROCEDURE IF EXISTS `read_newrequests_data`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `read_newrequests_data` ()  BEGIN
SELECT * from newrequests;
END$$

DROP PROCEDURE IF EXISTS `read_stock_data`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `read_stock_data` ()  BEGIN
SELECT * from stock;
END$$

DROP PROCEDURE IF EXISTS `read_users_data`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `read_users_data` ()  BEGIN
SELECT * from users;
END$$

DROP PROCEDURE IF EXISTS `update_blood_donor_val`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `update_blood_donor_val` (IN `donid` INT, `name` VARCHAR(30), `gender` VARCHAR(30), `email` VARCHAR(30), `address` VARCHAR(50), `date` VARCHAR(50), `blood_group` VARCHAR(50), `camp_id` INT(11))  BEGIN
Update blood_donor SET name=name,email=email,gender=gender,address=address,date=date,blood_group=blood_group,camp_id=camp_id where donor_id=donid;
END$$

DROP PROCEDURE IF EXISTS `update_blood_receiver_val`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `update_blood_receiver_val` (IN `recid` INT, `name` VARCHAR(30), `gender` VARCHAR(30), `contact` VARCHAR(50), `date` VARCHAR(50), `blood_group` VARCHAR(50), `stock_id` INT(11), `doctor_id` INT(11))  BEGIN
Update blood_receiver SET name=name,gender=gender,contact=contact,date=date,blood_group=blood_group,stock_id=stock_id,doctor_id=doctor_id where receiver_id=recid;
END$$

DROP PROCEDURE IF EXISTS `update_blood_request_val`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `update_blood_request_val` (IN `reqid` INT, `name` VARCHAR(30), `gender` VARCHAR(30), `contact` VARCHAR(50), `date` VARCHAR(30), `blood_group` VARCHAR(30), `stock_id` INT(11))  BEGIN
Update blood_request SET name=name,gender=gender,contact=contact,date=date,blood_group=blood_group,stock_id=stock_id where request_id=reqid;
END$$

DROP PROCEDURE IF EXISTS `update_campagency_val`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `update_campagency_val` (IN `agid` INT, `name` VARCHAR(30), `address` VARCHAR(30))  BEGIN
Update campagency SET name=name,address=address where agency_id=agid;
END$$

DROP PROCEDURE IF EXISTS `update_camp_val`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `update_camp_val` (IN `cmid` INT, `start_date` DATE, `end_date` DATE, `location` VARCHAR(30), `agency_id` INT)  BEGIN
Update blood_camp SET start_date=start_date,end_date=end_date,location=location,agency_id=agency_id where camp_id=cmid;
END$$

DROP PROCEDURE IF EXISTS `update_doctor_val`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `update_doctor_val` (IN `docid` INT, `name` VARCHAR(30), `contact` VARCHAR(30), `email` VARCHAR(50), `hospital_id` INT(11))  BEGIN
Update doctor SET name=name,contact=contact,email=email,hospital_id=hospital_id where doctor_id=docid;
END$$

DROP PROCEDURE IF EXISTS `update_hospital_val`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `update_hospital_val` (IN `hsid` INT, `name` VARCHAR(30), `address` VARCHAR(30), `email` VARCHAR(50), `city` VARCHAR(50))  BEGIN
Update hospital SET name=name,address=address,email=email,city=city where hospital_id=hsid;
END$$

DROP PROCEDURE IF EXISTS `update_newdonors_val`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `update_newdonors_val` (IN `ndid` INT, `name` VARCHAR(30), `email` VARCHAR(30), `address` VARCHAR(30), `blood_group` VARCHAR(50), `gender` VARCHAR(50))  BEGIN
Update newdonors SET name=name,email=email,address=address,blood_group=blood_group,gender=gender where newd_id=ndid;
END$$

DROP PROCEDURE IF EXISTS `update_newrequests_val`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `update_newrequests_val` (IN `rqid` INT, `name` VARCHAR(30), `gender` VARCHAR(30), `contact` VARCHAR(50), `blood_group` VARCHAR(30))  BEGIN
Update newrequests SET name=name,gender=gender,contact=contact,blood_group=blood_group where req_id=rqid;
END$$

DROP PROCEDURE IF EXISTS `update_stock_val`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `update_stock_val` (IN `stid` INT, `blood_group` VARCHAR(30), `unit` VARCHAR(30))  BEGIN
Update stock SET blood_group=blood_group,unit=unit where stock_id=stid;
END$$

DROP PROCEDURE IF EXISTS `update_users_val`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `update_users_val` (IN `uid` INT, `uname` VARCHAR(30), `password` VARCHAR(30))  BEGIN
Update users SET uname=uname,password=password where user_id=uid;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `blood_camp`
--

DROP TABLE IF EXISTS `blood_camp`;
CREATE TABLE IF NOT EXISTS `blood_camp` (
  `camp_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `location` varchar(30) NOT NULL,
  `agency_id` int UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`camp_id`),
  KEY `agency_id` (`agency_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blood_camp`
--

INSERT INTO `blood_camp` (`camp_id`, `start_date`, `end_date`, `location`, `agency_id`) VALUES
(1, '2022-11-09', '2022-11-15', 'Government Laboratory School R', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blood_donor`
--

DROP TABLE IF EXISTS `blood_donor`;
CREATE TABLE IF NOT EXISTS `blood_donor` (
  `donor_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `blood_group` varchar(50) NOT NULL,
  `camp_id` int UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`donor_id`),
  KEY `camp_id` (`camp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blood_donor`
--

INSERT INTO `blood_donor` (`donor_id`, `name`, `gender`, `email`, `address`, `date`, `blood_group`, `camp_id`) VALUES
(1, 'Jhon Smith ', '  Men  ', ' jhon123@gmail.com ', ' Dhaka', ' 2022-11-02 ', ' A+ ', 1),
(2, 'Boshir Hossen', ' Men ', 'boshirhosen@gmail.com', 'Dhanmondi', '2022-02-01', 'O+', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blood_receiver`
--

DROP TABLE IF EXISTS `blood_receiver`;
CREATE TABLE IF NOT EXISTS `blood_receiver` (
  `receiver_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `blood_group` varchar(50) NOT NULL,
  `stock_id` int UNSIGNED DEFAULT NULL,
  `doctor_id` int UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`receiver_id`),
  KEY `stock_id` (`stock_id`),
  KEY `doctor_id` (`doctor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blood_receiver`
--

INSERT INTO `blood_receiver` (`receiver_id`, `name`, `gender`, `contact`, `date`, `blood_group`, `stock_id`, `doctor_id`) VALUES
(2, 'jamal', ' Men ', ' 01234567 ', '2022-11-02', 'A+', 2, 1),
(4, 'Karim', ' Men ', ' 012345 ', '2022-02-01', 'A+', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `blood_request`
--

DROP TABLE IF EXISTS `blood_request`;
CREATE TABLE IF NOT EXISTS `blood_request` (
  `request_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `blood_group` varchar(50) NOT NULL,
  `stock_id` int UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`request_id`),
  KEY `stock_id` (`stock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campagency`
--

DROP TABLE IF EXISTS `campagency`;
CREATE TABLE IF NOT EXISTS `campagency` (
  `agency_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  PRIMARY KEY (`agency_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `campagency`
--

INSERT INTO `campagency` (`agency_id`, `name`, `address`) VALUES
(1, 'Red Crescent Blood Bank', '7/5, Aurongzeb Road, Mohammadp');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `doctor_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hospital_id` int UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`doctor_id`),
  KEY `hospital_id` (`hospital_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `name`, `contact`, `email`, `hospital_id`) VALUES
(1, 'kamal Hossen', '01890076420', 'kamalhossen@gmail.com', 1),
(2, ' Karim ', '  012345678 ', ' karim@gmail.com ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

DROP TABLE IF EXISTS `hospital`;
CREATE TABLE IF NOT EXISTS `hospital` (
  `hospital_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  PRIMARY KEY (`hospital_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hospital_id`, `name`, `address`, `email`, `city`) VALUES
(1, 'SKF major hospital', 'Dhanmondi', 'skf1999@gmail.com', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `newdonors`
--

DROP TABLE IF EXISTS `newdonors`;
CREATE TABLE IF NOT EXISTS `newdonors` (
  `newd_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `blood_group` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  PRIMARY KEY (`newd_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `newdonors`
--

INSERT INTO `newdonors` (`newd_id`, `name`, `email`, `address`, `blood_group`, `gender`) VALUES
(1, 'jamal', 'jamal@gmail.com', 'Dhanmondi', 'A+', 'on'),
(7, ' kamal', ' kamal@gmail.com ', ' Dhanmondi ', ' A+ ', ' on '),
(9, 'abc', 'jamal@gmail.com', 'Dhanmondi', 'A+', 'Men');

-- --------------------------------------------------------

--
-- Table structure for table `newrequests`
--

DROP TABLE IF EXISTS `newrequests`;
CREATE TABLE IF NOT EXISTS `newrequests` (
  `req_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `blood_group` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  PRIMARY KEY (`req_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `newrequests`
--

INSERT INTO `newrequests` (`req_id`, `name`, `contact`, `blood_group`, `gender`) VALUES
(1, 'Karim', ' B+ ', ' Men ', '  012345  ');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `stock_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `blood_group` varchar(30) NOT NULL,
  `unit` varchar(30) NOT NULL,
  PRIMARY KEY (`stock_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `blood_group`, `unit`) VALUES
(2, '  B+  ', '   3   '),
(3, 'O-', ' 2 '),
(4, 'A+', '1'),
(5, 'AB+', '  3'),
(6, 'B+', '7'),
(7, ' A- ', '   6   ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `uname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `uname`, `password`) VALUES
(3, ' abc ', '  123abcde  '),
(4, '  jamal  ', '  12abcd  ');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blood_camp`
--
ALTER TABLE `blood_camp`
  ADD CONSTRAINT `blood_camp_ibfk_1` FOREIGN KEY (`agency_id`) REFERENCES `campagency` (`agency_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `blood_donor`
--
ALTER TABLE `blood_donor`
  ADD CONSTRAINT `blood_donor_ibfk_1` FOREIGN KEY (`camp_id`) REFERENCES `blood_camp` (`camp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `blood_receiver`
--
ALTER TABLE `blood_receiver`
  ADD CONSTRAINT `blood_receiver_ibfk_1` FOREIGN KEY (`stock_id`) REFERENCES `stock` (`stock_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `blood_receiver_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `blood_request`
--
ALTER TABLE `blood_request`
  ADD CONSTRAINT `blood_request_ibfk_1` FOREIGN KEY (`stock_id`) REFERENCES `stock` (`stock_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
