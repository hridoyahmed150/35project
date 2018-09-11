-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2018 at 03:14 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance_management_system`
--

CREATE TABLE `attendance_management_system` (
  `id` int(11) NOT NULL,
  `type` text NOT NULL,
  `stu_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `day` varchar(11) NOT NULL,
  `sstatus` varchar(20) NOT NULL,
  `entry_time` varchar(20) NOT NULL,
  `exit_time` varchar(20) NOT NULL,
  `cstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance_management_system`
--

INSERT INTO `attendance_management_system` (`id`, `type`, `stu_id`, `emp_id`, `day`, `sstatus`, `entry_time`, `exit_time`, `cstatus`) VALUES
(51, 'student', 8878588, 0, '18-09-07', 'present', '12:59', '12:59', 1),
(52, 'student', 45555, 0, '18-09-07', 'present', '12:59', '12:59', 1),
(53, 'student', 455555, 0, '18-09-07', 'present', '12:59', '12:59', 1),
(54, 'student', 455555, 0, '2018-09-12', 'present', '12:59', '12:59', 1),
(57, 'student', 754757, 0, '18-09-07', 'present', '12:59', '12:59', 1),
(60, 'student', 85757452, 0, '18-09-07', 'present', '12:59', '12:59', 1),
(61, 'student', 455642, 0, '18-09-07', 'present', '12:59', '12:59', 1),
(62, 'student', 5463201, 0, '18-09-07', 'present', '12:59', '12:59', 1),
(63, 'employee', 6876572, 0, '18-09-08', 'present', '12:59', '12:59', 1),
(64, 'student', 45555, 0, '18-09-08', 'present', '12:58', '12:59', 1),
(65, 'student', 3, 0, '18-09-08', 'present', '16:03', '17:06', 1),
(66, 'student', 3, 0, '2018-09-08', 'present', '14:02', '03:02', 1),
(67, 'student', 9, 0, '2018-09-01', 'present', '14:22', '16:04', 1),
(68, 'employee', 0, 6, '2018-09-08', 'present', '13:02', '15:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ceduinfo`
--

CREATE TABLE `ceduinfo` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `exam_type` varchar(100) NOT NULL,
  `passing_year` varchar(100) NOT NULL,
  `board_uni` varchar(100) NOT NULL,
  `result` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ceduinfo`
--

INSERT INTO `ceduinfo` (`id`, `cid`, `exam_type`, `passing_year`, `board_uni`, `result`, `status`) VALUES
(1, 183754, 'SSC', '2001', 'Chitagong', 'rr', 1),
(2, 849764, 'MBA', '2003', 'Borishal', 'rr', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cexpinfo`
--

CREATE TABLE `cexpinfo` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cexpinfo`
--

INSERT INTO `cexpinfo` (`id`, `cid`, `company_name`, `designation`, `year`, `salary`, `status`) VALUES
(1, 983460, 'aa', 'junior-teacher', 2009, 100000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cpinfo`
--

CREATE TABLE `cpinfo` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `present_address` varchar(255) NOT NULL,
  `religions` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `national_id` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `marital_status` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpinfo`
--

INSERT INTO `cpinfo` (`id`, `cid`, `name`, `father_name`, `mother_name`, `present_address`, `religions`, `nationality`, `national_id`, `gender`, `marital_status`, `image`, `status`) VALUES
(1, 251747, 'nailu', 'zobbar', 'fatima', 'narayangong', 'islam', 'bangladeshi', 886786, 'male', 'single', '', 1),
(2, 206795, 'nailu', 'zobbar', 'fatima', 'narayangong', 'islam', 'bangladeshi', 886786, 'male', 'single', '', 1),
(3, 550725, 'nailu', 'zobbar', 'fatima', 'narayangong', 'islam', 'bangladeshi', 886786, 'male', 'single', '', 1),
(4, 186501, 'nailu', 'zobbar', 'fatima', 'narayangong', 'islam', 'bangladeshi', 886786, 'male', 'single', '', 1),
(5, 595097, 'nailu', 'zobbar', 'fatima', 'narayangong', 'islam', 'bangladeshi', 886786, 'male', 'single', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `online _exam_result`
--

CREATE TABLE `online _exam_result` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `question_id` int(100) NOT NULL,
  `answer_code` int(155) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `parents_management_system`
--

CREATE TABLE `parents_management_system` (
  `id` int(11) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `office_location` varchar(255) NOT NULL,
  `monthly_income` varchar(20) NOT NULL,
  `contact` varchar(25) NOT NULL,
  `email` varchar(20) NOT NULL,
  `national_id` varchar(20) NOT NULL,
  `passport` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salary_management_system`
--

CREATE TABLE `salary_management_system` (
  `id` int(11) NOT NULL,
  `designatio` varchar(50) NOT NULL,
  `basic_salary` int(10) NOT NULL,
  `house_rent` int(10) NOT NULL,
  `treatment` int(10) NOT NULL,
  `convince` int(10) NOT NULL,
  `provident_fund` int(10) NOT NULL,
  `bonus` int(10) NOT NULL,
  `month` varchar(250) NOT NULL,
  `year` int(10) NOT NULL,
  `employee_id` int(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary_management_system`
--

INSERT INTO `salary_management_system` (`id`, `designatio`, `basic_salary`, `house_rent`, `treatment`, `convince`, `provident_fund`, `bonus`, `month`, `year`, `employee_id`, `status`) VALUES
(3, 'fdgdg', 6000, 565, 565, 565, 56, 565, 'November', 2023, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_acc_balance_sheet`
--

CREATE TABLE `school_acc_balance_sheet` (
  `id` int(11) NOT NULL,
  `date` varchar(250) NOT NULL,
  `description` varchar(250) DEFAULT NULL,
  `liabilities` int(11) NOT NULL,
  `assets` int(11) NOT NULL,
  `total_balance` int(11) NOT NULL,
  `cstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_acc_balance_sheet`
--

INSERT INTO `school_acc_balance_sheet` (`id`, `date`, `description`, `liabilities`, `assets`, `total_balance`, `cstatus`) VALUES
(3, '2018-08-10', 'Balance', 10000, 150000, 201000, 1),
(4, '2018-08-28', 'Income Statement', 549990000, 1244443, 3500000, 1),
(5, '2018-09-20', 'Balance', 280000, 12000, 15000, 1),
(6, '2018-09-28', 'Income Statement', 500000, 250000, 250000, 1),
(7, '2018-09-21', 'Balance', 700000, 53000, 350000, 1),
(8, '2018-09-29', 'Income Statement', 105000, 65000, 45000, 1),
(9, '2018-09-18', 'Balance', 125000, 55000, 70000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_acc_cash_book`
--

CREATE TABLE `school_acc_cash_book` (
  `id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `description` text,
  `amount` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `reference` text,
  `cstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_acc_cash_book`
--

INSERT INTO `school_acc_cash_book` (`id`, `date`, `description`, `amount`, `type`, `reference`, `cstatus`) VALUES
(2, '2018-08-14', 'Balance', 60000, 'Credit', 'Income', 1),
(3, '2018-08-28', 'Balance', 12000, 'Debit', 'Income and Expenses', 1),
(4, '2018-09-26', 'Balance', 10000, 'Debit', 'Income', 1),
(5, '2018-09-24', 'Income Statement', 15000, 'Credit', 'Income', 1),
(6, '2018-09-25', 'Balance', 45000, 'Credit', 'Income', 1),
(7, '2018-09-27', 'Income Statement', 55000, 'Debit', 'Income and Expenses', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_acc_income_statement`
--

CREATE TABLE `school_acc_income_statement` (
  `id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `description` text,
  `debit_amount` varchar(250) NOT NULL,
  `credit_amount` varchar(250) NOT NULL,
  `total_balance` int(11) NOT NULL,
  `reference` text,
  `cstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_acc_income_statement`
--

INSERT INTO `school_acc_income_statement` (`id`, `date`, `description`, `debit_amount`, `credit_amount`, `total_balance`, `reference`, `cstatus`) VALUES
(1, '2018-08-14', 'Balance', '45000', '15000', 60000, 'Income and Expenses', 1),
(2, '2018-09-12', 'Income Statement', '76000', '77000', 775000, 'Income', 1),
(3, '2018-09-20', 'Balance', '5400', '5600', 4500, 'Income', 1),
(4, '2018-09-12', 'Balance', '60000', '77000', 70000, 'Income', 1),
(5, '2018-09-26', 'Balance', '25000', '10000', 35000, 'Income', 1),
(6, '2018-09-20', 'Income Statement', '45000', '50000', 95000, 'Income and Expenses', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_acc_ledger`
--

CREATE TABLE `school_acc_ledger` (
  `id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `description` text,
  `debit_amount` int(11) NOT NULL,
  `credit_amount` int(11) NOT NULL,
  `reference` text,
  `cstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_acc_ledger`
--

INSERT INTO `school_acc_ledger` (`id`, `date`, `description`, `debit_amount`, `credit_amount`, `reference`, `cstatus`) VALUES
(1, '2018-08-15', 'Balance', 56000, 70000, 'Income', 1),
(2, '2018-09-19', 'Balance', 100000, 55550000, 'Income', 1),
(3, '2018-09-20', 'Income Statement', 62000, 50000, 'Income and Expenses', 1),
(4, '2018-09-27', 'Balance', 10000, 25000, '35000', 1),
(5, '2018-09-21', 'Income Statement', 25000, 15000, 'Income', 1),
(6, '2018-09-21', 'Balance', 30000, 45000, 'Income and Expenses', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_acc_trial_balance`
--

CREATE TABLE `school_acc_trial_balance` (
  `id` int(11) NOT NULL,
  `serial_no` int(11) NOT NULL,
  `description` text,
  `debit_amount` int(11) NOT NULL,
  `credit_amount` int(11) NOT NULL,
  `total_balance` int(11) NOT NULL,
  `reference` text,
  `cstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_acc_trial_balance`
--

INSERT INTO `school_acc_trial_balance` (`id`, `serial_no`, `description`, `debit_amount`, `credit_amount`, `total_balance`, `reference`, `cstatus`) VALUES
(2, 1, 'Balance', 6000, 8000, 14000, 'Income and Expenses', 1),
(3, 2, 'Balance', 30000, 100000, 200000, 'Income', 1),
(4, 3, 'Income Statement', 15000, 25000, 300000, 'Income', 1),
(5, 4, 'Balance', 10000, 15000, 25000, 'Income', 1),
(6, 5, 'Income Statement', 45000, 10000, 55000, 'Income and Expenses', 1),
(7, 6, 'Balance', 40000, 20000, 60000, 'Income and Expenses', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_admission_form`
--

CREATE TABLE `school_admission_form` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `admission_date` varchar(20) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_applicant_educational_information`
--

CREATE TABLE `school_applicant_educational_information` (
  `id` int(11) NOT NULL,
  `exam_type` varchar(100) NOT NULL,
  `passing_year` int(5) NOT NULL,
  `board_or_university` text,
  `result` varchar(20) NOT NULL,
  `cstatus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_applicant_personal_information`
--

CREATE TABLE `school_applicant_personal_information` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `mother_name` varchar(30) NOT NULL,
  `present_address` varchar(255) NOT NULL,
  `religion` varchar(10) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `national_id` varchar(20) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `marital_status` varchar(8) NOT NULL,
  `image` varchar(255) NOT NULL,
  `cstatus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_application_form`
--

CREATE TABLE `school_application_form` (
  `id` int(11) NOT NULL,
  `student_name` varchar(20) NOT NULL,
  `father_name` varchar(20) NOT NULL,
  `mother_name` varchar(20) NOT NULL,
  `present_address` varchar(20) NOT NULL,
  `permanent_address` varchar(20) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `date_of_birth` varchar(20) NOT NULL,
  `place_of_birth` varchar(20) NOT NULL,
  `blood_group` varchar(20) DEFAULT NULL,
  `previous_school_name` text NOT NULL,
  `reason_of_leaving_previous_school` text NOT NULL,
  `result_of_previous_school` varchar(20) NOT NULL,
  `first_enrolled_class` varchar(20) NOT NULL,
  `admission_date` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_application_form`
--

INSERT INTO `school_application_form` (`id`, `student_name`, `father_name`, `mother_name`, `present_address`, `permanent_address`, `religion`, `gender`, `date_of_birth`, `place_of_birth`, `blood_group`, `previous_school_name`, `reason_of_leaving_previous_school`, `result_of_previous_school`, `first_enrolled_class`, `admission_date`, `email`, `contact_no`, `status`) VALUES
(2, 'Jakaria 420', 'ert', 'erte', 'ereter', '     erer     ', 'erte', 'terterte', '2018-08-13', 'erter', 'blood_group', 'ertet', 'retet', 'rete', 'Seven', '', 'nasrin@toma.josh', '4232', 0),
(4, 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'Hindu', 'Male', '2018-08-13', 'aaa', 'O-', 'aaa', 'aaa', 'aaa', 'aaaa', '2018-08-21', '', '0', 1),
(5, 'daadsa', 'adas', 'sdaada', 'adsasda', 'asdasda', 'Islam', 'Female', '2010-09-28', 'asasa', 'O+', 'sdsdfs', 'fsdssd', 'sdsdss', 'sdsffsfs', '2018-09-26', '', '0', 1),
(6, 'sdfs', 'sdfs', 'vdzz', 'Zcdrfrz', 'zcsfd', 'Hindu', 'Male', '2005-09-13', 'xcvx', 'B-', 'zxcas', 'zdxcad', 'ada', 'adsa', '2018-09-24', '', '0', 1),
(7, 'sdfss', 'sdfass', 'sdfd', 'dfsrfgsf', 'sdfdwty', 'Buddhist', 'Male', '2018-09-27', 'sdfsfzz', 'AB+', 'sdfs', 'fwse', 'fdst', 'dsa5rf', '2018-09-28', '', '0', 1),
(8, 'zdfzxc', 'sdfsf', 'bchgd', 'ghb ss', 'sdfywszfv', 'Islam', 'Female', '2018-09-18', 'fdsyrga', 'AB+', 'zxfgszv ', 'vhszwser', 'dywas', 'drsytqw45r', '2018-09-04', '', '0', 1),
(10, 'mal', 'fgdg', 'fdgd', 'dfgd', '  fdgd  ', 'Buddhist', 'Female', '2018-09-21', 'fdg', 'blood_group', 'dfgd', 'dfgd', 'dfg', 'Seven', '', 'abubakar@gmail.com', '035345', 1),
(11, 'sad', 'asd', 'sad', 'asd', 'http://lod', 'Hindu', 'Male', '2018-09-08', 'ad', 'B+', 'asd', 'sd', 'asd', 'asd', '', 'aa@fgh.com', '24234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_books_issue_management_system`
--

CREATE TABLE `school_books_issue_management_system` (
  `id` int(11) NOT NULL,
  `member_id` varchar(20) NOT NULL,
  `book_id` varchar(20) NOT NULL,
  `book_issue_date` varchar(255) NOT NULL,
  `returning_date` varchar(250) NOT NULL,
  `cstatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_books_issue_management_system`
--

INSERT INTO `school_books_issue_management_system` (`id`, `member_id`, `book_id`, `book_issue_date`, `returning_date`, `cstatus`) VALUES
(6, '1', '1', '2018-08-22', '2018-08-31', '1'),
(8, '5', '4', '2018-08-22', '2018-08-25', '1'),
(9, '1', '1', '2018-09-06', '2018-09-27', '1'),
(10, '1', '2', '2018-09-06', '2018-09-28', '1'),
(11, '1', '4', '2018-09-06', '2018-09-20', '1');

-- --------------------------------------------------------

--
-- Table structure for table `school_canteen`
--

CREATE TABLE `school_canteen` (
  `id` int(11) NOT NULL,
  `student_name` varchar(20) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `amount` int(20) NOT NULL,
  `date` varchar(10) NOT NULL,
  `agreement` text NOT NULL,
  `contact` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_canteen`
--

INSERT INTO `school_canteen` (`id`, `student_name`, `duration`, `amount`, `date`, `agreement`, `contact`, `address`, `email`, `status`) VALUES
(1, 'gjg', 'jgg', 545, '2018-09-05', 'fghf', '434', 'fhfh', 'hhh@fg.jgj', 4),
(2, 'aaa', '54', 5454, '2018-08-14', 'hfgh', '435', 'dsf', 'jubi@jubaida.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_circular`
--

CREATE TABLE `school_circular` (
  `id` int(11) NOT NULL,
  `job_type` varchar(20) NOT NULL,
  `educational_qualification` varchar(20) NOT NULL,
  `required_experience` text,
  `job_salary` int(11) NOT NULL,
  `job_location` varchar(255) NOT NULL,
  `job_time` varchar(20) NOT NULL,
  `cstatus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_circular`
--

INSERT INTO `school_circular` (`id`, `job_type`, `educational_qualification`, `required_experience`, `job_salary`, `job_location`, `job_time`, `cstatus`) VALUES
(1, 'ddd', 'dfdf', 'dfdf', 434, 'dsd', 'sd', 1),
(2, 'Part Time', 'sssss', 'kochu', 3424, 'gulshan', '11pm', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_circular_applicant_experience_information`
--

CREATE TABLE `school_circular_applicant_experience_information` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `designation` varchar(40) NOT NULL,
  `year` int(40) NOT NULL,
  `salary` int(40) NOT NULL,
  `cstatus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_circular_applicant_experience_information`
--

INSERT INTO `school_circular_applicant_experience_information` (`id`, `company_name`, `designation`, `year`, `salary`, `cstatus`) VALUES
(1, 'aa', 'student', 2018, 30000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_circular_applicant_reference_information`
--

CREATE TABLE `school_circular_applicant_reference_information` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `designation` varchar(40) NOT NULL,
  `address` text,
  `contact` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cstatus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_circular_candidate_selection_system`
--

CREATE TABLE `school_circular_candidate_selection_system` (
  `id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `interview_time` varchar(10) NOT NULL,
  `interview_location` varchar(255) NOT NULL,
  `message_applicant` text,
  `cstatus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_circular_confirmation_management_system`
--

CREATE TABLE `school_circular_confirmation_management_system` (
  `id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `confirmation_message` text,
  `joining_date` varchar(10) NOT NULL,
  `cstatus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_circular_confirmation_management_system`
--

INSERT INTO `school_circular_confirmation_management_system` (`id`, `applicant_id`, `confirmation_message`, `joining_date`, `cstatus`) VALUES
(1, 102, 'aaa', '2018-08-22', 1),
(2, 101, 'ccc', '2018-08-22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_class_time`
--

CREATE TABLE `school_class_time` (
  `id` int(11) NOT NULL,
  `class_name` varchar(50) NOT NULL,
  `no_of_student` int(11) NOT NULL,
  `section` varchar(20) NOT NULL,
  `shift` varchar(20) NOT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `class_day` varchar(20) NOT NULL,
  `class_time` varchar(10) NOT NULL,
  `class_location` varchar(10) NOT NULL,
  `class_teacher_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_class_time`
--

INSERT INTO `school_class_time` (`id`, `class_name`, `no_of_student`, `section`, `shift`, `subject`, `class_day`, `class_time`, `class_location`, `class_teacher_id`, `status`) VALUES
(1, 'six', 0, 'b', 'morning', 'English', 'Twesday', '9:00am', '105', 104, 1),
(2, 'six', 0, 'c', 'day', 'Bangla', 'Twesday', '12pm', '105', 105, 1),
(3, 'ten', 0, 'd', 'day', 'English', 'Wednesday', '2pm', '105', 105, 1),
(4, 'seven', 0, 'd', 'day', 'English', 'Monday', '12pm', '105', 104, 1),
(5, 'six', 0, 'c', 'day', 'Bangla', 'Monday', '8 am', '105', 105, 1),
(6, 'seven', 0, 'c', 'day', 'English', 'Twesday', '3 PM', '104', 104, 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_emp_edu_info`
--

CREATE TABLE `school_emp_edu_info` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `exam_type` varchar(250) NOT NULL,
  `passing_year` varchar(255) DEFAULT NULL,
  `board_or_university` varchar(255) DEFAULT NULL,
  `result` varchar(20) DEFAULT NULL,
  `cstatus` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_emp_edu_info`
--

INSERT INTO `school_emp_edu_info` (`id`, `emp_id`, `exam_type`, `passing_year`, `board_or_university`, `result`, `cstatus`) VALUES
(3, 2, 'Diploma', '2001', 'Dhaka', '1st Class', '1'),
(4, 5, 'B.B.S', '2003', 'Jassore', '2nd Class', '1'),
(5, 3, 'M.B.S', '2008', 'Rajshahi', '2nd Class', '1'),
(6, 7, 'H.S.C', '2003', 'Dhaka', '2nd Class', '1'),
(7, 1, 'Diploma', '2005', 'Barishal', '2nd Class', '1'),
(8, 3, 'M.B.S', '2010', 'Dhaka', '1st Class', '1'),
(9, 2, 'S.S.C', '2006', 'Dhaka', '2nd Class', '1'),
(10, 4, 'M.B.S', '2004', 'Barishal', '2nd Class', '1'),
(11, 0, 'B.B.S', '2007', 'Sylhet', 'g', '1'),
(12, 7, 'H.S.C', '2009', 'Jassore', 'hg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `school_emp_exp_info`
--

CREATE TABLE `school_emp_exp_info` (
  `id` int(11) NOT NULL,
  `company_name` varchar(250) DEFAULT NULL,
  `designation` varchar(250) DEFAULT NULL,
  `year` varchar(250) DEFAULT NULL,
  `salary` varchar(250) DEFAULT NULL,
  `cstatus` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_emp_exp_info`
--

INSERT INTO `school_emp_exp_info` (`id`, `company_name`, `designation`, `year`, `salary`, `cstatus`) VALUES
(4, 'IDB-BISEW', 'Lacturer Of Web Development', '2012', '100000', '1'),
(5, 'BASIS Company', 'IT Specialist', '2009', '70000', '1'),
(6, 'Creative IT', 'Web Developer', '2011', '55000', '1'),
(7, 'RRF Foundation', 'Graphics Designer', '2012', '30000', '1'),
(8, 'BASIS Company', 'Web Developer', '2008', '50000', '1'),
(9, 'IDB-BISEW', 'Lacturer Of Web Development', '2010', '70000', '1');

-- --------------------------------------------------------

--
-- Table structure for table `school_emp_info`
--

CREATE TABLE `school_emp_info` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `mother_name` varchar(30) NOT NULL,
  `present_address` varchar(225) NOT NULL,
  `permanent_address` varchar(225) NOT NULL,
  `religion` varchar(10) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `national_id` varchar(20) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `marital_status` varchar(8) NOT NULL,
  `blood_group` varchar(250) NOT NULL,
  `cstatus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_emp_info`
--

INSERT INTO `school_emp_info` (`id`, `name`, `father_name`, `mother_name`, `present_address`, `permanent_address`, `religion`, `nationality`, `national_id`, `gender`, `marital_status`, `blood_group`, `cstatus`) VALUES
(4, 'Nasrin', 'Abba', 'Amma', 'Dolairpar', 'Chandpur', 'Islam', 'Bangladeshi', '123456789', 'Female', 'Divorced', 'A+', 1),
(6, 'Rafidan', 'Ziner Baba', 'Ziner Ma', 'Azimpur', 'Feni', 'Islam', 'Bangladeshi', '654321789', 'Female', 'Single', 'O+', 1),
(7, 'Nilu', 'Nilur Baba', 'Nilur Ma', 'Azimpur', 'Narayangonj', 'Islam', 'Bangladeshi', '65432177898', 'Female', 'Single', 'B+', 1),
(8, 'Hridoy Khan', 'Hridoy Khaner Baba', 'Hridoy Khaner Ma', 'Narayangonj', 'Narayangonj', 'Islam', 'Bangladeshi', '65432177898', 'Male', 'Single', 'O+', 1),
(9, 'Yousuf Hossain', 'Yousufer Baba', 'YOusufer Ma', 'Shongkor', 'Shongkor', 'Islam', 'Bangladeshi', '45646456456564', 'Male', 'Single', 'B+', 1),
(10, 'Iqbal Hossain', 'Iqbaler Baba', 'Iqbaler Ma', 'Jigatola', 'Feni', 'Islam', 'Bangladeshi', '65432177898', 'Male', 'Single', 'O+', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_emp_ref_info`
--

CREATE TABLE `school_emp_ref_info` (
  `id` int(11) NOT NULL,
  `ref_name` varchar(255) DEFAULT NULL,
  `ref_designation` varchar(255) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `job_responsibility` varchar(20) DEFAULT NULL,
  `joining_date` varchar(20) DEFAULT NULL,
  `reporting_authority` varchar(20) DEFAULT NULL,
  `cstatus` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_emp_ref_info`
--

INSERT INTO `school_emp_ref_info` (`id`, `ref_name`, `ref_designation`, `address`, `contact`, `email`, `job_responsibility`, `joining_date`, `reporting_authority`, `cstatus`) VALUES
(1, 'Zin', 'Librarian', 'Azimpur', '325435098', 'zin@gmail.com', 'Yes', '2018-09-20', 'hh', '1'),
(2, 'Shimul Full', 'Accountant', 'Azimpur', '325435098', 'shimul@gmail.com', 'Yes', '2018-09-19', 'gg', '1'),
(3, 'Nasrin Sultana', 'IT Specialist', 'Dolairpar', '1234567890', 'nasrin@gmail.com', 'IT', '2018-08-14', 'no', '1'),
(4, 'Toma Akter', 'Accountant', 'Gandaria', '7686877868', 'toma@gamail.com', 'IT', '2018-09-18', 'hh', '1'),
(5, 'Nilu Jahan', 'Teacher', 'Science Lab', '786867868', 'nilu@gamail.com', 'Teaching', '2018-09-11', 'hhh', '1'),
(6, 'Jashim Uddin', 'Computer Operator', 'AraiHazar', '897897887', 'jashim@gamail.com', 'CO', '2018-09-19', 'co', '1');

-- --------------------------------------------------------

--
-- Table structure for table `school_equip_management`
--

CREATE TABLE `school_equip_management` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `total_cost` int(30) NOT NULL,
  `cdate` int(15) NOT NULL,
  `esource` int(15) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `cstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_equip_supinfo`
--

CREATE TABLE `school_equip_supinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `cstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_event_info`
--

CREATE TABLE `school_event_info` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `date_of_event` varchar(100) NOT NULL,
  `location` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `cstatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_event_info`
--

INSERT INTO `school_event_info` (`id`, `event_name`, `topic`, `date_of_event`, `location`, `time`, `cstatus`) VALUES
(1, 'Cultural Program', 'Poem', '2018-09-12', '55', '16:04', 'Selected'),
(2, 'Annual program', '', '2018', 'ffdgf', '14:45', 'Selected'),
(3, 'Debate program', 'debate', '2018-09-06', 'gfdg', '16:04', 'not');

-- --------------------------------------------------------

--
-- Table structure for table `school_event_participant`
--

CREATE TABLE `school_event_participant` (
  `id` int(11) NOT NULL,
  `student_id` int(20) NOT NULL,
  `event_id` int(20) NOT NULL,
  `topic` varchar(20) NOT NULL,
  `cstatus` varchar(250) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_event_participant`
--

INSERT INTO `school_event_participant` (`id`, `student_id`, `event_id`, `topic`, `cstatus`, `status`) VALUES
(2, 2, 50, 'Drama', 'Not selected', 1),
(3, 1, 3, 'Drama', 'Interested', 1),
(4, 5, 7, 'Debate', 'Interested', 1),
(5, 3, 4, 'Long jump', 'Selected', 1),
(6, 9, 4, 'Discuss', 'Interested', 1),
(7, 4, 5, 'Drama', 'Selected', 1),
(8, 4, 2, 'Drama', 'Interested', 1),
(9, 3, 1, 'Poem', 'Interested', 1),
(10, 6, 3, 'debate', 'Interested', 1),
(11, 9, 3, 'debate', 'Interested', 1),
(12, 7, 1, 'Poem', 'Selected', 1),
(13, 9, 3, 'debate', 'Selected', 1),
(14, 8, 1, 'Poem', 'Selected', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_exam`
--

CREATE TABLE `school_exam` (
  `id` int(11) NOT NULL,
  `exam_type` varchar(10) DEFAULT NULL,
  `exam_date` varchar(10) DEFAULT NULL,
  `exam_time` varchar(20) DEFAULT NULL,
  `class` varchar(10) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_feedback`
--

CREATE TABLE `school_feedback` (
  `id` int(11) NOT NULL,
  `email` text,
  `contact` varchar(20) DEFAULT NULL,
  `subject` varchar(20) DEFAULT NULL,
  `comments` text,
  `cdate` varchar(50) DEFAULT NULL,
  `cstatus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_feedback`
--

INSERT INTO `school_feedback` (`id`, `email`, `contact`, `subject`, `comments`, `cdate`, `cstatus`) VALUES
(1, 'abubakar1@gmail.com', '454', 'fgd', '      dfgd', '2018-09-04', 1),
(2, 'mal@gmail.com', '04234', 'sdfs', '      fsfs', '2018-09-25', 1),
(3, 'tumamoni@gmail.com', '420', 'sdfs', '      fsfs', '2018-09-25', 1),
(4, 'she@gmail.com', '420', 'sdfs', '      fsfs', '2018-09-25', 1),
(6, 'abubakar@gmail.com', '0588687', 'sdfsf', '      sdfs', '2018-09-05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_health`
--

CREATE TABLE `school_health` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `sick_reason` varchar(255) DEFAULT NULL,
  `provided_treatement` varchar(255) DEFAULT NULL,
  `medicine` varchar(255) DEFAULT NULL,
  `doctor_advice` text,
  `date` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_hostel_expenses`
--

CREATE TABLE `school_hostel_expenses` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `ree` int(11) NOT NULL,
  `date` varchar(20) DEFAULT NULL,
  `month` varchar(20) DEFAULT NULL,
  `year` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_job_circular`
--

CREATE TABLE `school_job_circular` (
  `id` int(11) NOT NULL,
  `job_type` varchar(250) NOT NULL,
  `edu_qf` varchar(250) NOT NULL,
  `rq_exp` varchar(250) NOT NULL,
  `sal` int(11) NOT NULL,
  `job_time` varchar(100) NOT NULL,
  `job_location` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_lab_equipment_information`
--

CREATE TABLE `school_lab_equipment_information` (
  `id` int(11) NOT NULL,
  `lab_type` varchar(100) NOT NULL,
  `equipment_name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_lab_equipment_information`
--

INSERT INTO `school_lab_equipment_information` (`id`, `lab_type`, `equipment_name`, `status`) VALUES
(2, 'aaaa420', 'bbbb1', 1),
(3, 'yyy', 'yyy', 1),
(4, 'fff', 'ggg', 1),
(5, 'fff', 'ggg', 1),
(6, 'qqqq', 'qqq', 1),
(7, 'fsdfs', 'sfsdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_lab_euipment_distribution`
--

CREATE TABLE `school_lab_euipment_distribution` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `receive_date` varchar(250) NOT NULL,
  `submission_date` varchar(250) NOT NULL,
  `equipment_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_lab_euipment_distribution`
--

INSERT INTO `school_lab_euipment_distribution` (`id`, `student_id`, `receive_date`, `submission_date`, `equipment_id`, `status`) VALUES
(2, 101, '2018-08-10', '2018-08-20', 101, 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_leave_management_system`
--

CREATE TABLE `school_leave_management_system` (
  `id` int(11) NOT NULL,
  `cstatus` varchar(20) NOT NULL,
  `leave_type` varchar(20) NOT NULL,
  `leave_start_date` varchar(25) NOT NULL,
  `leave_end_date` varchar(25) NOT NULL,
  `employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_leave_management_system`
--

INSERT INTO `school_leave_management_system` (`id`, `cstatus`, `leave_type`, `leave_start_date`, `leave_end_date`, `employee_id`) VALUES
(3, '1', 'casual leave', '2018-08-30', '2018-08-14', 8),
(4, '1', 'sick leave', '2018-09-05', '2018-09-10', 3),
(5, '1', 'casual leave', '2018-08-13', '2018-08-15', 3);

-- --------------------------------------------------------

--
-- Table structure for table `school_library_card`
--

CREATE TABLE `school_library_card` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `member_type` varchar(20) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `name` varchar(25) NOT NULL,
  `image` varchar(20) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `card_validation_date` varchar(20) NOT NULL,
  `cstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_library_card`
--

INSERT INTO `school_library_card` (`id`, `member_id`, `member_type`, `address`, `name`, `image`, `contact`, `card_validation_date`, `cstatus`) VALUES
(1, 2, 'Staff', '', 'aaa', '', '045464', '2018-08-16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_libr_registration_management_system`
--

CREATE TABLE `school_libr_registration_management_system` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `image` varchar(20) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `cstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_libr_registration_management_system`
--

INSERT INTO `school_libr_registration_management_system` (`id`, `name`, `user_name`, `image`, `contact`, `type`, `password`, `address`, `cstatus`) VALUES
(1, 'aaa', 'dgd', '', 'dffgdg', 'Issue Date Over', 'dd', 'dfgd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_lib_books_infor_entry_system`
--

CREATE TABLE `school_lib_books_infor_entry_system` (
  `id` int(11) NOT NULL,
  `book_name` varchar(250) NOT NULL,
  `publisher_name` varchar(250) NOT NULL,
  `cdate` varchar(260) NOT NULL,
  `author_name` varchar(260) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `cstatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_lib_books_infor_entry_system`
--

INSERT INTO `school_lib_books_infor_entry_system` (`id`, `book_name`, `publisher_name`, `cdate`, `author_name`, `quantity`, `cstatus`) VALUES
(2, 'Alif Laila', 'Arrobbo Prokashoni', '2018-08-15', 'Yousuf Taklu', '120', 'Issue'),
(3, 'pppp', 'ppp+', '2018-09-28', 'zin', '1000', 'Available'),
(4, 'rrrrr', 'hhhhh', '2018-09-13', 'uuuiuiui', '55646565', 'Issue'),
(5, 'nas', 'ffgdfghdf', '2018-09-12', 'uuuu', '5346345', 'Available'),
(6, 'pppp', 'Arrobbo Prokashoni', '2018-09-19', 'Yousuf Pathan', '55646565', 'Available'),
(7, 'pppp', 'ppp+', '2018-09-27', 'Yousuf Taklu', '1000', 'Available'),
(8, 'pppp', 'ffgdfghdf', '2018-09-20', 'uuuiuiui', '20', 'Available'),
(9, 'pppp', 'm pu', '2018-09-27', 'zin', '500', 'Available'),
(10, 'talu', 'talu3', '2018-09-03', 'talu2', '11111', 'Available'),
(11, 'ww3', 'E+++', '2018-09-20', 'R Martn', '1000', 'Available'),
(12, 'php', 'rasfourd', '2018-09-04', 'rasfourd', '1000', 'Available'),
(13, 'mal', 'mal777', '2018-09-05', 'mal++', '41000', 'Available'),
(14, 'jash', 'joks++++', '2018-09-25', 'joks', '1000', 'Available'),
(15, 'html', 'ten', '2018-09-29', 'five', '500', 'Available'),
(16, 'c#', 'nali +++', '2018-09-26', 'naliu', '21000', 'Available'),
(17, 'jqurey', 'tamacat', '2018-09-26', 'tama', '1000', 'Available'),
(18, 'jolakha', 'you', '2018-09-11', 'Yousuf Pathan', '1000', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `school_meal_and_cost_managment`
--

CREATE TABLE `school_meal_and_cost_managment` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `ree` int(11) NOT NULL,
  `date` varchar(20) DEFAULT NULL,
  `month` varchar(20) DEFAULT NULL,
  `year` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_membership_management_system`
--

CREATE TABLE `school_membership_management_system` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `member_id` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_membership_management_system`
--

INSERT INTO `school_membership_management_system` (`id`, `type`, `member_id`, `user_name`, `password`, `cstatus`) VALUES
(1, 'regular member', '1234565', 'aaa', 'sss', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_message_delivery_management_system`
--

CREATE TABLE `school_message_delivery_management_system` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `cdate` varchar(10) NOT NULL,
  `cstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_message_delivery_management_system`
--

INSERT INTO `school_message_delivery_management_system` (`id`, `member_id`, `message`, `cdate`, `cstatus`) VALUES
(1, 6, 'asdad', '2018-09-06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_notice`
--

CREATE TABLE `school_notice` (
  `id` int(11) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `publish_date` varchar(30) DEFAULT NULL,
  `expire_date` varchar(30) DEFAULT NULL,
  `subject` varchar(20) DEFAULT NULL,
  `description` text,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_notice`
--

INSERT INTO `school_notice` (`id`, `type`, `publish_date`, `expire_date`, `subject`, `description`, `status`) VALUES
(2, 'All', '2018-08-01', '2018-08-31', 'Vacation', 'Vacation of eidul azha. From 17th August      ', 1),
(3, 'Student', '2018-09-13', '2018-09-28', 'yutut', '      ut      ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_online_question`
--

CREATE TABLE `school_online_question` (
  `id` int(11) NOT NULL,
  `class` varchar(100) NOT NULL,
  `subject` text NOT NULL,
  `question` text NOT NULL,
  `option_1` varchar(100) NOT NULL,
  `option_2` varchar(100) NOT NULL,
  `option_3` varchar(100) NOT NULL,
  `option_4` varchar(100) NOT NULL,
  `correct_answer` text NOT NULL,
  `marks` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_online_registration`
--

CREATE TABLE `school_online_registration` (
  `id` int(11) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_online_registration`
--

INSERT INTO `school_online_registration` (`id`, `student_id`, `user_name`, `password`, `status`) VALUES
(2, 'toma', 'toma', 'toma', '1');

-- --------------------------------------------------------

--
-- Table structure for table `school_room_management`
--

CREATE TABLE `school_room_management` (
  `id` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `admission_date` varchar(20) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_seat_allocation`
--

CREATE TABLE `school_seat_allocation` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `bed_id` int(11) NOT NULL,
  `joining_date` varchar(20) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_std_education`
--

CREATE TABLE `school_std_education` (
  `id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL,
  `previous_school_name` varchar(255) NOT NULL,
  `reason_leaving_previous_school` text NOT NULL,
  `result_previous_school` varchar(20) NOT NULL,
  `first_enrolled_class` varchar(100) NOT NULL,
  `admission_date` varchar(50) NOT NULL,
  `cstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_std_education`
--

INSERT INTO `school_std_education` (`id`, `std_id`, `previous_school_name`, `reason_leaving_previous_school`, `result_previous_school`, `first_enrolled_class`, `admission_date`, `cstatus`) VALUES
(1, 1, 'ewew', 'ewew', 'wew', 'we', 'ewe', 1),
(2, 3, 'aa', 'aa', 'aa', 'aaa', '2018-09-19', 1),
(3, 6, 'ffg', 'fgfg', 'fgfg', 'ffg', '2018-09-15', 1),
(4, 9, 'ffg', 'ffg', 'asdasd', 'gh', '2018-09-29', 1),
(5, 8, 'dfgdg', 'nnvbn', 'asdad', 'tyutu', '2018-09-26', 1),
(6, 6, 'gjg', 'hjhk', 'adasd', 'ddfdg', '2018-09-21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_std_pinfo`
--

CREATE TABLE `school_std_pinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `mother_name` varchar(30) NOT NULL,
  `present_address` varchar(255) NOT NULL,
  `permanent_address` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `place_of_birth` varchar(255) NOT NULL,
  `blood_group` varchar(10) DEFAULT NULL,
  `cstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_std_pinfo`
--

INSERT INTO `school_std_pinfo` (`id`, `name`, `father_name`, `mother_name`, `present_address`, `permanent_address`, `religion`, `gender`, `date_of_birth`, `place_of_birth`, `blood_group`, `cstatus`) VALUES
(3, 'bbb420', 'bbb', 'bbb', 'bbb', 'bbb', 'bb', 'bbb', '2018-08-14', '34', 'bb', 1),
(4, 'aaaa', 'aaaa', 'aaaa', 'aaaaa', 'aaaaa', 'Hindu', 'Female', '2018-08-08', 'asd', 'dsf', 1),
(6, 'Shimul Babaji', 'aaaa', 'aaaa', 'aaaaa', 'aaaaa', 'Hindu', 'Female', '2018-08-08', 'asd', 'dsf', 1),
(7, 'sss', 'sss', 'sss', 'sss', 'sss', 'Buddhist', 'Male', '2018-08-13', 'sss', 'sss', 1),
(8, 'sdsadsad', 'asdad', 'asdsa', 'asdsad', 'fsfds', 'Buddhist', 'Female', '2018-09-20', 'dsfs', 'sdfs', 1),
(9, 'jhgjgj', 'ghjg', 'ghjg', 'ghjg', 'hj', 'Buddhist', 'Common', '2018-09-12', 'ghg', 'ghjgj', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_std_result`
--

CREATE TABLE `school_std_result` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `mark` varchar(11) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `cdate` varchar(250) NOT NULL,
  `exam_type` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_std_result`
--

INSERT INTO `school_std_result` (`id`, `student_id`, `class`, `subject`, `mark`, `grade`, `cdate`, `exam_type`, `status`) VALUES
(1, 7, 'one', 'bangla', '60', 'A-', '2018-08-14', '1st Term', 1),
(2, 2, 'two', 'werwr', '34', 'D', '2018-08-23', '2nd Term', 1),
(3, 7, '4', 'ghjg', '67', '6', '67', 'yuyu', 1),
(4, 2, 'ert', 'hfhf', '45', 'ghf', 'fghf', 'fgh', 1),
(5, 3, '6', 'dfg', '45', 'd', 'gfhfh', 'fghf', 1),
(6, 1, 'gdfg', 'dfgdf', 'dfgd', 'dgdf', 'dfg', 'dfgd', 4);

-- --------------------------------------------------------

--
-- Table structure for table `school_tiffin`
--

CREATE TABLE `school_tiffin` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `tiffin_item` varchar(10) NOT NULL,
  `cstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_transport_management`
--

CREATE TABLE `school_transport_management` (
  `id` int(11) NOT NULL,
  `transport_id` int(11) NOT NULL,
  `transport_type` varchar(20) NOT NULL,
  `area` varchar(255) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `assistant_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_tution_fee`
--

CREATE TABLE `school_tution_fee` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `paid_date` date NOT NULL,
  `paid_month` varchar(30) NOT NULL,
  `paid_year` int(11) NOT NULL,
  `fee_paid` int(11) NOT NULL,
  `paid_status` varchar(250) NOT NULL,
  `comments` varchar(250) DEFAULT NULL,
  `cstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_tution_fee`
--

INSERT INTO `school_tution_fee` (`id`, `student_id`, `paid_date`, `paid_month`, `paid_year`, `fee_paid`, `paid_status`, `comments`, `cstatus`) VALUES
(53, 242424, '2018-09-03', 'December', 2018, 77, 'Paid', '856u765uy5tjn', 1),
(54, 455667778, '2018-09-05', 'January', 2021, 11000, 'Due', 'iuiyuij', 1),
(55, 444444, '2018-09-10', 'February', 2019, 444144, 'Paid', '444', 1),
(56, 444444, '2018-09-19', 'February', 2018, 577455, 'Paid', 'iyggj', 1),
(64, 2147483647, '2018-08-30', 'January', 2028, 7441, 'advance', 'hujmhg ', 1),
(65, 2147483455, '2018-08-30', 'November', 2028, 700, 'advance', 'hujmhg ', 1),
(66, 2147483647, '2018-08-30', 'January', 2028, 7441, 'advance', 'hujmhg ', 1),
(67, 3, '2018-09-08', 'March', 2026, 2000, 'advance', 'hggf', 1),
(68, 3, '2018-09-08', 'August', 2018, 300, 'paid', 'ddd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_user_info`
--

CREATE TABLE `school_user_info` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_user_info`
--

INSERT INTO `school_user_info` (`id`, `username`, `password`, `department`, `status`) VALUES
(1, 'zin', 'nas', 'student', 1),
(2, 'nas', '1234', 'employee', 1),
(3, 'toma', '1234', 'notice', 1),
(4, 'zinia', '1234', 'laboratory', 1),
(5, 'odhom', '1234', 'parent', 1),
(6, 'jack420', '1234', 'admission', 1),
(7, 'jack420', '1234', 'transport', 1),
(8, 'josh', '1234', 'result', 1),
(9, 'yash', '1234', 'canteen', 1),
(10, 'mal', '1234', 'library', 1),
(11, 'she', '1234', 'leave', 1),
(12, 'sham', '1234', 'member', 1),
(13, 'iku', '1234', 'attendance', 1),
(14, 'iku1', '1234', 'tution_fee', 1),
(15, 'nailu', '1234', 'class', 1),
(16, 'nailu', '1234', 'event', 1),
(17, 'toima', '1234', 'feedback', 1),
(18, 'loima', '1234', 'online_exam', 1),
(19, 'zanua', '1234', 'circular', 1),
(20, 'nos', '1234', 'accounts', 1),
(21, '', '', '', 1),
(22, 'admin', '1234', 'user_manage', 1),
(23, 'kkk', '1234', 'employee', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance_management_system`
--
ALTER TABLE `attendance_management_system`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ceduinfo`
--
ALTER TABLE `ceduinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cexpinfo`
--
ALTER TABLE `cexpinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpinfo`
--
ALTER TABLE `cpinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online _exam_result`
--
ALTER TABLE `online _exam_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents_management_system`
--
ALTER TABLE `parents_management_system`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary_management_system`
--
ALTER TABLE `salary_management_system`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_acc_balance_sheet`
--
ALTER TABLE `school_acc_balance_sheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_acc_cash_book`
--
ALTER TABLE `school_acc_cash_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_acc_income_statement`
--
ALTER TABLE `school_acc_income_statement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_acc_ledger`
--
ALTER TABLE `school_acc_ledger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_acc_trial_balance`
--
ALTER TABLE `school_acc_trial_balance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_admission_form`
--
ALTER TABLE `school_admission_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_applicant_educational_information`
--
ALTER TABLE `school_applicant_educational_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_applicant_personal_information`
--
ALTER TABLE `school_applicant_personal_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_application_form`
--
ALTER TABLE `school_application_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_books_issue_management_system`
--
ALTER TABLE `school_books_issue_management_system`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_canteen`
--
ALTER TABLE `school_canteen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_circular`
--
ALTER TABLE `school_circular`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_circular_applicant_experience_information`
--
ALTER TABLE `school_circular_applicant_experience_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_circular_applicant_reference_information`
--
ALTER TABLE `school_circular_applicant_reference_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_circular_candidate_selection_system`
--
ALTER TABLE `school_circular_candidate_selection_system`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_circular_confirmation_management_system`
--
ALTER TABLE `school_circular_confirmation_management_system`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_class_time`
--
ALTER TABLE `school_class_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_emp_edu_info`
--
ALTER TABLE `school_emp_edu_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_emp_exp_info`
--
ALTER TABLE `school_emp_exp_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_emp_info`
--
ALTER TABLE `school_emp_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_emp_ref_info`
--
ALTER TABLE `school_emp_ref_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_equip_management`
--
ALTER TABLE `school_equip_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_equip_supinfo`
--
ALTER TABLE `school_equip_supinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_event_info`
--
ALTER TABLE `school_event_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_event_participant`
--
ALTER TABLE `school_event_participant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_exam`
--
ALTER TABLE `school_exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_feedback`
--
ALTER TABLE `school_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_health`
--
ALTER TABLE `school_health`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_hostel_expenses`
--
ALTER TABLE `school_hostel_expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_job_circular`
--
ALTER TABLE `school_job_circular`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_lab_equipment_information`
--
ALTER TABLE `school_lab_equipment_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_lab_euipment_distribution`
--
ALTER TABLE `school_lab_euipment_distribution`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_leave_management_system`
--
ALTER TABLE `school_leave_management_system`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_library_card`
--
ALTER TABLE `school_library_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_libr_registration_management_system`
--
ALTER TABLE `school_libr_registration_management_system`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_lib_books_infor_entry_system`
--
ALTER TABLE `school_lib_books_infor_entry_system`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_meal_and_cost_managment`
--
ALTER TABLE `school_meal_and_cost_managment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_membership_management_system`
--
ALTER TABLE `school_membership_management_system`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_message_delivery_management_system`
--
ALTER TABLE `school_message_delivery_management_system`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_notice`
--
ALTER TABLE `school_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_online_question`
--
ALTER TABLE `school_online_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_online_registration`
--
ALTER TABLE `school_online_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_room_management`
--
ALTER TABLE `school_room_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_seat_allocation`
--
ALTER TABLE `school_seat_allocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_std_education`
--
ALTER TABLE `school_std_education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_std_pinfo`
--
ALTER TABLE `school_std_pinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_std_result`
--
ALTER TABLE `school_std_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_tiffin`
--
ALTER TABLE `school_tiffin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_transport_management`
--
ALTER TABLE `school_transport_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_tution_fee`
--
ALTER TABLE `school_tution_fee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_user_info`
--
ALTER TABLE `school_user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance_management_system`
--
ALTER TABLE `attendance_management_system`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `ceduinfo`
--
ALTER TABLE `ceduinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cexpinfo`
--
ALTER TABLE `cexpinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cpinfo`
--
ALTER TABLE `cpinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `online _exam_result`
--
ALTER TABLE `online _exam_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parents_management_system`
--
ALTER TABLE `parents_management_system`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salary_management_system`
--
ALTER TABLE `salary_management_system`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `school_acc_balance_sheet`
--
ALTER TABLE `school_acc_balance_sheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `school_acc_cash_book`
--
ALTER TABLE `school_acc_cash_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `school_acc_income_statement`
--
ALTER TABLE `school_acc_income_statement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `school_acc_ledger`
--
ALTER TABLE `school_acc_ledger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `school_acc_trial_balance`
--
ALTER TABLE `school_acc_trial_balance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `school_admission_form`
--
ALTER TABLE `school_admission_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_applicant_educational_information`
--
ALTER TABLE `school_applicant_educational_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_applicant_personal_information`
--
ALTER TABLE `school_applicant_personal_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_application_form`
--
ALTER TABLE `school_application_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `school_books_issue_management_system`
--
ALTER TABLE `school_books_issue_management_system`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `school_canteen`
--
ALTER TABLE `school_canteen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `school_circular`
--
ALTER TABLE `school_circular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `school_circular_applicant_experience_information`
--
ALTER TABLE `school_circular_applicant_experience_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `school_circular_applicant_reference_information`
--
ALTER TABLE `school_circular_applicant_reference_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_circular_candidate_selection_system`
--
ALTER TABLE `school_circular_candidate_selection_system`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_circular_confirmation_management_system`
--
ALTER TABLE `school_circular_confirmation_management_system`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `school_class_time`
--
ALTER TABLE `school_class_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `school_emp_edu_info`
--
ALTER TABLE `school_emp_edu_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `school_emp_exp_info`
--
ALTER TABLE `school_emp_exp_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `school_emp_info`
--
ALTER TABLE `school_emp_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `school_emp_ref_info`
--
ALTER TABLE `school_emp_ref_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `school_equip_management`
--
ALTER TABLE `school_equip_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_equip_supinfo`
--
ALTER TABLE `school_equip_supinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_event_info`
--
ALTER TABLE `school_event_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `school_event_participant`
--
ALTER TABLE `school_event_participant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `school_exam`
--
ALTER TABLE `school_exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_feedback`
--
ALTER TABLE `school_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `school_health`
--
ALTER TABLE `school_health`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_hostel_expenses`
--
ALTER TABLE `school_hostel_expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_job_circular`
--
ALTER TABLE `school_job_circular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_lab_equipment_information`
--
ALTER TABLE `school_lab_equipment_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `school_lab_euipment_distribution`
--
ALTER TABLE `school_lab_euipment_distribution`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `school_leave_management_system`
--
ALTER TABLE `school_leave_management_system`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `school_library_card`
--
ALTER TABLE `school_library_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `school_libr_registration_management_system`
--
ALTER TABLE `school_libr_registration_management_system`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `school_lib_books_infor_entry_system`
--
ALTER TABLE `school_lib_books_infor_entry_system`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `school_meal_and_cost_managment`
--
ALTER TABLE `school_meal_and_cost_managment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_membership_management_system`
--
ALTER TABLE `school_membership_management_system`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `school_message_delivery_management_system`
--
ALTER TABLE `school_message_delivery_management_system`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `school_notice`
--
ALTER TABLE `school_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `school_online_question`
--
ALTER TABLE `school_online_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_online_registration`
--
ALTER TABLE `school_online_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `school_room_management`
--
ALTER TABLE `school_room_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_seat_allocation`
--
ALTER TABLE `school_seat_allocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_std_education`
--
ALTER TABLE `school_std_education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `school_std_pinfo`
--
ALTER TABLE `school_std_pinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `school_std_result`
--
ALTER TABLE `school_std_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `school_tiffin`
--
ALTER TABLE `school_tiffin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_transport_management`
--
ALTER TABLE `school_transport_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_tution_fee`
--
ALTER TABLE `school_tution_fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `school_user_info`
--
ALTER TABLE `school_user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
