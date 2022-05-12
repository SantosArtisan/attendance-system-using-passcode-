-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2019 at 12:12 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `card`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_Id` int(11) NOT NULL,
  `student_Id` int(11) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `department` varchar(50) NOT NULL,
  `programe` varchar(10) NOT NULL,
  `yoe` int(20) NOT NULL,
  `yog` int(20) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_Id`, `student_Id`, `unit`, `department`, `programe`, `yoe`, `yog`, `level`) VALUES
(1, 1, 'CST', 'Computer Science', 'HND', 2016, 2018, '400'),
(2, 2, 'CST', 'Computer Engineering', 'ND', 2013, 2019, '200'),
(3, 3, 'CST', 'Applied Science', 'ND', 2016, 2018, '200'),
(4, 4, 'CST', 'Applied Science', 'ND', 2016, 2018, '200'),
(5, 5, 'CST', 'Applied Science', 'HND', 2015, 2017, '400');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_Id` int(11) NOT NULL,
  `student_Id` int(20) NOT NULL,
  `renewal_Id` int(11) NOT NULL,
  `transaction` int(20) NOT NULL,
  `rrr` bigint(100) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `method` varchar(100) NOT NULL,
  `otp` int(10) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `cno` bigint(50) NOT NULL,
  `exp` varchar(20) NOT NULL,
  `cvv` int(10) NOT NULL,
  `status` int(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_Id`, `student_Id`, `renewal_Id`, `transaction`, `rrr`, `purpose`, `method`, `otp`, `cname`, `cno`, `exp`, `cvv`, `status`, `date`) VALUES
(1, 1, 2, 0, 0, 'Damage ID Card', '', 0, '', 0, '', 0, 0, '2019-04-19 13:39:37'),
(2, 1, 3, 0, 0, 'Lost ID Card', '', 0, '', 0, '', 0, 0, '2019-04-21 00:35:27'),
(3, 1, 4, 0, 0, 'Lost ID Card', '', 0, '', 0, '', 0, 0, '2019-04-21 08:31:56'),
(4, 1, 5, 0, 0, 'Damage ID Card', '', 0, '', 0, '', 0, 0, '2019-04-21 11:40:40'),
(5, 1, 6, 0, 0, 'Damage ID Card', '', 0, '', 0, '', 0, 0, '2019-04-21 12:49:33'),
(6, 1, 7, 0, 0, 'Lost ID Card', '', 0, '', 0, '', 0, 0, '2019-04-21 17:51:50'),
(7, 1, 8, 0, 0, 'Lost ID Card', '', 0, '', 0, '', 0, 0, '2019-04-21 17:54:07'),
(8, 1, 9, 0, 1228351246192100000, 'Lost ID Card', '', 0, '', 0, '', 0, 0, '2019-04-21 18:00:53'),
(9, 1, 10, 0, 48521716446214000, 'Damage ID Card', 'BANKBRANCH', 0, '', 0, '', 0, 0, '2019-04-21 18:05:22'),
(10, 1, 11, 0, 1098363954734500000, 'Damage ID Card', 'CARD', 0, '', 0, '', 0, 0, '2019-04-21 18:29:42'),
(11, 1, 12, 1645109735, 1196286388767400000, 'Lost ID Card', 'CARD', 233522, 'Musa Adam Yau', 353447582385923, '04/22', 157, 1, '2019-04-21 18:35:29'),
(12, 2, 13, 1551934661, 175477447323950000, 'Damage ID Card', 'CARD', 435643, 'SANI ABDULLAHI', 328493583489324, '02/21', 234, 1, '2019-04-22 00:48:55'),
(13, 2, 14, 343244491, 247355542306910000, 'Lost ID Card', 'CARD', 353643, 'SANI ABDULLAHI', 345756473622642, '02/22', 242, 1, '2019-04-22 10:46:09'),
(14, 1, 15, 0, 904559943213380000, 'Damage ID Card', 'CARD', 0, 'Musa Adam Yau', 2454535235135, '22/34', 252, 0, '2019-04-22 11:25:33'),
(15, 2, 16, 519800725, 2151644031970600000, 'Damage ID Card', 'CARD', 434535, 'SANI ABDULLAHI', 32425235234233, '03/22', 256, 1, '2019-04-22 17:33:09'),
(16, 2, 17, 0, 3495179532714200000, 'Lost ID Card', 'BANKBRANCH', 0, '', 0, '', 0, 0, '2019-04-22 17:54:54'),
(17, 4, 18, 723719094, 1242907115092000000, 'Lost ID Card', 'CARD', 322822, 'Musa Adam Yau', 278342340343, '12/33', 112, 1, '2019-05-03 13:18:01'),
(18, 1, 19, 0, 151894790630730000, 'Lost ID Card', 'BANKBRANCH', 0, '', 0, '', 0, 0, '2019-05-03 19:07:33');

