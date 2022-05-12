-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2021 at 03:17 PM
-- Server version: 10.1.44-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icst`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(180) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(6, 'Akram hossain tuhin', 'tuhin1191@gmail.com', '$2y$10$yT.CZzF5BOlWEmPonL8s8OxjP7c.uIeI8NQlgfoJVH3EpPckQIgnK'),
(7, 'Akram', 'tuhin11w91@gmail.com', '$2y$10$3P4eWxwFUPqVrDPPqXrB2O4GwmdL.6vROhGYrDokuLK/Ldc29V7cO');

-- --------------------------------------------------------

--
-- Table structure for table `Architecture`
--

CREATE TABLE `Architecture` (
  `id` int(15) NOT NULL,
  `semester` varchar(25) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL,
  `roll` int(22) DEFAULT NULL,
  `reg` int(25) DEFAULT NULL,
  `department` varchar(15) DEFAULT NULL,
  `board` varchar(15) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `Subject_1` varchar(25) DEFAULT NULL,
  `Mark_1` varchar(25) DEFAULT NULL,
  `Subject_2` varchar(25) DEFAULT NULL,
  `mark_2` varchar(25) DEFAULT NULL,
  `Subject_3` varchar(25) DEFAULT NULL,
  `mark_3` varchar(25) DEFAULT NULL,
  `subject_4` varchar(25) DEFAULT NULL,
  `mark_4` varchar(25) DEFAULT NULL,
  `Subject_5` varchar(25) DEFAULT NULL,
  `mark_5` varchar(25) DEFAULT NULL,
  `Subject_6` varchar(25) DEFAULT NULL,
  `mark6` varchar(25) DEFAULT NULL,
  `Subject_7` varchar(25) DEFAULT NULL,
  `mark_7` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Architecture`
--

INSERT INTO `Architecture` (`id`, `semester`, `name`, `roll`, `reg`, `department`, `board`, `image`, `Subject_1`, `Mark_1`, `Subject_2`, `mark_2`, `Subject_3`, `mark_3`, `subject_4`, `mark_4`, `Subject_5`, `mark_5`, `Subject_6`, `mark6`, `Subject_7`, `mark_7`) VALUES
(11, '1st Semester', 'Akram hossain tuhin', 977208, 13123, 'Architecture', 'Technical board', '158879104320783712IMG_20191226_112633.jpg', 'Bangla', '90', 'english', '60', 'math', '90', 'scince', '90', 'social scince', '90', 'physic', '90', 'higher math', '90');

-- --------------------------------------------------------

--
-- Table structure for table `Architecture_result`
--

