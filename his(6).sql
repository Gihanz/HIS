-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 13, 2016 at 12:00 ප.ව.
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `his`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `clean_tables`()
BEGIN

INSERT INTO mri_arc_specimen SELECT * FROM mri_specimen WHERE MONTH(specimen_received_date) =MONTH(DATE_SUB(NOW(), INTERVAL 1 MONTH));

INSERT INTO mri_arc_test_request SELECT * FROM mri_test_request WHERE MONTH(test_request_date) =MONTH(DATE_SUB(NOW(), INTERVAL 1 MONTH));

INSERT INTO mri_arc_parent_result SELECT mri_parent_result.* FROM mri_parent_result,mri_test_request WHERE mri_parent_result.ftest_request_id =mri_test_request.test_request_id AND MONTH(test_request_date) =MONTH(DATE_SUB(NOW(), INTERVAL 1 MONTH)) ;

INSERT INTO mri_arc_binary_results SELECT mri_binary_results.* FROM mri_binary_results,mri_test_request WHERE mri_binary_results.ftest_request_id =mri_test_request.test_request_id AND MONTH(test_request_date) =MONTH(DATE_SUB(NOW(), INTERVAL 1 MONTH)) ;


INSERT INTO mri_arc_sub_field_result SELECT mri_sub_field_result.* FROM mri_sub_field_result,mri_test_request WHERE mri_sub_field_result.ftest_request_id =mri_test_request.test_request_id AND MONTH(test_request_date) =MONTH(DATE_SUB(NOW(), INTERVAL 1 MONTH)) ;

DELETE FROM mri_sub_field_result WHERE ftest_request_id IN (SELECT ftest_request_id FROM mri_test_request WHERE MONTH(test_request_date) =MONTH(DATE_SUB(NOW(), INTERVAL 1 MONTH)));

DELETE FROM mri_binary_results WHERE ftest_request_id IN (SELECT ftest_request_id FROM mri_test_request WHERE MONTH(test_request_date) =MONTH(DATE_SUB(NOW(), INTERVAL 1 MONTH)));

DELETE FROM mri_parent_result WHERE ftest_request_id IN (SELECT ftest_request_id FROM mri_test_request WHERE MONTH(test_request_date) =MONTH(DATE_SUB(NOW(), INTERVAL 1 MONTH)));

DELETE FROM mri_test_request WHERE MONTH(test_request_date) = MONTH(DATE_SUB(NOW(), INTERVAL 1 MONTH));

DELETE FROM mri_specimen WHERE MONTH(specimen_received_date) =MONTH(DATE_SUB(NOW(), INTERVAL 1 MONTH));

ALTER TABLE mri_sub_field_result AUTO_INCREMENT = 1;
ALTER TABLE mri_binary_results AUTO_INCREMENT = 1;
ALTER TABLE mri_parent_result AUTO_INCREMENT = 1;
ALTER TABLE mri_test_request AUTO_INCREMENT = 1;
ALTER TABLE mri_specimen AUTO_INCREMENT = 1;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `test_clean_tables`()
BEGIN
INSERT INTO mri_arc_specimen SELECT * FROM mri_specimen WHERE MONTH(specimen_received_date) =MONTH(DATE_SUB(NOW(), INTERVAL 1 MONTH));

INSERT INTO mri_arc_test_request SELECT * FROM mri_test_request WHERE MONTH(test_request_date) =MONTH(DATE_SUB(NOW(), INTERVAL 1 MONTH));

INSERT INTO mri_arc_parent_result SELECT mri_parent_result.* FROM mri_parent_result,mri_test_request WHERE mri_parent_result.ftest_request_id =mri_test_request.test_request_id AND MONTH(test_request_date) =MONTH(DATE_SUB(NOW(), INTERVAL 1 MONTH)) ;

INSERT INTO mri_arc_binary_results SELECT mri_binary_results.* FROM mri_binary_results,mri_test_request WHERE mri_binary_results.ftest_request_id =mri_test_request.test_request_id AND MONTH(test_request_date) =MONTH(DATE_SUB(NOW(), INTERVAL 1 MONTH)) ;


INSERT INTO mri_arc_sub_field_result SELECT mri_sub_field_result.* FROM mri_sub_field_result,mri_test_request WHERE mri_sub_field_result.ftest_request_id =mri_test_request.test_request_id AND MONTH(test_request_date) =MONTH(DATE_SUB(NOW(), INTERVAL 1 MONTH)) ;

DELETE FROM mri_sub_field_result WHERE ftest_request_id IN (SELECT ftest_request_id FROM mri_test_request WHERE MONTH(test_request_date) =MONTH(DATE_SUB(NOW(), INTERVAL 1 MONTH)));

DELETE FROM mri_binary_results WHERE ftest_request_id IN (SELECT ftest_request_id FROM mri_test_request WHERE MONTH(test_request_date) =MONTH(DATE_SUB(NOW(), INTERVAL 1 MONTH)));

DELETE FROM mri_parent_result WHERE ftest_request_id IN (SELECT ftest_request_id FROM mri_test_request WHERE MONTH(test_request_date) =MONTH(DATE_SUB(NOW(), INTERVAL 1 MONTH)));

DELETE FROM mri_test_request WHERE MONTH(test_request_date) = MONTH(DATE_SUB(NOW(), INTERVAL 1 MONTH));

DELETE FROM mri_specimen WHERE MONTH(specimen_received_date) =MONTH(DATE_SUB(NOW(), INTERVAL 1 MONTH));

ALTER TABLE mri_sub_field_result AUTO_INCREMENT = 1;
ALTER TABLE mri_binary_results AUTO_INCREMENT = 1;
ALTER TABLE mri_parent_result AUTO_INCREMENT = 1;
ALTER TABLE mri_test_request AUTO_INCREMENT = 1;
ALTER TABLE mri_specimen AUTO_INCREMENT = 1;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `mri_arc_binary_results`
--

