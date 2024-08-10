-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 13, 2023 at 04:31 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitcentral`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `ID` bigint(20) NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `DOB` date NOT NULL,
  `SocialSecurity` bigint(20) NOT NULL,
  `Post` text NOT NULL,
  `StartDate` date NOT NULL,
  `District` text NOT NULL,
  `Wage` decimal(10,2) NOT NULL,
  `WorkingHours` int(11) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`ID`, `FirstName`, `LastName`, `DOB`, `SocialSecurity`, `Post`, `StartDate`, `District`, `Wage`, `WorkingHours`, `Status`) VALUES
(1, 'Joshua', 'Chaning', '1990-05-17', 100000000, 'Cashier', '2018-03-07', 'Belize', '8.50', 8, 1),
(2, 'Johnny', 'Joe', '1993-12-21', 100000001, 'Cashier', '2020-08-12', 'Belize', '8.50', 8, 1),
(3, 'Amira', 'Reshay', '2001-07-27', 100000002, 'Cashier', '2022-01-25', 'Belize', '6.50', 7, 1),
(4, 'Jonathan', 'Sharpen', '1986-04-30', 100000003, 'CEO', '2016-07-21', 'Belize', '20.00', 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `ID` bigint(20) NOT NULL,
  `Name` text NOT NULL,
  `Age` int(11) NOT NULL,
  `DOB` date NOT NULL,
  `PhoneNumber` bigint(20) NOT NULL,
  `Email` text NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`ID`, `Name`, `Age`, `DOB`, `PhoneNumber`, `Email`, `StartDate`, `EndDate`) VALUES
(16, 'Ray', 18, '2023-02-02', 1234, 'acourtenay@belizehighschool.edu.bz', '2023-05-02', '2023-06-02'),
(21, 'John', 123, '2023-05-19', 321, '321', '2023-05-08', '2023-06-08'),
(28, 'Johnny', 19, '2023-05-09', 1234, '123456', '2023-05-12', '2023-06-12'),
(29, 'Justin', 17, '2005-03-23', 6241234, 'justinzhou@belizehighschool.edu.bz', '2023-05-12', '2023-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `PurchaseID` bigint(20) NOT NULL,
  `MemberID` bigint(20) NOT NULL,
  `EmployeeID` bigint(20) NOT NULL,
  `Purchase` text NOT NULL,
  `MemberName` text NOT NULL,
  `Amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`PurchaseID`, `MemberID`, `EmployeeID`, `Purchase`, `MemberName`, `Amount`) VALUES
(8, 6, 1, 'Membership Renewal', 'Benny', '120.00'),
(13, 12, 1, 'Membership Renewal', 'Benny', '120.00'),
(14, 21, 1, 'Membership Created', 'John', '120.00'),

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`PurchaseID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `PurchaseID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