CREATE TABLE `Architecture_result` (
  `id` int(30) NOT NULL,
  `sid` int(30) DEFAULT NULL,
  `semester` varchar(15) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL,
  `roll` varchar(14) DEFAULT NULL,
  `reg` varchar(19) DEFAULT NULL,
  `department` varchar(25) DEFAULT NULL,
  `board` varchar(20) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `subject1` varchar(25) DEFAULT NULL,
  `Subject1_m` varchar(10) DEFAULT NULL,
  `Subject1_g` varchar(10) DEFAULT NULL,
  `Subject1_p` varchar(10) DEFAULT NULL,
  `subject2` varchar(25) DEFAULT NULL,
  `Subject2_m` varchar(10) DEFAULT NULL,
  `Subject2_g` varchar(10) DEFAULT NULL,
  `Subject2_p` varchar(10) DEFAULT NULL,
  `subject3` varchar(25) DEFAULT NULL,
  `Subject3_m` varchar(10) DEFAULT NULL,
  `Subject3_g` varchar(10) DEFAULT NULL,
  `Subject3_p` varchar(10) DEFAULT NULL,
  `subject4` varchar(25) DEFAULT NULL,
  `Subject4_m` varchar(10) DEFAULT NULL,
  `Subject4_g` varchar(10) DEFAULT NULL,
  `Subject4_p` varchar(10) DEFAULT NULL,
  `subject5` varchar(25) DEFAULT NULL,
  `Subject5_m` varchar(10) DEFAULT NULL,
  `Subject5_g` varchar(10) DEFAULT NULL,
  `Subject5_p` varchar(10) DEFAULT NULL,
  `subject6` varchar(25) DEFAULT NULL,
  `Subject6_m` varchar(10) DEFAULT NULL,
  `Subject6_g` varchar(10) DEFAULT NULL,
  `Subject6_p` varchar(10) DEFAULT NULL,
  `subject7` varchar(25) DEFAULT NULL,
  `Subject7_m` varchar(10) DEFAULT NULL,
  `Subject7_g` varchar(10) DEFAULT NULL,
  `Subject7_p` varchar(10) DEFAULT NULL,
  `CGPA` varchar(10) DEFAULT NULL,
  `result` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Architecture_result`
--

INSERT INTO `Architecture_result` (`id`, `sid`, `semester`, `name`, `roll`, `reg`, `department`, `board`, `image`, `subject1`, `Subject1_m`, `Subject1_g`, `Subject1_p`, `subject2`, `Subject2_m`, `Subject2_g`, `Subject2_p`, `subject3`, `Subject3_m`, `Subject3_g`, `Subject3_p`, `subject4`, `Subject4_m`, `Subject4_g`, `Subject4_p`, `subject5`, `Subject5_m`, `Subject5_g`, `Subject5_p`, `subject6`, `Subject6_m`, `Subject6_g`, `Subject6_p`, `subject7`, `Subject7_m`, `Subject7_g`, `Subject7_p`, `CGPA`, `result`) VALUES
(3, 11, '1st Semester', 'Akram hossain tuhin', '977208', '13123', 'Architecture', 'Technical board', '158879104320783712IMG_20191226_112633.jpg', 'Bangla', '88', 'A+', '4.00', 'english', '56', 'A+', '4.00', 'math', '87', 'A+', '4.00', 'scince', '81', 'A+', '4.00', 'social scince', '78', 'A+', '4.00', 'physic', '71', 'A', '3.50', 'higher math', '70', 'A', '3.50', '3.86', 'Passed');

-- --------------------------------------------------------

--
-- Table structure for table `Boardresult`
--

CREATE TABLE `Boardresult` (
  `id` int(13) NOT NULL,
  `Year` varchar(6) DEFAULT NULL,
  `roll` varchar(15) DEFAULT NULL,
  `result` varchar(70) DEFAULT NULL,
  `department` varchar(25) NOT NULL,
  `semester` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Boardresult`
--

INSERT INTO `Boardresult` (`id`, `Year`, `roll`, `result`, `department`, `semester`) VALUES
(88, '2020', '200123', '(3.18)', 'Computer', '4th Semester'),
(89, '2020', '0', '200127', 'Computer', '4th Semester'),
(90, '2020', '200127', '(2.96)', 'Computer', '4th Semester'),
(91, '2020', '0', '200131', 'Computer', '4th Semester'),
(92, '2020', '200131', '(3.05)', 'Computer', '4th Semester'),
(93, '2020', '0', '200133', 'Computer', '4th Semester'),
(94, '2020', '200133', '(2.98)', 'Computer', '4th Semester'),
(95, '2020', '0', '200141', 'Computer', '4th Semester'),
(96, '2020', '200141', '(3.19)', 'Computer', '4th Semester'),
(97, '2020', '0', '200142', 'Computer', '4th Semester'),
(98, '2020', '200142', '(2.95)', 'Computer', '4th Semester'),
(99, '2020', '0', '200146', 'Computer', '4th Semester'),
(100, '2020', '200146', '(3.01)', 'Computer', '4th Semester'),
(101, '2020', '0', '200149', 'Computer', '4th Semester'),
(102, '2020', '200149', '(3.00)', 'Computer', '4th Semester'),
(103, '2020', '0', '200150', 'Computer', '4th Semester'),
(104, '2020', '200150', '(3.15)', 'Computer', '4th Semester'),
(105, '2020', '0', '200164', 'Computer', '4th Semester'),
(106, '2020', '200164', '(3.10)', 'Computer', '4th Semester'),
(107, '2020', '0', '700136', 'Computer', '4th Semester'),
(108, '2020', '700136', '(3.01)', 'Computer', '4th Semester'),
(109, '2020', '0', '700184', 'Computer', '4th Semester'),
(110, '2020', '700184', '(2.77)', 'Computer', '4th Semester'),
(111, '2020', '0', '700189', 'Computer', '4th Semester'),
(112, '2020', '700189', '(2.92)', 'Computer', '4th Semester'),
(113, '2020', '0', '700197', 'Computer', '4th Semester'),
(114, '2020', '700197', '(2.99)', 'Computer', '4th Semester'),
(115, '2020', '0', '', 'Computer', '4th Semester'),
(116, '2020', '0', '', 'Computer', '4th Semester'),
(117, '2020', '200123', '(3.18)', 'Computer', '4th Semester'),
(118, '2020', '0', '200127', 'Computer', '4th Semester'),
(119, '2020', '200127', '(2.96)', 'Computer', '4th Semester'),
(120, '2020', '0', '200131', 'Computer', '4th Semester'),
(121, '2020', '200131', '(3.05)', 'Computer', '4th Semester'),
(122, '2020', '0', '200133', 'Computer', '4th Semester'),
(123, '2020', '200133', '(2.98)', 'Computer', '4th Semester'),
(124, '2020', '0', '200141', 'Computer', '4th Semester'),
(125, '2020', '200141', '(3.19)', 'Computer', '4th Semester'),
(126, '2020', '0', '200142', 'Computer', '4th Semester'),
(127, '2020', '200142', '(2.95)', 'Computer', '4th Semester'),
(128, '2020', '0', '200146', 'Computer', '4th Semester'),
(129, '2020', '200146', '(3.01)', 'Computer', '4th Semester'),
(130, '2020', '0', '200149', 'Computer', '4th Semester'),
(131, '2020', '200149', '(3.00)', 'Computer', '4th Semester'),
(132, '2020', '0', '200150', 'Computer', '4th Semester'),
(133, '2020', '200150', '(3.15)', 'Computer', '4th Semester'),
(134, '2020', '0', '200164', 'Computer', '4th Semester'),
(135, '2020', '200164', '(3.10)', 'Computer', '4th Semester'),
(136, '2020', '0', '700136', 'Computer', '4th Semester'),
(137, '2020', '700136', '(3.01)', 'Computer', '4th Semester'),
(138, '2020', '0', '700184', 'Computer', '4th Semester'),
(139, '2020', '700184', '(2.77)', 'Computer', '4th Semester'),
(140, '2020', '0', '700189', 'Computer', '4th Semester'),
(141, '2020', '700189', '(2.92)', 'Computer', '4th Semester'),
(142, '2020', '0', '700197', 'Computer', '4th Semester'),
(143, '2020', '700197', '(2.99)', 'Computer', '4th Semester'),
(144, '2020', '0', '', 'Computer', '4th Semester'),
(145, '2020', '0', '', 'Computer', '4th Semester');

-- --------------------------------------------------------

--
-- Table structure for table `Civil`
--

CREATE TABLE `Civil` (
  `id` int(15) NOT NULL,
  `semester` varchar(25) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL,
  `roll` int(22) DEFAULT NULL,
  `reg` int(25) DEFAULT NULL,
  `department` varchar(15) DEFAULT NULL,
  `board` varchar(15) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `Subject_1` varchar(25) DEFAULT NULL,
  `Mark_1` varchar(25) DEFAULT NULL,
  `Subject_2` varchar(25) DEFAULT NULL,
  `mark_2` varchar(25) DEFAULT NULL,
  `Subject_3` varchar(25) DEFAULT NULL,
  `mark_3` varchar(25) DEFAULT NULL,
  `subject_4` varchar(25) DEFAULT NULL,
  `mark_4` varchar(25) DEFAULT NULL,
  `Subject_5` varchar(25) DEFAULT NULL,
  `mark_5` varchar(25) DEFAULT NULL,
  `Subject_6` varchar(25) DEFAULT NULL,
  `mark6` varchar(25) DEFAULT NULL,
  `Subject_7` varchar(25) DEFAULT NULL,
  `mark_7` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Civil_result`
--

CREATE TABLE `Civil_result` (
  `id` int(30) NOT NULL,
  `sid` varchar(10) NOT NULL,
  `semester` varchar(15) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL,
  `roll` varchar(14) DEFAULT NULL,
  `reg` varchar(19) DEFAULT NULL,
  `department` varchar(25) DEFAULT NULL,
  `board` varchar(20) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `subject1` varchar(20) DEFAULT NULL,
  `Subject1_m` varchar(10) DEFAULT NULL,
  `Subject1_g` varchar(10) DEFAULT NULL,
  `Subject1_p` varchar(10) DEFAULT NULL,
  `subject2` varchar(20) DEFAULT NULL,
  `Subject2_m` varchar(10) DEFAULT NULL,
  `Subject2_g` varchar(10) DEFAULT NULL,
  `Subject2_p` varchar(10) DEFAULT NULL,
  `subject3` varchar(10) DEFAULT NULL,
  `Subject3_m` varchar(10) DEFAULT NULL,
  `Subject3_g` varchar(10) DEFAULT NULL,
  `Subject3_p` varchar(10) DEFAULT NULL,
  `subject4` varchar(20) DEFAULT NULL,
  `Subject4_m` varchar(10) DEFAULT NULL,
  `Subject4_g` varchar(10) DEFAULT NULL,
  `Subject4_p` varchar(10) DEFAULT NULL,
  `subject5` varchar(20) DEFAULT NULL,
  `Subject5_m` varchar(10) DEFAULT NULL,
  `Subject5_g` varchar(10) DEFAULT NULL,
  `Subject5_p` varchar(10) DEFAULT NULL,
  `subject6` varchar(20) DEFAULT NULL,
  `Subject6_m` varchar(10) DEFAULT NULL,
  `Subject6_g` varchar(10) DEFAULT NULL,
  `Subject6_p` varchar(10) DEFAULT NULL,
  `subject7` varchar(20) DEFAULT NULL,
  `Subject7_m` varchar(10) DEFAULT NULL,
  `Subject7_g` varchar(10) DEFAULT NULL,
  `Subject7_p` varchar(10) DEFAULT NULL,
  `CGPA` varchar(16) NOT NULL,
  `result` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Computer`
--

CREATE TABLE `Computer` (
  `id` int(20) NOT NULL,
  `semester` varchar(18) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL,
  `roll` int(15) DEFAULT NULL,
  `reg` int(25) DEFAULT NULL,
  `department` varchar(25) DEFAULT NULL,
  `board` varchar(23) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `Subject_1` varchar(30) NOT NULL,
  `Mark_1` varchar(30) DEFAULT NULL,
  `Subject_2` varchar(30) DEFAULT NULL,
  `mark_2` varchar(30) DEFAULT NULL,
  `Subject_3` varchar(30) DEFAULT NULL,
  `mark_3` varchar(30) DEFAULT NULL,
  `subject_4` varchar(30) DEFAULT NULL,
  `mark_4` varchar(30) DEFAULT NULL,
  `Subject_5` varchar(30) DEFAULT NULL,
  `mark_5` varchar(30) DEFAULT NULL,
  `Subject_6` varchar(30) DEFAULT NULL,
  `mark6` varchar(30) DEFAULT NULL,
  `Subject_7` varchar(30) DEFAULT NULL,
  `mark_7` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Computer`
--

INSERT INTO `Computer` (`id`, `semester`, `name`, `roll`, `reg`, `department`, `board`, `image`, `Subject_1`, `Mark_1`, `Subject_2`, `mark_2`, `Subject_3`, `mark_3`, `subject_4`, `mark_4`, `Subject_5`, `mark_5`, `Subject_6`, `mark6`, `Subject_7`, `mark_7`) VALUES
(1, '3rd Semester', 'Aakram hossain tuhin', 122333, 12234, 'Computer', 'technical', '4cc9cea21137da2af07aff3c3e668755.jpg', 'bangla', '90', 'e', '30', 'a', '30', 'a', '30', 's', '30', 'dc', '30', 'c', '30'),
(2, '3rd Semester', 'akram hossain tuhin', 43, 34, 'Computer', 'technical', '44114aa84c8d204a5ce85030c20bca33.1619431459512276489', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `computer_result`
--

CREATE TABLE `computer_result` (
  `id` int(30) NOT NULL,
  `sid` varchar(10) NOT NULL,
  `semester` varchar(15) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL,
  `roll` varchar(14) DEFAULT NULL,
  `reg` varchar(19) DEFAULT NULL,
  `department` varchar(25) DEFAULT NULL,
  `board` varchar(20) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `subject1` varchar(25) NOT NULL,
  `Subject1_m` varchar(10) DEFAULT NULL,
  `Subject1_g` varchar(10) DEFAULT NULL,
  `Subject1_p` varchar(10) DEFAULT NULL,
  `subject2` varchar(25) NOT NULL,
  `Subject2_m` varchar(10) DEFAULT NULL,
  `Subject2_g` varchar(10) DEFAULT NULL,
  `Subject2_p` varchar(10) DEFAULT NULL,
  `subject3` varchar(25) NOT NULL,
  `Subject3_m` varchar(10) DEFAULT NULL,
  `Subject3_g` varchar(10) DEFAULT NULL,
  `Subject3_p` varchar(10) DEFAULT NULL,
  `subject4` varchar(25) NOT NULL,
  `Subject4_m` varchar(10) DEFAULT NULL,
  `Subject4_g` varchar(10) DEFAULT NULL,
  `Subject4_p` varchar(10) DEFAULT NULL,
  `subject5` varchar(25) NOT NULL,
  `Subject5_m` varchar(10) DEFAULT NULL,
  `Subject5_g` varchar(10) DEFAULT NULL,
  `Subject5_p` varchar(10) DEFAULT NULL,
  `subject6` varchar(25) NOT NULL,
  `Subject6_m` varchar(10) DEFAULT NULL,
  `Subject6_g` varchar(10) DEFAULT NULL,
  `Subject6_p` varchar(10) DEFAULT NULL,
  `subject7` varchar(24) NOT NULL,
  `Subject7_m` varchar(10) DEFAULT NULL,
  `Subject7_g` varchar(10) DEFAULT NULL,
  `Subject7_p` varchar(10) DEFAULT NULL,
  `CGPA` varchar(10) NOT NULL,
  `result` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `computer_result`
--

INSERT INTO `computer_result` (`id`, `sid`, `semester`, `name`, `roll`, `reg`, `department`, `board`, `image`, `subject1`, `Subject1_m`, `Subject1_g`, `Subject1_p`, `subject2`, `Subject2_m`, `Subject2_g`, `Subject2_p`, `subject3`, `Subject3_m`, `Subject3_g`, `Subject3_p`, `subject4`, `Subject4_m`, `Subject4_g`, `Subject4_p`, `subject5`, `Subject5_m`, `Subject5_g`, `Subject5_p`, `subject6`, `Subject6_m`, `Subject6_g`, `Subject6_p`, `subject7`, `Subject7_m`, `Subject7_g`, `Subject7_p`, `CGPA`, `result`) VALUES
(37, '85', '1st Semester', 'Akram hossain tuhin', '1232313', '13123', 'Computer', 'Technical board', '4c8c2758feefae2c7ad8af3d256cf52d.jpg', 'bangla', '90', 'A+', '4.00', 'english', '44', 'A', '3.50', 'math', '45', 'B', '2.50', 'ssssdsd', '24', 'A+', '4.00', 'social', '55', 'A+', '4.00', 'sad', '80', 'A+', '4.00', 'reretrt', '55', 'A+', '4.00', '3.71', 'Passed'),
(38, '1', '3rd Semester', 'Aakram hossain tuhin', '12233', '12234', 'Computer', 'technical', '4cc9cea21137da2af07aff3c3e668755.jpg', 'bangla', '30', 'F', '0.00', 'e', '3', 'F', '0.00', 'a', '3', 'F', '0.00', 'a', '3', 'F', '0.00', 's', '3', 'F', '0.00', 'dc', '3', 'F', '0.00', 'c', '3', 'F', '0.00', '0', 'Fall');

-- --------------------------------------------------------

--
-- Table structure for table `Electronics`
--

CREATE TABLE `Electronics` (
  `id` int(15) NOT NULL,
  `semester` varchar(25) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL,
  `roll` int(22) DEFAULT NULL,
  `reg` int(25) DEFAULT NULL,
  `department` varchar(15) DEFAULT NULL,
  `board` varchar(15) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `Subject_1` varchar(25) DEFAULT NULL,
  `Mark_1` varchar(25) DEFAULT NULL,
  `Subject_2` varchar(25) DEFAULT NULL,
  `mark_2` varchar(25) DEFAULT NULL,
  `Subject_3` varchar(25) DEFAULT NULL,
  `mark_3` varchar(25) DEFAULT NULL,
  `subject_4` varchar(25) DEFAULT NULL,
  `mark_4` varchar(25) DEFAULT NULL,
  `Subject_5` varchar(25) DEFAULT NULL,
  `mark_5` varchar(25) DEFAULT NULL,
  `Subject_6` varchar(25) DEFAULT NULL,
  `mark6` varchar(25) DEFAULT NULL,
  `Subject_7` varchar(25) DEFAULT NULL,
  `mark_7` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Electronics`
--

INSERT INTO `Electronics` (`id`, `semester`, `name`, `roll`, `reg`, `department`, `board`, `image`, `Subject_1`, `Mark_1`, `Subject_2`, `mark_2`, `Subject_3`, `mark_3`, `subject_4`, `mark_4`, `Subject_5`, `mark_5`, `Subject_6`, `mark6`, `Subject_7`, `mark_7`) VALUES
(3, '3rd Semester', 'trtr', 534543, 45435, 'Electronics', 'Technical board', '1588083673940033582avatar-367-456319.png', 'a', '30', 'a', '30', 's', '30', 'd', '30', 's', '30', 'd', '30', 'a', '30'),
(9, '1st Semester', 'Akram hossain tuhin', 34324234, 234324, 'Electronics', 'tfyayy', '849c3f197b76996399b7a694f4c97831.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, '1st Semester', 'akram hossain tuhin', 345345, 5345345, 'Electronics', 'Technical board', '60d8f299efcd1f339ce9685bb20558d8.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, '3rd Semester', 'nur hossain', 5345345, 5345345, 'Electronics', 'Techbiaca board', 'ed4c0a9e67a2fa17295b83ac6b81877e.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Electronics_result`
--

CREATE TABLE `Electronics_result` (
  `id` int(30) NOT NULL,
  `sid` int(30) DEFAULT NULL,
  `semester` varchar(15) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL,
  `roll` varchar(14) DEFAULT NULL,
  `reg` varchar(19) DEFAULT NULL,
  `department` varchar(25) DEFAULT NULL,
  `board` varchar(20) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `subject1` varchar(25) DEFAULT NULL,
  `Subject1_m` varchar(10) DEFAULT NULL,
  `Subject1_g` varchar(10) DEFAULT NULL,
  `Subject1_p` varchar(10) DEFAULT NULL,
  `subject2` varchar(25) DEFAULT NULL,
  `Subject2_m` varchar(10) DEFAULT NULL,
  `Subject2_g` varchar(10) DEFAULT NULL,
  `Subject2_p` varchar(10) DEFAULT NULL,
  `subject3` varchar(25) DEFAULT NULL,
  `Subject3_m` varchar(10) DEFAULT NULL,
  `Subject3_g` varchar(10) DEFAULT NULL,
  `Subject3_p` varchar(10) DEFAULT NULL,
  `subject4` varchar(25) DEFAULT NULL,
  `Subject4_m` varchar(10) DEFAULT NULL,
  `Subject4_g` varchar(10) DEFAULT NULL,
  `Subject4_p` varchar(10) DEFAULT NULL,
  `subject5` varchar(25) DEFAULT NULL,
  `Subject5_m` varchar(10) DEFAULT NULL,
  `Subject5_g` varchar(10) DEFAULT NULL,
  `Subject5_p` varchar(10) DEFAULT NULL,
  `subject6` varchar(25) DEFAULT NULL,
  `Subject6_m` varchar(10) DEFAULT NULL,
  `Subject6_g` varchar(10) DEFAULT NULL,
  `Subject6_p` varchar(10) DEFAULT NULL,
  `subject7` varchar(25) DEFAULT NULL,
  `Subject7_m` varchar(10) DEFAULT NULL,
  `Subject7_g` varchar(10) DEFAULT NULL,
  `Subject7_p` varchar(10) DEFAULT NULL,
  `CGPA` varchar(10) DEFAULT NULL,
  `result` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Garments`
--

CREATE TABLE `Garments` (
  `id` int(15) NOT NULL,
  `semester` varchar(25) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL,
  `roll` int(22) DEFAULT NULL,
  `reg` int(25) DEFAULT NULL,
  `department` varchar(15) DEFAULT NULL,
  `board` varchar(15) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `Subject_1` varchar(25) DEFAULT NULL,
  `Mark_1` varchar(25) DEFAULT NULL,
  `Subject_2` varchar(25) DEFAULT NULL,
  `mark_2` varchar(25) DEFAULT NULL,
  `Subject_3` varchar(25) DEFAULT NULL,
  `mark_3` varchar(25) DEFAULT NULL,
  `subject_4` varchar(25) DEFAULT NULL,
  `mark_4` varchar(25) DEFAULT NULL,
  `Subject_5` varchar(25) DEFAULT NULL,
  `mark_5` varchar(25) DEFAULT NULL,
  `Subject_6` varchar(25) DEFAULT NULL,
  `mark6` varchar(25) DEFAULT NULL,
  `Subject_7` varchar(25) DEFAULT NULL,
  `mark_7` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Garments_result`
--

CREATE TABLE `Garments_result` (
  `id` int(30) NOT NULL,
  `sid` int(30) DEFAULT NULL,
  `semester` varchar(15) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL,
  `roll` varchar(14) DEFAULT NULL,
  `reg` varchar(19) DEFAULT NULL,
  `department` varchar(25) DEFAULT NULL,
  `board` varchar(20) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `subject1` varchar(25) DEFAULT NULL,
  `Subject1_m` varchar(10) DEFAULT NULL,
  `Subject1_g` varchar(10) DEFAULT NULL,
  `Subject1_p` varchar(10) DEFAULT NULL,
  `subject2` varchar(25) DEFAULT NULL,
  `Subject2_m` varchar(10) DEFAULT NULL,
  `Subject2_g` varchar(10) DEFAULT NULL,
  `Subject2_p` varchar(10) DEFAULT NULL,
  `subject3` varchar(25) DEFAULT NULL,
  `Subject3_m` varchar(10) DEFAULT NULL,
  `Subject3_g` varchar(10) DEFAULT NULL,
  `Subject3_p` varchar(10) DEFAULT NULL,
  `subject4` varchar(25) DEFAULT NULL,
  `Subject4_m` varchar(10) DEFAULT NULL,
  `Subject4_g` varchar(10) DEFAULT NULL,
  `Subject4_p` varchar(10) DEFAULT NULL,
  `subject5` varchar(25) DEFAULT NULL,
  `Subject5_m` varchar(10) DEFAULT NULL,
  `Subject5_g` varchar(10) DEFAULT NULL,
  `Subject5_p` varchar(10) DEFAULT NULL,
  `subject6` varchar(25) DEFAULT NULL,
  `Subject6_m` varchar(10) DEFAULT NULL,
  `Subject6_g` varchar(10) DEFAULT NULL,
  `Subject6_p` varchar(10) DEFAULT NULL,
  `subject7` varchar(25) DEFAULT NULL,
  `Subject7_m` varchar(10) DEFAULT NULL,
  `Subject7_g` varchar(10) DEFAULT NULL,
  `Subject7_p` varchar(10) DEFAULT NULL,
  `CGPA` varchar(10) DEFAULT NULL,
  `result` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(20) NOT NULL,
  `Description` varchar(1000) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `Description`, `image`) VALUES
(7, 'IEEE International Conference on Software Testing, Verification and Validation (ICST) 2020 is intended to provide a common forum for researchers, scientists, engineers and practitioners throughout the world to present their latest research findings, ideas, developments and applications in the area of Software Testing, Verification and Validation. ICST 2020 will include keynote addresses by eminent scientists as well as special, regular and poster sessions. All research papers will be peer reviewed on the basis of a full length manuscript and acceptance will be based on quality, originality and techodkf\r\nIEEE International Conference on Software Testing, Verification and Validation (ICST) 2020 is intended to provide a common forum for researchers, scientists, engineers and practitioners throughout the world to present their latest research findings, ideas, developments and applications in the area of Software Testing, Verification and Validation. ICST 2020 will include keynote addresses', '15886989701794801035372641866.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Mechanical`
--

CREATE TABLE `Mechanical` (
  `id` int(15) NOT NULL,
  `semester` varchar(25) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL,
  `roll` int(22) DEFAULT NULL,
  `reg` int(25) DEFAULT NULL,
  `department` varchar(15) DEFAULT NULL,
  `board` varchar(15) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `Subject_1` varchar(25) NOT NULL,
  `Mark_1` int(10) NOT NULL,
  `Subject_2` varchar(25) NOT NULL,
  `mark_2` int(10) NOT NULL,
  `Subject_3` varchar(25) NOT NULL,
  `mark_3` int(10) NOT NULL,
  `subject_4` varchar(25) NOT NULL,
  `mark_4` int(10) NOT NULL,
  `Subject_5` varchar(25) NOT NULL,
  `mark_5` int(10) NOT NULL,
  `Subject_6` varchar(25) NOT NULL,
  `mark6` int(10) NOT NULL,
  `Subject_7` varchar(25) NOT NULL,
  `mark_7` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Mechanical_result`
--

CREATE TABLE `Mechanical_result` (
  `id` int(30) NOT NULL,
  `sid` int(30) DEFAULT NULL,
  `semester` varchar(15) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL,
  `roll` varchar(14) DEFAULT NULL,
  `reg` varchar(19) DEFAULT NULL,
  `department` varchar(25) DEFAULT NULL,
  `board` varchar(20) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `subject1` varchar(25) DEFAULT NULL,
  `Subject1_m` varchar(10) DEFAULT NULL,
  `Subject1_g` varchar(10) DEFAULT NULL,
  `Subject1_p` varchar(10) DEFAULT NULL,
  `subject2` varchar(25) DEFAULT NULL,
  `Subject2_m` varchar(10) DEFAULT NULL,
  `Subject2_g` varchar(10) DEFAULT NULL,
  `Subject2_p` varchar(10) DEFAULT NULL,
  `subject3` varchar(25) DEFAULT NULL,
  `Subject3_m` varchar(10) DEFAULT NULL,
  `Subject3_g` varchar(10) DEFAULT NULL,
  `Subject3_p` varchar(10) DEFAULT NULL,
  `subject4` varchar(25) DEFAULT NULL,
  `Subject4_m` varchar(10) DEFAULT NULL,
  `Subject4_g` varchar(10) DEFAULT NULL,
  `Subject4_p` varchar(10) DEFAULT NULL,
  `subject5` varchar(25) DEFAULT NULL,
  `Subject5_m` varchar(10) DEFAULT NULL,
  `Subject5_g` varchar(10) DEFAULT NULL,
  `Subject5_p` varchar(10) DEFAULT NULL,
  `subject6` varchar(25) DEFAULT NULL,
  `Subject6_m` varchar(10) DEFAULT NULL,
  `Subject6_g` varchar(10) DEFAULT NULL,
  `Subject6_p` varchar(10) DEFAULT NULL,
  `subject7` varchar(25) DEFAULT NULL,
  `Subject7_m` varchar(10) DEFAULT NULL,
  `Subject7_g` varchar(10) DEFAULT NULL,
  `Subject7_p` varchar(10) DEFAULT NULL,
  `CGPA` varchar(10) DEFAULT NULL,
  `result` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Mechanical_result`
--

INSERT INTO `Mechanical_result` (`id`, `sid`, `semester`, `name`, `roll`, `reg`, `department`, `board`, `image`, `subject1`, `Subject1_m`, `Subject1_g`, `Subject1_p`, `subject2`, `Subject2_m`, `Subject2_g`, `Subject2_p`, `subject3`, `Subject3_m`, `Subject3_g`, `Subject3_p`, `subject4`, `Subject4_m`, `Subject4_g`, `Subject4_p`, `subject5`, `Subject5_m`, `Subject5_g`, `Subject5_p`, `subject6`, `Subject6_m`, `Subject6_g`, `Subject6_p`, `subject7`, `Subject7_m`, `Subject7_g`, `Subject7_p`, `CGPA`, `result`) VALUES
(1, 3, '1st Semester', 'Akram hossain tuhi', '5435345', '34534534', 'Mechanical', 'Technical board', 'c82b242b3f1db90d22b19b7dc78b97dc.jpg', 'adasd', '21', 'A', '3.50', 'sds', '12', 'C', '2.00', 'sd', '13', 'C', '2.00', 'dsd', '24', 'A+', '4.00', 'sdsd', '24', 'A+', '4.00', 'dsds', '23', 'A', '3.50', 'ddd', '14', 'C', '2.00', '3', 'Passed'),
(2, 4, '1st Semester', 'akramd', '2434234', '432432', 'Mechanical', '45435435', '5420d2512e63e1fe9fedf9779f427f94.jpg', 'adasd', '22', 'A', '3.50', 'sds', '22', 'A', '3.50', 'sd', '22', 'A', '3.50', 'dsd', '22', 'A', '3.50', 'sdsd', '22', 'A', '3.50', 'dsds', '22', 'A', '3.50', 'ddd', '22', 'A', '3.50', '3.5', 'Passed');

-- --------------------------------------------------------

--
-- Table structure for table `notise`
--

CREATE TABLE `notise` (
  `id` int(10) NOT NULL,
  `image` varchar(150) DEFAULT NULL,
  `Description` varchar(600) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notise`
--

INSERT INTO `notise` (`id`, `image`, `Description`, `date`) VALUES
(85, '41dfda950319a9156d3c77715743a04b.jpg', 'EEE International Conference on Software Testing, Verification and Validation (ICST) 2020 is intended to provide a common forum for researchers, scientists, engineers and practitioners throughout the world to present their latest research findings, ideas, developments and applications in the area of Software Testing, Verification and Validation. ICST 2020 will include keynote addresses by eminent scientists as well as special, regular and poster sessions. All research papers will be peer reviewed on the basis of a full length manuscript and acceptance will be based on quality, originality and ', '2020-04-30 15:59:43'),
(93, 'bc078846ff36505c8b0ce7deea8470c4.jpg', 'adsdadas', '2020-05-06 17:00:51'),
(94, 'ce6b0d834a1d590abe1933d7fa5d245f.jpg', '5th semester result', '2020-05-07 14:20:25'),
(96, 'bfff30ad3aef2f24b27040f68e2de1df.jpg', 'reuslt', '2020-05-16 16:02:58');

-- --------------------------------------------------------

--
-- Table structure for table `Tele_communication`
--

CREATE TABLE `Tele_communication` (
  `id` int(15) NOT NULL,
  `semester` varchar(25) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL,
  `roll` int(22) DEFAULT NULL,
  `reg` int(25) DEFAULT NULL,
  `department` varchar(30) DEFAULT NULL,
  `board` varchar(15) DEFAULT NULL,
  `image` varchar(200) DEFAULT 'null',
  `Subject_1` varchar(25) NOT NULL,
  `Mark_1` int(10) NOT NULL,
  `Subject_2` varchar(25) NOT NULL,
  `mark_2` int(10) NOT NULL,
  `Subject_3` varchar(25) NOT NULL,
  `mark_3` int(10) NOT NULL,
  `subject_4` varchar(25) NOT NULL,
  `mark_4` int(10) NOT NULL,
  `Subject_5` varchar(25) NOT NULL,
  `mark_5` int(10) NOT NULL,
  `Subject_6` varchar(25) NOT NULL,
  `mark6` int(10) NOT NULL,
  `Subject_7` varchar(25) NOT NULL,
  `mark_7` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Tele_communication`
--

INSERT INTO `Tele_communication` (`id`, `semester`, `name`, `roll`, `reg`, `department`, `board`, `image`, `Subject_1`, `Mark_1`, `Subject_2`, `mark_2`, `Subject_3`, `mark_3`, `subject_4`, `mark_4`, `Subject_5`, `mark_5`, `Subject_6`, `mark6`, `Subject_7`, `mark_7`) VALUES
(5, '1st Semester', 'Akram hossain tuhin', 4234324, 423432, 'Tele_communication', 'Technical board', '176de784fdcde23de4767d8cc6eabc99.jpg', 'aa', 30, 'asd', 30, 'dadsda', 30, 'dsd', 30, 'socialss', 30, 's', 30, 'dds', 30),
(8, '3rd Semester', 'tanzid', 977208, 234234234, 'Tele_communication', 'Technical board', '1535ba59d80baab6c1e2a7ea0b7888aa.png', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Tele_communication_result`
--

CREATE TABLE `Tele_communication_result` (
  `id` int(30) NOT NULL,
  `sid` int(30) DEFAULT NULL,
  `semester` varchar(15) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL,
  `roll` varchar(14) DEFAULT NULL,
  `reg` varchar(19) DEFAULT NULL,
  `department` varchar(25) DEFAULT NULL,
  `board` varchar(20) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `subject1` varchar(25) DEFAULT NULL,
  `Subject1_m` varchar(10) DEFAULT NULL,
  `Subject1_g` varchar(10) DEFAULT NULL,
  `Subject1_p` varchar(10) DEFAULT NULL,
  `subject2` varchar(25) DEFAULT NULL,
  `Subject2_m` varchar(10) DEFAULT NULL,
  `Subject2_g` varchar(10) DEFAULT NULL,
  `Subject2_p` varchar(10) DEFAULT NULL,
  `subject3` varchar(25) DEFAULT NULL,
  `Subject3_m` varchar(10) DEFAULT NULL,
  `Subject3_g` varchar(10) DEFAULT NULL,
  `Subject3_p` varchar(10) DEFAULT NULL,
  `subject4` varchar(25) DEFAULT NULL,
  `Subject4_m` varchar(10) DEFAULT NULL,
  `Subject4_g` varchar(10) DEFAULT NULL,
  `Subject4_p` varchar(10) DEFAULT NULL,
  `subject5` varchar(25) DEFAULT NULL,
  `Subject5_m` varchar(10) DEFAULT NULL,
  `Subject5_g` varchar(10) DEFAULT NULL,
  `Subject5_p` varchar(10) DEFAULT NULL,
  `subject6` varchar(25) DEFAULT NULL,
  `Subject6_m` varchar(10) DEFAULT NULL,
  `Subject6_g` varchar(10) DEFAULT NULL,
  `Subject6_p` varchar(10) DEFAULT NULL,
  `subject7` varchar(25) DEFAULT NULL,
  `Subject7_m` varchar(10) DEFAULT NULL,
  `Subject7_g` varchar(10) DEFAULT NULL,
  `Subject7_p` varchar(10) DEFAULT NULL,
  `CGPA` varchar(10) DEFAULT NULL,
  `result` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Tele_communication_result`
--

INSERT INTO `Tele_communication_result` (`id`, `sid`, `semester`, `name`, `roll`, `reg`, `department`, `board`, `image`, `subject1`, `Subject1_m`, `Subject1_g`, `Subject1_p`, `subject2`, `Subject2_m`, `Subject2_g`, `Subject2_p`, `subject3`, `Subject3_m`, `Subject3_g`, `Subject3_p`, `subject4`, `Subject4_m`, `Subject4_g`, `Subject4_p`, `subject5`, `Subject5_m`, `Subject5_g`, `Subject5_p`, `subject6`, `Subject6_m`, `Subject6_g`, `Subject6_p`, `subject7`, `Subject7_m`, `Subject7_g`, `Subject7_p`, `CGPA`, `result`) VALUES
(1, 1, '1st Semester', 'Akram hossain tuhi', '4324324', '4234234', 'Tele_communicat', 'dhaka', 'bb80aa1e4b33b630562182c669b71181.jpg', 'adasd', '3', 'F', '0.00', 'ds', '22', 'A', '3.50', 'dsd', '22', 'A', '3.50', 'sdsd', '22', 'A', '3.50', 'ffdf', '11', 'F', '0.00', 'sdf', '11', 'F', '0.00', 'dsfsd', '12', 'C', '2.00', '1.79', 'Fall');

-- --------------------------------------------------------

--
-- Table structure for table `Textile`
--

CREATE TABLE `Textile` (
  `id` int(15) NOT NULL,
  `semester` varchar(25) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL,
  `roll` int(22) DEFAULT NULL,
  `reg` int(25) DEFAULT NULL,
  `department` varchar(15) DEFAULT NULL,
  `board` varchar(15) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `Subject_1` varchar(25) NOT NULL,
  `Mark_1` int(10) NOT NULL,
  `Subject_2` varchar(25) NOT NULL,
  `mark_2` int(10) NOT NULL,
  `Subject_3` varchar(25) NOT NULL,
  `mark_3` int(10) NOT NULL,
  `subject_4` varchar(25) NOT NULL,
  `mark_4` int(10) NOT NULL,
  `Subject_5` varchar(25) NOT NULL,
  `mark_5` int(10) NOT NULL,
  `Subject_6` varchar(25) NOT NULL,
  `mark6` int(10) NOT NULL,
  `Subject_7` varchar(25) NOT NULL,
  `mark_7` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Textile`
--

INSERT INTO `Textile` (`id`, `semester`, `name`, `roll`, `reg`, `department`, `board`, `image`, `Subject_1`, `Mark_1`, `Subject_2`, `mark_2`, `Subject_3`, `mark_3`, `subject_4`, `mark_4`, `Subject_5`, `mark_5`, `Subject_6`, `mark6`, `Subject_7`, `mark_7`) VALUES
(5, '4th Semester', 'Akram hossain tuhin', 200133, 5345435, 'Textile', 'Technical board', '9a3c6d972cfeaf64bc6495be12e9ab41.jpg', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0),
(6, '6th Semester', 'admin', 200142, 4324324, 'Textile', 'Technical board', 'fe45b775d57a2d1ff5218b3649776738.jpg', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Textile_result`
--

CREATE TABLE `Textile_result` (
  `id` int(30) NOT NULL,
  `sid` int(30) DEFAULT NULL,
  `semester` varchar(15) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL,
  `roll` varchar(14) DEFAULT NULL,
  `reg` varchar(19) DEFAULT NULL,
  `department` varchar(25) DEFAULT NULL,
  `board` varchar(20) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `subject1` varchar(25) DEFAULT NULL,
  `Subject1_m` varchar(10) DEFAULT NULL,
  `Subject1_g` varchar(10) DEFAULT NULL,
  `Subject1_p` varchar(10) DEFAULT NULL,
  `subject2` varchar(25) DEFAULT NULL,
  `Subject2_m` varchar(10) DEFAULT NULL,
  `Subject2_g` varchar(10) DEFAULT NULL,
  `Subject2_p` varchar(10) DEFAULT NULL,
  `subject3` varchar(25) DEFAULT NULL,
  `Subject3_m` varchar(10) DEFAULT NULL,
  `Subject3_g` varchar(10) DEFAULT NULL,
  `Subject3_p` varchar(10) DEFAULT NULL,
  `subject4` varchar(25) DEFAULT NULL,
  `Subject4_m` varchar(10) DEFAULT NULL,
  `Subject4_g` varchar(10) DEFAULT NULL,
  `Subject4_p` varchar(10) DEFAULT NULL,
  `subject5` varchar(25) DEFAULT NULL,
  `Subject5_m` varchar(10) DEFAULT NULL,
  `Subject5_g` varchar(10) DEFAULT NULL,
  `Subject5_p` varchar(10) DEFAULT NULL,
  `subject6` varchar(25) DEFAULT NULL,
  `Subject6_m` varchar(10) DEFAULT NULL,
  `Subject6_g` varchar(10) DEFAULT NULL,
  `Subject6_p` varchar(10) DEFAULT NULL,
  `subject7` varchar(25) DEFAULT NULL,
  `Subject7_m` varchar(10) DEFAULT NULL,
  `Subject7_g` varchar(10) DEFAULT NULL,
  `Subject7_p` varchar(10) DEFAULT NULL,
  `CGPA` varchar(10) DEFAULT NULL,
  `result` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Architecture`
--
ALTER TABLE `Architecture`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- Indexes for table `Architecture_result`
--
ALTER TABLE `Architecture_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Boardresult`
--
ALTER TABLE `Boardresult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Civil`
--
ALTER TABLE `Civil`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- Indexes for table `Civil_result`
--
ALTER TABLE `Civil_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Computer`
--
ALTER TABLE `Computer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `computer_result`
--
ALTER TABLE `computer_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Electronics`
--
ALTER TABLE `Electronics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- Indexes for table `Electronics_result`
--
ALTER TABLE `Electronics_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Garments`
--
ALTER TABLE `Garments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- Indexes for table `Garments_result`
--
ALTER TABLE `Garments_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Mechanical`
--
ALTER TABLE `Mechanical`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- Indexes for table `Mechanical_result`
--
ALTER TABLE `Mechanical_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notise`
--
ALTER TABLE `notise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Tele_communication`
--
ALTER TABLE `Tele_communication`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- Indexes for table `Tele_communication_result`
--
ALTER TABLE `Tele_communication_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Textile`
--
ALTER TABLE `Textile`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- Indexes for table `Textile_result`
--
ALTER TABLE `Textile_result`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `Architecture`
--
ALTER TABLE `Architecture`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `Architecture_result`
--
ALTER TABLE `Architecture_result`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Boardresult`
--
ALTER TABLE `Boardresult`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;
--
-- AUTO_INCREMENT for table `Civil`
--
ALTER TABLE `Civil`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Civil_result`
--
ALTER TABLE `Civil_result`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Computer`
--
ALTER TABLE `Computer`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `computer_result`
--
ALTER TABLE `computer_result`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `Electronics`
--
ALTER TABLE `Electronics`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `Electronics_result`
--
ALTER TABLE `Electronics_result`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Garments`
--
ALTER TABLE `Garments`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Garments_result`
--
ALTER TABLE `Garments_result`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `Mechanical`
--
ALTER TABLE `Mechanical`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Mechanical_result`
--
ALTER TABLE `Mechanical_result`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `notise`
--
ALTER TABLE `notise`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `Tele_communication`
--
ALTER TABLE `Tele_communication`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `Tele_communication_result`
--
ALTER TABLE `Tele_communication_result`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Textile`
--
ALTER TABLE `Textile`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `Textile_result`
--
ALTER TABLE `Textile_result`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