-- --------------------------------------------------------

--
-- Table structure for table `renewal`
--

CREATE TABLE `renewal` (
  `renewal_Id` int(11) NOT NULL,
  `student_Id` int(11) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `method` varchar(100) NOT NULL,
  `renewal_status` int(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `renewal`
--

INSERT INTO `renewal` (`renewal_Id`, `student_Id`, `purpose`, `method`, `renewal_status`, `date`) VALUES
(1, 1, 'Damage ID Card', '', 0, '2019-04-19 13:33:02'),
(2, 1, 'Damage ID Card', '', 0, '2019-04-19 13:39:36'),
(3, 1, 'Lost ID Card', '', 0, '2019-04-21 00:35:27'),
(4, 1, 'Lost ID Card', '', 0, '2019-04-21 08:31:56'),
(5, 1, 'Damage ID Card', '', 0, '2019-04-21 11:40:40'),
(6, 1, 'Damage ID Card', '', 0, '2019-04-21 12:49:33'),
(7, 1, 'Lost ID Card', '', 0, '2019-04-21 17:51:50'),
(8, 1, 'Lost ID Card', '', 0, '2019-04-21 17:54:06'),
(9, 1, 'Lost ID Card', '', 0, '2019-04-21 18:00:53'),
(10, 1, 'Damage ID Card', '', 0, '2019-04-21 18:05:22'),
(11, 1, 'Damage ID Card', '', 0, '2019-04-21 18:29:41'),
(12, 1, 'Lost ID Card', '', 0, '2019-04-21 18:35:29'),
(13, 2, 'Damage ID Card', '', 0, '2019-04-22 00:48:55'),
(14, 2, 'Lost ID Card', '', 0, '2019-04-22 10:46:09'),
(15, 1, 'Damage ID Card', '', 0, '2019-04-22 11:25:33'),
(16, 2, 'Damage ID Card', '', 0, '2019-04-22 17:33:08'),
(17, 2, 'Lost ID Card', '', 0, '2019-04-22 17:54:54'),
(18, 4, 'Lost ID Card', '', 0, '2019-05-03 13:18:01'),
(19, 1, 'Lost ID Card', '', 0, '2019-05-03 19:07:32');

-- --------------------------------------------------------

--
-- Table structure for table `spin`
--

CREATE TABLE `spin` (
  `spin_Id` int(11) NOT NULL,
  `student_Id` int(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spin`
--

INSERT INTO `spin` (`spin_Id`, `student_Id`, `status`) VALUES
(180000, 0, 0),
(180001, 1, 1),
(180002, 2, 1),
(180003, 3, 1),
(180004, 4, 1),
(180005, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_Id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `oname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `state` varchar(20) NOT NULL,
  `lg` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `regno` varchar(50) NOT NULL,
  `sign` varchar(500) NOT NULL,
  `picture` varchar(500) NOT NULL,
  `idcard_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_Id`, `fname`, `sname`, `oname`, `gender`, `state`, `lg`, `dob`, `phone`, `blood`, `regno`, `sign`, `picture`, `idcard_status`) VALUES
(1, 'Adam', 'Musa', 'Yau', 'Male', 'Yobe', 'Nguru', '2019-04-19', '08063017470', 'A+', 'KPT/CST/16/12050', 'NIN.jpg', 'IMG_20181219_121954_679.jpg', 1),
(2, 'Sani', 'Abdullahi', '', 'Male', 'Select State', 'Nguru', '2019-04-12', '0908887789', '0+', 'KPT/CST/16/12053', 'Osu Editorial Group 20170729_083630.jpg', 'pass.jpg', 0),
(3, 'Muhammad', 'Adam', '', 'Male', 'Select State', 'Igabi', '2019-04-21', '0807987877898', 'A-', 'KPT/CST/16/112321', 'crop info.PNG', 'IMG_20190211_120338_8~2.jpg', 0),
(4, 'Yasir', 'Murtala', '', 'Male', 'Select State', 'Igabi', '2019-05-03', '08074857843', '0+', 'KPT/CST/16/11232', 'IMG_20151031_092706.jpg', 'KD.JPG', 0),
(5, 'Yasir', 'Adam', '', 'Male', 'Select State', 'Igabi', '2019-05-03', '08077646778', '0-', 'KPT/CST/16/11111', 'IMG_20151031_092706.jpg', 'DSC _1222-486x724.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_Id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_Id`);

--
-- Indexes for table `renewal`
--
ALTER TABLE `renewal`
  ADD PRIMARY KEY (`renewal_Id`);

--
-- Indexes for table `spin`
--
ALTER TABLE `spin`
  ADD PRIMARY KEY (`spin_Id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `renewal`
--
ALTER TABLE `renewal`
  MODIFY `renewal_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `spin`
--
ALTER TABLE `spin`
  MODIFY `spin_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180006;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
