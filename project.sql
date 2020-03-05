-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 05, 2020 at 10:01 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `AMOUNT`
-- (See below for the actual view)
--
CREATE TABLE `AMOUNT` (
`DATE` varchar(30)
,`sum(FARE)` double
);

-- --------------------------------------------------------

--
-- Table structure for table `BOOK_TICKET`
--

CREATE TABLE `BOOK_TICKET` (
  `TICKET_ID` varchar(30) NOT NULL,
  `DATE` varchar(30) NOT NULL,
  `FARE` varchar(30) NOT NULL,
  `RIDE_ID` varchar(30) NOT NULL,
  `TOURIST_ID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `BOOK_TICKET`
--

INSERT INTO `BOOK_TICKET` (`TICKET_ID`, `DATE`, `FARE`, `RIDE_ID`, `TOURIST_ID`) VALUES
('1000', '10/4/2018', '600', '2001', '8121'),
('1001', '10/4/2018', '600', '2002', '8122'),
('1002', '11/4/2018', '600', '2003', '8123'),
('1003', '11/4/2018', '600', '2004', '8124'),
('1004', '12/4/2018', '600', '2005', '8125'),
('1005', '12/4/2018', '600', '2006', '8126'),
('1006', '13/4/2018', '600', '2007', '8127'),
('1007', '13/4/2018', '600', '2008', '8128'),
('1008', '14/4/2018', '600', '2009', '8110'),
('1009', '14/4/2018', '600', '2010', '8129');

-- --------------------------------------------------------

--
-- Table structure for table `KIOSK`
--

CREATE TABLE `KIOSK` (
  `KIOSK_ID` varchar(30) NOT NULL,
  `CONTRACT_TIME` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `KIOSK`
--

INSERT INTO `KIOSK` (`KIOSK_ID`, `CONTRACT_TIME`) VALUES
('1', '2');

-- --------------------------------------------------------

--
-- Table structure for table `MAINTAINS`
--

CREATE TABLE `MAINTAINS` (
  `STAFF_ID` varchar(30) NOT NULL,
  `KIOSK_ID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `MAINTAINS`
--

INSERT INTO `MAINTAINS` (`STAFF_ID`, `KIOSK_ID`) VALUES
('2', '2'),
('2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `MANAGES`
--

CREATE TABLE `MANAGES` (
  `RIDE_ID` varchar(30) NOT NULL,
  `STAFF_ID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `MANAGES`
--

INSERT INTO `MANAGES` (`RIDE_ID`, `STAFF_ID`) VALUES
('1', '1'),
('1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `MENU`
--

CREATE TABLE `MENU` (
  `NAME` varchar(30) NOT NULL,
  `PRICE` varchar(30) NOT NULL,
  `KIOSK_ID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `MENU`
--

INSERT INTO `MENU` (`NAME`, `PRICE`, `KIOSK_ID`) VALUES
('wsw', '13', '1');

-- --------------------------------------------------------

--
-- Table structure for table `RIDE`
--

CREATE TABLE `RIDE` (
  `RIDE_ID` varchar(30) NOT NULL,
  `RIDE_NAME` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `RIDE`
--

INSERT INTO `RIDE` (`RIDE_ID`, `RIDE_NAME`) VALUES
('1', 'roll'),
('2', 'slider'),
('3', 'palti');

-- --------------------------------------------------------

--
-- Table structure for table `STAFF`
--

CREATE TABLE `STAFF` (
  `ADDRESS` varchar(30) NOT NULL,
  `GENDER` varchar(30) NOT NULL,
  `ADMIN_ID` varchar(30) NOT NULL,
  `CONTACT` varchar(30) NOT NULL,
  `STAFF_ID` varchar(30) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `AGE` varchar(30) NOT NULL,
  `HIRE_DATE` varchar(30) NOT NULL,
  `SALARY` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `STAFF`
--

INSERT INTO `STAFF` (`ADDRESS`, `GENDER`, `ADMIN_ID`, `CONTACT`, `STAFF_ID`, `NAME`, `AGE`, `HIRE_DATE`, `SALARY`) VALUES
('kkk', 'm', '1', '233333', '1', 'kkk', '14', '12-12-2014', '20000'),
('qw', 'm', '', '12345', '2', 'qq', '12', '12/2/2020', '1122'),
('', '', '', '', '3', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `TOURIST`
--

CREATE TABLE `TOURIST` (
  `TOURIST_ID` varchar(30) NOT NULL,
  `TOURIST_NAME` varchar(30) NOT NULL,
  `AGE` varchar(30) NOT NULL,
  `GENDER` varchar(30) NOT NULL,
  `CONTACT` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TOURIST`
--

INSERT INTO `TOURIST` (`TOURIST_ID`, `TOURIST_NAME`, `AGE`, `GENDER`, `CONTACT`) VALUES
('1', 'hhh', '23', 'm', '123'),
('10', 'dd', '', '', '1'),
('2', 'vvvv', '14', 'm', '1223'),
('3', 'vvvv', '14', 'm', '1223'),
('4', 'vvvv', '14', 'm', '1223'),
('5', 'vvvv', '14', 'm', '1223'),
('6', 'vvvv', '14', 'm', '1223'),
('7', 'vvvv', '14', 'm', '1223'),
('8', 'vvvv', '14', 'm', '1223'),
('9', 'ttt', '14', 'm', '1223');

-- --------------------------------------------------------

--
-- Table structure for table `VISIT`
--

CREATE TABLE `VISIT` (
  `KIOSK_ID` varchar(30) NOT NULL,
  `TOURIST_ID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure for view `AMOUNT`
--
DROP TABLE IF EXISTS `AMOUNT`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `AMOUNT`  AS  select `BOOK_TICKET`.`DATE` AS `DATE`,sum(`BOOK_TICKET`.`FARE`) AS `sum(FARE)` from `BOOK_TICKET` group by `BOOK_TICKET`.`DATE` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `BOOK_TICKET`
--
ALTER TABLE `BOOK_TICKET`
  ADD PRIMARY KEY (`TICKET_ID`),
  ADD KEY `RIDE_ID` (`RIDE_ID`),
  ADD KEY `TOURIST_ID` (`TOURIST_ID`);

--
-- Indexes for table `KIOSK`
--
ALTER TABLE `KIOSK`
  ADD PRIMARY KEY (`KIOSK_ID`);

--
-- Indexes for table `MANAGES`
--
ALTER TABLE `MANAGES`
  ADD KEY `RIDE_ID` (`RIDE_ID`),
  ADD KEY `STAFF_ID` (`STAFF_ID`);

--
-- Indexes for table `MENU`
--
ALTER TABLE `MENU`
  ADD KEY `KIOSK_ID` (`KIOSK_ID`);

--
-- Indexes for table `RIDE`
--
ALTER TABLE `RIDE`
  ADD PRIMARY KEY (`RIDE_ID`);

--
-- Indexes for table `STAFF`
--
ALTER TABLE `STAFF`
  ADD PRIMARY KEY (`STAFF_ID`);

--
-- Indexes for table `TOURIST`
--
ALTER TABLE `TOURIST`
  ADD PRIMARY KEY (`TOURIST_ID`);

--
-- Indexes for table `VISIT`
--
ALTER TABLE `VISIT`
  ADD KEY `KIOSK_ID` (`KIOSK_ID`),
  ADD KEY `TOURIST_ID` (`TOURIST_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `BOOK_TICKET`
--
ALTER TABLE `BOOK_TICKET`
  ADD CONSTRAINT `BOOK_TICKET_ibfk_1` FOREIGN KEY (`RIDE_ID`) REFERENCES `RIDE` (`RIDE_ID`),
  ADD CONSTRAINT `BOOK_TICKET_ibfk_2` FOREIGN KEY (`TOURIST_ID`) REFERENCES `TOURIST` (`TOURIST_ID`);

--
-- Constraints for table `MANAGES`
--
ALTER TABLE `MANAGES`
  ADD CONSTRAINT `MANAGES_ibfk_1` FOREIGN KEY (`RIDE_ID`) REFERENCES `RIDE` (`RIDE_ID`),
  ADD CONSTRAINT `MANAGES_ibfk_2` FOREIGN KEY (`STAFF_ID`) REFERENCES `STAFF` (`STAFF_ID`);

--
-- Constraints for table `MENU`
--
ALTER TABLE `MENU`
  ADD CONSTRAINT `MENU_ibfk_1` FOREIGN KEY (`KIOSK_ID`) REFERENCES `KIOSK` (`KIOSK_ID`);

--
-- Constraints for table `VISIT`
--
ALTER TABLE `VISIT`
  ADD CONSTRAINT `VISIT_ibfk_1` FOREIGN KEY (`KIOSK_ID`) REFERENCES `KIOSK` (`KIOSK_ID`),
  ADD CONSTRAINT `VISIT_ibfk_2` FOREIGN KEY (`TOURIST_ID`) REFERENCES `TOURIST` (`TOURIST_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
