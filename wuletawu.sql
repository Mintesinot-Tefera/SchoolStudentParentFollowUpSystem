-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2021 at 03:35 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wuletawu`
--

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

CREATE TABLE `assessment` (
  `id` int(11) NOT NULL,
  `Stud_Id` varchar(20) NOT NULL,
  `grade` int(11) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `Ass_Name` varchar(11) NOT NULL,
  `Max_Mark` int(10) NOT NULL,
  `Result` int(10) NOT NULL,
  `Teacher` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assessment`
--

INSERT INTO `assessment` (`id`, `Stud_Id`, `grade`, `Subject`, `Ass_Name`, `Max_Mark`, `Result`, `Teacher`, `date`) VALUES
(232, 'aba/0011', 9, 'Maths', 'Tes1', 20, 12, 'Agumas', '2021-07-28'),
(233, 'aba/0021', 9, 'Maths', 'Tes1', 20, 14, 'Agumas', '2021-07-28'),
(234, 'aba/0011', 9, 'Maths', 'Assignment', 30, 25, 'Agumas', '2021-07-28'),
(235, 'aba/0021', 9, 'Maths', 'Assignment', 30, 24, 'Agumas', '2021-07-28'),
(236, 'aba/0011', 9, 'Maths', 'FinalExam', 50, 45, 'Agumas', '2021-07-28'),
(237, 'aba/0021', 9, 'Maths', 'FinalExam', 50, 36, 'Agumas', '2021-07-28'),
(238, 'aba/0011', 9, 'English', 'Test1', 30, 27, 'Gedilo', '2021-07-28'),
(239, 'aba/0021', 9, 'English', 'Test1', 30, 25, 'Gedilo', '2021-07-28'),
(240, 'aba/0011', 9, 'English', 'Assignment', 20, 15, 'Gedilo', '2021-07-28'),
(241, 'aba/0021', 9, 'English', 'Assignment', 20, 16, 'Gedilo', '2021-07-28'),
(242, 'aba/0011', 9, 'English', 'FinalExam', 50, 50, 'Gedilo', '2021-07-28'),
(243, 'aba/0021', 9, 'English', 'FinalExam', 50, 50, 'Gedilo', '2021-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `assessment1`
--

CREATE TABLE `assessment1` (
  `id` int(11) NOT NULL,
  `grade` int(11) DEFAULT NULL,
  `Subject` varchar(30) NOT NULL,
  `Ass_Type` varchar(11) NOT NULL,
  `ass_name` varchar(10) NOT NULL,
  `Max_Mark` float NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assessment1`
--

INSERT INTO `assessment1` (`id`, `grade`, `Subject`, `Ass_Type`, `ass_name`, `Max_Mark`, `date`) VALUES
(48, 9, 'Maths', 'Contineus', 'Tes1', 20, '2021-07-28'),
(49, 9, 'Maths', 'Contineus', 'Assignment', 30, '2021-07-28'),
(50, 9, 'Maths', 'Final', 'FinalExam', 50, '2021-07-28'),
(51, 9, 'English', 'Contineus', 'Test1', 30, '2021-07-28'),
(52, 9, 'English', 'Contineus', 'Assignment', 20, '2021-07-28'),
(53, 9, 'English', 'Final', 'FinalExam', 50, '2021-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `assessment11`
--

CREATE TABLE `assessment11` (
  `id` int(11) NOT NULL,
  `Stud_Id` varchar(20) NOT NULL,
  `grade` int(11) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `Ass_Name` varchar(11) NOT NULL,
  `Max_Mark` int(10) NOT NULL,
  `Result` int(10) NOT NULL,
  `Teacher` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `no` int(11) NOT NULL,
  `id` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `Sex` varchar(30) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `section` varchar(2) NOT NULL,
  `Atten_Status` varchar(10) NOT NULL,
  `Record_By` varchar(40) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`no`, `id`, `fname`, `lname`, `Sex`, `grade`, `section`, `Atten_Status`, `Record_By`, `Date`) VALUES
(11, 'aba/0021', 'Dinkayewu', 'Tilahun', 'M', '9', 'A', 'P', 'Biruk', '2021-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `attendance1`
--

CREATE TABLE `attendance1` (
  `no` int(11) NOT NULL,
  `id` varchar(20) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `sex` varchar(30) NOT NULL,
  `grade` varchar(30) NOT NULL,
  `section` varchar(30) NOT NULL,
  `Subject` varchar(10) NOT NULL,
  `Atten_Status` varchar(11) NOT NULL,
  `Record_By` varchar(30) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance1`
--

INSERT INTO `attendance1` (`no`, `id`, `fname`, `lname`, `sex`, `grade`, `section`, `Subject`, `Atten_Status`, `Record_By`, `Date`) VALUES
(34, 'aba/0021', 'Dinkayewu', 'Tilahun', 'M', '9', 'A', 'Maths', 'P', 'Agumas', '2021-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) NOT NULL,
  `stud_id` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `viewer` varchar(20) NOT NULL,
  `comment` longtext NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `stud_id`, `username`, `viewer`, `comment`, `date`) VALUES
(1, 'aba/0021', 'Agumas Takele', 'Students', 'be storng', '2021-07-28'),
(2, 'aba/0021', 'Agumas Takele', 'Students', 'akhga;iosha', '2021-07-28'),
(3, 'aba/0021', 'Balcha Adona', 'Home Room Teacher', 'thank you', '2021-07-28'),
(4, 'aba/0021', 'Balcha Adona', 'Subject Teacher', 'hie', '2021-07-28'),
(5, 'aba/0011', 'Agumas Takele', 'Parents', 'akjfdsajf', '2021-07-28'),
(6, 'aba/0011', 'Eyasu Faracho', 'Subject Teacher', 'ine ye sino abat  negh', '2021-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `grade` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `grade`, `name`, `type`, `date`) VALUES
(26, 9, 'Amharic', '', '2021-07-28'),
(27, 9, 'English', '', '2021-07-28'),
(28, 9, 'Physics', '', '2021-07-28'),
(29, 9, 'Maths', '', '2021-07-28'),
(30, 9, 'Chemestry', '', '2021-07-28'),
(31, 9, 'Geography', '', '2021-07-28'),
(32, 9, 'Civics', '', '2021-07-28'),
(33, 9, 'Biology', '', '2021-07-28'),
(34, 9, 'IT', '', '2021-07-28'),
(35, 9, 'HPE', '', '2021-07-28'),
(36, 9, 'History', '', '2021-07-28'),
(37, 9, 'Kambatisa', '', '2021-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `name`) VALUES
(1, 9),
(2, 10),
(3, 11),
(4, 12);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `reciever_id` int(11) NOT NULL,
  `content` varchar(200) NOT NULL,
  `date_sended` varchar(100) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `reciever_name` varchar(50) NOT NULL,
  `sender_name` varchar(200) NOT NULL,
  `message_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `reciever_id`, `content`, `date_sended`, `sender_id`, `reciever_name`, `sender_name`, `message_status`) VALUES
(1, 0, 'hi  dinkaye', '2021-07-28 20:33:12', 27, ' ', 'Agumas Takele', ''),
(3, 0, 'hi jkajdfoahfla', '2021-07-28 21:01:52', 27, ' ', 'Agumas Takele', '');

-- --------------------------------------------------------

--
-- Table structure for table `message_sent`
--

CREATE TABLE `message_sent` (
  `message_sent_id` int(11) NOT NULL,
  `reciever_id` int(11) NOT NULL,
  `content` varchar(200) NOT NULL,
  `date_sended` varchar(100) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `reciever_name` varchar(100) NOT NULL,
  `sender_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message_sent`
--

INSERT INTO `message_sent` (`message_sent_id`, `reciever_id`, `content`, `date_sended`, `sender_id`, `reciever_name`, `sender_name`) VALUES
(1, 0, 'hi  dinkaye', '2021-07-28 20:33:12', 27, ' ', 'Agumas Takele'),
(2, 27, 'hi techaer', '2021-07-28 21:00:17', 37, 'Agumas Takele', 'Dinkayewu Tilahun'),
(3, 0, 'hi jkajdfoahfla', '2021-07-28 21:01:53', 27, ' ', 'Agumas Takele'),
(4, 35, 'hi teacher', '2021-07-28 22:47:52', 37, 'Biruk Napolion', 'Dinkayewu Tilahun');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `news` varchar(2000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `news`, `date`) VALUES
(1, 'afsdkfjal', 'aijfaklnao', '2021-07-28'),
(2, 'Asbaze', 'Hi sewoch', '2021-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notification_id` int(11) NOT NULL,
  `user_id` varchar(55) NOT NULL,
  `type` varchar(55) NOT NULL,
  `No` int(11) NOT NULL,
  `owner` varchar(55) NOT NULL,
  `status` varchar(33) NOT NULL,
  `details` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `optional` varchar(177) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification_read`
--

CREATE TABLE `notification_read` (
  `notification_read_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_read` varchar(50) NOT NULL,
  `notification_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `uname` varchar(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `report` longtext NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reportcard`
--

CREATE TABLE `reportcard` (
  `id` int(20) NOT NULL,
  `stud_id` varchar(32) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `sex` char(20) NOT NULL,
  `age` int(10) NOT NULL,
  `grade` int(20) NOT NULL,
  `year` int(32) NOT NULL,
  `amharic1` int(10) NOT NULL,
  `amharic2` int(10) NOT NULL,
  `amharic3` int(10) NOT NULL,
  `english1` int(10) NOT NULL,
  `english2` int(10) NOT NULL,
  `english3` int(10) NOT NULL,
  `maths1` int(10) NOT NULL,
  `maths2` int(10) NOT NULL,
  `maths3` int(10) NOT NULL,
  `physics1` int(10) NOT NULL,
  `physics2` int(10) NOT NULL,
  `physics3` int(10) NOT NULL,
  `biology1` int(10) NOT NULL,
  `biology2` int(10) NOT NULL,
  `biology3` int(10) NOT NULL,
  `chemistry1` int(10) NOT NULL,
  `chemistry2` int(10) NOT NULL,
  `chemistry3` int(10) NOT NULL,
  `geography1` int(10) NOT NULL,
  `geography2` int(10) NOT NULL,
  `geography3` int(10) NOT NULL,
  `history1` int(10) NOT NULL,
  `history2` int(10) NOT NULL,
  `history3` int(10) NOT NULL,
  `civics1` int(10) NOT NULL,
  `civics2` int(10) NOT NULL,
  `civics3` int(10) NOT NULL,
  `hpe1` int(10) NOT NULL,
  `hpe2` int(10) NOT NULL,
  `hpe3` int(10) NOT NULL,
  `it1` int(10) NOT NULL,
  `it2` int(10) NOT NULL,
  `it3` int(10) NOT NULL,
  `total1` int(10) NOT NULL,
  `total2` int(10) NOT NULL,
  `total3` int(10) NOT NULL,
  `avarage1` double(10,2) NOT NULL,
  `avarage2` double(10,2) NOT NULL,
  `avarage3` double(10,2) NOT NULL,
  `rank1` int(10) NOT NULL,
  `rank2` int(10) NOT NULL,
  `rank3` int(10) NOT NULL,
  `conduct` varchar(10) NOT NULL,
  `absence_day` varchar(10) NOT NULL,
  `Remark` varchar(15) DEFAULT NULL,
  `Promotted_To` varchar(20) NOT NULL,
  `teacher_name` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reportcard1`
--

CREATE TABLE `reportcard1` (
  `id` int(11) NOT NULL,
  `stud_id` varchar(32) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `sex` char(20) NOT NULL,
  `age` int(10) NOT NULL,
  `grade` int(20) NOT NULL,
  `year` int(32) NOT NULL,
  `amharic1` int(10) NOT NULL,
  `english1` int(10) NOT NULL,
  `maths1` int(10) NOT NULL,
  `physics1` int(10) NOT NULL,
  `biology1` int(10) NOT NULL,
  `chemistry1` int(10) NOT NULL,
  `geography1` int(10) NOT NULL,
  `history1` int(10) NOT NULL,
  `civics1` int(10) NOT NULL,
  `hpe1` int(10) NOT NULL,
  `it1` int(10) NOT NULL,
  `total1` int(10) NOT NULL,
  `avarage1` double(10,2) NOT NULL,
  `rank1` int(10) NOT NULL,
  `teacher_name` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reportcard1`
--

INSERT INTO `reportcard1` (`id`, `stud_id`, `fname`, `mname`, `lname`, `sex`, `age`, `grade`, `year`, `amharic1`, `english1`, `maths1`, `physics1`, `biology1`, `chemistry1`, `geography1`, `history1`, `civics1`, `hpe1`, `it1`, `total1`, `avarage1`, `rank1`, `teacher_name`, `date`) VALUES
(1, 'aba/0021 ', 'Dinkayewu', 'Denvecha', ' Tilahun', 'M', 22, 9, 2021, 0, 0, 80, 0, 0, 0, 0, 0, 0, 0, 0, 80, 7.27, 0, 'Biruk Napolion', '2021-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `school_year`
--

CREATE TABLE `school_year` (
  `id` int(11) NOT NULL,
  `school_year` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_year`
--

INSERT INTO `school_year` (`id`, `school_year`) VALUES
(1, '2021 GC');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(10) NOT NULL,
  `grade` int(30) NOT NULL,
  `number` int(10) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `grade`, `number`, `Date`) VALUES
(2, 9, 11, '2021-07-27'),
(3, 10, 30, '2021-07-29');

-- --------------------------------------------------------

--
-- Table structure for table `section1`
--

CREATE TABLE `section1` (
  `id` int(10) NOT NULL,
  `grade` int(30) NOT NULL,
  `name` varchar(10) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section1`
--

INSERT INTO `section1` (`id`, `grade`, `name`, `Date`) VALUES
(3, 9, 'A', '2021-07-27');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `stud_id` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(2) NOT NULL,
  `grade` int(11) NOT NULL,
  `section` varchar(2) NOT NULL,
  `profile` varchar(40) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`stud_id`, `fname`, `mname`, `lname`, `age`, `sex`, `grade`, `section`, `profile`, `Date`) VALUES
('aba/0011', 'Eyosiyas', 'Eyasu', 'Faracho', 17, 'M', 9, 'A', '..//upload/WIN_20210401_17_18_29_Pro.jpg', '2021-07-28'),
('aba/0021', 'Dinkayewu', 'Denvecha', 'Tilahun', 22, 'M', 9, 'A', '..//upload/WIN_20210524_12_18_55_Pro.jpg', '2021-07-28'),
('aba/0099', 'wonde', 'wolde', 'wude', 18, 'M', 9, 'A', '..//upload/beautiful_1.png', '2021-07-29');

-- --------------------------------------------------------

--
-- Table structure for table `student_to_parent`
--

CREATE TABLE `student_to_parent` (
  `id` int(11) NOT NULL,
  `stud_id` varchar(20) NOT NULL,
  `stuff_id` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_to_parent`
--

INSERT INTO `student_to_parent` (`id`, `stud_id`, `stuff_id`, `date`) VALUES
(13, 'aba/0021', 'abp/0021', '2021-07-28'),
(14, 'aba/0011', 'abp/0011', '2021-07-28'),
(15, 'aba/0099', 'abp/0022', '2021-07-29');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) NOT NULL,
  `grade` int(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `type` varchar(20) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `grade`, `subject`, `type`, `Date`) VALUES
(1, 9, 'Amharic', '', '2021-07-01'),
(2, 9, 'English', '', '2021-07-01'),
(3, 9, 'Maths', '', '2021-07-01'),
(4, 9, 'Physics', '', '2021-07-01'),
(5, 9, 'Chemestry', '', '2021-07-01'),
(6, 9, 'Geography', '', '2021-07-01'),
(7, 9, 'Civics', '', '2021-07-01'),
(8, 9, 'Biology', '', '2021-07-01'),
(9, 9, 'IT', '', '2021-07-01'),
(10, 9, 'HPE', '', '2021-07-01'),
(11, 9, 'History', '', '2021-07-01'),
(12, 9, 'Kambatisa', '', '2021-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `stud_id` varchar(20) NOT NULL,
  `stuff_id` varchar(20) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `sex` varchar(2) NOT NULL,
  `age` int(11) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `profile` varchar(20) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`stud_id`, `stuff_id`, `fname`, `lname`, `sex`, `age`, `phone`, `profile`, `Date`) VALUES
('aba/0011', 'abp/0011', 'Eyasu', 'Faracho', 'M', 50, '+251963646747', '..//upload/WIN_20210', '2021-07-28'),
('aba/0021', 'abp/0021', 'Balcha', 'Adona', 'M', 56, '+251964826462', '..//upload/WIN_20210', '2021-07-28'),
('aba/0099', 'abp/0022', 'kalkidan', 'tamiru', 'F', 33, '+251938075766', '..//upload/beautiful', '2021-07-29');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_to_class`
--

CREATE TABLE `teacher_to_class` (
  `id` int(11) NOT NULL,
  `teacher` varchar(30) NOT NULL,
  `grade` int(11) NOT NULL,
  `section` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_to_class`
--

INSERT INTO `teacher_to_class` (`id`, `teacher`, `grade`, `section`, `date`) VALUES
(3, 'Biruk Napolion', 9, 'A', '2021-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_to_course`
--

CREATE TABLE `teacher_to_course` (
  `id` int(10) NOT NULL,
  `teacher` varchar(30) NOT NULL,
  `grade` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_to_course`
--

INSERT INTO `teacher_to_course` (`id`, `teacher`, `grade`, `subject`, `Date`) VALUES
(12, 'Agumas Takele', '9', 'Maths', '2021-07-28'),
(13, 'Gedilo Wale', '9', 'English', '2021-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `time1`
--

CREATE TABLE `time1` (
  `id` int(11) NOT NULL,
  `rs` date NOT NULL,
  `re` date NOT NULL,
  `aas` date NOT NULL,
  `aae` date NOT NULL,
  `rpcs` date NOT NULL,
  `rpce` date NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time1`
--

INSERT INTO `time1` (`id`, `rs`, `re`, `aas`, `aae`, `rpcs`, `rpce`, `date`) VALUES
(1, '2021-07-27', '2021-08-07', '2021-07-27', '2021-09-14', '2021-07-28', '2021-09-23', '2021-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `signature` varchar(500) NOT NULL,
  `status` varchar(15) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `firstname`, `lastname`, `type`, `location`, `signature`, `status`, `date`) VALUES
(1, 'username', 'username', 'Abebe', 'Balcha', 'administrator', 'Captur.PNG', 'eugi', 'Activated', '2021-07-27'),
(25, 'libo', '1234', 'Libano', 'Eyasu', 'subject_teacher', 'uploud/WIN_20210401_17_19_07_Pro.jpg', 'A1nL', 'Activated', '2021-07-27'),
(27, 'agume', 'agume', 'Agumas', 'Takele', 'subject_teacher', 'FB_IMG_15232520435691143.jpg', 'Ax9E', 'Activated', '2021-07-27'),
(33, 'Iyasu', 'MQg7', 'Iyasu', 'Faracho', 'parent', '..//upload/fdkjsofj.JPG', 'dfqw', 'Activated', '2021-07-28'),
(35, 'buraa', 'buraa', 'Biruk', 'Napolion', 'home_room_teacher', '..//upload/FB_IMG_15232867501472034.jpg', 'uAPi', 'Activated', '2021-07-28'),
(36, 'Elas', '1234', 'Elies', 'Jenberu', 'record_officer', '..//upload/Cahjk.PNG', 'L9Hl', 'Activated', '2021-07-28'),
(37, 'aba/0021', '1234', 'Dinkayewu', 'Tilahun', 'student', '..//upload/WIN_20210524_12_18_55_Pro.jpg', 'SM2K', 'Activated', '2021-07-28'),
(38, 'abp/0021', '8TBb', 'Balcha', 'Adona', 'parent', '..//upload/WIN_20210401_17_18_29_Pro.jpg', 'VI2f', 'Activated', '2021-07-28'),
(39, 'gedilu', '1234', 'Gedilo', 'Wale', 'subject_teacher', '..//upload/WIN_20210401_17_18_29_Pro.jpg', 'cVAb', 'DeActivated', '2021-07-28'),
(40, 'aba/0011', 'tsDr', 'Eyosiyas', 'Faracho', 'student', '..//upload/WIN_20210401_17_18_29_Pro.jpg', 'JmTq', 'Activated', '2021-07-28'),
(41, 'abp/0011', 'yo3M', 'Eyasu', 'Faracho', 'parent', '..//upload/WIN_20210401_17_18_29_Pro.jpg', '2y8Q', 'Activated', '2021-07-28'),
(42, 'tare', 'tare', 'tarekegn', 'tesfaye', 'record_officer', '..//upload/IMG_20190930_182113.jpg', 'O39f', 'Activated', '2021-07-29'),
(43, 'ayalew', 'ayalew', 'ayalew', 'abebe', 'home_room_teacher', '..//upload/IMG_4796.JPG', 'VUHC', 'Activated', '2021-07-29'),
(44, 'tamrat', 'tame', 'tamirat', 'desta', 'subject_teacher', '..//upload/IMG_5113.JPG', 'l4YK', 'Activated', '2021-07-29'),
(45, 'aba/0099', 'yMLV', 'wonde', 'wude', 'student', '..//upload/beautiful_1.png', 'GXuH', 'Activated', '2021-07-29'),
(46, 'abp/0022', 'OQzB', 'kalkidan', 'tamiru', 'parent', '..//upload/beautiful_2.png', '3cxv', 'Activated', '2021-07-29'),
(47, 'dagi', 'dagi', 'dagi', 'tame', 'home_room_teacher', '..//upload/beautiful_5.png', 'sKvG', 'Activated', '2021-07-29'),
(48, 'dany', '1234', 'daniel', 'tefera', 'record_officer', 'upload/Capture.PNG', 'HhDe', 'Not Activated', '2021-11-05'),
(49, 'tade', '1212', 'tadese', 'tefe', 'record_officer', 'upload/Captu.PNG', 'dbSf', 'Not Activated', '2021-11-05'),
(50, 'tadu', '1234qw', 'tadelech', 'iyasu', 'home_room_teacher', 'upload/fashion.PNG', 'TScR', 'Not Activated', '2021-11-05'),
(51, 'samy', 'samy', 'samuel', 'gure', 'home_room_teacher', 'upload/Cap.PNG', 'rFeN', 'Not Activated', '2021-11-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assessment`
--
ALTER TABLE `assessment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Stud_Id` (`Stud_Id`);

--
-- Indexes for table `assessment1`
--
ALTER TABLE `assessment1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assessment11`
--
ALTER TABLE `assessment11`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Stud_Id` (`Stud_Id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`no`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `attendance1`
--
ALTER TABLE `attendance1`
  ADD UNIQUE KEY `no` (`no`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `date` (`date`) USING BTREE,
  ADD KEY `stud_id` (`stud_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grade` (`grade`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `message_sent`
--
ALTER TABLE `message_sent`
  ADD PRIMARY KEY (`message_sent_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `notification_read`
--
ALTER TABLE `notification_read`
  ADD PRIMARY KEY (`notification_read_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD UNIQUE KEY `id` (`id`);
ALTER TABLE `report` ADD FULLTEXT KEY `title` (`title`);

--
-- Indexes for table `reportcard`
--
ALTER TABLE `reportcard`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `stud_id` (`stud_id`) USING BTREE;

--
-- Indexes for table `reportcard1`
--
ALTER TABLE `reportcard1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `stud_id` (`stud_id`);

--
-- Indexes for table `school_year`
--
ALTER TABLE `school_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grade` (`grade`);

--
-- Indexes for table `section1`
--
ALTER TABLE `section1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grade` (`grade`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stud_id`);
ALTER TABLE `students` ADD FULLTEXT KEY `stud_id_2` (`stud_id`);
ALTER TABLE `students` ADD FULLTEXT KEY `stud_id` (`stud_id`);

--
-- Indexes for table `student_to_parent`
--
ALTER TABLE `student_to_parent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grade` (`grade`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`stuff_id`),
  ADD UNIQUE KEY `stud_id` (`stud_id`);

--
-- Indexes for table `teacher_to_class`
--
ALTER TABLE `teacher_to_class`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`) USING BTREE;

--
-- Indexes for table `teacher_to_course`
--
ALTER TABLE `teacher_to_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time1`
--
ALTER TABLE `time1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assessment`
--
ALTER TABLE `assessment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT for table `assessment1`
--
ALTER TABLE `assessment1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `assessment11`
--
ALTER TABLE `assessment11`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `attendance1`
--
ALTER TABLE `attendance1`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `message_sent`
--
ALTER TABLE `message_sent`
  MODIFY `message_sent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification_read`
--
ALTER TABLE `notification_read`
  MODIFY `notification_read_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reportcard`
--
ALTER TABLE `reportcard`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reportcard1`
--
ALTER TABLE `reportcard1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `school_year`
--
ALTER TABLE `school_year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `section1`
--
ALTER TABLE `section1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_to_parent`
--
ALTER TABLE `student_to_parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `teacher_to_class`
--
ALTER TABLE `teacher_to_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teacher_to_course`
--
ALTER TABLE `teacher_to_course`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `time1`
--
ALTER TABLE `time1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assessment`
--
ALTER TABLE `assessment`
  ADD CONSTRAINT `assessment_ibfk_1` FOREIGN KEY (`Stud_Id`) REFERENCES `students` (`stud_id`) ON UPDATE CASCADE;

--
-- Constraints for table `assessment11`
--
ALTER TABLE `assessment11`
  ADD CONSTRAINT `assessment11_ibfk_1` FOREIGN KEY (`Stud_Id`) REFERENCES `students` (`stud_id`) ON UPDATE CASCADE;

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`id`) REFERENCES `students` (`stud_id`) ON UPDATE CASCADE;

--
-- Constraints for table `attendance1`
--
ALTER TABLE `attendance1`
  ADD CONSTRAINT `attendance1_ibfk_1` FOREIGN KEY (`id`) REFERENCES `students` (`stud_id`) ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`stud_id`) REFERENCES `students` (`stud_id`) ON UPDATE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`grade`) REFERENCES `grade` (`name`) ON UPDATE CASCADE;

--
-- Constraints for table `reportcard`
--
ALTER TABLE `reportcard`
  ADD CONSTRAINT `reportcard_ibfk_1` FOREIGN KEY (`stud_id`) REFERENCES `students` (`stud_id`) ON UPDATE CASCADE;

--
-- Constraints for table `reportcard1`
--
ALTER TABLE `reportcard1`
  ADD CONSTRAINT `reportcard1_ibfk_1` FOREIGN KEY (`stud_id`) REFERENCES `students` (`stud_id`) ON UPDATE CASCADE;

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`grade`) REFERENCES `grade` (`name`) ON UPDATE CASCADE;

--
-- Constraints for table `section1`
--
ALTER TABLE `section1`
  ADD CONSTRAINT `section1_ibfk_1` FOREIGN KEY (`grade`) REFERENCES `grade` (`name`) ON UPDATE CASCADE;

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`grade`) REFERENCES `grade` (`name`) ON UPDATE CASCADE;

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_ibfk_1` FOREIGN KEY (`stud_id`) REFERENCES `students` (`stud_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