CREATE TABLE IF NOT EXISTS `mri_arc_binary_results` (
  `result_id` int(11) NOT NULL,
  `result_value` int(11) DEFAULT NULL,
  `ftest_request_id` int(11) DEFAULT NULL,
  KEY `fk_mri_binary_results_idx` (`ftest_request_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mri_arc_binary_results`
--

INSERT INTO `mri_arc_binary_results` (`result_id`, `result_value`, `ftest_request_id`) VALUES
(187, 1, 87),
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mri_arc_parent_result`
--

CREATE TABLE IF NOT EXISTS `mri_arc_parent_result` (
  `parent_result_id` int(11) NOT NULL,
  `parent_result_value` varchar(255) NOT NULL,
  `ftest_parent_field_id` int(11) DEFAULT NULL,
  `ftest_request_id` int(11) DEFAULT NULL,
  KEY `fk1_mri_parent_result` (`ftest_parent_field_id`),
  KEY `fk2_mri_parent_result` (`ftest_request_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mri_arc_parent_result`
--

INSERT INTO `mri_arc_parent_result` (`parent_result_id`, `parent_result_value`, `ftest_parent_field_id`, `ftest_request_id`) VALUES
(4, 'er', 1, 87),
(1, 'test', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mri_arc_specimen`
--

CREATE TABLE IF NOT EXISTS `mri_arc_specimen` (
  `specimen_id` int(11) NOT NULL,
  `specimen_barcode` varchar(300) DEFAULT NULL,
  `remarks` varchar(300) DEFAULT NULL,
  `specimen_received_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `specimen_collected_person` varchar(300) DEFAULT NULL,
  `specimen_delivered_department_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `stored_location` varchar(11) NOT NULL,
  `stored_or_destroyed` varchar(11) NOT NULL,
  `fspecimen_type_id` int(11) NOT NULL,
  PRIMARY KEY (`specimen_id`,`specimen_received_date`),
  KEY `fk2_mri_specimen` (`fspecimen_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mri_arc_specimen`
--

INSERT INTO `mri_arc_specimen` (`specimen_id`, `specimen_barcode`, `remarks`, `specimen_received_date`, `specimen_collected_person`, `specimen_delivered_department_date`, `stored_location`, `stored_or_destroyed`, `fspecimen_type_id`) VALUES
(1, '23233', 'test', '2015-11-16 13:00:00', 'ff', '0000-00-00 00:00:00', 'test', 'distroy', 1),
(13, '', 'ASAP', '2015-11-17 02:00:00', 'Mafais Saheed', '2015-09-07 02:00:00', 'counter', 'stored', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mri_arc_sub_field_result`
--

CREATE TABLE IF NOT EXISTS `mri_arc_sub_field_result` (
  `sub_result_id` int(11) NOT NULL,
  `sub_result_value` varchar(255) NOT NULL,
  `ftest_sub_field_id` int(11) DEFAULT NULL,
  `ftest_request_id` int(11) DEFAULT NULL,
  KEY `fk1_lab_sub_field_result` (`ftest_sub_field_id`),
  KEY `fk2_lab_sub_field_result` (`ftest_request_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mri_arc_sub_field_result`
--

INSERT INTO `mri_arc_sub_field_result` (`sub_result_id`, `sub_result_value`, `ftest_sub_field_id`, `ftest_request_id`) VALUES
(0, 'e', 1, 87),
(1, 'test', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mri_arc_test_request`
--

CREATE TABLE IF NOT EXISTS `mri_arc_test_request` (
  `test_request_id` int(11) NOT NULL,
  `increment` int(11) NOT NULL,
  `request_id` varchar(100) NOT NULL,
  `fpatient_id` int(11) NOT NULL,
  `is_hospital_patient` tinyint(1) NOT NULL,
  `fhospital_patient_id` int(11) DEFAULT NULL,
  `fbundle_id` int(11) DEFAULT NULL,
  `comments` varchar(50) DEFAULT NULL,
  `test_priority` varchar(20) DEFAULT NULL,
  `test_request_type` varchar(20) DEFAULT NULL,
  `test_request_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `test_due_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(11) DEFAULT '0',
  `fspecimen_id` int(11) DEFAULT NULL,
  `flaboratory_test_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`test_request_id`,`test_request_date`),
  KEY `patient_id` (`fpatient_id`,`fhospital_patient_id`,`fbundle_id`),
  KEY `hospital_patient_id` (`fhospital_patient_id`),
  KEY `bundle_id` (`fbundle_id`),
  KEY `fk5_mri_test_request` (`flaboratory_test_id`),
  KEY `fk_mri_arc_test_request_mri_arc_specimen1_idx` (`fspecimen_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mri_arc_test_request`
--

INSERT INTO `mri_arc_test_request` (`test_request_id`, `increment`, `request_id`, `fpatient_id`, `is_hospital_patient`, `fhospital_patient_id`, `fbundle_id`, `comments`, `test_priority`, `test_request_type`, `test_request_date`, `test_due_date`, `status`, `fspecimen_id`, `flaboratory_test_id`) VALUES
(1, 12, '1', 2, 1, 1, 1, 'comment', '1', '1', '2015-11-22 13:00:00', '0000-00-00 00:00:00', 0, 1, 1),
(87, 12, '1', 1, 1, 1, 1, 'test', '2', '1', '2015-11-16 13:00:00', '0000-00-00 00:00:00', 1, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mri_binary_results`
--

CREATE TABLE IF NOT EXISTS `mri_binary_results` (
  `result_id` int(11) NOT NULL AUTO_INCREMENT,
  `printed_time` datetime DEFAULT NULL,
  `result_value` varchar(20) DEFAULT NULL,
  `ftest_request_id` int(11) DEFAULT NULL,
  `result_comment` varchar(1000) DEFAULT NULL,
  `result_entered_by` int(11) DEFAULT NULL,
  `verified_by` int(11) DEFAULT NULL,
  `printed_by` int(11) DEFAULT NULL,
  `entered_time` datetime DEFAULT NULL,
  `verified_time` datetime DEFAULT NULL,
  PRIMARY KEY (`result_id`),
  KEY `fk_mri_binary_results_idx` (`ftest_request_id`),
  KEY `result_entered_by` (`result_entered_by`,`verified_by`),
  KEY `verified_by` (`verified_by`),
  KEY `printed_by` (`printed_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `mri_binary_results`
--

INSERT INTO `mri_binary_results` (`result_id`, `printed_time`, `result_value`, `ftest_request_id`, `result_comment`, `result_entered_by`, `verified_by`, `printed_by`, `entered_time`, `verified_time`) VALUES
(20, NULL, 'Positive', 195, 'defult  test comment', 33, 33, NULL, NULL, NULL),
(21, NULL, 'Positive', 196, 'full  mit mit ', 33, NULL, NULL, NULL, NULL),
(22, NULL, 'Negative', 197, 'Negative', 33, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mri_bundle`
--

CREATE TABLE IF NOT EXISTS `mri_bundle` (
  `bundle_id` int(11) NOT NULL AUTO_INCREMENT,
  `fhospital_id` int(11) DEFAULT NULL,
  `request_dateTime` datetime DEFAULT CURRENT_TIMESTAMP,
  `no_of_requests` int(11) DEFAULT NULL,
  PRIMARY KEY (`bundle_id`),
  KEY `hospital_id` (`fhospital_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `mri_bundle`
--

INSERT INTO `mri_bundle` (`bundle_id`, `fhospital_id`, `request_dateTime`, `no_of_requests`) VALUES
(1, 1, NULL, 0),
(2, 2, NULL, 2),
(3, 3, NULL, 1),
(4, 1, NULL, 1),
(5, 3, NULL, 1),
(6, 1, NULL, 1),
(7, 1, NULL, 1),
(8, 2, NULL, 1),
(9, NULL, NULL, 0),
(10, 1, NULL, 1),
(11, NULL, NULL, 0),
(12, 1, NULL, 2),
(13, NULL, NULL, 0),
(14, 1, NULL, 1),
(15, 1, NULL, 1),
(16, 1, NULL, 1),
(17, 1, NULL, 1),
(18, 1, NULL, 1),
(19, NULL, NULL, 0),
(20, 1, NULL, 4),
(21, 1, NULL, 4),
(22, 1, NULL, 1),
(23, 1, NULL, 1),
(24, 1, NULL, 1),
(25, 1, NULL, 1),
(26, 1, NULL, 1),
(27, 1, NULL, 1),
(28, 1, NULL, 1),
(29, 1, NULL, 1),
(30, 1, NULL, 1),
(31, 1, NULL, 1),
(32, 1, NULL, 1),
(33, 1, NULL, 1),
(34, 1, NULL, 1),
(35, 1, NULL, 1),
(36, 1, NULL, 1),
(37, 1, NULL, 1),
(38, 2, NULL, 1),
(39, 1, NULL, 1),
(40, 2, NULL, 1),
(41, 2, NULL, 1),
(42, 2, NULL, 2),
(43, 1, NULL, 1),
(44, 1, NULL, 1),
(45, 2, NULL, 1),
(46, 2, NULL, 1),
(47, NULL, NULL, 0),
(48, 2, NULL, 1),
(49, 2, NULL, 1),
(50, 2, NULL, 1),
(51, 2, NULL, 1),
(52, 2, NULL, 1),
(53, 2, NULL, 1),
(54, 2, NULL, 1),
(55, 2, NULL, 2),
(56, 1, NULL, 1),
(57, 3, NULL, 2),
(58, 1, NULL, 1),
(59, 1, NULL, 1),
(60, 1, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `mri_department`
--

CREATE TABLE IF NOT EXISTS `mri_department` (
  `department_id` int(11) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(300) NOT NULL,
  `location` varchar(100) NOT NULL,
  `laboratory_counts` int(10) DEFAULT NULL,
  `number_of_mlt` int(10) DEFAULT NULL,
  `number_of_consultant` int(10) DEFAULT NULL,
  `fdept_incharge_id` int(11) DEFAULT NULL,
  `contact_no` int(11) NOT NULL,
  PRIMARY KEY (`department_id`),
  KEY `fdept_incharge_id` (`fdept_incharge_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `mri_department`
--

INSERT INTO `mri_department` (`department_id`, `department_name`, `location`, `laboratory_counts`, `number_of_mlt`, `number_of_consultant`, `fdept_incharge_id`, `contact_no`) VALUES
(1, ' Virology', ' Building A', 5, 5, 5, 1, 0),
(2, ' Mycology', ' Building Ma', 5, 3, 4, 1, 0),
(3, ' Parasitology', ' Building A', 3, 5, 4, 1, 0),
(4, 'Biochemistry', 'Building Ma', 2, 3, 4, 1, 0),
(5, 'Immunology', 'Building A', 3, 4, 4, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mri_designation`
--

CREATE TABLE IF NOT EXISTS `mri_designation` (
  `designation_id` int(11) NOT NULL AUTO_INCREMENT,
  `designation_name` varchar(100) NOT NULL,
  PRIMARY KEY (`designation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mri_employee`
--

CREATE TABLE IF NOT EXISTS `mri_employee` (
  `employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `address` varchar(300) NOT NULL,
  `contact_no_1` varchar(20) NOT NULL,
  `contact_no_2` varchar(20) NOT NULL,
  `extension` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `mri_employee`
--

INSERT INTO `mri_employee` (`employee_id`, `name`, `age`, `sex`, `address`, `contact_no_1`, `contact_no_2`, `extension`, `email`, `nic`, `is_active`) VALUES
(1, 'Priyankara Dissanayake', 25, 'M', 'Ganemulla', '0719488788', '0711238788', '111', 'Priyankara@gmail.com', '901043655V', 1),
(2, 'Dushyantha Herath', 25, 'M', 'kurunegala', '0719422788', '0719482388', '112', 'Dushyantha@gmail.com', '781043655V', 1),
(3, 'Shamal Fernando', 25, 'M', 'Ganemulla', '0719488788', '0719443488', '113', 'Shamal@gmail.com', '881043655V', 1),
(4, 'Mafais Saheed', 25, 'M', 'Panadura', '0719482388', '0719488788', '114', 'Mafais@gmail.com', '891043655V', 1),
(5, 'Chamida Gunawardana', 25, 'M', 'Ganemulla', '0719488788', '0719433788', '115', 'Chamida@gmail.com', '791043655V', 1),
(6, 'Pragash', 26, 'M', 'Colombo', '0711234554', '0112245665', '5665', 'pragash@gmail.com', '890876656V', 0),
(7, 'Ruwani', 30, 'F', 'Negombo', '0713344556', '0312266775', '6775', 'ruwani@gmail.com', '758976564V', 0),
(9, 'test  1', 12, 'Male', 'address', '2222', '2222', '2', 'ksa@rt.com', 'ff', 0),
(10, 'test 2', 11, 'Female', 'address', '21312312', '12312123', '2', ' mafais@tt.com', '892520119V', 0),
(11, 'test 3', 33, 'Female', 'address', '2321', '123', '213', 'ff@gg.vo', '892520119V', 0),
(12, 'admin', 4, 'Male', 'd', 'sd', 'df', 'df', 'd', '4', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mri_employee_workin`
--

CREATE TABLE IF NOT EXISTS `mri_employee_workin` (
  `employee_workin_id` int(11) NOT NULL AUTO_INCREMENT,
  `femployee_id` int(11) NOT NULL,
  `fdepartment_id` int(11) NOT NULL,
  `flaboratory_id` int(11) NOT NULL,
  `fdesignation_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `description` varchar(10) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`employee_workin_id`),
  KEY `femployee_id` (`femployee_id`,`fdepartment_id`,`flaboratory_id`,`fdesignation_id`),
  KEY `fdepartment_id` (`fdepartment_id`,`flaboratory_id`,`fdesignation_id`),
  KEY `flaboratory_id` (`flaboratory_id`),
  KEY `fdesignation_id` (`fdesignation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mri_external_patient`
--

CREATE TABLE IF NOT EXISTS `mri_external_patient` (
  `external_patient_id` int(11) NOT NULL,
  `fpatient_id` int(11) NOT NULL,
  `address` varchar(300) NOT NULL,
  `contact_no_1` varchar(50) NOT NULL,
  `contact_no_2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mri_hospital`
--

CREATE TABLE IF NOT EXISTS `mri_hospital` (
  `hospital_id` int(11) NOT NULL AUTO_INCREMENT,
  `hospital_name` varchar(300) NOT NULL,
  `address` varchar(300) NOT NULL,
  `location` varchar(300) NOT NULL,
  `contact_no_1` varchar(50) NOT NULL,
  `contact_no_2` varchar(50) NOT NULL,
  PRIMARY KEY (`hospital_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `mri_hospital`
--

INSERT INTO `mri_hospital` (`hospital_id`, `hospital_name`, `address`, `location`, `contact_no_1`, `contact_no_2`) VALUES
(1, 'Hemas Hospital, Wattala', 'Hemas Hospital, Wattala', 'Wattala', '0112284793', '0118474834'),
(2, 'Hemas Hospital,Thalawathugoda', 'Hemas Hospital, Thalawathugoda', 'Thalawathugoda', '0112249343', '0112834934'),
(3, 'Nawaloka Hospital', 'Nawaloka Hospital, Colombo', 'Colombo', '0112958582', '0118474834'),
(4, 'Delmon Hospital', 'Delmon Hospital, Thalawathugoda', 'Wellawatta', '0112249343', '0112834934'),
(5, 'Durduns Hospital', 'Durduns Hospital, Colombo3', 'Colombo', '0112958582', '0118474834');

-- --------------------------------------------------------

--
-- Table structure for table `mri_hospital_patient`
--

CREATE TABLE IF NOT EXISTS `mri_hospital_patient` (
  `hospital_patient_id` int(11) NOT NULL AUTO_INCREMENT,
  `fpatient_id` int(11) NOT NULL,
  `fhospital_id` int(11) NOT NULL,
  `bht_no` varchar(50) NOT NULL,
  `ward` varchar(50) NOT NULL,
  PRIMARY KEY (`hospital_patient_id`),
  KEY `patient_id` (`fpatient_id`,`fhospital_id`),
  KEY `hospital_id` (`fhospital_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `mri_hospital_patient`
--

INSERT INTO `mri_hospital_patient` (`hospital_patient_id`, `fpatient_id`, `fhospital_id`, `bht_no`, `ward`) VALUES
(1, 1, 1, 'B101', 'Ward1 fff'),
(2, 19, 2, '124', '344'),
(3, 22, 1, '4', '4'),
(4, 25, 2, '12', '12'),
(5, 28, 3, '13305', '1'),
(6, 29, 1, '150', '10'),
(7, 30, 1, '12', '12'),
(8, 31, 2, '111', '22'),
(9, 32, 1, '12', '12'),
(10, 33, 2, '33', '2'),
(11, 34, 1, '12', '12'),
(12, 36, 3, '22', ''),
(13, 38, 1, '12', '12');

-- --------------------------------------------------------

--
-- Table structure for table `mri_internal_patient`
--

CREATE TABLE IF NOT EXISTS `mri_internal_patient` (
  `internal_patient_id` int(11) NOT NULL AUTO_INCREMENT,
  `fpatient_id` int(11) NOT NULL,
  `address` varchar(300) DEFAULT NULL,
  `contact_no_1` varchar(50) NOT NULL,
  `contact_no_2` varchar(50) DEFAULT NULL,
  `bht_no` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`internal_patient_id`),
  KEY `patient_id` (`fpatient_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `mri_internal_patient`
--

INSERT INTO `mri_internal_patient` (`internal_patient_id`, `fpatient_id`, `address`, `contact_no_1`, `contact_no_2`, `bht_no`) VALUES
(2, 2, 'address', '1', '1', '1'),
(3, 1, 'Colombo', '0719388722', '0719388722', '1'),
(7, 7, '16', 'test', 'Ganemulla', '24'),
(12, 16, 'addresss', '12334', '12345', '3'),
(13, 21, '', '33', '', '3'),
(14, 23, '33', '33', '33', '3'),
(15, 24, '3', '3', '', '3'),
(16, 16, 'addresss  ddd', '12334', '12345', '12'),
(17, 27, '', '12', '', '12'),
(18, 35, '', 'Address', '', '1234'),
(19, 37, '', '0775036334', '', '12');

-- --------------------------------------------------------

--
-- Table structure for table `mri_ip_config`
--

CREATE TABLE IF NOT EXISTS `mri_ip_config` (
  `ip_config_id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_config_ip` varchar(50) NOT NULL,
  `is_active` varchar(10) NOT NULL,
  PRIMARY KEY (`ip_config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mri_ip_config`
--

INSERT INTO `mri_ip_config` (`ip_config_id`, `ip_config_ip`, `is_active`) VALUES
(2, '127.0.0.1', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `mri_laboratory`
--

CREATE TABLE IF NOT EXISTS `mri_laboratory` (
  `laboratory_id` int(10) NOT NULL AUTO_INCREMENT,
  `laboratory_name` varchar(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact_no_1` varchar(10) NOT NULL,
  `contact_no_2` varchar(10) NOT NULL,
  `fdepartment_id` int(11) DEFAULT NULL,
  `flaboratory_incharge_id` int(11) NOT NULL,
  PRIMARY KEY (`laboratory_id`),
  KEY `flaboratory_incharge_id` (`flaboratory_incharge_id`),
  KEY `fk1_mri_laboratory` (`fdepartment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `mri_laboratory`
--

INSERT INTO `mri_laboratory` (`laboratory_id`, `laboratory_name`, `email`, `contact_no_1`, `contact_no_2`, `fdepartment_id`, `flaboratory_incharge_id`) VALUES
(1, 'Hepatitis', 'Hepatitis@gmail.com', '0112345476', '0112345476', 1, 1),
(2, 'Bacteriolog', 'Bacteriology@gmail.com', '0112345476', '0112345476', 1, 2),
(3, 'Leptospira', 'Leptospira@gmail.com', '0112345476', '0112345476', 1, 3),
(4, 'Dengue', 'Dengue@gmail.com', '0112345476', '0112345476', 1, 4),
(5, 'IMMUNOASSAY', 'IMMUNOASSAYS@gmail.com', '0112345476', '0112345476', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `mri_laboratory_test`
--

CREATE TABLE IF NOT EXISTS `mri_laboratory_test` (
  `laboratory_test_id` int(10) NOT NULL AUTO_INCREMENT,
  `test_full_name` varchar(300) NOT NULL,
  `test_short_name` varchar(100) NOT NULL,
  `flaboratory_id` int(10) NOT NULL,
  `is_binary` int(11) NOT NULL DEFAULT '0',
  `defult_test_comment` varchar(1000) DEFAULT NULL,
  `test_unit` varchar(20) DEFAULT NULL,
  `fspecimen_type_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`laboratory_test_id`),
  KEY `laboratory_test_id` (`laboratory_test_id`),
  KEY `fk1_mri_laboratory_test` (`flaboratory_id`),
  KEY `fspecimen_type_id` (`fspecimen_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `mri_laboratory_test`
--

INSERT INTO `mri_laboratory_test` (`laboratory_test_id`, `test_full_name`, `test_short_name`, `flaboratory_id`, `is_binary`, `defult_test_comment`, `test_unit`, `fspecimen_type_id`) VALUES
(1, 'Blood culture', 'BC', 1, 1, NULL, NULL, 3),
(2, 'Mycoplasma', 'Mycoplasma	', 2, 0, NULL, NULL, 1),
(3, 'Leptospira culture', 'LC	', 3, 0, NULL, NULL, 4),
(4, 'ASOT', 'ASOT	', 4, 0, NULL, NULL, 3),
(5, 'Arbovirus', 'Arbovirus	', 5, 0, NULL, NULL, 2),
(6, 'Arbovirus B', 'test123', 1, 0, NULL, NULL, 3),
(7, 'Dengue', 'Dengue', 1, 1, 'defult  test comment', NULL, 3),
(8, 'Infuensa', 'Infuensa', 1, 1, NULL, NULL, 4),
(9, 'test  test', 'test', 1, 0, NULL, NULL, 5),
(10, 'FBC', 'FBC', 1, 1, NULL, NULL, 6),
(11, 'binary  test ', 'binary test ', 1, 1, NULL, NULL, 3),
(12, 'test_test ', 'test_test ', 4, 1, 'testing Comment ', 'ml', 1),
(13, 'test_test ', 'test_test ', 4, 1, 'testing Comment ', 'ml', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mri_parent_result`
--

CREATE TABLE IF NOT EXISTS `mri_parent_result` (
  `parent_result_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_result_value` varchar(255) NOT NULL,
  `ftest_parent_field_id` int(11) DEFAULT NULL,
  `ftest_request_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`parent_result_id`),
  KEY `fk1_mri_parent_result` (`ftest_parent_field_id`),
  KEY `fk2_mri_parent_result` (`ftest_request_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mri_patient`
--

CREATE TABLE IF NOT EXISTS `mri_patient` (
  `patient_id` int(11) NOT NULL AUTO_INCREMENT,
  `HIN` int(11) DEFAULT NULL,
  `name` varchar(300) NOT NULL,
  `birthday` date DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `nic` varchar(50) DEFAULT NULL,
  `is_Active` tinyint(4) NOT NULL,
  `patient_type` varchar(20) NOT NULL,
  `age` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `mri_patient`
--

INSERT INTO `mri_patient` (`patient_id`, `HIN`, `name`, `birthday`, `sex`, `nic`, `is_Active`, `patient_type`, `age`) VALUES
(1, NULL, 'Nimanthi Perera ', '2015-07-04', '', '    906785687V', 1, 'External Patient', '3'),
(2, NULL, '  Thisara Perera  66', '2015-07-07', 'F', ' 872628728V', 1, 'Internal Patient', '3'),
(7, NULL, '     NIranga Priyankara 33', '1989-09-21', 'F', '  892756753V', 1, 'Internal Patient', NULL),
(16, NULL, ' Mafasis Saheed', NULL, 'M', ' 324234324V', 1, 'Internal Patient', ' '),
(19, NULL, 'Snkalpa 4', '2010-07-06', 'F', '3242343904V', 1, 'External Patient', NULL),
(21, NULL, 'kan2', NULL, '', '', 1, 'Internal Patient', NULL),
(22, NULL, 'kan2', NULL, 'F', '', 1, 'External Patient', NULL),
(23, NULL, 'kan3', NULL, '', '', 1, 'Internal Patient', NULL),
(24, NULL, 'pp', NULL, '', '', 1, 'Internal Patient', '44-5-5'),
(25, NULL, 'new pa', NULL, '', '', 1, 'External Patient', '12-12-12'),
(27, NULL, 'patient knishka', NULL, 'F', '', 1, 'Internal Patient', '12 y-12m-12d'),
(28, NULL, 'msf sakira', NULL, 'F', '', 1, 'External Patient', '23 y-m-d'),
(29, NULL, 'Joge', NULL, 'M', '', 1, 'External Patient', '32 y-m-d'),
(30, NULL, 'thiushani desilva', NULL, '', '', 1, 'External Patient', ' y-1m-d'),
(31, NULL, 'test patient ', NULL, 'F', '', 1, 'External Patient', '12 y-12m-d'),
(32, 32, ' test 433', NULL, 'F', ' 33', 1, 'External Patient', ' 22 y-11m-d'),
(33, 33, '  test user 11', NULL, 'M', '   12', 1, 'External Patient', '  12y-23m-2d'),
(34, 34, '  kancana  Sankalpa Gunathilaka', NULL, '', '  ', 1, 'External Patient', '   y-33m-123d'),
(35, 35, 'internal patient `', NULL, 'M', '', 1, 'Internal Patient', '12 y-m-d'),
(36, 36, 'test patine ', NULL, 'M', '22', 1, 'External Patient', ' y-22m-d'),
(37, 37, 'internal 2', NULL, 'M', '', 1, 'Internal Patient', '12 y-m-d'),
(38, 38, 'kancana  Sankalpa Gunathilaka', NULL, 'M', '', 1, 'External Patient', '12 y-m-d');

-- --------------------------------------------------------

--
-- Table structure for table `mri_specimen`
--

CREATE TABLE IF NOT EXISTS `mri_specimen` (
  `specimen_id` int(11) NOT NULL AUTO_INCREMENT,
  `specimen_barcode` varchar(300) DEFAULT NULL,
  `remarks` varchar(300) DEFAULT NULL,
  `specimen_received_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `specimen_collected_person` varchar(300) DEFAULT NULL,
  `specimen_delivered_department_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `stored_location` varchar(11) NOT NULL,
  `stored_or_destroyed` varchar(11) NOT NULL,
  `fspecimen_type_id` int(11) NOT NULL,
  `inserted_by` int(11) DEFAULT NULL,
  `insert_datetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`specimen_id`),
  KEY `fk2_mri_specimen` (`fspecimen_type_id`),
  KEY `inserted_by` (`inserted_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

--
-- Dumping data for table `mri_specimen`
--

INSERT INTO `mri_specimen` (`specimen_id`, `specimen_barcode`, `remarks`, `specimen_received_date`, `specimen_collected_person`, `specimen_delivered_department_date`, `stored_location`, `stored_or_destroyed`, `fspecimen_type_id`, `inserted_by`, `insert_datetime`) VALUES
(74, '', '', '2016-07-09 18:30:00', 'admin', '2016-07-09 18:30:00', '', 'Accepted', 3, 33, '2016-07-10 06:21:55'),
(75, '', '', '2016-07-09 18:30:00', 'admin', '2016-07-09 18:30:00', '', 'Accepted', 3, 33, '2016-07-10 06:37:38'),
(76, '', 'Remarks', '2016-07-09 18:30:00', 'admin', '2016-07-09 18:30:00', '', 'Accepted', 3, 33, '2016-07-10 06:40:55'),
(77, '', '', '2016-07-09 18:30:00', 'admin', '2016-07-09 18:30:00', '', 'Accepted', 2, 33, '2016-07-10 08:01:44'),
(78, '', '', '2016-07-10 18:30:00', 'Chamida Gunawardana', '2016-07-10 18:30:00', '', 'Accepted', 6, 34, '2016-07-11 06:17:05'),
(79, '', '', '2016-07-10 18:30:00', 'Chamida Gunawardana', '2016-07-10 18:30:00', '', 'Accepted', 3, 34, '2016-07-11 17:52:05'),
(80, '', '', '2016-07-12 18:30:00', 'Chamida Gunawardana', '2016-07-12 18:30:00', '', 'Accepted', 3, 34, '2016-07-13 00:14:00');

-- --------------------------------------------------------

--
-- Table structure for table `mri_specimen_type`
--

CREATE TABLE IF NOT EXISTS `mri_specimen_type` (
  `specimen_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `specimen_name` varchar(11) NOT NULL,
  PRIMARY KEY (`specimen_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `mri_specimen_type`
--

INSERT INTO `mri_specimen_type` (`specimen_type_id`, `specimen_name`) VALUES
(1, 'Blood'),
(2, 'Urine'),
(3, 'Serum'),
(4, 'Cultures'),
(5, 'Sputum'),
(6, 'Cultures');

-- --------------------------------------------------------

--
-- Table structure for table `mri_sub_field_result`
--

CREATE TABLE IF NOT EXISTS `mri_sub_field_result` (
  `sub_result_id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_result_value` varchar(255) NOT NULL,
  `ftest_sub_field_id` int(11) DEFAULT NULL,
  `ftest_request_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`sub_result_id`),
  KEY `fk1_lab_sub_field_result` (`ftest_sub_field_id`),
  KEY `fk2_lab_sub_field_result` (`ftest_request_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mri_test_parent_fields`
--

CREATE TABLE IF NOT EXISTS `mri_test_parent_fields` (
  `test_parent_field_id` int(11) NOT NULL AUTO_INCREMENT,
  `test_parent_field_name` varchar(11) NOT NULL,
  `flaboratory_test_id` int(100) NOT NULL,
  PRIMARY KEY (`test_parent_field_id`),
  KEY `fk1_mri_test_parent_fields` (`flaboratory_test_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `mri_test_parent_fields`
--

INSERT INTO `mri_test_parent_fields` (`test_parent_field_id`, `test_parent_field_name`, `flaboratory_test_id`) VALUES
(1, 'Pathogens', 1),
(2, 'Testing', 2),
(3, 'aaa', 6),
(4, 'WBC', 10),
(5, 'RBC', 10),
(6, 'Platelets', 10),
(7, 'test feild', 9);

-- --------------------------------------------------------

--
-- Table structure for table `mri_test_parent_field_range`
--

CREATE TABLE IF NOT EXISTS `mri_test_parent_field_range` (
  `test_parent_field_range_id` int(11) NOT NULL AUTO_INCREMENT,
  `gender` varchar(10) NOT NULL,
  `minage` int(11) NOT NULL,
  `unit` varchar(15) DEFAULT NULL,
  `min_val` double NOT NULL,
  `max_val` double NOT NULL,
  `max_age` int(11) DEFAULT NULL,
  `ftest_parent_field_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`test_parent_field_range_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `mri_test_parent_field_range`
--

INSERT INTO `mri_test_parent_field_range` (`test_parent_field_range_id`, `gender`, `minage`, `unit`, `min_val`, `max_val`, `max_age`, `ftest_parent_field_id`) VALUES
(1, 'Male', 25, 'g/ml', 120, 200, 150, 1),
(2, 'Female', 25, 'g/ml', 120, 180, 150, 1),
(3, 'Male', 25, 'g/ml', 30, 120, 100, 2),
(4, 'Male', 12, 'g/ml', 100, 150, 100, 3),
(5, 'Male', 3, '12', 2, 2, 2, 1),
(6, 'Male', 3, '12', 2, 2, 2, 1),
(7, 'Male', 2, 'ml', 12, 123, 25, 4),
(8, 'Male', 2, 'ml', 12, 123, 25, 5),
(9, 'Male', 2, 'ml', 12, 123, 25, 6),
(10, 'Male', 12, 'ml', 4, 12, 50, 7),
(11, 'Male', 12, 'ml', 4, 12, 50, 7);

-- --------------------------------------------------------

--
-- Table structure for table `mri_test_request`
--

CREATE TABLE IF NOT EXISTS `mri_test_request` (
  `test_request_id` int(11) NOT NULL AUTO_INCREMENT,
  `increment` int(11) NOT NULL,
  `request_id` varchar(100) NOT NULL,
  `fpatient_id` int(11) NOT NULL,
  `is_hospital_patient` tinyint(1) NOT NULL,
  `fhospital_patient_id` int(11) DEFAULT NULL,
  `fbundle_id` int(11) DEFAULT NULL,
  `comments` varchar(1000) DEFAULT NULL,
  `test_priority` varchar(20) DEFAULT NULL,
  `test_request_type` varchar(20) DEFAULT NULL,
  `test_request_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `test_due_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(11) DEFAULT '0',
  `fspecimen_id` int(11) DEFAULT NULL,
  `flaboratory_test_id` int(11) DEFAULT NULL,
  `requested_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`test_request_id`),
  KEY `patient_id` (`fpatient_id`,`fhospital_patient_id`,`fbundle_id`),
  KEY `hospital_patient_id` (`fhospital_patient_id`),
  KEY `bundle_id` (`fbundle_id`),
  KEY `fspecimen_id` (`fspecimen_id`),
  KEY `fk5_mri_test_request` (`flaboratory_test_id`),
  KEY `requested_by` (`requested_by`),
  KEY `requested_by_2` (`requested_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=210 ;

--
-- Dumping data for table `mri_test_request`
--

INSERT INTO `mri_test_request` (`test_request_id`, `increment`, `request_id`, `fpatient_id`, `is_hospital_patient`, `fhospital_patient_id`, `fbundle_id`, `comments`, `test_priority`, `test_request_type`, `test_request_date`, `test_due_date`, `status`, `fspecimen_id`, `flaboratory_test_id`, `requested_by`) VALUES
(195, 1, '1A', 35, 0, NULL, NULL, '\nrejet - by admin-(Admin)', 'Medium', NULL, '2016-07-09 18:30:00', '2016-07-09 18:30:00', 3, NULL, 7, 33),
(196, 2, '2A', 37, 0, NULL, NULL, '', 'Medium', NULL, '2016-07-09 18:30:00', '2016-07-09 18:30:00', 1, NULL, 1, 33),
(197, 3, '3A', 7, 0, NULL, NULL, '', 'Medium', NULL, '2016-07-09 18:30:00', '2016-07-09 18:30:00', 1, 77, 1, 33),
(198, 4, '4A', 19, 0, NULL, NULL, '', 'Medium', NULL, '2016-07-09 18:30:00', '2016-07-09 18:30:00', 0, NULL, 1, 33),
(199, 4, '4B', 19, 0, NULL, NULL, '', 'Medium', NULL, '2016-07-09 18:30:00', '2016-07-09 18:30:00', 0, NULL, 1, 33),
(200, 5, '5A', 19, 0, NULL, NULL, '', 'Medium', NULL, '2016-07-09 18:30:00', '2016-07-09 18:30:00', 0, NULL, 1, 33),
(201, 6, '6A', 27, 0, NULL, NULL, '', 'Medium', NULL, '2016-07-09 18:30:00', '2016-07-09 18:30:00', 0, NULL, 1, 33),
(202, 7, '7A', 16, 0, NULL, NULL, '', 'Medium', NULL, '2016-07-09 18:30:00', '2016-07-09 18:30:00', 0, 76, 1, 33),
(203, 8, '8C', 7, 0, NULL, NULL, '', 'Medium', NULL, '2016-07-10 18:30:00', '2016-07-10 18:30:00', 0, 78, 10, 34),
(204, 9, '9A', 1, 0, NULL, NULL, '', 'Medium', NULL, '2016-07-10 18:30:00', '2016-07-10 18:30:00', 0, 79, 1, 34),
(205, 10, '10A', 21, 0, NULL, NULL, '', 'Medium', NULL, '2016-07-12 18:30:00', '2016-07-12 18:30:00', 0, 80, 1, 34),
(206, 11, '11A', 19, 0, NULL, NULL, '', 'Medium', NULL, '2016-07-12 18:30:00', '2016-07-12 18:30:00', 0, NULL, 1, 34),
(207, 11, '11B', 19, 0, NULL, NULL, '', 'Medium', NULL, '2016-07-12 18:30:00', '2016-07-12 18:30:00', 0, NULL, 7, 34),
(208, 12, '12A', 1, 1, 1, 60, '', 'Medium', NULL, '2016-07-12 18:30:00', '2016-07-12 18:30:00', 0, NULL, 1, 34),
(209, 12, '12B', 1, 1, 1, 60, '', 'Medium', NULL, '2016-07-12 18:30:00', '2016-07-12 18:30:00', 0, NULL, 7, 34);

-- --------------------------------------------------------

--
-- Table structure for table `mri_test_sub_fields`
--

CREATE TABLE IF NOT EXISTS `mri_test_sub_fields` (
  `test_sub_field_id` int(11) NOT NULL AUTO_INCREMENT,
  `test_sub_field_name` varchar(11) NOT NULL,
  `ftest_parent_field_id` int(10) NOT NULL,
  PRIMARY KEY (`test_sub_field_id`),
  KEY `fk1_lab_test_sub_fields` (`ftest_parent_field_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mri_test_sub_fields`
--

INSERT INTO `mri_test_sub_fields` (`test_sub_field_id`, `test_sub_field_name`, `ftest_parent_field_id`) VALUES
(1, 'test feild', 1),
(2, 'WBC SUB1', 4);

-- --------------------------------------------------------

--
-- Table structure for table `mri_test_sub_field_range`
--

CREATE TABLE IF NOT EXISTS `mri_test_sub_field_range` (
  `test_sub_field_range_id` int(11) NOT NULL AUTO_INCREMENT,
  `gender` varchar(10) NOT NULL,
  `minage` int(11) NOT NULL,
  `unit` varchar(15) DEFAULT NULL,
  `min_val` double NOT NULL,
  `max_val` double NOT NULL,
  `max_age` int(11) DEFAULT NULL,
  `ftest_sub_field_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`test_sub_field_range_id`),
  KEY `fk1_lab_test_sub_field_range` (`ftest_sub_field_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mri_test_sub_field_range`
--

INSERT INTO `mri_test_sub_field_range` (`test_sub_field_range_id`, `gender`, `minage`, `unit`, `min_val`, `max_val`, `max_age`, `ftest_sub_field_id`) VALUES
(1, 'Male', 2, 'ml', 123, 123, 25, 2);

-- --------------------------------------------------------

--
-- Table structure for table `mri_user`
--

CREATE TABLE IF NOT EXISTS `mri_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `femployee_id` int(11) NOT NULL,
  `fuser_role_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `mri_user`
--

INSERT INTO `mri_user` (`user_id`, `femployee_id`, `fuser_role_id`, `user_name`, `password`, `is_active`) VALUES
(17, 4, 3, 'aaa', '1000:4de42170c39cdfa6f060b94b1f0f982874e6f1befa711b6b:120064c38bb306a0cec31536a234df135acf2fbb62f62f2a', 0),
(21, 8, 2, 'ruwani', '1000:5df88f9fb551750d8a40d228c56d69c9d6fff5332853f3ea:22ed5d70a836d2df293c025a73dea132531ffa4cd1d7f79e', 0),
(23, 9, 4, 'test', '1000:84a6711b362a27b97e50e3fab8cf4be2d7afb26601b06063:9f23581618c4d754cf8114b9c645e60ac175cadc4c7588c7', 0),
(24, 6, 2, 'pragash', '1000:0058daf30fea7a0d2bfc849100da51f52c49597d6d438115:e80fe004f85c5724790fdd470148ea3325541a5d8227eece', 0),
(25, 2, 4, 'dushyantha', '1000:694f9e04bb07d2c0456edad04be23fdae80c2df782501a75:031e951473294c091cc2cd2108a281e22360b0e6947827d0', 0),
(28, 1, 5, 'priyankara ', '1000:fb6c82ea0692545190eba0be9a43abffe89f9bc26f0adaf5:717b0f78fbdab3c9788c145c012185b3c2c1b32fd5d3ea24', 0),
(31, 11, 2, 'test3', '1000:3852b670f8fa140bc1fc2763fd1051fc382901f893c417eb:e6d5e255d29eda4ae5535c4c0cdcfb98a9d8104ac0441a2c', 0),
(32, 7, 1, 'ruwani', '1000:1b65f6d9fac5ed393b382c105004808a179b301ea3e8ada6:1b9111bbd8725c29a54e8dab8311197fb8a1f06e7f650b8b', 0),
(33, 12, 6, 'admin', '1000:ad300bea783630af70219f7ccedc6b1d73584b0056123b9c:1d4f345005dda9a37ddeeb7caabfc99ae40a8d43ea0913c1', 0),
(34, 5, 7, 'chaminda', '1000:c85e71f6b57297c63f9812b7c7da11d589d4e532a96df3d7:2eea983f3f6b98ca6da5b9273c2650044770b4cfecb1d5cb', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mri_user_roles`
--

CREATE TABLE IF NOT EXISTS `mri_user_roles` (
  `role_id` int(10) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(25) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `mri_user_roles`
--

INSERT INTO `mri_user_roles` (`role_id`, `role_name`, `is_active`) VALUES
(1, 'MLT', 1),
(2, 'Medical Officer', 0),
(3, 'Chief MLT', 0),
(4, 'Specimen Counter', 0),
(5, 'Nurse', 0),
(6, 'Admin', 0),
(7, 'Consultant', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mri_arc_binary_results`
--
ALTER TABLE `mri_arc_binary_results`
  ADD CONSTRAINT `fk_mri_arc_binary_results_mri_arc_test_request1` FOREIGN KEY (`ftest_request_id`) REFERENCES `mri_arc_test_request` (`test_request_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mri_arc_parent_result`
--
ALTER TABLE `mri_arc_parent_result`
  ADD CONSTRAINT `fk_mri_arc_parent_result_mri_arc_test_request1` FOREIGN KEY (`ftest_request_id`) REFERENCES `mri_arc_test_request` (`test_request_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mri_temp_parent_result_mri_test_parent_fields1` FOREIGN KEY (`ftest_parent_field_id`) REFERENCES `mri_test_parent_fields` (`test_parent_field_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mri_arc_specimen`
--
ALTER TABLE `mri_arc_specimen`
  ADD CONSTRAINT `fk2_mri_specimen0` FOREIGN KEY (`fspecimen_type_id`) REFERENCES `mri_specimen_type` (`specimen_type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mri_arc_sub_field_result`
--
ALTER TABLE `mri_arc_sub_field_result`
  ADD CONSTRAINT `fk_mri_arc_sub_field_result_mri_arc_test_request1` FOREIGN KEY (`ftest_request_id`) REFERENCES `mri_arc_test_request` (`test_request_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mri_arc_sub_field_result_mri_test_sub_fields1` FOREIGN KEY (`ftest_sub_field_id`) REFERENCES `mri_test_sub_fields` (`test_sub_field_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mri_arc_test_request`
--
ALTER TABLE `mri_arc_test_request`
  ADD CONSTRAINT `fk1_mri_test_request0` FOREIGN KEY (`fpatient_id`) REFERENCES `mri_patient` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk2_mri_test_request0` FOREIGN KEY (`fhospital_patient_id`) REFERENCES `mri_hospital_patient` (`hospital_patient_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk3_mri_test_request0` FOREIGN KEY (`fbundle_id`) REFERENCES `mri_bundle` (`bundle_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk5_mri_test_request0` FOREIGN KEY (`flaboratory_test_id`) REFERENCES `mri_laboratory_test` (`laboratory_test_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_mri_arc_test_request_mri_arc_specimen1` FOREIGN KEY (`fspecimen_id`) REFERENCES `mri_arc_specimen` (`specimen_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mri_binary_results`
--
ALTER TABLE `mri_binary_results`
  ADD CONSTRAINT `fk2_binaryResults` FOREIGN KEY (`result_entered_by`) REFERENCES `mri_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk3_binaryResults` FOREIGN KEY (`verified_by`) REFERENCES `mri_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_mri_binary_results` FOREIGN KEY (`ftest_request_id`) REFERENCES `mri_test_request` (`test_request_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `mri_binary_results_ibfk_1` FOREIGN KEY (`printed_by`) REFERENCES `mri_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mri_bundle`
--
ALTER TABLE `mri_bundle`
  ADD CONSTRAINT `fk1_mri_bundle` FOREIGN KEY (`fhospital_id`) REFERENCES `mri_hospital` (`hospital_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mri_department`
--
ALTER TABLE `mri_department`
  ADD CONSTRAINT `fk_mri_department` FOREIGN KEY (`fdept_incharge_id`) REFERENCES `mri_employee` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mri_employee_workin`
--
ALTER TABLE `mri_employee_workin`
  ADD CONSTRAINT `fk1_mri_employee_workin` FOREIGN KEY (`femployee_id`) REFERENCES `mri_employee` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk2_mri_employee_workin` FOREIGN KEY (`fdepartment_id`) REFERENCES `mri_department` (`department_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk3_mri_employee_workin` FOREIGN KEY (`flaboratory_id`) REFERENCES `mri_laboratory` (`laboratory_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk4_mri_employee_workin` FOREIGN KEY (`fdesignation_id`) REFERENCES `mri_designation` (`designation_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mri_hospital_patient`
--
ALTER TABLE `mri_hospital_patient`
  ADD CONSTRAINT `fk1_mri_hospital_patient` FOREIGN KEY (`fpatient_id`) REFERENCES `mri_patient` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk2_mri_hospital_patient` FOREIGN KEY (`fhospital_id`) REFERENCES `mri_hospital` (`hospital_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mri_internal_patient`
--
ALTER TABLE `mri_internal_patient`
  ADD CONSTRAINT `fk1_mri_internal_patient` FOREIGN KEY (`fpatient_id`) REFERENCES `mri_patient` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mri_laboratory`
--
ALTER TABLE `mri_laboratory`
  ADD CONSTRAINT `fk1_mri_laboratory` FOREIGN KEY (`fdepartment_id`) REFERENCES `mri_department` (`department_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk2_mri_laboratory` FOREIGN KEY (`flaboratory_incharge_id`) REFERENCES `mri_employee` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mri_laboratory_test`
--
ALTER TABLE `mri_laboratory_test`
  ADD CONSTRAINT `fk1_mri_laboratory_test` FOREIGN KEY (`flaboratory_id`) REFERENCES `mri_laboratory` (`laboratory_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk2_mri_laboratory_test` FOREIGN KEY (`fspecimen_type_id`) REFERENCES `mri_specimen_type` (`specimen_type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mri_parent_result`
--
ALTER TABLE `mri_parent_result`
  ADD CONSTRAINT `fk1_mri_parent_result` FOREIGN KEY (`ftest_parent_field_id`) REFERENCES `mri_test_parent_fields` (`test_parent_field_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk2_mri_parent_result` FOREIGN KEY (`ftest_request_id`) REFERENCES `mri_test_request` (`test_request_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mri_specimen`
--
ALTER TABLE `mri_specimen`
  ADD CONSTRAINT `fk2_mri_specimen` FOREIGN KEY (`fspecimen_type_id`) REFERENCES `mri_specimen_type` (`specimen_type_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk3_mri_specimen` FOREIGN KEY (`inserted_by`) REFERENCES `mri_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mri_sub_field_result`
--
ALTER TABLE `mri_sub_field_result`
  ADD CONSTRAINT `fk1_lab_sub_field_result` FOREIGN KEY (`ftest_sub_field_id`) REFERENCES `mri_test_sub_fields` (`test_sub_field_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk2_lab_sub_field_result` FOREIGN KEY (`ftest_request_id`) REFERENCES `mri_test_request` (`test_request_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mri_test_parent_fields`
--
ALTER TABLE `mri_test_parent_fields`
  ADD CONSTRAINT `fk1_mri_test_parent_fields` FOREIGN KEY (`flaboratory_test_id`) REFERENCES `mri_laboratory_test` (`laboratory_test_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mri_test_request`
--
ALTER TABLE `mri_test_request`
  ADD CONSTRAINT `fk1_mri_test_request` FOREIGN KEY (`fpatient_id`) REFERENCES `mri_patient` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk2_mri_test_request` FOREIGN KEY (`fhospital_patient_id`) REFERENCES `mri_hospital_patient` (`hospital_patient_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk3_mri_test_request` FOREIGN KEY (`fbundle_id`) REFERENCES `mri_bundle` (`bundle_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk4_mri_test_request` FOREIGN KEY (`fspecimen_id`) REFERENCES `mri_specimen` (`specimen_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk5_mri_test_request` FOREIGN KEY (`flaboratory_test_id`) REFERENCES `mri_laboratory_test` (`laboratory_test_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk6_mri_test_request` FOREIGN KEY (`requested_by`) REFERENCES `mri_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mri_test_sub_fields`
--
ALTER TABLE `mri_test_sub_fields`
  ADD CONSTRAINT `fk1_lab_test_sub_fields` FOREIGN KEY (`ftest_parent_field_id`) REFERENCES `mri_test_parent_fields` (`test_parent_field_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mri_test_sub_field_range`
--
ALTER TABLE `mri_test_sub_field_range`
  ADD CONSTRAINT `fk1_lab_test_sub_field_range` FOREIGN KEY (`ftest_sub_field_id`) REFERENCES `mri_test_sub_fields` (`test_sub_field_id`) ON DELETE CASCADE ON UPDATE CASCADE;

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `testevent` ON SCHEDULE EVERY 1 DAY STARTS '2015-12-15 13:41:00' ON COMPLETION NOT PRESERVE ENABLE DO call clean_tables()$$

CREATE DEFINER=`root`@`localhost` EVENT `Reset_Tables_monthend` ON SCHEDULE EVERY 1 MONTH STARTS '2015-12-31 00:00:00' ON COMPLETION NOT PRESERVE ENABLE DO call clean_tables()$$

DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
